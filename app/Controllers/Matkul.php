<?php

namespace App\Controllers;
use App\Models\m_Matkul;
use App\Models\m_Jurusan;
use App\Models\m_Semester;

class Matkul extends BaseController
{

	protected $m_Matkul;
	protected $m_Jurusan;
	protected $m_Semester;

	public function __construct()
	{
		$this->m_Matkul = new m_Matkul();
		$this->m_Jurusan = new m_Jurusan();
		$this->m_Semester = new m_Semester();
	}

	public function listMatkul()
	{
		$data = [
			'title' => 'Mata Kuliah',
			'dataMatkul' => $this->m_Matkul->findAll(),
		];
		return view('matkul/index', $data);
	}

	public function tambahMatkul()
	{
		$data = [
			'title' => 'Tambah Mata Kuliah',
			'dataJurusan' => $this->m_Jurusan->findAll(),
			'dataSemester' => $this->m_Semester->findAll(),
		];
		return view('matkul/tambah', $data);
	}

	public function editMatkul($kode_matkul)
	{
		$data = [
			'title' => 'Edit Mata Kuliah',
			'matkul' => $this->m_Matkul->where('kode_matkul', $kode_matkul)->first(),
			'dataJurusan' => $this->m_Jurusan->findAll(),
			'dataSemester' => $this->m_Semester->findAll(),
		];

		return view('matkul/edit', $data);
	}

	public function deleteMatkul($kode_matkul)
	{
		$this->m_Matkul->delete($kode_matkul);
		return redirect()->to('admin/matkul');
	}

	public function prosesTambahMatkul()
	{
		$rules = $this->validate([
			'kode_matkul' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'kode matkul harus diisi'
				]	
			],

			'nama_matkul' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama matkul harus diisi'
				]	
			],

			'sks_matkul' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'sks matkul harus diisi'
				]	
			],

			'pilihjenisMK' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'jenis matkul harus diisi'
				]	
			],

			'pilihjurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Jurusan harus diisi'
				]	
			],

			'pilihsemester' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Semester harus diisi'
				]	
			],
		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$data = [
			'kode_matkul' => $this->request->getVar('kode_matkul'),
			'nama_matkul' => $this->request->getVar('nama_matkul'),
			'sks_matkul' => $this->request->getVar('sks_matkul'),
			'jenis_matkul' => $this->request->getVar('pilihjenisMK'),
			'kode_jurusan' => $this->request->getVar('pilihjurusan'),
			'kode_semester' => $this->request->getVar('pilihsemester'),
		];


		$this->m_Matkul->insert($data);
		return redirect()->to('admin/matkul');
	}

	public function prosesEditMatkul()
	{
		$rules = $this->validate([
			'kode_matkul' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'kode matkul harus diisi'
				]	
			],

			'nama_matkul' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama matkul harus diisi'
				]	
			],

			'sks_matkul' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'sks matkul harus diisi'
				]	
			],

			'pilihjenisMK' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'jenis matkul harus diisi'
				]	
			],

			'pilihjurusan' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Jurusan harus diisi'
				]	
			],

			'pilihsemester' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Semester harus diisi'
				]	
			],
		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$id = $this->request->getVar('old_kode_matkul');

		$data = [
			'kode_matkul' => $this->request->getVar('kode_matkul'),
			'nama_matkul' => $this->request->getVar('nama_matkul'),
			'sks_matkul' => $this->request->getVar('sks_matkul'),
			'jenis_matkul' => $this->request->getVar('pilihjenisMK'),
			'kode_jurusan' => $this->request->getVar('pilihjurusan'),
			'kode_semester' => $this->request->getVar('pilihsemester'),
		];


		$this->m_Matkul->update($id, $data);
		return redirect()->to('admin/matkul');
	}
	
}