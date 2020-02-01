<?php 
 
class M_pembayaranpes extends CI_Model{
	public function tampil_semua()
	{
		return $this->db->get('pembayaranpesawat');
	}

	public function tampil_data(){
		$where = array(
			'status' => 1 
		);
		return $this->db->get_where('pembayaranpesawat', $where);
	}

	public function updatepembayaran($id)
	{
		$data = array(
			'status' => 2
		);
		$this->db->where('idpembayaranpes', $id);
		return $this->db->update('pembayaranpesawat', $data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}