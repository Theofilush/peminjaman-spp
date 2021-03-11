<?php

namespace App\Controllers;

class Login_petugas extends BaseController
{
	public function index()
	{
		echo view('v_login_petugas');
	}

	public function aksi_login()
    {
        // $model1 = new M_petugas();
        // $model2 = new M_siswa();

        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        //$data1 = $model1->where('nis', $username)->orWhere('id >', $id)->first();
        $data1 = $this->M_petugass->where('username', $username)->first();
        $data2 = $this->M_siswaa->where('nis', $username)->first();

        // $data['news'] = $news->where([
		// 	'slug' => $slug,
		// 	'status' => 'published'
		// ])->first();

        if($data2){
            $pass = $data2['password'];
            // Bcrypt_perpus
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data2['user_id'],
                    'user_name'     => $data2['user_name'],
                    'user_email'    => $data2['user_email'],
                    'status'     => "login"
                ];
                $session->set($ses_data);
                return redirect()->to('/dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
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
