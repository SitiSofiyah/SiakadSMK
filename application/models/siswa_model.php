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
	public function getSiswaKelas($id)
	{
		$query = $this->db->query("select * from siswa inner join anggota_kelas on siswa.nis=anggota_kelas.nis inner join transaksi_kelas on anggota_kelas.fk_transkelas = transaksi_kelas.id_transKelas where transaksi_kelas.fk_kelas=$id");
		return $query->result_array();
	}

}