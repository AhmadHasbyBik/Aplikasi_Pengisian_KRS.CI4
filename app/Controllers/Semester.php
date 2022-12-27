<?php

namespace App\Controllers;
use App\Models\m_Semester;

class Semester extends BaseController
{

	protected $m_Semester;

	public function __construct()
	{
		$this->m_Semester = new m_Semester();
	}

	public function listSemester()
	{
		$data = [
			'title' => 'Semester',
			'dataSemester' => $this->m_Semester->findAll(),
		];
		return view('semester/index', $data);
	}

	public function tambahSemester()
	{
		$data = [
			'title' => 'Tambah Semester'
		];
		return view('semester/tambah', $data);
	}

	public function editSemester($kode_semester)
	{
		$data = [
			'title' => 'Edit Semester',
			'semester' => $this->m_Semester->where('kode_semester', $kode_semester)->first(),
		];

		return view('semester/edit', $data);
	}

	public function deleteSemester($kode_semester)
	{
		$this->m_Semester->delete($kode_semester);
		return redirect()->to('admin/semester');
	}

	public function prosesTambahSemester()
	{
		$rules = $this->validate([
			'kode_semester' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'kode semester harus diisi'
				]	
			],

			'nama_semester' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama semester harus diisi'
				]	
			],
		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$data = [
			'kode_semester' => $this->request->getVar('kode_semester'),
			'nama_semester' => $this->request->getVar('nama_semester'),
		];


		$this->m_Semester->insert($data);
		return redirect()->to('admin/semester');
	}

	public function prosesEditSemester()
	{
		$rules = $this->validate([
			'kode_semester' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'kode semester harus diisi'
				]	
			],

			'nama_semester' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama semester harus diisi'
				]	
			],
		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$id = $this->request->getVar('old_kode_semester');

		$data = [
			'kode_semester' => $this->request->getVar('kode_semester'),
			'nama_semester' => $this->request->getVar('nama_semester'),
		];


		$this->m_Semester->update($id, $data);
		return redirect()->to('admin/semester');
	}
	
}