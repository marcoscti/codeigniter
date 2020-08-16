<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CursoModel;

class Curso extends BaseController{
    protected $cursomodel;
    public function __construct()
    {
        helper('form');
        $this->cursomodel = new CursoModel();
    }
    //Retorna uma lista de Curso
    public function index()
    {
       $view = [
            'curso'=>$this->cursomodel->findAll()
        ];
        echo view('template/header');
        echo view('template/navegacao');
        echo view('getCursos',$view);
        echo view('template/footer');
    }
    public function novo(){
        echo view('template/header');
        echo view('template/navegacao');
        echo view('novocurso');
        echo view('template/footer');
    }
}