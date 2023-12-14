<?php

class Mdata extends CI_Model{

    function ambil_data(){
        $this->db->select('*');
        return $this->db->get('tbl_cafe')->result_array();
    }

}

?>