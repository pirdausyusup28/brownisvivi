<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {

	function getdata()
	{
		$query=$this->db->get("tbluser");
		return $query->result();
	}
	public function cek_user($data) {
			$query = $this->db->get_where('tbluser', $data);
			return $query;
	}

	public function cek_usercs($data) {
			$query = $this->db->get_where('tblregistrasionline', $data);
			return $query;
	}

	public function profil($ses){
		$this->db->where('id', $ses);
		$query = $this->db->get('tblregistrasionline');
		return $query->result();
	}

	function saveregistrasi($data)
	{
		
        $this->db->insert('tblregistrasionline',$data);
        return true;
	}

	function updateprofil($data)
	{
		$sql = "UPDATE tblregistrasionline SET alamat = ?, notelp = ?, email = ?, password = ? WHERE id = ?";
		$params = array($data['alamat'], $data['notelp'], $data['email'], $data['password'], $data['id']);
		$query = $this->db->query($sql, $params);
		if ($query) {
			return true;
		} else {
			return false;
		}
	}



	function getdataedit($id)
	{
		$this->db->where('iduser', $id);
		$query=$this->db->get("tbluser");
		return $query->result();
	}


	function saverecords($data)
	{
        $this->db->insert('tbluser',$data);
        return true;
	}

	function updaterecords($id,$username,$email,$password)
	{
		$query=" UPDATE tbluser SET username = '".$username."',email = '".$email."',password = '".$password."' WHERE iduser = '".$id."' ";
		$this->db->query($query);
	}

	// function deleterecords($id)
	// {
	// 	$query=" DELETE FROM `tbluser` WHERE id = '".$id."' ";
	// 	$this->db->query($query);
	// }

	function deleterecords($id)
	{
		$query="DELETE from tbluser WHERE iduser = '".$id."' ";
		$this->db->query($query);
	}

}

/* End of file Muser.php */
/* Location: ./application/models/Muser.php */