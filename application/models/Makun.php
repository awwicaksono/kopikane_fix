<?php 
class Makun extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}

	function daftar($data_admin)
	{
		$this->db->insert('admin', $data_admin);
	}
	
	function save_transaksi($data_transaksi)
	{
		$this->db->insert('transaksi', $data_transaksi);
	}	
}
?>