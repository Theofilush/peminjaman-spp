<?php

namespace App\Controllers;

class Profil extends BaseController
{
	public function index()
	{
		echo view('dashboard/v_header');
		echo view('v_profil');
		echo view('dashboard/v_footer');
	}
}
