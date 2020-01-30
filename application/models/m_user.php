<?php 
 
class M_user extends CI_Model{
	public function tampil_data(){
		return $this->db->get('user');
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	// public function insertpenumpangpes($data)
	// {
	// 	return $this->db->insert('penumpangpesawat', $data);
	// }

	// public function insertpemesanpes($data)
	// {
	// 	return $this->db->insert('pemesananpesawat', $data);
	// }

	public function gettiketpes()
	{
		return $this->db->get('pemesananpesawat');
	}

	public function getpembayaranpes()
	{
		return $this->db->get('pembayaranpesawat');
	}

	public function getnopembayaranpes($kode)
	{
		$this->db->where('nopembayaran', $kode);
		return $this->db->get('pembayaranpesawat');
	}

	public function cekkonfirmasi($nomortiket)
	{
		$this->db->where('nomortiket', $nomortiket);
		return $this->db->get('penumpangpesawat');
	}

	public function insertbukti($name, $no)
	{
		$data = array(
			'bukti' => $name,
			'status' => 1
		);
		$this->db->where('nopembayaran', $no);
		return $this->db->update('pembayaranpesawat', $data);
	}
	// public function insertpenumpangker($data)
	// {
	// 	return $this->db->insert('penumpangkereta', $data);
	// }

	// public function insertpemesanker($data)
	// {
	// 	return $this->db->insert('pemesanankereta', $data);
	// }

	public function gettiketker()
	{
		return $this->db->get('pemesanankereta');
	}

	public function getpembayaranker()
	{
		return $this->db->get('pembayarankereta');
	}

	public function getnopembayaranker($kode)
	{
		$this->db->where('nopembayaran', $kode);
		return $this->db->get('pembayarankereta');
	}

	public function cekkonfirmasiker($nomortiket)
	{
		$this->db->where('nomortiket', $nomortiket);
		return $this->db->get('penumpangkereta');
	}

	public function insertbuktiker($name, $no)
	{
		$data = array(
			'bukti' => $name,
			'status' => 1
		);
		$this->db->where('nopembayaran', $no);
		return $this->db->update('pembayarankereta', $data);
	}

	 function get_print_pesawat($no_tiket)
    {
        $this->db->from('pemesananpesawat');
        $this->db->select('*');
        $this->db->where('pemesananpesawat.nomortiket', $no_tiket);
        $this->db->join('rutepesawat', 'rutepesawat.idrutepesawat = pemesananpesawat.idrutepesawat'); 
        return $this->db->get('');
    }

     function get_print_kereta($no_tiket)
    {
        $this->db->from('pemesanankereta');
        $this->db->select('*');
        $this->db->where('pemesanankereta.nomortiket', $no_tiket);
        $this->db->join('rutekereta', 'rutekereta.idrutekereta = pemesanankereta.idrutekereta'); 
        return $this->db->get('');
    }

    function get_penumpang($nomor){
        $this->db->where('nomortiket',$nomor);
        return $this->db->get('penumpangpesawat');
    }
}