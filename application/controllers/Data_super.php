<?php   

defined('BASEPATH') OR exit('No Direct script access allowed');

class Data_super extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Medit');
        $this->load->model('Mtambah');
     }

    public function index(){
        $data['show'] = $this->Medit->showSuper();
        $data['action'] = $this->Medit->showStatus();
        $this->load->view('super/form/index', $data);
    
    }

    public function ubah_status($id_admin)
    {
        $newStatus = $this->input->post('new_status');

        $this->Medit->editStatus($id_admin, $newStatus);
        redirect('Data_super');
    }
}

?>