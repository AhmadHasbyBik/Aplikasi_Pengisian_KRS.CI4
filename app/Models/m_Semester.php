<?php  

namespace App\Models;

use CodeIgniter\Model;

class m_Semester extends Model
{
	protected $table = 'semester';
	protected $primaryKey = 'kode_semester';
	protected $returnType = 'array';
	protected $allowedFields = [
		'kode_semester',
		'nama_semester'
	];
}