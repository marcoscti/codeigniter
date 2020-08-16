<?php namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ModuloModel;

class Modulo extends BaseController {
    protected $modulomodel;
    public function __construct()
    {
        helper('form');
        $this->modulomodel = new ModuloModel();
    }
    public function modulo($idcurso)
    {
        if($idcurso){
            $view = [
                'curso'=>$this->modulomodel->getModulo($idcurso)
            ];
            echo view('template/header');
            echo view('template/navegacao');
            echo view('getModulos',$view);
            echo view('template/footer');
        }else{
            return redirect()->to(base_url('Curso'));
        }
    }
}