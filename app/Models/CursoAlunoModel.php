<?php
namespace App\Models;
use CodeIgniter\Model;
class CursoAlunoModel extends Model{
    protected $table ="cursoaluno";
    protected $primaryKey = "idcursoaluno";
    protected $allowedFields= ['idcursoaluno', 'aluno_idaluno', 'curso_idcurso', 'diadasemana_iddiadasemana', 'horario_idhorario'];

    public function getCursoAluno($idaluno = 0)
    {
        if($idaluno>0){
            return $this->db->table('cursoaluno')
            ->join('aluno','aluno_idaluno = idaluno')
            ->join('curso','curso_idcurso = idcurso')
            ->join('diadasemana','diadasemana_iddiadasemana = iddiadasemana')
            ->join('horario', 'horario_idhorario = idhorario')
            ->where('idaluno',$idaluno)
            ->get()->getResultArray();
        }
        return false;
    }
    public function getCursoDiaHorario($curso = 0,$dia = 0,$horario=0)
    {
        if($dia >0 || $curso>0){
            return $this->db->table('cursoaluno')
            ->join('aluno','aluno_idaluno = idaluno')
            ->join('curso','curso_idcurso = idcurso')
            ->join('diadasemana','diadasemana_iddiadasemana = iddiadasemana')
            ->join('horario', 'horario_idhorario = idhorario')
            ->where('curso_idcurso',$curso)
            ->where('diadasemana_iddiadasemana', $dia)
            ->where('horario_idhorario',$horario)
            ->get()->getResultArray();
        }
        return false;
    }
}