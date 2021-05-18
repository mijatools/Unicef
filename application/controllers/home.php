<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    public function __construct()
    {
    parent::__construct();
    $this->load->model('M_producto');
    }

    public function index()
    {
      $this->load->view('layouts/header');
      $data['data']=$this->M_producto->get();
      $this->load->view('vista', $data); 
      $this->load->view('layouts/footer');
    }
    public function tambah()
    {
    $this->load->view('v_insert');
    }
    public function insertdata()
    {
    $descripcion = $this->input->post('descripcion');
    $unidad_medida = $this->input->post('unidad_medida');
    $saldo = $this->input->post('saldo');
    $precio_base = $this->input->post('precio_base');
    
    
    $data = array(
    'descripcion'     => $descripcion,
    'unidad_medida'       => $unidad_medida,
    'saldo'       => $saldo,
    'precio_base'       => $precio_base,
    );
    $this->M_producto->insert($data);
    redirect('home','refresh');
    }

    public function edit($id_producto)
    {
    $kondisi = array('id_producto' => $id_producto );
    $data['data'] = $this->M_producto->get_by_id($kondisi);
    return $this->load->view('v_update',$data);
    }
    public function updatedata()
    {
    $id_producto   = $this->input->post('id_producto');
    $descripcion = $this->input->post('descripcion');
    $unidad_medida = $this->input->post('unidad_medida');
    $saldo = $this->input->post('saldo');
    $precio_base = $this->input->post('precio_base');
    
    $kondisi = array('id_producto' => $id_producto);
    
    $data = array(
    'descripcion'               => $descripcion,
    'unidad_medida'     => $unidad_medida,
    'saldo'     => $saldo,
    'precio_base'     => $precio_base,
    );
    $this->M_producto->update($data,$kondisi);
    $this->session->set_flashdata('sukses', 'Se registro con existo!');
    return redirect('home');
    }
}

?>