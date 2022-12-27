<?php

namespace App\Controllers;
use App\Models\m_Fakultas;
use App\Models\m_Jurusan;

class Jurusan extends BaseController
{

	protected $m_Fakultas;
	protected $m_Jurusan;

	public function __construct()
	{
		$this->m_Fakultas = new m_Fakultas();
		$this->m_Jurusan = new m_Jurusan();
	}

	public function listJurusan()
	{
		$data = [
			'title' => 'Jurusan',
			'dataJurusan' => $this->m_Jurusan->findAll(),
		];
		return view('jurusan/index', $data);
	}

	public function tambahJurusan()
	{
		$data = [
			'title' => 'Tambah Jurusan',
			'dataFakultas' => $this->m_Fakultas->findAll(),
		];
		return view('jurusan/tambah', $data);
	}

	public function editJurusan($kode_jurusan)
	{
		$data = [
			'title' => 'Edit Jurusan',
			'dataFakultas' => $this->m_Fakultas->findAll(),
			'jurusan' => $this->m_Jurusan->where('kode_jurusan', $kode_jurusan)->first(),
		];

		return view('jurusan/edit', $data);
	}

	public function deleteJurusan($kode_jurusan)
	{
		$this->m_Jurusan->delete($kode_jurusan);
		return redirect()->to('admin/jurusan');
	}

	public function prosesTambahJurusan()
	{
		$rules = $this->validate([
			'kode_jurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'kode Jurusan harus diisi'
				]	
			],

			'nama_jurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama Jurusan harus diisi'
				]	
			],

			'pilihfakultas' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Fakultas harus diisi'
				]	
			],
		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$data = [
			'kode_jurusan' => $this->request->getVar('kode_jurusan'),
			'nama_jurusan' => $this->request->getVar('nama_jurusan'),
			'kode_fakultas' => $this->request->getVar('pilihfakultas'),
		];


		$this->m_Jurusan->insert($data);
		return redirect()->to('admin/jurusan');
	}

	public function prosesEditJurusan()
	{
		$rules = $this->validate([
			'kode_jurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'kode Jurusan harus diisi'
				]	
			],

			'nama_jurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama Jurusan harus diisi'
				]	
			],

			'pilihfakultas' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Fakultas harus diisi'
				]	
			],
		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$id = $this->request->getVar('old_kode_jurusan');

		$data = [
			'kode_jurusan' => $this->request->getVar('kode_jurusan'),
			'nama_jurusan' => $this->request->getVar('nama_jurusan'),
			'kode_fakultas' => $this->request->getVar('pilihfakultas'),
		];


		$this->m_Jurusan->update($id, $data);
		return redirect()->to('admin/jurusan');
	}
	
}