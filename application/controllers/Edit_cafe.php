<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_cafe extends CI_Controller {



    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Medit');
     }

     public function index($id_cafe)
     {
        $data = [
            'nama_cafe' => $this->input->post('nama_cafe'),
            'alamat_cafe' => $this->input->post('alamat_cafe'),
            'telp_cafe' => $this->input->post('telp_cafe'),
            'deskripsi_cafe' => $this->input->post('deskripsi_cafe'),
        ];
    
        // Cek apakah ada file gambar yang diupload
        if ($_FILES['gambar_cafe']['name']) {
            $config['upload_path'] = './uploads/cafe';
            $config['allowed_types'] = 'jpg|png|jpeg';
            
            $this->load->library('upload', $config);
    
            if ($this->upload->do_upload('gambar_cafe')) {
                // Jika upload berhasil, update nama gambar baru
                $gambar_cafe = $this->upload->data('file_name');
                $data['gambar_cafe'] = $gambar_cafe;
    
                // Hapus gambar lama jika ada
                // ...
    
                // Pindahkan file ke folder yang sesuai
                $folder_path = './uploads/cafe/' . $data['nama_cafe'];
                if (!is_dir($folder_path)) {
                    mkdir($folder_path, 0777, true);
                }
    
                $file_path = $this->upload->data('full_path');
                $new_file_path = $folder_path . '/' . $gambar_cafe;
                rename($file_path, $new_file_path);
            } else {
                $error = $this->upload->display_errors();
                echo $error;
                return;
            }
        }
    
        // Lakukan update data ke database
        $this->Medit->update_data($id_cafe, $data);
    
        // Redirect ke halaman data setelah update
        redirect('Data');
     }
}
