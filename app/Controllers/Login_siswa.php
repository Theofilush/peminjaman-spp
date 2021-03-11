<?php

namespace App\Controllers;

class Login_siswa extends BaseController
{
	public function index()
	{
		echo view('v_login');
	}

	public function aksi_login()
    {
        // $model1 = new M_petugas();
        // $model2 = new M_siswa();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data2 = $this->M_siswaa->where('nis', $username)->orWhere('nisn', $username)->first();

        if($data2){
                $ses_data = [
                    'nisn'    => $data2['nisn'],
                    'nis'     => $data2['nis'],
                    'nama'    => $data2['nama'],
                    'author'  => "siswa",
                    'status'  => "login"
                ];
                $this->session->set($ses_data);
                return redirect()->to('/dashboard');
        }else{
            $this->session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
