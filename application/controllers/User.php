<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	public function __construct()
    {
	    parent:: __construct();
	    $this->load->model('mflight');
	    $this->load->model('mtrain');
	    $this->load->model('m_user');
	    $this->load->model('mdiskonpes');
    }

	public function flights()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['ruteawal'] = $this->mflight->getruteawal();
		$data['ruteakhir'] = $this->mflight->getruteakhir();
		

		$this->load->view('user/flights', $data);
	}

	public function listflight()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$ruteawal = $this->input->get('ruteawal');
		$ruteakhir = $this->input->get('ruteakhir');
		$getruteawal = $this->mflight->getruteawal();
		$getruteakhir = $this->mflight->getruteakhir();
		$rute = [
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
		];
		$data['rutepesawat'] = $this->mflight->searchrute($rute);

		$this->load->view('user/listflight', $data);
	}

	public function penflight($idrutepesawat)
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['info'] = $this->mflight->getrutepesawat($idrutepesawat)->row();
		$data['idrutepesawat'] = $idrutepesawat;
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$kodediskon = $this->input->get('kodediskon');
		$getkodediskon = $this->mdiskonpes->getkodediskon();
		$diskon = [
			'kodediskon' => $kodediskon
		];
		$data['diskonpesawat'] = $this->mdiskonpes->searchdiskon($diskon);

		$this->load->view('user/penflight', $data);
	}


	public function pesanpesawat()
	{
		$penumpang = $this->input->post('penumpang');

		// generate nomor pembayaran
		$cek = $this->m_user->getpembayaranpes()->num_rows()+1;
		$nopembayaran = 'PES022020'.$penumpang.$cek;
		$harga = $this->input->post('harga');
		$totalpembayaran = $penumpang*$harga;

		// generate nomor pesanan
		$cek = $this->m_user->gettiketpes()->num_rows()+1;
		$notiket = 'PS00'.$cek;

		// input pembayaran pesawat
		$data = array(
			'nopembayaran' => $nopembayaran,
			'nomortiket' => $notiket,
			'totalharga' => $totalpembayaran,
			'status' => 0
		);

		$this->db->insert('pembayaranpesawat', $data);

		// input data penumpang
		for ($i=1; $i <=$penumpang ; $i++) { 
			$data = array(
				'nomortiket' => $notiket,
				'noidentitas' => $this->input->post('noidentitas'.$i),
				'namapenumpang' => $this->input->post('namapenumpang'.$i),
				'kursi' => $this->input->post('kursi'.$i)
			);

			$this->db->insert('penumpangpesawat', $data);
		}

		// input data pemesan
		$data = array(
			'nomortiket' => $notiket,
			'idrutepesawat' => $this->input->post('idrutepesawat'),
			'namapemesan' => $this->input->post('namapemesan'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat')
		);

		$this->db->insert('pemesananpesawat', $data);

		$this->session->set_flashdata('nomorpembayaran', $nopembayaran);
		$this->session->set_flashdata('total', $totalpembayaran);
		redirect('user/pembayaranpes', $totalpembayaran);
	}

	public function pembayaranpes()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('user/pembayaranpes', $data);
	}

	public function pagekonfirmasipes()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('user/home_konfirmasi_pes', $data);
	}

	public function konfirmasipes()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['error'] = '';
		
		if ( isset($_GET['kode']) ) {
			$kode = $_GET['kode'];
			$data['nomortiket'] = $this->m_user->getnopembayaranpes($kode)->row();
			$data['detail'] = $this->m_user->cekkonfirmasi($data['nomortiket']->nomortiket)->result();
		}

		$this->load->view('user/konfirmasipes', $data);
	}

	public function cekpembayaranpes()
	{
		$kode = $this->input->post('kode');
		
		redirect('user/konfirmasipes?kode='.$kode);
	}

	public function kirimkonfirmasipes()
	{
		$config['upload_path']          = './assets/bukti/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 2048; // 2MB

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar'))
        {
            $error = array('error' => $this->upload->display_errors());
            redirect('user/konfirmasipes', $error);
        }else{
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $no = $this->input->post('nopembayaran');
            $this->m_user->insertbukti($filename, $no);

            $this->session->set_flashdata('pesan', 'Bukti pembayaran anda akan terkonfirmasi maksimal 12 jam kemudian.');
            redirect('user/pagekonfirmasipes');
        }
	}

	public function trains()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['ruteawal'] = $this->mtrain->getruteawal();
		$data['ruteakhir'] = $this->mtrain->getruteakhir();
		

		$this->load->view('user/trains', $data);
	}

	public function listtrain()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$ruteawal = $this->input->get('ruteawal');
		$ruteakhir = $this->input->get('ruteakhir');
		$getruteawal = $this->mtrain->getruteawal();
		$getruteakhir = $this->mtrain->getruteakhir();
		$rute = [
			'ruteawal' => $ruteawal,
			'ruteakhir' => $ruteakhir,
		];
		$data['rutekereta'] = $this->mtrain->searchrute($rute);

		$this->load->view('user/listtrain', $data);
	}

	public function pentrain($idrutekereta)
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['info'] = $this->mtrain->getrutekereta($idrutekereta)->row();		
		$data['idrutekereta'] = $idrutekereta;

		$this->load->view('user/pentrain', $data);
	}

	public function pesankereta()
	{
		$penumpang = $this->input->post('penumpang');

		// generate nomor pembayaran
		$cek = $this->m_user->getpembayaranker()->num_rows()+1;
		$nopembayaran = 'KER022020'.$penumpang.$cek;
		$harga = $this->input->post('harga');
		$totalpembayaran = $penumpang*$harga;

		// generate nomor pesanan
		$cek = $this->m_user->gettiketker()->num_rows()+1;
		$notiket = 'KR00'.$cek;

		// input pembayaran kereta
		$data = array(
			'nopembayaran' => $nopembayaran,
			'nomortiket' => $notiket,
			'totalharga' => $totalpembayaran,
			'status' => 0
		);

		$this->db->insert('pembayarankereta', $data);

		// input data penumpang
		for ($i=1; $i <=$penumpang ; $i++) { 
			$data = array(
				'nomortiket' => $notiket,
				'noidentitas' => $this->input->post('noidentitas'.$i),
				'namapenumpang' => $this->input->post('namapenumpang'.$i),
				'gerbong' => $this->input->post('gerbong'.$i),
				'kursi' => $this->input->post('kursi'.$i)
			);

			$this->db->insert('penumpangkereta', $data);
		}

		// input data pemesan
		$data = array(
			'nomortiket' => $notiket,
			'idrutekereta' => $this->input->post('idrutekereta'),
			'namapemesan' => $this->input->post('namapemesan'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat')
		);

		$this->db->insert('pemesanankereta', $data);

		$this->session->set_flashdata('nomorpembayaran', $nopembayaran);
		$this->session->set_flashdata('total', $totalpembayaran);
		redirect('user/pembayaranker', $totalpembayaran);
	}

	public function pembayaranker()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('user/pembayaranker', $data);
	}

	public function pagekonfirmasiker()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		
		$this->load->view('user/home_konfirmasi_ker', $data);
	}

	public function konfirmasiker()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['error'] = '';
		
		if ( isset($_GET['kode']) ) {
			$kode = $_GET['kode'];
			$data['nomortiket'] = $this->m_user->getnopembayaranker($kode)->row();
			$data['detail'] = $this->m_user->cekkonfirmasiker($data['nomortiket']->nomortiket)->result();
		}

		$this->load->view('user/konfirmasiker', $data);
	}

	public function cekpembayaranker()
	{
		$kode = $this->input->post('kode');
		
		redirect('user/konfirmasiker?kode='.$kode);
	}

	public function kirimkonfirmasiker()
	{
		$config['upload_path']          = './assets/buktiker/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 2048; // 2MB

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('gambar'))
        {
            $error = array('error' => $this->upload->display_errors());
            redirect('user/konfirmasiker', $error);
        }else{
            $data = $this->upload->data();
            $filename = $data['file_name'];
            $no = $this->input->post('nopembayaran');
            $this->m_user->insertbuktiker($filename, $no);

            $this->session->set_flashdata('pesan', 'Bukti pembayaran anda akan terkonfirmasi maksimal 12 jam kemudian.');
            redirect('user/pagekonfirmasiker');
        }
	}

	 public function print_pesawat()
    {
        $no_tiket = $this->input->post('no_tiket');

        $data['detail'] = $this->m_user->get_print_pesawat($no_tiket)->row();
        $data['jml_penumpang'] = $this->m_user->get_penumpang($no_tiket)->num_rows();
        // $data['info'] = $this->m_user_pesawat->get_penumpang($kd_order)->result();

        $this->load->view('user/print_pesawat',$data);
        // $this->load->view('templates/footer');
    }

    public function print_kereta()
    {
        $no_tiket = $this->input->post('no_tiket');

        $data['detail'] = $this->m_user->get_print_kereta($no_tiket)->row();
        $data['jml_penumpang'] = $this->m_user->get_penumpang($no_tiket)->num_rows();
        // $data['info'] = $this->m_user_pesawat->get_penumpang($kd_order)->result();

        $this->load->view('user/print_kereta',$data);
        // $this->load->view('templates/footer');
    }

}