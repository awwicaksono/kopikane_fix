<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('home/about/header');
		$this->load->view('home/about/index');
		$this->load->view('home/about/footer');
	}

}