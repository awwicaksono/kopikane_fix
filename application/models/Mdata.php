<?php

class Mdata extends CI_Model{

    function ambil_data(){
       return $this->db->get('tbl_cafe');
    }

}

?>