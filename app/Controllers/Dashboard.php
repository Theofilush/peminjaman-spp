<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		echo view('dashboard/v_header');
		echo view('dashboard/v_dashboard');
		echo view('dashboard/v_footer');
	}
}
