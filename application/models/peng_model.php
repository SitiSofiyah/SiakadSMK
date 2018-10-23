<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peng_model extends CI_Model{

	public function getTampilPengu()
	{
		$query = $this->db->query("Select * from pengumuman");
		return $query->result_array();
	}

	public function getTampilPenguV($id)
	{
		$query = $this->db->query("Select * from pengumuman where id_pengumuman = $id");
		return $query->result_array();
	}

}