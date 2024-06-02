<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index()
	{
		$data['judul'] = "DASHBOARD";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer');
	}

	public function jenisproduk()
	{
		$data['judul'] = "JENIS PRODUK";
		$data['data'] = $this->Madmin->getjenisproduk();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/jenisproduk',$data);
		$this->load->view('admin/footer');
	}

	public function simpanjenisproduk() {
		$data = array(
			'jenis_produk' => $this->input->post('jenis_produk'),
		);

		$r = $this->Madmin->simpanjenisproduk($data);
		if ($r ==true) {
			$this->session->set_flashdata('success_msg', 'Simpan data berhasil');
		}else{
			$this->session->set_flashdata('error_msg', 'Data gagal disimpan');
		}
		redirect('jenis-produk');
    }
	public function updatejenisproduk() {
		$data = array(
			'id_jenis_produk' => $this->input->post('id_jenis_produk'),
			'jenis_produk' => $this->input->post('jenis_produk'),
		);

		$r = $this->Madmin->updatejenisproduk($data);
		if ($r ==true) {
			$this->session->set_flashdata('success_msg', 'update data berhasil');
		}else{
			$this->session->set_flashdata('error_msg', 'Data gagal diupdate');
		}
		redirect('jenis-produk');
    }
	public function deletejenisproduk($id)
	{
		$r = $this->Madmin->deletejenisproduk($id);		
		if ($r ==true) {
			$this->session->set_flashdata('success_msg', 'hapus data berhasil');
		}else{
			$this->session->set_flashdata('error_msg', 'Data gagal dihapus');
		}
		redirect('jenis-produk');
	}

	public function user()
	{
		$data['judul'] = "DATA USER";
		$data['data'] = $this->Madmin->getuser();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/user',$data);
		$this->load->view('admin/footer');
	}
	public function simpanuser() {
		$data = array(
			'nama_user' => $this->input->post('nama_user'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => '1',
		);

		$r = $this->Madmin->simpanuser($data);
		if ($r ==true) {
			$this->session->set_flashdata('success_msg', 'Simpan data berhasil');
		}else{
			$this->session->set_flashdata('error_msg', 'Data gagal disimpan');
		}
		redirect('user');
    }
	public function updateuser() {
		$data = array(
			'A' => $this->input->post('id_user'),
			'B' => $this->input->post('nama_user'),
			'C' => $this->input->post('username'),
			'D' => md5($this->input->post('password')),
			'E' => '1',
		);

		$r = $this->Madmin->updateuser($data);
		if ($r ==true) {
			$this->session->set_flashdata('success_msg', 'update data berhasil');
		}else{
			$this->session->set_flashdata('error_msg', 'Data gagal diupdate');
		}
		redirect('user');
    }
	public function deleteuser($id)
	{
		$r = $this->Madmin->deleteuser($id);		
		if ($r ==true) {
			$this->session->set_flashdata('success_msg', 'hapus data berhasil');
		}else{
			$this->session->set_flashdata('error_msg', 'Data gagal dihapus');
		}
		redirect('user');
	}

	public function customer()
	{
		$data['judul'] = "DATA CUSTOMER";
		$data['data'] = $this->Madmin->getcustomer();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/customer',$data);
		$this->load->view('admin/footer');
	}

	public function produk()
	{
		$data['judul'] = "PRODUK";
		$data['data'] = $this->Madmin->getproduk();
		$data['jp'] = $this->Madmin->getjenisproduk();

		$this->load->view('admin/header',$data);
		$this->load->view('admin/produk',$data);
		$this->load->view('admin/footer');
	}

	public function simpanproduk() {
		$data = array(
			'id_jenis_produk' => $this->input->post('id_jenis_produk'),
			'nama_produk' => $this->input->post('nama_produk'),
			'deskripsi' => $this->input->post('deskripsi'),
		);

		$r = $this->Madmin->simpanproduk($data);
		if ($r ==true) {
			$this->session->set_flashdata('success_msg', 'Simpan data berhasil');
		}else{
			$this->session->set_flashdata('error_msg', 'Data gagal disimpan');
		}
		redirect('produk');
    }
	public function updateproduk() {
		$data = array(
			'id_produk' => $this->input->post('id_produk'),
			'id_jenis_produk' => $this->input->post('id_jenis_produk'),
			'nama_produk' => $this->input->post('nama_produk'),
			'deskripsi' => $this->input->post('deskripsi'),
		);

		$r = $this->Madmin->updateproduk($data);
		if ($r ==true) {
			$this->session->set_flashdata('success_msg', 'update data berhasil');
		}else{
			$this->session->set_flashdata('error_msg', 'Data gagal diupdate');
		}
		redirect('jenis-produk');
    }
	public function deleteproduk($id)
	{
		$r = $this->Madmin->deleteproduk($id);		
		if ($r ==true) {
			$this->session->set_flashdata('success_msg', 'hapus data berhasil');
		}else{
			$this->session->set_flashdata('error_msg', 'Data gagal dihapus');
		}
		redirect('jenis-produk');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
