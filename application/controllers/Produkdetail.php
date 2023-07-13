<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produkdetail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mproduk');
	}

	public function index()
	{
		$this->load->view('menu');
		$this->load->view('viewprodukdetail');
	}

	public function detail($id)
	{
		// echo $id;
		$data['detail'] = $this->Mproduk->getdetail($id);
		$this->load->view('menu');
		$this->load->view('viewprodukdetail',$data);
	}

	public function orderproduk()
	{
		// echo $this->session->userdata('username');
		if ($this->session->userdata('username') == '') {
			$this->session->set_flashdata('msg','Silakan Login terlebih dahulu untuk melanjutkan pesanan.');
			redirect('Login');
		}else{

			$config['upload_path']         = 'images/';  // folder upload
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 33000;
            $config['max_width']            = 13024;
            $config['max_height']           = 7638;

            $this->load->library('upload', $config);

            	$this->upload->do_upload('gambar');
            	$id = $this->input->post('id');
            	$jenisproduk = $this->input->post('jenisproduk');
            	$namaproduk = $this->input->post('namaproduk');
            	$nama = $this->input->post('nama');
            	$harga = $this->input->post('harga');
            	$metodepembayaran = $this->input->post('metodepembayaran');
            	$cicilan = $this->input->post('cicilan');
            	$statuspesanan = "Belum di Proses";
            	$tanggalpesan = date("Y-m-d");
            	$gambar = $this->input->post('gambar');

                $this->Mproduk->insertorderan(array(
			        'id' => $id,
			        'jenisproduk' => $jenisproduk,
			        'namaproduk' => $namaproduk,
			        'nama' => $nama,
			        'harga' => $harga,
			        'metodepembayaran' => $metodepembayaran,
			        'cicilan' => $cicilan,
			        'statuspesanan' => $statuspesanan,
			        'tanggalpesan' => $tanggalpesan,
			        'gambar' => $gambar
				));
				
				// $this->Mproduk->bagicicilan($id,$cicilan);
				// echo "<script>alert('Order berhasil');</script>";
				redirect('Home/pesanan');
		}
	}

}

/* End of file Produkdetail.php */
/* Location: ./application/controllers/Produkdetail.php */
