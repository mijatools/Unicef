<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function check_user($username, $password) {
		$this->db->select('*'); //select all
		$this->db->from('usuario'); // table name
		$this->db->where('username', $username); // where username is equal to $username
		$this->db->where('password', md5($password)); // and password is equal to  $password (md5 format)
		$query = $this->db->get(); //get data from DB
		return $query;
	}
	public function insert($data)
	{
	$this->db->insert('usuario',$data);
	return TRUE;
	}

	public function get()
    {
    $this->db->from('usuario');
    $this->db->where('estado',1);
    $query = $this->db->get();
    return $query->result();
    }

	public function EliminarUsuario($id_usuario,$data)
	{
	$this->db->WHERE('id_usuario',$id_usuario);
	$this->db->UPDATE('usuario',$data);
	}

	public function insertar($data)
    {
    $this->db->insert('formulariodenuncia',$data);
    return TRUE;
    }


}
