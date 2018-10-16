<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_dataMapel extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getTampilMapel()
	{
		$query = $this->db->query("SELECT * from mapel");
		return $query->result_array();
	}

	

}