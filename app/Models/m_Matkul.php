<?php  

namespace App\Models;

use CodeIgniter\Model;

class m_Matkul extends Model
{
	protected $table = 'matkul';
	protected $primaryKey = 'kode_matkul';
	protected $returnType = 'array';
	protected $allowedFields = [
		'kode_matkul',
		'nama_matkul',
		'sks_matkul',
		'jenis_matkul',
		'kode_jurusan',
		'kode_semester'
	];
}