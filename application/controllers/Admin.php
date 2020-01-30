<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// __construct slalu dijalankan setiap auth.php dipanggil
	public function __construct(){
		parent::__construct();		
		$this->load->model('m_petugas');
		$this->load->model('m_rutekereta');
		$this->load->model('m_rutepesawat');
		$this->load->model('m_user');
		$this->load->model('m_pembayaranpes');
		$this->load->model('m_pembayaranker');
 	 	$this->load->helper('url');
	}

	public function entri()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->result();
		$data['datapetugas'] = $this->m_petugas->tampil_data();
		$data['datarutekereta'] = $this->m_rutekereta->tampil_data()->result();
		$data['datarutepesawat'] = $this->m_rutepesawat->tampil_data()->result();
		$data['datauser'] = $this->m_user->tampil_data()->result();
		
		$this->load->view('admin/entri', $data);
	}

	public function datapetugas()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->result();
		$data['datapetugas'] = $this->m_petugas->tampil_data();
		
		$this->load->view('admin/datapetugas', $data);
	}

	public function tambahpetugas()
	{
		$username = htmlspecialchars($this->input->post('username', true));
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$namapetugas = htmlspecialchars($this->input->post('namapetugas', true));
		$level = htmlspecialchars($this->input->post('level', true));
 
		$data = array(
			'username' => $username,
			'password' => $password,
			'namapetugas' => $namapetugas,
			'idlevel' => $level
			);
		$this->m_petugas->input_data($data,'petugas');
		redirect('admin/datapetugas');
	}

	public function hapuspetugas($idpetugas){
		$where = array('idpetugas' => $idpetugas);
		$this->m_petugas->hapus_data($where,'petugas');
		redirect('admin/datapetugas');
	}

	public function editpe($idpetugas){
		$where = array('idpetugas' => $idpetugas);
		$data['petugas'] = $this->m_petugas->edit_data($where,'petugas')->result();
		$this->load->view('admin/datapetugas',$data);
	}

	public function updatepetugas(){
		$idpetugas = htmlspecialchars($this->input->post('idpetugas', true));
		$username = htmlspecialchars($this->input->post('username', true));
		$namapetugas = htmlspecialchars($this->input->post('namapetugas', true));
	 
		$data = array(
			'username' => $username,
			'namapetugas' => $namapetugas
		);
	 
		$where = array(
			'idpetugas' => $idpetugas
		);
	 
		$this->m_petugas->update_data($where,$data,'petugas');
		redirect('admin/datapetugas');
	}

	public function datarutekereta()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->result();
		$data['datarutekereta'] = $this->m_rutekereta->tampil_data()->result();
		
		$this->load->view('admin/datarutekereta', $data);
	}

	public function tambahkereta()
	{
		$ruteawal = htmlspecialchars($this->input->post('ruteawal', true));
		$ruteakhir = htmlspecialchars($this->input->post('ruteakhir', true));
		$jamberangkat = htmlspecialchars($this->input->post('jamberangkat', true));
		$jamtiba = htmlspecialchars($this->input->post('jamtiba', true));
		$kereta = htmlspecialchars($this->input->post('kereta', true));
		$harga = htmlspecialchars($this->input->post('harga', true));
 
		$data = array(
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'kereta' => $kereta,
			'harga' => $harga
			);
		$this->m_rutekereta->input_data($data,'rutekereta');
		redirect('admin/datarutekereta');
	}

	public function hapuskereta($idrutekereta){
		$where = array('idrutekereta' => $idrutekereta);
		$this->m_rutekereta->hapus_data($where,'rutekereta');
		redirect('admin/datarutekereta');
	}

	public function edit($idrutekereta){
		$where = array('idrutekereta' => $idrutekereta);
		$data['rutekereta'] = $this->m_rutekereta->edit_data($where,'rutekereta')->result();
		$this->load->view('admin/datarutekereta',$data);
	}

	public function updatekereta(){
		$idrutekereta = $this->input->post('idrutekereta');
		$ruteawal = $this->input->post('ruteawal');
		$ruteakhir = $this->input->post('ruteakhir');
		$jamberangkat = $this->input->post('jamberangkat');
		$jamtiba = $this->input->post('jamtiba');
		$kereta = $this->input->post('kereta');
		$harga = $this->input->post('harga');
	 
		$data = array(
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'kereta' => $kereta,
			'harga' => $harga
		);
	 
		$where = array(
			'idrutekereta' => $idrutekereta
		);
	 
		$this->m_rutekereta->update_data($where,$data,'rutekereta');
		redirect('admin/datarutekereta');
	}

	public function datarutepesawat()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->result();
		$data['datarutepesawat'] = $this->m_rutepesawat->tampil_data()->result();
		
		$this->load->view('admin/datarutepesawat', $data);
	}

	public function tambahpesawat()
	{
		$ruteawal = htmlspecialchars($this->input->post('ruteawal', true));
		$ruteakhir = htmlspecialchars($this->input->post('ruteakhir', true));
		$jamberangkat = htmlspecialchars($this->input->post('jamberangkat', true));
		$jamtiba = htmlspecialchars($this->input->post('jamtiba', true));
		$maskapai = htmlspecialchars($this->input->post('maskapai', true));
		$harga = htmlspecialchars($this->input->post('harga', true));
 
		$data = array(
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'maskapai' => $maskapai,
			'harga' => $harga
			);
		$this->m_rutekereta->input_data($data,'rutepesawat');
		redirect('admin/datarutepesawat');
	}

	public function hapuspesawat($idrutepesawat){
		$where = array('idrutepesawat' => $idrutepesawat);
		$this->m_rutepesawat->hapus_data($where,'rutepesawat');
		redirect('admin/datarutepesawat');
	}

	public function updatepesawat(){
		$idrutepesawat = $this->input->post('idrutepesawat');
		$ruteawal = $this->input->post('ruteawal');
		$ruteakhir = $this->input->post('ruteakhir');
		$jamberangkat = $this->input->post('jamberangkat');
		$jamtiba = $this->input->post('jamtiba');
		$maskapai = $this->input->post('maskapai');
		$harga = $this->input->post('harga');
	 
		$data = array(
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
			'jamberangkat' => $jamberangkat,
			'jamtiba' => $jamtiba,
			'maskapai' => $maskapai,
			'harga' => $harga
		);
	 
		$where = array(
			'idrutepesawat' => $idrutepesawat
		);
	 
		$this->m_rutepesawat->update_data($where,$data,'rutepesawat');
		redirect('admin/datarutepesawat');
	}

	public function datauser()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->result();
		$data['datauser'] = $this->m_user->tampil_data()->result();
		
		$this->load->view('admin/datauser', $data);
	}

	public function tambahuser()
	{
		$namauser = htmlspecialchars($this->input->post('namauser', true));
		$username = htmlspecialchars($this->input->post('username', true));
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$alamat = htmlspecialchars($this->input->post('alamat', true));
		$tanggallahir = htmlspecialchars($this->input->post('tanggallahir', true));
		$jk = htmlspecialchars($this->input->post('jk', true));
		$telp = htmlspecialchars($this->input->post('telp', true));
 
		$data = array(
			'namauser' => $namauser,
			'username' => $username,
			'password' => $password,
			'alamat' => $alamat,
			'tanggallahir' => $tanggallahir,
			'jk' => $jk,
			'telp' => $telp
			);
		$this->m_user->input_data($data,'user');
		redirect('admin/datauser');
	}

	public function hapususer($iduser){
		$where = array('iduser' => $iduser);
		$this->m_user->hapus_data($where,'user');
		redirect('admin/datauser');
	}

	public function updateuser(){
		$iduser = $this->input->post('iduser');
		$namauser = $this->input->post('namauser');
		$username = $this->input->post('username');
		$alamat = $this->input->post('alamat');
		$tanggallahir = $this->input->post('tanggallahir');
		$telp = $this->input->post('telp');
	 
		$data = array(
			'namauser' => $namauser,
			'username' => $username,
			'alamat' => $alamat,
			'tanggallahir' => $tanggallahir,
			'telp' => $telp
		);
	 
		$where = array(
			'iduser' => $iduser
		);
	 
		$this->m_user->update_data($where,$data,'user');
		redirect('admin/datauser');
	}

	public function pembayaranpes()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->result();
		$data['pembayaranpes'] = $this->m_pembayaranpes->tampil_data()->result();
		
		$this->load->view('admin/pembayaranpes', $data);
	}

	public function verifikasipembayaranpes($id)
	{
		$update = $this->m_pembayaranpes->updatepembayaran($id);

		if ($update) {
			redirect('admin/pembayaranpes');
		}else {
			echo "gagal";
		}
		
	}

	public function pembayaranker()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->result();
		$data['pembayaranker'] = $this->m_pembayaranker->tampil_data()->result();
		
		$this->load->view('admin/pembayaranker', $data);
	}

	public function verifikasipembayaranker($id)
	{
		$update = $this->m_pembayaranker->updatepembayaran($id);

		if ($update) {
			redirect('admin/pembayaranker');
		}else {
			echo "gagal";
		}
		
	}

	public function report()
	{
		$data['petugas'] = $this->db->get_where('petugas', ['username' => $this->session->userdata('username')])->row_array();
		
		
		$this->load->view('admin/report', $data);
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('idlevel');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('multiuser/index');
	}	

}