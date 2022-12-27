<?php

namespace App\Controllers;
use App\Models\m_Fakultas;

class Fakultas extends BaseController
{

	protected $m_Fakultas;

	public function __construct()
	{
		$this->m_Fakultas = new m_Fakultas();
	}

	public function listFakultas()
	{
		$data = [
			'title' => 'Fakultas',
			'datafakultas' => $this->m_Fakultas->findAll(),
		];
		return view('fakultas/index', $data);
	}

	public function tambahFakultas()
	{
		$data = [
			'title' => 'Tambah Fakultas'
		];
		return view('fakultas/tambah', $data);
	}

	public function editFakultas($kode_fakultas)
	{
		$data = [
			'title' => 'Edit Fakultas',
			'fakultas' => $this->m_Fakultas->where('kode_fakultas', $kode_fakultas)->first(),
		];

		return view('fakultas/edit', $data);
	}

	public function deleteFakultas($kode_fakultas)
	{
		$this->m_Fakultas->delete($kode_fakultas);
		return redirect()->to('admin/fakultas');
	}

	public function prosesTambahFakultas()
	{
		$rules = $this->validate([
			'kode_fakultas' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'kode fakultas harus diisi'
				]	
			],

			'nama_fakultas' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama fakultas harus diisi'
				]	
			],
		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$data = [
			'kode_fakultas' => $this->request->getVar('kode_fakultas'),
			'nama_fakultas' => $this->request->getVar('nama_fakultas'),
		];


		$this->m_Fakultas->insert($data);
		return redirect()->to('admin/fakultas');
	}

	public function prosesEditFakultas()
	{
		$rules = $this->validate([
			'kode_fakultas' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'kode fakultas harus diisi'
				]	
			],

			'nama_fakultas' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'nama fakultas harus diisi'
				]	
			],
		]);

		if(!$rules){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back();
		}

		$id = $this->request->getVar('old_kode_fakultas');

		$data = [
			'kode_fakultas' => $this->request->getVar('kode_fakultas'),
			'nama_fakultas' => $this->request->getVar('nama_fakultas'),
		];


		$this->m_Fakultas->update($id, $data);
		return redirect()->to('admin/fakultas');
	}
	
}