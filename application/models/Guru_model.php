<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function getGuru_list()
	{
		$query = $this->db->query("select * from guru order by nama asc");
		return $query->result_array();
	}
	public function getGuru($id)
	{
		$query = $this->db->query("select * from guru where nip=$id");
		return $query->result();
	}
	public function insertGuru()
	{
		$password = md5($this->input->post('password'));
			$object=array(
			'nip'=>$this->input->post('nip'),
			'username'=>$this->input->post('username'),
			'password'=>$password,
			'nama'=>$this->input->post('nama'),
			'tempat_lahir'=>$this->input->post('tempat'),
			'tgl_lahir'=>$this->input->post('tanggalLahir'),
			'alamat'=>$this->input->post('alamat'),
			'agama'=>$this->input->post('agama'),
			'jenis_kelamin'=>$this->input->post('jenisKel'),
			'status'=>$this->input->post('status'),
			'golongan'=>$this->input->post('gol'),
			'jabatan'=>$this->input->post('jabatan'));

		$this->db->insert('guru', $object);
	}
	
	public function updateById($id)
	{
		$data=array(
			'nip'=>$this->input->post('nip'),
			'nama'=>$this->input->post('nama'),
			'tempat_lahir'=>$this->input->post('tempat'),
			'tgl_lahir'=>$this->input->post('tanggalLahir'),
			'alamat'=>$this->input->post('alamat'),
			'agama'=>$this->input->post('agama'),
			'jenis_kelamin'=>$this->input->post('jenisKel'),
			'status'=>$this->input->post('status'),
			'golongan'=>$this->input->post('gol'),
			'jabatan'=>$this->input->post('jabatan'));
		$this->db->where('nip', $id);
		$this->db->update('guru', $data);
	}
	
	public function delete($id){
		$this->db->where('nip', $id);
		$this->db->delete('guru');
	}

}