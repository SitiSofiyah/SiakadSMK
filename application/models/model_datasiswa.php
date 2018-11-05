<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_datasiswa extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getTampilSiswa()
	{
		$query = $this->db->query("SELECT * from siswa");
		return $query->result_array();
	}

	public function getTampilSiswa1()
	{
		$query = $this->db->query("SELECT * FROM siswa s INNER JOIN anggota_kelas a ON s.nis = a.nis INNER JOIN transaksi_kelas t ON a.fk_transKelas=t.id_transKelas INNER JOIN kelas k on t.fk_kelas=k.id_kelas INNER JOIN jurusan j ON k.fk_jurusan = j.id_jurusan");
		return $query->result_array();
	}

	public function getDataSiswa($nip)
	{
		$query = $this->db->query("SELECT * from siswa s inner join anggota_kelas a ON
			s.nis = a.nis inner join transaksi_kelas t ON a.fk_transKelas=t.id_transKelas inner join kelas k on t.fk_kelas=k.id_kelas inner join detail_pengajar d on k.id_kelas = d.fk_kelas inner join mapel on d.fk_mapel = mapel.id_mapel  where t.fk_guru = $nip");
		return $query->result_array();
	}

	public function insertSiswa(){
		$data = array (
			'nis'=>$this->input->post('nis'),
			'username'=>$this->input->post('username'),
			'password'=> MD5($this->input->post('password')),
			'nama'=>$this->input->post('nama'), 
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'), 
			'jenis_kelamin'=>$this->input->post('jk'), 
			'alamat'=>$this->input->post('alamat'), 
			'agama'=>$this->input->post('agama') 
		);
		$this->db->insert('siswa', $data);
	}

	public function getSiswa($id){
		$this->db->where('nis', $id);
		$query=$this->db->get('siswa');
		return $query->result();
	}

	public function updateById($id){
		$data = array (
			'nis'=>$this->input->post('nis'),
			'username'=>$this->input->post('username'),
			'password'=> MD5($this->input->post('password')),
			'nama'=>$this->input->post('nama'), 
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tgl_lahir'=>$this->input->post('tgl_lahir'), 
			'jenis_kelamin'=>$this->input->post('jk'), 
			'alamat'=>$this->input->post('alamat'), 
			'agama'=>$this->input->post('agama')
		);
		$this->db->where('nis', $id);
		$this->db->update('siswa', $data);
	}

	public function delete($id){
		$this->db->where('nis', $id);
		$this->db->delete('siswa');
	}

}