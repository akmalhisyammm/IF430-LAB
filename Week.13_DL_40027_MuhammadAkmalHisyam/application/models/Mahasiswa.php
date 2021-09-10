<?php
defined('BASEPATH') or exit('No direct script access allowed !');

class Mahasiswa extends CI_Model
{
  public function getAllMahasiswa()
  {
    return $this->db->get('mahasiswa')->result_array();
  }

  public function deleteMahasiswaById($id)
  {
    $this->db->delete('mahasiswa', ['id_mahasiswa' => $id]);
  }
}
