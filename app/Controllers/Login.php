<?php

namespace App\Controllers;

use App\Models\LoginModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('akun/login', $data);
    }

    public function login_action()
    {
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('akun/login', $data);
        } else {
            $session = session();
            $loginModel = new LoginModel;

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $cekusername = $loginModel->where('username', $username)->first();
            if ($cekusername) {
                $password_db = $cekusername['password'];
                if ($password === $cekusername['password']) {
                    $session_data = [
                        'logged_in' => true,
                        'id' => $cekusername['id'],
                        'role_id' => $cekusername['role'],
                        'username' => $cekusername['username'],
                    ];
                    $session->set($session_data);
                    switch ($cekusername['role']) {
                        case "admin":
                            return redirect()->to('admin/data_akun');
                        case "client":
                            return redirect()->to('studio/home');
                        default:
                            $session->setFlashdata('pesan', 'Akun anda belum terdaftar');
                            return redirect()->to('/');
                    }
                } else {
                    $session->setFlashdata('pesan', 'Password salah, silahkan coba lagi');
                    return redirect()->to('/');
                }
            } else {
                $session->setFlashdata('pesan', 'Username salah, silahkan coba lagi');
                return redirect()->to('/');
            }
        }
    }

    public function register()
    {
        return view('akun/register');
    }

    public function save()
    {
        $loginModel = new LoginModel;

        $loginModel->save([
            'nama' => $this->request->getVar('nama'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
        ]);
        session()->setFlashdata('pesan', 'Berhasil mendaftar akun');
        return redirect()->to('register');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}
