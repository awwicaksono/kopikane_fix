<?php

class Madmin extends CI_Model{
    public function cek_login($u, $p, $role){
        $q = $this->db->get_where('admin', array('username_admin' => $u, 'password_admin' => $p, 'id_super' => $role));
        return $q;
    }

    public function get_role($u, $p){
 
        $result = $this->db->select('id_super')->get_where('admin', array('username_admin' => $u, 'password_admin' => $p))->row();
        
        if ($result) {
            return $result->id_super;
        } else {
          
            return 0;
        }
    }
}


?>