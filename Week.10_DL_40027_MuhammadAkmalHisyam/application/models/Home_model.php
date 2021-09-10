<?php

class Home_model extends CI_Model
{
  function get_product()
  {
    $query = $this->db->query("SELECT * FROM product");

    // kembalikan hasil query ke controller
    return $query->result_array();
  }
}
