<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AlunoModel;
use App\Models\CursoAlunoModel;
use App\Models\CursoModel;
use App\Models\DiaModel;
use App\Models\HorarioModel;

class Aluno extends BaseController
{
    protected $aluno;
    protected $horario;
    protected $dia;
    protected $curso;
    protected $cursoaluno;
    public function __construct()
    {
        helper('form');
        $this->aluno = new AlunoModel();
        $this->horario = new HorarioModel();
        $this->dia = new DiaModel();
        $this->curso = new CursoModel();
        $this->cursoaluno = new CursoAlunoModel();
    }
    //FUNÇÃO PRINCIPAL LISTA OS ALUNOS
    public function index()
    {
        #Busca todos os alunos
        $view = [
            'title'=>"Listagem de Alunos",
            'aluno' => $this->aluno->findAll()
        ];
        #Envia os dados dos alunos para a view
        echo view('template/header',$view);
        echo view('template/navegacao');
        echo view('getAlunos', $view);
        echo view('template/footer');
    }
    //ALTERAR STATUS
    public function status($idaluno = 0){
        if($idaluno>0){
            
            $res = $this->aluno->find($idaluno);
            if($res['status']){
                $this->aluno->save(['status'=>0,'idaluno'=>$idaluno]);
                return redirect()->to(base_url('Aluno'));
            }else{
                $this->aluno->save(['status'=>1,'idaluno'=>$idaluno]);
                return redirect()->to(base_url('Aluno'));
            }
        }
    }
    //CADASTRA O ALUNO
    public function setAluno()
    {
        $data = $this->request->getPost();
        
        if ($this->aluno->save($data)) {
            return redirect()->to(base_url('Aluno/'));
        }
    }
    //RETORNA A VIEW DE CADASTRO
    public function novo()
    {
        echo view('template/header',['title'=>'Novo Aluno']);
        echo view('template/navegacao');
        echo view('novoaluno');
        echo view('template/footer');
    }
    //RETORNA A VIEW DE CADASTRO DE CURSO PARA O ALUNO
    public function curso($id = null)
    {        
        $view = [
            'horario' => $this->horario->findAll(),
            'dia' => $this->dia->findAll(),
            'curso' => $this->curso->findAll(),
            'idaluno' => $id
        ];
        echo view('template/header',['title'=>'Curso do Aluno']);
        echo view('template/navegacao');
        echo view('addcurso', $view);
        echo view('template/footer');
    }
    //CADASTRA O CURSO DO ALUNO
    public function setCursoAluno()
    {
        $data = $this->request->getPost();
        
        if ($this->cursoaluno->save($data)) {
            return redirect()->to(base_url('Aluno'));
        }
    }
    //DETALHES DO ALUNO
    public function detalhes($idaluno = 0){
        
        if($idaluno){
            $view = [
                'title'=>'Cursos do Aluno',
                'curso'=>$this->cursoaluno->getCursoAluno($idaluno)
            ];
            echo view('template/header');
            echo view('template/navegacao');
            echo view('detalhesaluno',$view);
            echo view('template/footer');
        }
        else{
            return redirect()->to(base_url('Aluno'));
        }
        
    }
}
