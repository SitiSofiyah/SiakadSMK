<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_datakel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getTampilKel()
	{
		$query = $this->db->query("SELECT * FROM kelas inner join jurusan on kelas.fk_jurusan = jurusan.id_jurusan order by nama_kelas asc ");
		return $query->result_array();
	}

	public function getTampilDetail($id_kelas)
	{
		$query = $this->db->query("SELECT * FROM anggota_kelas inner join siswa on anggota_kelas.nis = siswa.nis inner join transaksi_kelas t on anggota_kelas.fk_transKelas= t.id_transKelas where fk_kelas = '$id_kelas'");
		return $query->result_array();
	}

	public function insertKel(){
		$data = array (
			'nama_kelas'=>$this->input->post('namaKelas'),
			'fk_jurusan'=>$this->input->post('jurusan')
		);
		$this->db->insert('kelas', $data);
	}

	public function getKel($id){
		$query = $this->db->query("SELECT * FROM kelas inner join jurusan on kelas.fk_jurusan = jurusan.id_jurusan where id_kelas=$id");
		return $query->result();
	}

	public function updateById($id){
		$data = array (
			'nama_kelas'=>$this->input->post('namaKelas'),
			'fk_jurusan'=>$this->input->post('jurusan')
		);
		$this->db->where('id_kelas', $id);
		$this->db->update('kelas', $data);
	}

	public function delete($id){
		$this->db->where('id_kelas', $id);
		$this->db->delete('kelas');
	}
	
}