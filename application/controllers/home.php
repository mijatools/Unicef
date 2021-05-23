<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    // $this->load->model('');
    }

    public function index()
    {
        $this->load->view('layouts/header');
      
      $this->load->view('vista'); 
      $this->load->view('layouts/footer');
    }

}

/* End of file home.php */

?>