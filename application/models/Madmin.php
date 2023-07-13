<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	function getdataregis()
	{
		$query=$this->db->get("tblregistrasionline");
		return $query->result();
	}

	function getdatatentang()
	{
		$query=$this->db->get("tbltentang");
		return $query->result();
	}

	function getdatakontak()
	{
		$query=$this->db->get("tblkontak");
		return $query->result();
	}

	function getposting()
	{
		$this->db->select('a.*, b.namaproduk');
		$this->db->join('tblproduk b', 'a.idproduk = b.idproduk', 'inner');
		$query=$this->db->get("tblposting a");
		return $query->result();
	}

	function getpostingan($id)
	{
		$this->db->select('a.*, b.namaproduk');
		$this->db->join('tblproduk b', 'a.idproduk = b.idproduk', 'inner');
		$this->db->where('a.idposting', $id);
		$query=$this->db->get("tblposting a");
		return $query->result();
	}

	function getdatastock()
	{
		$this->db->select('a.*, b.namaproduk');
		$this->db->join('tblproduk b', 'a.idproduk = b.idproduk', 'inner');
		$query=$this->db->get("tblstock a");
		return $query->result();
	}

	function getstockid($id)
	{
		$this->db->select('a.*, b.namaproduk');
		$this->db->join('tblproduk b', 'a.idproduk = b.idproduk', 'inner');
		$this->db->where('a.idstock', $id);
		$query=$this->db->get("tblstock a");
		return $query->result();
	}

	function hapusstock($id)
	{
		$query="DELETE from tblstock WHERE idstock = '".$id."' ";
		$this->db->query($query);
	}

	function getproduk()
	{
		$query=$this->db->get("tblproduk");
		return $query->result();
	}

	function insert($data){
		$this->db->insert('tblproduk',$data);
	}


	function saverecordstentang($data)
	{
        $this->db->insert('tbltentang',$data);
        return true;
	}

	function saverecordskontak($data)
	{
		// var_dump($data);
        $this->db->insert('tblkontak',$data);
        return true;
	}

	function simpannoref($idnoref,$noref)
	{
		$query="UPDATE tblpesanan SET notransaksipembayaran='$noref' WHERE idpesanan='$idnoref'";
		$this->db->query($query);
	}


	function getdataedittentang($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get("tbltentang");
		return $query->result();
	}

	function lihatprodukid($id)
	{
		$this->db->where('idproduk', $id);
		$query=$this->db->get("tblproduk");
		return $query->result();
	}




	function getdataeditkontak($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get("tblkontak");
		return $query->result();
	}


	function updaterecordstentang($id,$deskripsi)
	{
		$query=" UPDATE tbltentang SET deskripsi = '".$deskripsi."' WHERE id = '".$id."' ";
		$this->db->query($query);
	}

	function updaterecordskontak($id,$alamatkantor,$kontakperson)
	{
		$query=" UPDATE tblkontak SET alamatkantor = '".$alamatkantor."',kontakperson = '".$kontakperson."' WHERE id = '".$id."' ";
		$this->db->query($query);
	}


	function deleterecordstentang($id)
	{
		$query="DELETE from tbltentang WHERE id = '".$id."' ";
		$this->db->query($query);
	}

	function deleterecordskontak($id)
	{
		$query="DELETE from tblkontak WHERE id = '".$id."' ";
		$this->db->query($query);
	}

	function deleterecordsproduk($id)
	{
		$query="DELETE from tblproduk WHERE idproduk = '".$id."' ";
		$this->db->query($query);
	}


	function update($data){
		$where = $this->input->post('id',true);
		$this->db->where('idproduk', $where);
		$this->db->update('tblproduk', $data);
	}

	function updatestatus($idpesanan){
		$query=" UPDATE tblpesanan SET statuspesanan = 'Sedang Di Proses' WHERE idpesanan = '".$idpesanan."' ";

				$this->db->query($query);
				$this->db->query($query1);
	}

	function updatestatusdikirim($idpesanan){
		$query=" UPDATE tblpesanan SET statuspesanan = 'Barang Dikirim' WHERE idpesanan = '".$idpesanan."' ";
		$this->db->query($query);
	}

	function updatestatusselesai($idpesanan){
		$query=" UPDATE tblpesanan SET statuspesanan = 'Pesanan Selesai' WHERE idpesanan = '".$idpesanan."' ";
		$this->db->query($query);
	}

	function getpesanan()
	{
		$query=$this->db->query("select a.*,b.idproduk,c.idproduk as id_produk ,c.namaproduk,c.gambar from tblpesanan a left join tblposting b on a.idpostingproduk = b.idposting left join tblproduk c on b.idproduk = c.idproduk");
		return $query->result();
	}

	function getpesananid($idpesanan)
	{
		$q = $this->db->query("select a.*,b.idproduk,c.idproduk as id_produk ,c.namaproduk,c.gambar from tblpesanan a left join tblposting b on a.idpostingproduk = b.idposting left join tblproduk c on b.idproduk = c.idproduk where a.idpesanan = '".$idpesanan."'");
		return $q->result();
	}

	function getdetailpesanan($id)
	{
		$this->db->where('id', $id);
		$query=$this->db->get("tblpesanan");
		return $query->result();
	}

	function getcicilan($idpesanan){
		$this->db->where('idpesanan', $idpesanan);
		$query=$this->db->get("tblcicilancustomer");
		return $query->result();
		
	}

	public function insertex($data) {
		$res = $this->db->insert_batch('uploadex',$data);
		if($res){
		return TRUE;
		}else{
		return FALSE;
		}
		}


}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */
