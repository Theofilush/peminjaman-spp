<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		// echo view('dashboard/v_header');
		echo view('v_login');
		// echo view('dashboard/v_footer');
	}
}
