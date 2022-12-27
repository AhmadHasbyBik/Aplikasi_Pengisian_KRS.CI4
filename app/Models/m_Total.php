<?php  

namespace App\Models;

use CodeIgniter\Model;

class m_Total extends Model
{
	public function totalmahasiswa()
	{
		$this->db->table('mahasiswa')->countAll();
	}

	public function totaljurusan()
	{
		$this->db->table('jurusan')->countAll();
	}

	public function totalfakultas()
	{
		$this->db->table('fakultas')->countAll();
	}

	public function totalmatkul()
	{
		$this->db->table('matkul')->countAll();
	}

	public function totaluser()
	{
		$this->db->table('user')->countAll();
	}
}
	

