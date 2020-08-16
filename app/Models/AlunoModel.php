<?php
namespace App\Models;

use CodeIgniter\Model;

class AlunoModel extends Model{
    protected $table = 'aluno';
    protected $primaryKey = 'idaluno';
    protected $allowedFields = [
        'idaluno',
        'nomealuno',
        'datainicio',
        'dataconclusao',
        'status'];
    
}