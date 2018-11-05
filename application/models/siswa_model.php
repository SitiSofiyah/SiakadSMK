<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function getSiswa($id)
	{
		$query = $this->db->query("select * from siswa where nis='$id'");
		return $query->result();
	}

}