<?php 
 
class M_pembayaranker extends CI_Model{
	public function tampil_semua()
	{
		return $this->db->get('pembayarankereta');
	}

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

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}