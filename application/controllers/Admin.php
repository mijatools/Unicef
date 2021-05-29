<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	$this->load->model('Login_model');
	$this->load->model('M_denuncias');
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
		// AQUI TENEMOS EL CRUD DE LOS USUARIO
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
	//  AQUI TERMINAMOS CON LOS USUARIO

	//  AQUI VAMOS HACER LAS DENUNCIAS
	 public function denuncias()
	 {
		 $this->load->view('layouts/header');
		 $this->load->view('denuncias/v_denuncias');
		 $this->load->view('layouts/footer');	 
	 }

	public function tambah()
	 {
	  	 $this->load->view('v_insert');
	 }
	public function insertarDenuncia()
		 {
			$nombreCompleto      = $this->input->post('nombreCompleto');
			$ci				 	 = $this->input->post('ci');
			$ciudad				 = $this->input->post('ciudad');
			$correoElectronico   = $this->input->post('correoElectronico');
			$telefono			 = $this->input->post('telefono');
			$hechosDenuncia 	 = $this->input->post('hechosDenuncia');
			$pruebasDocumentos   = $this->input->post('pruebasDocumentos');
			$numeroHojas		 = $this->input->post('numeroHojas');
			$claseDocumento		 = $this->input->post('claseDocumento');
			$otrasPruebas 		 = $this->input->post('otrasPruebas');
			$nombreDenunciado 	 = $this->input->post('nombreDenunciado');
			$direccionDenunciado = $this->input->post('direccionDenunciado');
			$unidadDenunciado    = $this->input->post('unidadDenunciado');
			$cargoDenunciado	 = $this->input->post('cargoDenunciado');
			$denunciaPasoUno	 = $this->input->post('denunciaPasoUno');
			$denunciaPasoDos 	 = $this->input->post('denunciaPasoDos');
			$denunciaPasoTres	 = $this->input->post('denunciaPasoTres');
		 	 
		 $data = array(
			'nombreCompleto'        => $nombreCompleto,
			'ci'    			    => $ci,
			'ciudad'     			=> $ciudad,
			'correoElectronico'     => $correoElectronico,
			'telefono'    			=> $telefono,
			'hechosDenuncia'   	    => $hechosDenuncia,
			'pruebasDocumentos'     => $pruebasDocumentos,
			'numeroHojas'     		=> $numeroHojas,
			'claseDocumento'   		=> $claseDocumento,
			'otrasPruebas'    		=> $otrasPruebas,
			'nombreDenunciado'      => $nombreDenunciado,
			'direccionDenunciado'   => $direccionDenunciado,
			'unidadDenunciado'      => $unidadDenunciado,
			'cargoDenunciado'       => $cargoDenunciado,
			'denunciaPasoUno'       => $denunciaPasoUno,
			'denunciaPasoDos'        => $denunciaPasoDos,
			'denunciaPasoTres'      => $denunciaPasoTres,
		 );

		 $this->Login_model->insertar($data);
		 redirect('Admin/denuncias','refresh');
		 }
	 public function listaDenuncia()
		{
			$this->load->view('layouts/header');
			$data['data']=$this->M_denuncias->get();
			$this->load->view('denuncias/listaDenuncia_view', $data);
			$this->load->view('layouts/footer');
		}

		public function editarDenuncia($idformularioDenuncia)
		{
			$this->load->view('layouts/header');
			$kondisi = array('idformularioDenuncia' => $idformularioDenuncia );
			$data['data'] = $this->M_denuncias->get_by_id($kondisi);
			return $this->load->view('denuncias/updateDenuncias_view',$data);
			$this->load->view('layouts/footer');
		}
		public function updateDenuncia()
		{
			$idformularioDenuncia   = $this->input->post('idformularioDenuncia');
			$nombreCompleto         = $this->input->post('nombreCompleto');
			$ci 					= $this->input->post('ci');
			$ciudad 				= $this->input->post('ciudad');
			$correoElectronico 		= $this->input->post('correoElectronico');
			$telefono 				= $this->input->post('telefono');
			$hechosDenuncia 		= $this->input->post('hechosDenuncia');
			$pruebasDocumentos 		= $this->input->post('pruebasDocumentos');
			$numeroHojas 			= $this->input->post('numeroHojas');
			$claseDocumento 		= $this->input->post('claseDocumento');
			$otrasPruebas 			= $this->input->post('otrasPruebas');
			$fechaRegistro 			= $this->input->post('fechaRegistro');
			$nombreDenunciado 		= $this->input->post('nombreDenunciado');
			$direccionDenunciado 	= $this->input->post('direccionDenunciado');
			$unidadDenunciado 		= $this->input->post('unidadDenunciado');
			$cargoDenunciado 		= $this->input->post('cargoDenunciado');
			$denunciaPasoUno 		= $this->input->post('denunciaPasoUno');
			$denunciaPasoDos 		= $this->input->post('denunciaPasoDos');
			$denunciaPasoTres 		= $this->input->post('denunciaPasoTres');
			
		$kondisi = array('idformularioDenuncia' => $idformularioDenuncia );	
		
		$data = array(
			'nombreCompleto'       => $nombreCompleto,
			'ci'    			   => $ci,
			'ciudad'               => $ciudad,
			'correoElectronico'    => $correoElectronico,
			'telefono'   		   => $telefono,
			'hechosDenuncia'   	   => $hechosDenuncia,
			'pruebasDocumentos'    => $pruebasDocumentos,
			'numeroHojas'   	   => $numeroHojas,
			'claseDocumento'       => $claseDocumento,
			'otrasPruebas'   	   => $otrasPruebas,
			'fechaRegistro'        => $fechaRegistro,
			'nombreDenunciado'     => $nombreDenunciado,
			'direccionDenunciado'  => $direccionDenunciado,
			'unidadDenunciado'     => $unidadDenunciado,
			'cargoDenunciado'      => $cargoDenunciado,
			'denunciaPasoUno'      => $denunciaPasoUno,
			'denunciaPasoDos'      => $denunciaPasoDos,
			'denunciaPasoTres'     => $denunciaPasoTres,
		);		
		$this->M_denuncias->update($data,$kondisi);
		return redirect('Admin/listaDenuncia'); //REDIRECCIONANDO EL UPDATE		
		}

		public function EliminarDenuncia()
		{
		$idformularioDenuncia=$_POST['idformularioDenuncia'];
		$data['estado']=0;
		$this->M_denuncias->EliminarDenuncias($idformularioDenuncia, $data);
		redirect(base_url('Admin/denuncias'),'refresh');
		}
		 
		
	//  FIN DE LAS DENUNCIAS

}