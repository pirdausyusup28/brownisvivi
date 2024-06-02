<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	function getjenisproduk()
	{
		$query=$this->db->get("tbl_jenis_produk");
		return $query->result();
	}

	function simpanjenisproduk($data)
	{
        $this->db->insert('tbl_jenis_produk',$data);
        return true;
	}

	function simpanproduk($data)
	{
        $this->db->insert('tbl_produk',$data);
        return true;
	}

	function updatejenisproduk($data){
		$this->db->where('id_jenis_produk', $data['id_jenis_produk']);
		$this->db->set('jenis_produk', $data['jenis_produk']);
		$this->db->update('tbl_jenis_produk', $data);
        return true;
	}

	function deletejenisproduk($id)
	{
		$query="DELETE from tbl_jenis_produk WHERE id_jenis_produk = '".$id."' ";
		$this->db->query($query);
	}

	function getuser()
	{
		$this->db->where('level','1');
		$query=$this->db->get("tbl_user");
		return $query->result();
	}
	function simpanuser($data)
	{
        $this->db->insert('tbl_user',$data);
        return true;
	}

	function updateuser($data){
		$this->db->where('id_user', $data['A']);
		$this->db->set('nama_user', $data['B']);
		$this->db->set('username', $data['C']);
		$this->db->set('password', $data['D']);
		$this->db->set('level', $data['E']);
		$this->db->update('tbl_user', $data);
        return true;
	}

	function deleteuser($id)
	{
		$query="DELETE from tbl_user WHERE id_user = '".$id."' ";
		$this->db->query($query);
	}

	function getcustomer()
	{
		$this->db->where('level','2');
		$query=$this->db->get("tbl_user");
		return $query->result();
	}

	function getproduk()
	{
		$query=$this->db->query("SELECT a.*,b.* FROM tbl_produk a left join tbl_jenis_produk b on a.id_jenis_produk = b.id_jenis_produk");
		return $query->result();
	}

	function updateproduk($data){
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->set('id_jenis_produk', $data['id_jenis_produk']);
		$this->db->set('nama_produk', $data['nama_produk']);
		$this->db->set('deskripsi', $data['deskripsi']);
		$this->db->update('tbl_produk', $data);
        return true;
	}

}

/* End of file Madmin.php */
/* Location: ./application/models/Madmin.php */
