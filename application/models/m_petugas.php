<?php 
 
class M_petugas extends CI_Model{
	public function tampil_data(){

		$this->db->select('*');
		$this->db->from('petugas');
		$this->db->join('level', 'level.idlevel = petugas.idlevel');
		$query = $this->db->get();
		return $query->result();
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	Public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}