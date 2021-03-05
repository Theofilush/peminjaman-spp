<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		echo view('v_login');
	}
}
