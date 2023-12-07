<?php   

defined('BASEPATH') OR exit('No Direct script access allowed');

class Adminpanel extends CI_Controller {

    public function index(){
        $this->load->view('admin/login');
    }

    public function dashboard(){
        if(empty($this->session->userdata('username_admin'))){
            redirect('adminpanel');
        }
        $this->load->view('admin/layout/dashboard');
    }

    public function login(){
        $this->load->model('Madmin');
        $u = $this->input->post('username_admin');
        $p = $this->input->post('password_admin');
    
        // Get the role from the database or any other source
        $role = $this->Madmin->get_role($u, $p);
    
        $cek = $this->Madmin->cek_login($u, $p, $role)->num_rows();
    
        if($cek){
            $data_session = array(
                'username_admin' => $u,
                'status' => 'login',
                'id_super' => $role,
            );
            if ($role == 2) {
                $this->session->set_userdata($data_session);
                redirect('adminpanel/dashboard');
            } else {
                $this->session->set_userdata($data_session);
                redirect('Main');
            }
        } else {
            redirect('adminpanel');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
		redirect('Main');
    }    
  
}

?>