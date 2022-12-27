<?php  

namespace App\Models;

use CodeIgniter\Model;

class m_Mahasiswa extends Model
{
	protected $table = 'mahasiswa';
	protected $primaryKey = 'npm_mhs';
	protected $returnType = 'array';
	protected $allowedFields = [
		'npm_mhs',
		'nama_mhs',
		'tgl_lahir_mhs',
		'semester_mhs',
		'jurusan_mhs',
		'password_mhs',
		'foto_mhs'
	];
}