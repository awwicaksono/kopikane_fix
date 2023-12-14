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
        $s = 'Y';

        $role = $this->Madmin->get_role($u, $p);
    
        $cek = $this->Madmin->cek_login($u, $p, $role, $s)->num_rows();
    
    
        if ($cek) {
            $data_session = array(
                'username_admin' => $u,
                'id_super' => $role,
                'status' => $s,
            );
            if ($role == 2) {
                if($s == "Y"){
                    $this->session->set_userdata($data_session);
                    redirect('adminpanel/dashboard');
                }
                else {
                    redirect('adminpanel');
                }
            }
            else {
                $this->session->set_userdata($data_session);
                redirect('super/dashboard');
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