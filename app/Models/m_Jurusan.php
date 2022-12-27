<?php  

namespace App\Models;

use CodeIgniter\Model;

class m_Jurusan extends Model
{
	protected $table = 'jurusan';
	protected $primaryKey = 'kode_jurusan';
	protected $returnType = 'array';
	protected $allowedFields = [
		'kode_jurusan',
		'nama_jurusan',
		'kode_fakultas'
	];
}