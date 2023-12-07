<?php 
class Medit extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function EditData($data)
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

    function save_edit($data)
	{
		$this->db->insert('tbl_cafe', $data);
	}

    function show()
    {
        $id = $this->session->userdata('username_admin');
        $this->db->select('*');
        $this->db->from('tbl_cafe');
        $this->db->join('admin', 'tbl_cafe.id_admin = admin.id_admin');
        $this->db->where('username_admin',$id);
        return $this->db->get()->row_array();
    }

    public function get_cafe_by_id($id_cafe)
{
    return $this->db->get_where('tbl_cafe', ['id_cafe' => $id_cafe])->row_array();
}

public function update_data($id_cafe, $data)
{
    $this->db->where('id_cafe', $id_cafe);
    $this->db->update('tbl_cafe', $data);
}

}
?>