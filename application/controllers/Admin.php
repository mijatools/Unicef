<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	$this->load->model('Login_model');
			if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
	}

	function index() {
		if($this->session->userdata('level')==='1') {
			$this->load->view('layouts/header');
			$this->load->view('admin_view');
			$this->load->view('layouts/footer');
		} else {
			echo "Access Denied!";
		}
	}

	public function RegisterUsuario()
	{
	$this->load->view('layouts/header');
	$this->load->view('administrador/admin_insert');
	$this->load->view('layouts/footer');
	}
	public function insertdata()
	{
	$username = $this->input->post('username');
	$email = $this->input->post('email');
	$password = $this->input->post('password');
	$level = $this->input->post('level');
	
	
	$data = array(
	'username'     => $username,
	'email'       => $email,
	'password'       => $password,
	'level'       => $level,
	);
	$this->Login_model->insert($data);
	$this->session->set_flashdata('sukses', 'Se registro con existo!');
                         
     redirect(base_url('Admin/ListaUsuario'),'refresh'); 
	}

	public function ListaUsuario()
	{
		$this->load->view('layouts/header');
	
	$data['data']=$this->Login_model->get();
	$this->load->view('administrador/v_admin', $data);
	
	$this->load->view('layouts/footer');
	} 
	 public function EliminarUsuario()
	 {
	 $id_usuario=$_POST['id_usuario'];
	 $data['estado']=0;
	 $this->Login_model->EliminarUsuario($id_usuario, $data);
	 redirect(base_url('Admin/ListaUsuario'),'refresh');
	 }

}