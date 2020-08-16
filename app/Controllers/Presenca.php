<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CursoAlunoModel;
use App\Models\CursoModel;
use App\Models\DiaModel;
use App\Models\HorarioModel;
use App\Models\PresencaModel;

class Presenca extends BaseController
{
    protected $presenca;
    public function __construct()
    {
        $this->presenca = new PresencaModel();
    }
    public function index()
    {
        $horario = new HorarioModel();
        $dia = new DiaModel();
        $curso = new CursoModel();
        $view = [
            'curso' => $curso->findAll(),
            'dia' => $dia->findAll(),
            'horario' => $horario->findAll()
        ];
        helper('form');
        echo view('template/header');
        echo view('template/navegacao');
        echo view('selecionepresenca', $view);
        echo view('template/footer');
    }
    public function buscar()
    {
        $data = $this->request->getPost();
        if (!empty($data['idcurso']) || !empty($data['iddiadasemana']) || !empty($data['idhorario'])) {
            $model = new CursoAlunoModel();
            $view = [
                'curso' => $model->getCursoDiaHorario($data['idcurso'], $data['iddiadasemana'], $data['idhorario'])
            ];

            helper('form');
            echo view('template/header');
            echo view('template/navegacao');
            echo view('presenca', $view);
            echo view('template/footer');
        } else {
            return redirect()->to(base_url('Presenca'));
        }
    }
    public function setPresenca()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('presenca');
        $data = $this->request->getPost();
        
        $insert = [];
        $i = 0;
        foreach ($data['aluno_idaluno'] as $d) {
            //if($data['situacao'][$i])
            
            $insert[$i] = [
                'aluno_idaluno' => $d,
                'curso_idcurso'=>$data['curso_idcurso'],
                'horario_idhorario' => $data['horario_idhorario'],
                'diadasemana_iddiadasemana' => $data['diadasemana_iddiadasemana'],
                'instrutor_idinstrutor' => $data['instrutor_idinstrutor'],
                'situacao' => $data['situacao'][$i]
            ];
            $i++;
        }
        if($builder->insertBatch($insert)){
            return redirect()->to(base_url('Presenca'));
        }
        else
        {
            echo "Erro ao gravar as presenças";
        }
    }
}
