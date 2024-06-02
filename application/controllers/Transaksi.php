<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mtransaksi');
	}

	public function index()
	{
		$data['judulmenu']		= "Data Transaksi";
		$data['namamenu']		= "Form Data Transaksi";
		$data['list']			= $this->Mtransaksi->getdata();
		$this->load->view('template/header',$data);
		$this->load->view('viewtransaksi',$data);
		$this->load->view('template/footer');
	}

	public function formtransaksi()
	{
		$data['judulmenu']		= "Data Transaksi";
		$data['namamenu']		= "Form Data Transaksi";
		$data['tb']			= $this->Mtransaksi->getjadwallapangan();
		$this->load->view('template/header',$data);
		$this->load->view('viewformtransaksi',$data);
		$this->load->view('template/footer');
	}

	public function upload(){
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 33000;
            $config['max_width']            = 13024;
            $config['max_height']           = 7638;
 
            $this->load->library('upload', $config);
 
            // if ( ! $this->upload->do_upload('buktipembayaran')) //sesuai dengan name pada form 
            // {
            //        echo 'anda gagal upload';
            // }
            // else
            // {
            	//tampung data dari form
            	$this->upload->do_upload('buktipembayaran');
            	$namalapangan = $this->input->post('namalapangan');
            	$namauser = $this->input->post('namauser');
            	$tanggal = $this->input->post('tanggal');
            	$statusbooking = $this->input->post('statusbooking');
            	$jam = $this->input->post('jam');
            	$statuspembayaran = $this->input->post('statuspembayaran');
            	$file = $this->upload->data();
            	$buktipembayaran = $file['file_name'];
 
                $this->Mtransaksi->insert(array(
			        'namalapangan' => $namalapangan,
			        'namauser' => $namauser,
			        'tanggal' => $tanggal,
			        'statusbooking' => $statusbooking,
			        'jam' => $jam,
			        'statuspembayaran' => $statuspembayaran,
			        'buktipembayaran' => $buktipembayaran
				));
				$this->session->set_flashdata('msg','data berhasil di simpan');
				redirect('Transaksi');
 
            // }
		}

		function uploadedit(){
			// var_dump($idtransaksi);
			$config['upload_path']         = 'images/';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 33000;
            $config['max_width']            = 13024;
            $config['max_height']           = 7638;
 
            $this->load->library('upload', $config);
 
            // if ( ! $this->upload->do_upload('buktipembayaran')) //sesuai dengan name pada form 
            // {
            //        echo 'anda gagal upload';
            // }
            // else
            // {
            	//tampung data dari form
            	$this->upload->do_upload('buktipembayaran');
            	$namalapangan = $this->input->post('namalapangan');
            	$namauser = $this->input->post('namauser');
            	$tanggal = $this->input->post('tanggal');
            	$statusbooking = $this->input->post('statusbooking');
            	$jam = $this->input->post('jam');
            	$statuspembayaran = $this->input->post('statuspembayaran');
            	$file = $this->upload->data();
            	$buktipembayaran = $file['file_name'];
 
                $this->Mtransaksi->update(array(
			        'namalapangan' => $namalapangan,
			        'namauser' => $namauser,
			        'tanggal' => $tanggal,
			        'statusbooking' => $statusbooking,
			        'jam' => $jam,
			        'statuspembayaran' => $statuspembayaran,
			        'buktipembayaran' => $buktipembayaran
				));
				$this->session->set_flashdata('msg','data berhasil di Update');
				redirect('Transaksi');
 
            // }
		}

	public function get_jam($tanggal='')
	{
		// $tanggal = $this->input->post('tanggal');
		$this->db->select('jam');
		$this->db->where('tanggal', $tanggal);
		$this->db->where('status', 'Ready');
		$q = $this->db->get('tbllapangan')->result();

		$this->output->set_content_type('application/json')->set_output(json_encode($q));
	}

	public function edit($id='')
	{
		$data['judulmenu']		= "Data Transaksi";
		$data['namamenu']		= "Form Data Transaksi";
		$data['tb']			= $this->Mtransaksi->getjadwallapangan();
		$data['listedit']			= $this->Mtransaksi->getdataedit($id);
		$this->load->view('template/header',$data);
		$this->load->view('viewedittransaksi',$data);
		$this->load->view('template/footer');
	}

	// public function savedata()
	// {
	// 	if($this->input->post('type')==1)
	// 	{
	// 		$namalapangan	=	$this->input->post('namalapangan');
	// 		$tanggal	=	$this->input->post('tanggal');
	// 		$jam	=	$this->input->post('jam');
	// 		$status	=	$this->input->post('status');
	// 		$this->Mtransaksi->saverecords($namalapangan,$tanggal,$jam,$status);	
	// 		echo json_encode(array(
	// 			"statusCode"=>200
	// 		));
	// 	} 
	// }

	// public function updatedata()
	// {
	// 	if($this->input->post('type')==1)
	// 	{
	// 		$idlapangan	=	$this->input->post('idlapangan');
	// 		$namalapangan	=	$this->input->post('namalapangan');
	// 		$tanggal	=	$this->input->post('tanggal');
	// 		$jam	=	$this->input->post('jam');
	// 		$status	=	$this->input->post('status');
	// 		$this->Mtransaksi->updaterecords($idlapangan,$namalapangan,$tanggal,$jam,$status);	
	// 		echo json_encode(array(
	// 			"statusCode"=>200
	// 		));
	// 	} 
	// }

	// public function hapus($id='')
	// {
	// 	// $idlapangan	=	$this->input->post('idlapangan');
	// 	$this->Mtransaksi->deleterecords($id);	
	// 	echo "<script>alert('Berhasil Dihapus')</script>";
	// 	redirect('Transaksi','refresh');
			
	// }

	// public function edit($id='')
	// {
	// 	$data['judulmenu']			= "Data Barang";
	// 	$data['namamenu']			= "Form Data Barang";
	// 	$data['list']				= $this->Mtransaksi->getdata();
	// 	$data['listedit']			= $this->Mtransaksi->getdataedit($id);
	// 	$this->load->view('template/header',$data);
	// 	$this->load->view('viewTransaksi',$data);
	// 	$this->load->view('template/footer');
	// }


}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */