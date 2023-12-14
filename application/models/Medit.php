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
        $this->db->from('admin');
        $this->db->join('tbl_cafe', 'tbl_cafe.id_admin = admin.id_admin');
        $this->db->where('username_admin',$id);
        return $this->db->get()->row_array();
    }

    function showSuper()
    {
        $this->db->select('admin.id_admin, admin.username_admin, admin.email_admin, admin.password_admin, admin.status, tbl_cafe.nama_cafe, tbl_cafe.telp_cafe');
        $this->db->from('admin');
        $this->db->join('tbl_cafe', 'tbl_cafe.id_admin = admin.id_admin', 'left');
        $this->db->where('id_super = 2');
        return $this->db->get()->result_array();
    }

    function showStatus()
    {
        $id = $this->session->userdata('username_admin');
        $this->db->select('admin.id_admin');  // Select only the id_admin column
        $this->db->from('tbl_cafe');
        $this->db->join('admin', 'tbl_cafe.id_admin = admin.id_admin');
        $this->db->where('username_admin', $id);
        return $this->db->get()->row_array();  // Use row_array() as you expect only one row
    }

    
    function editStatus($id_admin, $newStatus)
    {
        $this->db->where('id_admin', $id_admin);
        $this->db->update('admin', ['status' => $newStatus]);
    }
    

    public function get_cafe_by_id($id_cafe)
{
    return $this->db->get_where('tbl_cafe', ['id_cafe' => $id_cafe])->row_array();
}

public function editCafe(){
    $id = $this->session->userdata('username_admin');
    $this->db->select('*');
    $this->db->from('admin');
    $this->db->join('tbl_cafe', 'tbl_cafe.id_admin = admin.id_admin');
    return $this->db->get()->row_array();
}

public function update_data($id_cafe, $data)
{
    $this->db->where('id_cafe', $id_cafe);
    $this->db->update('tbl_cafe', $data);

    // Return the number of affected rows or any other necessary data
    return $this->db->affected_rows();
}

public function getIdCafeByUsername($username_admin)
{
    $this->db->select('tbl_cafe.id_cafe');
    $this->db->from('admin');
    $this->db->join('tbl_cafe', 'admin.id_admin = tbl_cafe.id_admin');
    $this->db->where('admin.username_admin', $username_admin);

    $query = $this->db->get();
    $result = $query->row();

    if ($result) {
        return $result->id_cafe;
    } else {
        return false;
    }
}


public function delete($tabel, $field, $value)
{
    $this->db->where($field, $value);

    // Perform the delete operation
    if ($this->db->delete($tabel)) {
        return true;  // Deletion successful
    } else {
        return false; // Deletion failed
    }
}

}
?>