<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		// echo "Welcome back, ".$this->session->get('nama');

		$dataHalaman = array(
			"author" => $this->session->get('author'),
			"nama" => $this->session->get('nama'),
		);
		echo view('dashboard/v_header',$dataHalaman);
		echo view('dashboard/v_dashboard');
		echo view('dashboard/v_footer');
	}
}
