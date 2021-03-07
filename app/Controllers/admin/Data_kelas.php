<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Data_kelas extends BaseController
{
	public function index()
	{
		echo view('dashboard/v_header');
		echo view('admin/v_data_kelas');
		echo view('dashboard/v_footer');
	}
}
