<?php  

namespace App\Models;

use CodeIgniter\Model;

Class m_AuthAdmin extends Model {
	protected $table = 'user';
	protected $primaryKey = 'id_user';
	protected $returnType = 'array';
	protected $allowFields = [
		'nama_user',
		'email_user',
		'password_user',
		'nama_user',
		'alamat_user',
		'foto_user',
	];
}