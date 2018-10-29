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

	public function getMapelByGuru($data)
	{
		$query = $this->db->query("SELECT * from mapel m inner join detail_pengajar d
			on m.id_mapel=d.fk_mapel inner join guru g on d.nip=g.nip ");
		return $query->result_array();
	}

	

}