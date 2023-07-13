<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Muser');
		$this->load->model('Madmin');
	}

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/admin/viewdatapesanan');
		$this->load->view('admin/footer');
	}

	public function dash_home()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/dash_home');
		$this->load->view('admin/footer');
	}

/////////////////////////// USER //////////////////////////////////////////////

	public function datauser()
	{
		$data['user'] = $this->Muser->getdata();
		$this->load->view('admin/header');
		$this->load->view('admin/viewdatauser',$data);
		$this->load->view('admin/footer');
	}

	public function formtambahuser()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/viewtambahuser');
		$this->load->view('admin/footer');
	}

	public function savedatauser()
	{
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['username']=$this->input->post('username');
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$response=$this->Muser->saverecords($data);
			if($response==true){
			        echo "<script>alert('Records Saved Successfully');</script>";
			        redirect('Admin/datauser','refresh');
			}
			else{
					echo "<script>alert('Records Saved Failed');</script>";
			        redirect('Admin/datauser','refresh');
			}
		}
	}

	public function edituser($id)
	{
		$data['user'] = $this->Muser->getdataedit($id);
		$this->load->view('admin/header');
		$this->load->view('admin/viewedituser',$data);
		$this->load->view('admin/footer');
	}

	public function updatedatauser()
	{
		/*Check submit button */
		if($this->input->post('update'))
		{
		    $id = $this->input->post('id');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$response=$this->Muser->updaterecords($id,$username,$email,$password);
			if($response==true){
					echo "<script>alert('Records Update Failed');</script>";
			        redirect('Admin/datauser','refresh');
			}
			else{
			        echo "<script>alert('Records Update Successfully');</script>";
			        redirect('Admin/datauser','refresh');
			}
		}
	}

	public function hapusdatauser($id)
	{
		$response=$this->Muser->deleterecords($id);
		if($response==true){
				echo "<script>alert('Records Delete Failed');</script>";
		        redirect('Admin/datauser','refresh');
		}
		else{
		        echo "<script>alert('Records Delete Successfully');</script>";
		        redirect('Admin/datauser','refresh');
		}
	}

/////////////////////////// BATAS USER //////////////////////////////////////////////

/////////////////////////// REGISTRASI //////////////////////////////////////////////

	public function dataregistrasi()
	{
		$data['regis'] = $this->Madmin->getdataregis();
		$this->load->view('admin/header');
		$this->load->view('admin/viewdataregistrasi',$data);
		$this->load->view('admin/footer');
	}

/////////////////////////// BATAS REGISTRASI //////////////////////////////////////////////

/////////////////////////// KONTAK //////////////////////////////////////////////

	public function datakontak()
	{
		$data['kon'] = $this->Madmin->getdatakontak();
		$this->load->view('admin/header');
		$this->load->view('admin/viewdatakontak',$data);
		$this->load->view('admin/footer');
	}

	public function formtambahkontak()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/viewtambahkontak');
		$this->load->view('admin/footer');
	}

	public function savedatakontak()
	{
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['alamatkantor']=$this->input->post('alamatkantor');
			$data['kontakperson']=$this->input->post('kontakperson');
			$response=$this->Madmin->saverecordskontak($data);
			if($response==true){
			        echo "<script>alert('Records Saved Successfully');</script>";
			        redirect('Admin/datakontak','refresh');
			}
			else{
					echo "<script>alert('Records Saved Failed');</script>";
			        redirect('Admin/datakontak','refresh');
			}
		}
	}
	

	public function editkontak($id)
	{
		$data['kon'] = $this->Madmin->getdataeditkontak($id);
		$this->load->view('admin/header');
		$this->load->view('admin/vieweditkontak',$data);
		$this->load->view('admin/footer');
	}

	public function updatedatakontak()
	{
		/*Check submit button */
		if($this->input->post('update'))
		{
		    $id = $this->input->post('id');
			$alamatkantor = $this->input->post('alamatkantor');
			$kontakperson = $this->input->post('kontakperson');
			$response=$this->Madmin->updaterecordskontak($id,$alamatkantor,$kontakperson);
			if($response==true){
					echo "<script>alert('Records Update Failed');</script>";
			        redirect('Admin/datakontak','refresh');
			}
			else{
			        echo "<script>alert('Records Update Successfully');</script>";
			        redirect('Admin/datakontak','refresh');
			}
		}
	}

	public function hapusdatakontak($id)
	{
		$response=$this->Madmin->deleterecordskontak($id);
		if($response==true){
				echo "<script>alert('Records Delete Failed');</script>";
		        redirect('Admin/datakontak','refresh');
		}
		else{
		        echo "<script>alert('Records Delete Successfully');</script>";
		        redirect('Admin/datakontak','refresh');
		}
	}

/////////////////////////// BATAS KONTAK //////////////////////////////////////////////

public function datastock()
{
	$data['stock'] = $this->Madmin->getdatastock();
	$this->load->view('admin/header');
	$this->load->view('admin/viewdatastock',$data);
	$this->load->view('admin/footer');

}

public function formtambahStock()
{
	$data['produk'] = $this->Madmin->getproduk();
	$this->load->view('admin/header');
	$this->load->view('admin/viewtambahstock',$data);
	$this->load->view('admin/footer');
}

public function editStock($id="")
{
	$data['produk'] = $this->Madmin->getproduk();
	$data['stock'] = $this->Madmin->getstockid($id);
	$this->load->view('admin/header');
	$this->load->view('admin/viewtambahstock',$data);
	$this->load->view('admin/footer');
}

public function savedataStock()
{
	$id = $this->input->post('id');
	$data = [
		'1' 		=> $this->input->post('idproduk'),
		'2' 		=> $this->input->post('stock')
	];

	$this->db->set('idproduk', $data['1']);
	$this->db->set('stock', $data['2']);
	if($id == ''){
		$this->db->insert('tblstock');
	}else{
		$this->db->where('idstock', $id);
		$this->db->update('tblstock');
	}
	redirect("admin/datastock","refresh");
}

public function hapusdataStock($id)
{
	$response=$this->Madmin->hapusstock($id);
	$this->session->set_flashdata('msg','Data Berhasil Dihapus');
	redirect('Admin/datastock','refresh');
}

public function postingproduk()
{
	$data['postingan'] = $this->Madmin->getposting();
	$this->load->view('admin/header');
	$this->load->view('admin/viewposting',$data);
	$this->load->view('admin/footer');
}

public function formtambahposting()
{
	$data['produk'] = $this->Madmin->getproduk();
	$this->load->view('admin/header');
	$this->load->view('admin/viewtambahposting',$data);
	$this->load->view('admin/footer');
}

public function editposting($id="")
{
	$data['produk'] = $this->Madmin->getproduk();
	$data['posting'] = $this->Madmin->getpostingan($id);
	$this->load->view('admin/header');
	$this->load->view('admin/viewtambahposting',$data);
	$this->load->view('admin/footer');
}

function savedataposting(){
	$id = $this->input->post('id');
	$data = [
		'1' 		=> $this->input->post('idproduk'),
		'2' 		=> $this->input->post('deskripsiproduk'),
		'3' 		=> $this->input->post('harga'),
		'4' 		=> $this->input->post('tanggal'),
		'5' 		=> $this->input->post('flag')
	];

	$this->db->set('idproduk', $data['1']);
	$this->db->set('deskripsiproduk', $data['2']);
	$this->db->set('harga', $data['3']);
	$this->db->set('tanggal', $data['4']);
	$this->db->set('flag', $data['5']);
	if($id == ''){
		$this->db->insert('tblposting');
	}else{
		$this->db->where('idposting', $id);
		$this->db->update('tblposting');
	}
	redirect("Admin/postingproduk","refresh");
}

public function hapusposting($id)
{
	$this->db->where('idposting', $id);
	$this->db->delete('tblposting');
	redirect('Admin/postingproduk','refresh');
}


/////////////////////////// TENTANG //////////////////////////////////////////////

	public function datatentang()
	{
		$data['ten'] = $this->Madmin->getdatatentang();
		$this->load->view('admin/header');
		$this->load->view('admin/viewdatatentang',$data);
		$this->load->view('admin/footer');
	}

	public function formtambahtentang()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/viewtambahtentang');
		$this->load->view('admin/footer');
	}

	public function savedatatentang()
	{
		/*Check submit button */
		if($this->input->post('save'))
		{
		    $data['kategori']=$this->input->post('kategori');
			$data['deskripsi']=$this->input->post('deskripsi');
			$response=$this->Madmin->saverecordstentang($data);
			if($response==true){
			        echo "<script>alert('Records Saved Successfully');</script>";
			        redirect('Admin/datatentang','refresh');
			}
			else{
					echo "<script>alert('Records Saved Failed');</script>";
			        redirect('Admin/datatentang','refresh');
			}
		}
	}

	public function edittentang($id)
	{
		$data['ten'] = $this->Madmin->getdataedittentang($id);
		$this->load->view('admin/header');
		$this->load->view('admin/viewedittentang',$data);
		$this->load->view('admin/footer');
	}

	public function updatedatatentang()
	{
		/*Check submit button */
		if($this->input->post('update'))
		{
		    $id = $this->input->post('id');
			$deskripsi = $this->input->post('deskripsi');
			$response=$this->Madmin->updaterecordstentang($id,$deskripsi);
			if($response==true){
					// echo "<script>alert('Records Update Failed');</script>";
					$this->session->set_flashdata('msg','Data Berhasil Diupdate');
			        redirect('Admin/datatentang','refresh');
			}
			else{
			        // echo "<script>alert('Records Update Successfully');</script>";
					$this->session->set_flashdata('msg','Data Berhasil Diupdate');
			        redirect('Admin/datatentang','refresh');
			}
		}
	}

	public function hapusdatatentang($id)
	{
		$response=$this->Madmin->deleterecordstentang($id);
		if($response==true){
				// echo "<script>alert('Records Delete Failed');</script>";
				$this->session->set_flashdata('msg','Data Berhasil Dihapus');
		        redirect('Admin/datatentang','refresh');
		}
		else{
		        // echo "<script>alert('Records Delete Successfully');</script>";
				$this->session->set_flashdata('msg','Data Berhasil Dihapus');
		        redirect('Admin/datatentang','refresh');
		}
	}

/////////////////////////// BATAS TENTANG //////////////////////////////////////////////

/////////////////////////// PRODUK //////////////////////////////////////////////

	public function dataproduk()
	{
		$data['produk'] = $this->Madmin->getproduk();
		$this->load->view('admin/header');
		$this->load->view('admin/viewdataproduk',$data);
		$this->load->view('admin/footer');
	}

	public function formtambahproduk()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/viewtambahproduk');
		$this->load->view('admin/footer');
	}

	function tambahproduk(){
		$config['upload_path']         = 'images/produk';  // folder upload
		$config['allowed_types']        = 'gif|jpg|png'; // jenis file
		$config['max_size']             = 33000;
		$config['max_width']            = 13024;
		$config['max_height']           = 7638;

		$this->load->library('upload', $config);

			$this->upload->do_upload('gambar');
			$namaproduk = $this->input->post('namaproduk');
			$deskripsi = $this->input->post('deskripsi');
			$file = $this->upload->data();
			$gambar = $file['file_name'];

			$this->Madmin->insert(array(
				'namaproduk' => $namaproduk,
				'deskripsi' => $deskripsi,
				'gambar' => $gambar
			));
			$this->session->set_flashdata('msg','data berhasil di simpan');
			redirect('Admin/dataproduk');
	}

	function uploadproduk(){
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
            	$this->upload->do_upload('gambar');
            	$jenisproduk = $this->input->post('jenisproduk');
            	$namaproduk = $this->input->post('namaproduk');
            	$deskripsi = $this->input->post('deskripsi');
            	$harga = $this->input->post('harga');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];

                $this->Madmin->insert(array(
			        'jenisproduk' => $jenisproduk,
			        'namaproduk' => $namaproduk,
			        'deskripsi' => $deskripsi,
			        'harga' => $harga,
			        'gambar' => $gambar
				));
				$this->session->set_flashdata('msg','data berhasil di simpan');
				redirect('Admin/dataproduk');
	}

	public function lihatproduk($id)
	{
		$data['prod'] = $this->Madmin->lihatprodukid($id);
		$this->load->view('admin/header');
		$this->load->view('admin/viewlihatproduk',$data);
		$this->load->view('admin/footer');
	}

	public function editproduk($id)
	{
		$data['prod'] = $this->Madmin->lihatprodukid($id);
		$this->load->view('admin/header');
		$this->load->view('admin/vieweditproduk',$data);
		$this->load->view('admin/footer');
	}

	public function updatedataproduk()
	{
		/*Check submit button */
			$config['upload_path']         = 'images/produk';  // folder upload
            $config['allowed_types']        = 'gif|jpg|png'; // jenis file
            $config['max_size']             = 33000;
            $config['max_width']            = 13024;
            $config['max_height']           = 7638;

            $this->load->library('upload', $config);
            	$this->upload->do_upload('gambar');
            	$id = $this->input->post('id');
            	$namaproduk = $this->input->post('namaproduk');
            	$deskripsi = $this->input->post('deskripsi');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];

                $this->Madmin->update(array(
			        'namaproduk' => $namaproduk,
			        'deskripsi' => $deskripsi,
			        'gambar' => $gambar
				));
				$this->session->set_flashdata('msg','data berhasil di simpan');
				redirect('Admin/dataproduk');
	}

	public function hapusdataproduk($id)
	{
		$response=$this->Madmin->deleterecordsproduk($id);
		if($response==true){
				echo "<script>alert('Records Delete Failed');</script>";
		        redirect('Admin/dataproduk','refresh');
		}
		else{
		        echo "<script>alert('Records Delete Successfully');</script>";
		        redirect('Admin/dataproduk','refresh');
		}
	}




/////////////////////////// BATAS PRODUK //////////////////////////////////////////////

/////////////////////////// PESANAN //////////////////////////////////////////////

	public function datapesanan()
	{
		$data['pesanan'] = $this->Madmin->getpesanan();
		$this->load->view('admin/header');
		$this->load->view('admin/viewdatapesanan',$data);
		$this->load->view('admin/footer');
	}

	public function detailpesanan($idpesanan)
	{
		$data['pesanan'] = $this->Madmin->getpesananid($idpesanan);
		$this->load->view('admin/header');
		$this->load->view('admin/viewdetailpesanan',$data);
		$this->load->view('admin/footer');
	}

	public function simpannoref()
	{
		$idnoref = $this->input->post('idnoref');
		$noref = $this->input->post('noref');
		$response = $this->Madmin->simpannoref($idnoref,$noref);
	}

	public function statuspesanan($id)
	{
		$this->db->set('statuspesanan', 'Pesanan Di Buat');
		$this->db->where('idpesanan', $id);
		$this->db->update('tblpesanan');
		redirect('Admin/detailpesanan/'.$id,'refresh');
	}

	public function statuspesananselesai($id)
	{
		$this->db->set('statuspesanan', 'Pesanan Selesai');
		$this->db->where('idpesanan', $id);
		$this->db->update('tblpesanan');
		redirect('Admin/detailpesanan/'.$id,'refresh');
	}

	public function statuspesanandikirim($id)
	{
		$this->db->set('statuspesanan', 'Pesanan Di Kirim');
		$this->db->where('idpesanan', $id);
		$this->db->update('tblpesanan');
		redirect('Admin/detailpesanan/'.$id,'refresh');
	}



/////////////////////////// BATAS PESANAN //////////////////////////////////////////////

/////////////////////////// LAPORAN //////////////////////////////////////////////

	public function datalaporan()
	{
		$data['pesanan'] = $this->Madmin->getpesanan();
		$this->load->view('admin/header');
		$this->load->view('admin/viewdatalaporan',$data);
		$this->load->view('admin/footer');
	}

	public function cetaklaporan()
	{
		$this->load->library('pdfgenerator');
        $data['pesanan'] = $this->Madmin->getpesanan();
        $file_pdf = 'Laporan Pesanan';
        $paper = 'A4';
        $orientation = "portrait";
		$html = $this->load->view('admin/laporanpesanan',$data, true);
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
	}

/////////////////////////// BATAS LAPORAN //////////////////////////////////////////////

/////////////////////////// LOGIN LOGOUT //////////////////////////////////////////////

	public function login()
    {
        $this->load->view('admin/viewlogin');
    }

     public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
					'password' => $this->input->post('password', TRUE)
			);
		$hasil = $this->Muser->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			// redirect('Admin/datapesanan');
			redirect('Admin/dash_home');
			// if ($this->session->userdata('level')=='marketing') {
			// 	redirect('admin/c_admin');
			// }
			// elseif ($this->session->userdata('level')=='purchasing') {
			// 	redirect('member/c_member');
			// }
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('Admin/login','refresh');
	}

	public function upload()
	{
		// $this->load->view('admin/header');
		$this->load->view('admin/upload');
		// $this->load->view('admin/footer');
	}

	public function importFile(){
		if ($this->input->post('submit')) {
			$path = 'uploads/';
			require_once APPPATH . "/third_party/PHPExcel.php";
			$config['upload_path'] = $path;
			$config['allowed_types'] = 'xlsx|xls|csv';
			$config['remove_spaces'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);            
		
			if (!$this->upload->do_upload('uploadFile')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$data = array('upload_data' => $this->upload->data());
			}
		
			if(empty($error)){
		
				if (!empty($data['upload_data']['file_name'])) {
		
					$import_xls_file = $data['upload_data']['file_name'];
		
				} else {
		
					$import_xls_file = 0;
		
				}
		
				$inputFileName = $path . $import_xls_file;
		
				try {
		
					$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		
					$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		
					$objPHPExcel = $objReader->load($inputFileName);
		
					$allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
		
					$flag = true;
		
					$i=0;
		
					foreach ($allDataInSheet as $value) {
		
						if($flag){
		
							$flag =false;
		
							continue;
		
						}
		
						$inserdata[$i]['nama'] = $value['A'];
		
						$i++;
		
					}               
		
					$result = $this->Madmin->insertex($inserdata);   
		
					if($result){
		
						echo "Imported successfully";
		
					}else{
		
						echo "ERROR !";
		
					}             
		
				} catch (Exception $e) {
		
					die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
		
					. '": ' .$e->getMessage());
		
				}
		
			}else{
		
				echo $error['error'];
		
			}
		
		}
		
		$this->load->view('import');
		
	}

/////////////////////////// BATAS LOGIN LOGOUT //////////////////////////////////////////////

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */
