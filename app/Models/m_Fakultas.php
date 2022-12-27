<?php  

namespace App\Models;

use CodeIgniter\Model;

class m_Fakultas extends Model
{
	protected $table = 'fakultas';
	protected $primaryKey = 'kode_fakultas';
	protected $returnType = 'array';
	protected $allowedFields = [
		'kode_fakultas',
		'nama_fakultas'
	];
}