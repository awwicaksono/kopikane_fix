<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_cafe extends CI_Controller {



    public function __construct() 
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Medit');
     }

    
// In your Edit_cafe controller
public function UpdateCafe()
{
    // Ambil id_cafe berdasarkan username_admin dari sesi
    $username_admin = $this->session->userdata('username_admin');
    $id_cafe = $this->Medit->getIdCafeByUsername($username_admin);

    if ($id_cafe) {
        $nama_cafe = $this->input->post('nama_cafe');
        $alamat_cafe = $this->input->post('alamat_cafe');
        $telp_cafe = $this->input->post('telp_cafe');
        $deskripsi_cafe = $this->input->post('deskripsi_cafe');

        $data = array(
            'nama_cafe' => $nama_cafe,
            'alamat_cafe' => $alamat_cafe,
            'telp_cafe' => $telp_cafe,
            'deskripsi_cafe' => $deskripsi_cafe
        );

        // Update data berdasarkan id_cafe
        $this->Medit->update_data($id_cafe, $data);
        redirect('Data');
    } else {
        // Handle jika id_cafe tidak ditemukan
        echo "ID Cafe tidak ditemukan.";
    }
}


public function delete()
{
    $username_admin = $this->session->userdata('username_admin');
    $id_cafe = $this->Medit->getIdCafeByUsername($username_admin);

    if (!empty($id_cafe)) {
        // Call the model method to delete the cafe
        $this->Medit->delete('tbl_cafe', 'id_cafe', $id_cafe);
        
        // Redirect to the desired page after deletion
        redirect('Data');
    } else {
        // Handle invalid or missing id_cafe
        echo "Invalid or missing cafe ID.";
    }
}

}