<?php   

defined('BASEPATH') OR exit('No Direct script access allowed');

class Super extends CI_Controller {

    public function index(){
        $this->load->view('super/login');
    }

    public function dashboard(){
        if(empty($this->session->userdata('username_admin'))){
            redirect('super');
        }
        $this->load->view('super/layout/dashboard');
    }

    public function login(){
        $this->load->model('Msuper');
        $u = $this->input->post('username_admin');
        $p = $this->input->post('password_admin');

        $cek = $this->Msuper->cek_login($u, $p)->num_rows();

        if($cek==1){
            $data_session = array(
                'username_admin' => $u,
                'status' => 'login'
            );
            $this->session->set_userdata($data_session);
            redirect('super/dashboard');
        } else{
            redirect('super');
        }
    }

  
}

?>