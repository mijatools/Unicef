
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_denuncias extends CI_Model {

    public function insert($data)
    {
    $this->db->insert('formulariodenuncia',$data);
    return TRUE;
    }

    

}

/* End of file M_denuncia.php */

?>