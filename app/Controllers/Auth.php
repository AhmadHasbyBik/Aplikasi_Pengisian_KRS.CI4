<?php

namespace App\Controllers;
use App\Models\m_Mahasiswa;

class Auth extends BaseController
{
	protected $m_Mahasiswa;

	public function __construct()
	{
		$this->m_Mahasiswa = new m_Mahasiswa();
	}

    public function login()
    {
        return view('auth/login');
    }

    public function prosesLogin()
    {
    	$npm = $this->request->getVar('npm_mhs');
    	$password = $this->request->getVar('password');

    	$checkNpm = $this->m_Mahasiswa->where('npm_mhs', $npm)->first();

    	if(!$checkNpm) {
    		session()->setFlashdata('error', 'NPM tidak terdaftar');
    		return redirect()->back();
    	}

    	$checkPassword = password_verify($password, $checkNpm['password_mhs']);

    	if(!$checkPassword){
    		session()->setFlashdata('error', 'Password anda salah');
    		return redirect()->back();
    	}

    	session()->set([
    		'is_login' => true,
    		'npm' => $checkNpm['npm_mhs'],
    	]);

    	return redirect()->to('/dashboard');
    }
}
