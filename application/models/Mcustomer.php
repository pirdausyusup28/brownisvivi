<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcustomer extends CI_Model {

	function getproduk()
	{
		$query=$this->db->query("SELECT a.*,b.namaproduk,b.gambar from tblposting a left join tblproduk b on a.idproduk =b.idproduk");
		return $query->result();
	}

	function getpostingid($id)
	{
		$query=$this->db->query("SELECT a.*,b.namaproduk,b.gambar from tblposting a left join tblproduk b on a.idproduk =b.idproduk where a.idposting = '".$id."'");
		return $query->result();
	}

	public function cekdatapesanan($kodepesanan)
	{
		$q = $this->db->query("select a.*,b.idproduk,c.idproduk as id_produk ,c.namaproduk,c.gambar from tblpesanan a left join tblposting b on a.idpostingproduk = b.idposting left join tblproduk c on b.idproduk = c.idproduk where a.idpesanan = '".$kodepesanan."'");
		return $q->result();
	}

	function getprodukorder()
	{
		$this->db->where('jenisproduk', 'order');
		
		$query=$this->db->get("tblproduk");
		return $query->result();
	}

	function getprodukpreorder()
	{
		$this->db->where('jenisproduk', 'preorder');
		
		$query=$this->db->get("tblproduk");
		return $query->result();
	}

	function getdetail($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get("tblproduk");
		return $query->result();
	}

	function insertorderan($data){
		$this->db->insert('tblpesanan',$data);
	}

	function getvisimisi()
	{
		$query=$this->db->get("tbltentang");
		return $query->result();
	}

	function getkontak()
	{
		$query=$this->db->get("tblkontak");
		return $query->result();
	}

	function getpesanan($nama='')
	{
		$this->db->where('nama', $nama);
		$this->db->order_by('idpesanan', 'desc');
		$query=$this->db->get("tblpesanan");
		return $query->result();
	}

	function getcicilan($id)
	{
		$this->db->where('idpesanan', $id);
		$query=$this->db->get("tblpesanan");
		return $query->result();
	}

	function bagicicilan($id,$cicilan){
		if ($cicilan !== '0') {
			for ($i = 0; $i < $cicilan; $i++) {
				$cill = $i+1;
				$query1="INSERT INTO tblcicilancustomer (idpesanan, cicilanke) values ('".$id."','".$cill."'); ";
				$this->db->query($query1);
			}
		}
	}

	function gettenor($id)
	{
		// $this->db->where('idpesanan', $id);
		$query=$this->db->query("select a.idpesanan,a.harga,b.* from tblpesanan a left join tblcicilancustomer b on a.idpesanan = b.idpesanan  where a.idpesanan = '".$id."'");
		return $query->result();
	}

	function getcicilanpertama($id)
	{
		$query = $this->db->query("SELECT (harga/cicilan) ciclanpertama FROM tblpesanan WHERE idpesanan = '".$id."'");
		return $query->result();
	}






}

/* End of file Mcustomer.php */
/* Location: ./application/models/Mcustomer.php */
