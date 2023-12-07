<?php 
class Mtambah extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function TambahData($data)
	{
		$this->db->insert('tbl_cafe', $data);
	}
	
	public function get_admin_id_by_username($username)
    {
        $query = $this->db->get_where('admin', array('username_admin' => $username));
        $result = $query->row();

        if ($result) {
            return $result->id_admin;
        } else {
            return null; // Username tidak ditemukan
        }
    }
}
?>