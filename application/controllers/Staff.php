<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE) {
			redirect('Login');
		}
	}

	function index() {
		if($this->session->userdata('level')==='3') {
			$this->load->view('layouts/header');
			$this->load->view('Usuario_view');
			$this->load->view('layouts/footer'); 
		} else {
			echo "Access Denied!";
		}
	}
}