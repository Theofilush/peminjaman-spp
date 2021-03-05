<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		echo view('v_login');
	}
}
