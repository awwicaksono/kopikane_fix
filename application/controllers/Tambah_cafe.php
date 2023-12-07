<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_cafe extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('Mtambah');
	}

	public function index()
	{
        if ($gambar_cafe=''){}else{
            $config['upload_path'] = './uploads/cafe';
            $config['allowed_types'] = 'jpg|png|jpeg';

            $this->load->library('upload',$config);
            if (!$this->upload->do_upload('gambar_cafe')){
                $error = $this->upload->display_errors();
                echo $error;
            }else{
                $username = $this->session->userdata('username_admin');
                $id_admin = $this->Mtambah->get_admin_id_by_username($username);
                $nama_cafe = $this->input->post('nama_cafe');
                $alamat_cafe = $this->input->post('alamat_cafe');
                $telp_cafe = $this->input->post('telp_cafe');
                $deskripsi_cafe = $this->input->post('deskripsi_cafe');
                $gambar_cafe = $this->upload->data('file_name');

                $folder_path = './uploads/cafe/' . $nama_cafe;
                if (!is_dir($folder_path)) {
                    mkdir($folder_path, 0777, true);
                }

                // Memindahkan file ke folder yang sesuai
                $file_path = $this->upload->data('full_path');
                $new_file_path = $folder_path . '/' . $gambar_cafe;
                rename($file_path, $new_file_path);
            }
            $data  = Array(
                'id_admin' => $id_admin,
                'nama_cafe' => $nama_cafe,
                'alamat_cafe' => $alamat_cafe,
                'telp_cafe' => $telp_cafe,
                'deskripsi_cafe' => $deskripsi_cafe,
                'gambar_cafe' => $gambar_cafe,
            );
            $this->Mtambah->TambahData($data);
            redirect('Data');
        }
	}
}
