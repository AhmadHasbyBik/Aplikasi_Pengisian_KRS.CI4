<?php

namespace App\Models;

use CodeIgniter\Model;

class m_Custom extends Model
{
  public function getMKSemester1($kode_semester, $jurusan)
  {

    $rules = [
      'kode_semester' => $kode_semester,
      'kode_jurusan'  => $jurusan,
    ];

    $dbMataKuliah = $this->db->table('matkul');
    $dbMataKuliah->where($rules);

    return $dbMataKuliah->get()->getResultArray();
  }

  public function getMKSemester2($kode_semester)
  {
    $dbMataKuliah = $this->db->table('matkul');
    $dbMataKuliah->where('kode_semester', $kode_semester);

    return $dbMataKuliah->get()->getResultArray();
  }

  public function getMKSemester3($kode_semester)
  {
    $dbMataKuliah = $this->db->table('matkul');
    $dbMataKuliah->where('kode_semester', $kode_semester);

    return $dbMataKuliah->get()->getResultArray();
  }

  public function getMKSemester4($kode_semester)
  {
    $dbMataKuliah = $this->db->table('matkul');
    $dbMataKuliah->where('kode_semester', $kode_semester);

    return $dbMataKuliah->get()->getResultArray();
  }

  public function getMKSemester5($kode_semester)
  {
    $dbMataKuliah = $this->db->table('matkul');
    $dbMataKuliah->where('kode_semester', $kode_semester);

    return $dbMataKuliah->get()->getResultArray();
  }

  public function getMKSemester6($kode_semester)
  {
    $dbMataKuliah = $this->db->table('matkul');
    $dbMataKuliah->where('kode_semester', $kode_semester);

    return $dbMataKuliah->get()->getResultArray();
  }

  public function getMKSemester7($kode_semester)
  {
    $dbMataKuliah = $this->db->table('matkul');
    $dbMataKuliah->where('kode_semester', $kode_semester);

    return $dbMataKuliah->get()->getResultArray();
  }
  
  public function getMKSemester8($kode_semester)
  {
    $dbMataKuliah = $this->db->table('matkul');
    $dbMataKuliah->where('kode_semester', $kode_semester);

    return $dbMataKuliah->get()->getResultArray();
  }

  public function getKrsByIdMhs($npm)
  {
    $dbKRS = $this->db->table('krs');
    $dbKRS->where('npm_mahasiswa', $npm);
    $dbKRS->join('matkul', 'matkul.kode_matkul=krs.kode_matkul')->select('matkul.*, krs.npm_mahasiswa,krs.tahun_akademik_krs');

    return $dbKRS->get()->getResultArray();
  }
}
