<?php 
 
class M_pembayaranpes extends CI_Model{
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
}