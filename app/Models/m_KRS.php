<?php

namespace App\Models;

use CodeIgniter\Model;

class m_KRS extends Model
{
  protected $table = 'pilih_krs';
  protected $primaryKey = 'id_krs';
  protected $returnType = 'array';
  protected $allowedFields = [
    'npm_mhs',
    'kode_matkul',
    'akademik_krs',
    'semester_krs'
  ];
}
