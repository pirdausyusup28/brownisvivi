<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mproduk');
	}

	public function index()
	{
		// $data['produk'] = $this->Mproduk->getproduk();
        $this->load->view('menu');
		$this->load->view('viewhome',$data);
	}

	public function order()
	{
		$data['produk'] = $this->Mproduk->getprodukorder();
        $this->load->view('menu');
		$this->load->view('viewhome',$data);
	}

	public function preorder()
	{
		$data['produk'] = $this->Mproduk->getprodukpreorder();
        $this->load->view('menu');
		$this->load->view('viewhome',$data);
	}

	public function pesanan()
	{
		$nama = $this->session->userdata('username');
		$data['pesanan'] = $this->Mproduk->getpesanan($nama);
        $this->load->view('menu');
		$this->load->view('viewpesanan',$data);
	}

	public function cicilan($id)
	{
		// echo $id;
		// die();
		$data['cicilan'] = $this->Mproduk->getcicilan($id);
		// var_dump($data['cicilan']);
		// die();
		$data['tenor'] = $this->Mproduk->gettenor($id);
        $this->load->view('menu');
		$this->load->view('viewcicilan',$data);
	}

	public function informasicicilan($id){
		$data["cicilan"] = $this->Mproduk->getcicilanpertama($id);
		$this->load->view('menu');
		$this->load->view('informasicicilan',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
