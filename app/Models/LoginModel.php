<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'instrutor';
    protected $allowedFields = ['login'];

    public function getLogin($login = null)
    {
        $model = new LoginModel();

        $data = $model->Where(['login' => $login])->findAll();
        if ($data > 0) {
            return $data[0];
        } else {
            return false;
        }
    }
}
