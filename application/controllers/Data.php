<?php   

defined('BASEPATH') OR exit('No Direct script access allowed');

class Data extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Medit');
        $this->load->model('Mtambah');
     }

    public function index(){
        $data['show'] = $this->Medit->show();
        $data['edit'] = $this->Medit->editCafe();
        $this->load->view('admin/form/index',$data);
    
    }
}

?>