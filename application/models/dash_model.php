<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}

	public function getListJur(){
		$query=$this->db->query("SELECT count(id_jurusan) from jurusan");
		return $query->row();
	}

	public function getListPeng(){
		$query=$this->db->query("SELECT count(id_pengumuman) from pengumuman");
		return $query->row();
	}

}