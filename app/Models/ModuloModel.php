<?php namespace App\Models;

use CodeIgniter\Model;

class ModuloModel extends Model{
    protected $table = 'modulo';
    protected $primaryKey ='idmodulo';
    public function getModulo($idcurso = 0)
    {
        $model = new ModuloModel();

        if($idcurso>0){
            return $this->db->table('modulocurso')
            ->join('curso','curso_idcurso = idcurso')
            ->join('modulo','modulo_idmodulo = idmodulo')
            ->where('curso_idcurso',$idcurso)
            ->get()->getResultArray();
        }
        return false;
    }
}