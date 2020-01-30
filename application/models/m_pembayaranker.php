<?php 
 
class M_pembayaranker extends CI_Model{
	public function tampil_data(){
		$where = array(
			'status' => 1 
		);
		return $this->db->get_where('pembayarankereta', $where);
	}

	public function updatepembayaran($id)
	{
		$data = array(
			'status' => 2
		);
		$this->db->where('idpembayaranker', $id);
		return $this->db->update('pembayarankereta', $data);
	}
}