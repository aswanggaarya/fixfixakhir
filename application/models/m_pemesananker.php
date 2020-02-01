<?php 
 
class M_pemesananker extends CI_Model{
	public function tampil_semua()
	{
		return $this->db->get('pemesanankereta');
	}

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}