<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cafe extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Mdata');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
        $data['tbl_cafe'] = $this->Mdata->ambil_data();
		$this->load->view('home/cafe/header');
		$this->load->view('home/cafe/index', $data);
		$this->load->view('home/cafe/footer');
    
	}



}