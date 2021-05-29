
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_denuncias extends CI_Model {

    public function insert($data)
    {
    $this->db->insert('formulariodenuncia',$data);
    return TRUE;
    }

    public function get()
    {
    $this->db->from('formulariodenuncia');
    $this->db->where('estado',1);
    $query = $this->db->get();
    return $query->result();
    }

    public function update($data,$kondisi)
    {
    $this->db->update('formulariodenuncia',$data,$kondisi);
    return TRUE;
    }
    
    public function get_by_id($kondisi)
    {
    $this->db->from('formulariodenuncia');
    $this->db->where($kondisi);
    $query = $this->db->get();
    return $query->row();
    }

    public function EliminarDenuncias($idformularioDenuncia,$data)
    {
    $this->db->WHERE('idformularioDenuncia',$idformularioDenuncia);
    $this->db->UPDATE('formulariodenuncia',$data);
    }

    

}

/* End of file M_denuncia.php */

?>