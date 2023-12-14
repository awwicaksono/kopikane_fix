<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cafe extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mdata');
	}
    
	public function index()
	{
        $data['tbl_cafe'] = $this->Mdata->ambil_data()->result();
		$this->load->view('home/cafe/header');
		$this->load->view('home/cafe/index', $data);
		$this->load->view('home/cafe/footer');
    
	}



}