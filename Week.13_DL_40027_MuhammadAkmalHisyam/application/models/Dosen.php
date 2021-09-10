<?php
defined('BASEPATH') or exit('No direct script access allowed !');

class Dosen extends CI_Model
{
  public function getAllDosen()
  {
    return $this->db->get('dosen')->result_array();
  }

  public function deleteDosenById($id)
  {
    $this->db->delete('dosen', ['id_dosen' => $id]);
  }
}
