<?php

class Msuper extends CI_Model{

    public function cek_login($u, $p){
        $q = $this->db->get_where('admin', array('username_admin'=>$u, 'password_admin'=>$p));
        return $q;
    }



}

?>