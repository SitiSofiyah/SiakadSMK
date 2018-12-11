<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_kelas extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getTampilKelas()
	{
		$query = $this->db->query("SELECT * from kelas");
		return $query->result_array();
	}

	public function getTampilJurusan()
	{
		$query = $this->db->query("SELECT * from jurusan");
		return $query->result_array();
	}

	

}