<?php

class Msuper extends CI_Model{

    public function cek_login($u, $p){
        $q = $this->db->get_where('super', array('username_super'=>$u, 'password_super'=>$p));
        return $q;
    }

}

?>