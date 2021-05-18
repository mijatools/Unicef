<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_producto extends CI_Model {

 public function get()
 {
 $this->db->from('producto');
  $query = $this->db->get();
 return $query->result();
 }
public function insert($data)
{
$this->db->insert('producto',$data);
return TRUE;
}
public function update($data,$kondisi)
{
$this->db->update('producto',$data,$kondisi);
return TRUE;
}

public function get_by_id($kondisi)
{
$this->db->from('producto');
$this->db->where($kondisi);
$query = $this->db->get();
return $query->row();
}
    

}

