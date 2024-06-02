<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mcustomer');
	}

	public function index()
	{
		$data['produk'] = $this->Mcustomer->getproduk();
		$this->load->view('menu');
		$this->load->view('viewhome', $data);
		$this->load->view('footer');
	}

	public function cekpesanan()
	{
		$this->load->view('menu');
		$this->load->view('viewcekpesanan');
		$this->load->view('footer');
	}

	public function cekdatapesanan()
	{
		$kodepesanan = $this->input->post('kodepesanan');
		$data = $this->Mcustomer->cekdatapesanan($kodepesanan);
		if ($data) {
			$response = array(
				'status' => 'success',
				'message' => 'Request processed successfully',
				'data' => $data
			);
		} else {
			$response = array(
				'status' => 'error',
				'message' => 'Failed to process the request'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}

	public function konfirmasipesanan($id)
	{
		$data = $this->Mcustomer->konfirmasipesanan($id);
		echo "<script>alert('Terima kasih Atas Pesanannya');</script>";
		redirect('customer', 'refresh');
	}

	public function menu()
	{
		$data['produk'] = $this->Mcustomer->getproduk();
		$this->load->view('menu');
		$this->load->view('viewmenu', $data);
		$this->load->view('footer');
	}

	public function tentang()
	{
		$data['produk'] = $this->Mcustomer->getproduk();
		$this->load->view('menu');
		$this->load->view('viewtentang', $data);
		$this->load->view('footer');
	}

	public function kontakperson()
	{
		$data['produk'] = $this->Mcustomer->getproduk();
		$this->load->view('menu');
		$this->load->view('viewkontakperson', $data);
		$this->load->view('footer');
	}

	public function Order($id = '')
	{
		$data['produk'] = $this->Mcustomer->getpostingid($id);
		$this->load->view('menu');
		$this->load->view('vieworderproduk', $data);
		$this->load->view('footer');
	}

	public function tambahorder()
	{
		$data = [
			'1' => $this->input->post('id'),
			'2' => $this->input->post('namacustomer'),
			'3' => $this->input->post('nohp'),
			'4' => $this->input->post('pesancs'),
			'5' => $this->input->post('alamat'),
			'6' => $this->input->post('harga'),
			'7' => date('Y-m-d'),
			'8' => $this->input->post('pembayaran'),
			'9' => 'Belum di Konfirmasi',
		];

		$this->db->set('idpostingproduk', $data['1']);
		$this->db->set('namacustomer', $data['2']);
		$this->db->set('nohp', $data['3']);
		$this->db->set('pesancs', $data['4']);
		$this->db->set('alamat', $data['5']);
		$this->db->set('harga', $data['6']);
		$this->db->set('tanggalpesan', $data['7']);
		$this->db->set('pembayaran', $data['8']);
		$this->db->set('statuspesanan', $data['9']);

		$this->db->insert('tblpesanan');

		$this->session->set_userdata('namacustomer', $data['2']);
		$this->session->set_userdata('nohp', $data['3']);
		$this->session->set_userdata('pesancs', $data['4']);
		$this->session->set_userdata('alamat', $data['5']);
		$this->session->set_userdata('tanggalpesan', $data['7']);

		redirect("customer/pembayaran/" . $data['1']);
	}

	public function pembayaran($idposting)
	{
		$namacustomer = $this->session->userdata('namacustomer');
		$nohp = $this->session->userdata('nohp');
		$alamat = $this->session->userdata('alamat');
		$tanggalpesan = $this->session->userdata('tanggalpesan');
		$produk = $this->Mcustomer->getpostingid($idposting);
		$nopesanan = $this->Mcustomer->getnopesanan($getnopesanan);

		$harga = number_format($harga);

		$this->load->view('menu');
		$this->load->view('viewpembayaran', array('nopesanan' => $nopesanan ,'produk' => $produk,'harga' => $harga, 'namacustomer' => $namacustomer, 'nohp' => $nohp, 'alamat' => $alamat, 'tanggalpesan' => $tanggalpesan));

		$this->session->unset_userdata('namacustomer');
		$this->session->unset_userdata('nohp');
		$this->session->unset_userdata('alamat');
		$this->session->unset_userdata('tanggalpesan');


	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */