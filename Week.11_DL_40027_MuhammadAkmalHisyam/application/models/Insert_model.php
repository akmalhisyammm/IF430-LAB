<?php

class Insert_model extends CI_Model
{
  public function insert($values)
  {
    // insert data ke database
    $this->db->insert('product', $values);
  }

  function get_category()
  {
    $query = $this->db->query("SELECT * FROM category");
    return $query->result_array();
  }

  function get_supplier()
  {
    $query = $this->db->query("SELECT * FROM supplier");
    return $query->result_array();
  }
}
