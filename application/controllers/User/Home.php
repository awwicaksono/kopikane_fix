<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('home/layout/header');
		$this->load->view('home/layout/index');
		$this->load->view('home/layout/footer');
	}

}