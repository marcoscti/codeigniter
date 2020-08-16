<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
	public function index()
	{
		helper('form');
		echo view('login');
	}
	public function logar()
	{
		if ($this->request->getMethod() == 'post') {
			$data = $this->request->getPost();
			$model = new LoginModel();
			$login = $model->getLogin($data['login']);
			if ($login && $login['statusinstrutor']) {
				return redirect()->to(base_url('Aluno/'));
			}
		} else {
			return redirect()->to(base_url());
		}
	}
	public function logout()
	{
	}
}
