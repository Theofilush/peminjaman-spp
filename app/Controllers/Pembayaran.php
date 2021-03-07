<?php

namespace App\Controllers;

class Pembayaran extends BaseController
{
	public function index()
	{
		echo view('dashboard/v_header');
		echo view('v_pembayaran');
		echo view('dashboard/v_footer');
	}
}
