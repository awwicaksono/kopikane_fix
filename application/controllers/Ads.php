<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ads extends CI_Controller {

	public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Makun');
     }

	 function index()
	 {
		$this->form_validation->set_rules('username_admin', 'Username_Admin', 'required|trim');
        $this->form_validation->set_rules('email_admin', 'Email_Admin', 'required|trim|valid_email');
        $this->form_validation->set_rules('password_admin', 'Password_Admin', 'required|trim');
	
		 if ($this->form_validation->run() === false)
		 {
			$this->load->view('home/ads/header');
			$this->load->view('home/ads/index');
			$this->load->view('home/ads/footer');
		 }
		 else
		 {
			 $config['upload_path'] = './uploads/transfer'; // Set your upload directory
			 $config['allowed_types'] = 'jpg|jpeg|png'; // Set allowed file types
			 $config['max_size'] = 2048; // Set max file size in kilobytes
	 
			 $this->load->library('upload', $config);
	 
			 if ($this->upload->do_upload('bukti_transaksi'))
			 {
				 $data_file = $this->upload->data();
				 $data_admin = [
					 'username_admin' => htmlspecialchars($this->input->post('username_admin', true)),
					 'email_admin' => htmlspecialchars($this->input->post('email_admin', true)),
					 'password_admin' => $this->input->post('password_admin'),
					 'id_super' => '2',
				 ];
	 
				 $this->Makun->daftar($data_admin);
	 
				 $data_transaksi = [
					 'tgl_transaksi' => date('Y-m-d'), // You may need to adjust the date format
					 'bukti_transaksi' => $data_file['file_name'],
					 'id_admin' => $this->db->insert_id(), // Get the last inserted admin_id
				 ];
	 
				 $this->Makun->save_transaksi($data_transaksi); // Assuming you have a method for saving transactions in your model
				 redirect('adminpanel');
			 }
			 else
			 {
				 $error = array('error' => $this->upload->display_errors());
				 print_r($error); // Handle file upload errors
			 }
		 }
	 }	 
}