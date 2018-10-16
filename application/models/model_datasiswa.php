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