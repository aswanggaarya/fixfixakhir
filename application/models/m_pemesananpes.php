<?php 
 
class M_pemesananpes extends CI_Model{
	public function tampil_semua()
	{
		return $this->db->get('pemesananpesawat');
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}