<?php
namespace App\Models;
use CodeIgniter\Model;
class PresencaModel extends Model{
    protected $table = 'presenca';
    protected $primaryKey = 'idpresenca';
    protected $allowedFields = [
        'observacao',
        'datapresenca',
        'situacao',
        'atualizacao',
        'aluno_idaluno',
        'curso_idcurso',
        'instrutor_idinstrutor',
        'diadasemana_iddiadasemana',
        'horario_idhorario'
    ];
}