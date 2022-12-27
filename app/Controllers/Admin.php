<?php

namespace App\Controllers;
use App\Models\m_AuthAdmin;
use App\Models\m_Total;

class Admin extends BaseController
{
	protected $m_Total;

	public function __construct()
	{
		$this->m_Total = new m_Total();
	}

	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard',
			'totalmahasiswa' => $this->m_Total->totalmahasiswa(),
			'totaljurusan' => $this->m_Total->totaljurusan(),
			'totalfakultas' => $this->m_Total->totalfakultas(),
			'totalmatkul' => $this->m_Total->totalmatkul(),
			'totaluser' => $this->m_Total->totaluser(),
		];
		return view('admin/dashboard', $data);
	}
}