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

	public function getListMapel(){
		$query=$this->db->query("SELECT count(id_mapel) from mapel");
		return $query->row();
	}

	public function getListKelas(){
		$query=$this->db->query("SELECT count(id_kelas) from kelas");
		return $query->row();
	}

	public function getListSiswa(){
		$query=$this->db->query("SELECT count(nis) from siswa");
		return $query->row();
	}

	public function getListPeng(){
		$query=$this->db->query("SELECT count(id_pengumuman) from pengumuman");
		return $query->row();
	}

	public function getListGuru(){
		$query=$this->db->query("SELECT count(nip) from guru");
		return $query->row();
	}
}