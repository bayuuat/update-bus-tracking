<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_booking extends CI_Model
{
  public function create($table, $data)
  {
    $query = $this->db->insert($table, $data);
    return $this->db->insert_id(); // return last insert id
  }
    
  public function get_data()
  {
    return $this->db->get('tempat_charge')->result_array();
  }

  public function detail_data($id)
  {
    $query = $this->db->get_where('tempat_charge', array('id' => $id))->row();
    return $query;
  }
}