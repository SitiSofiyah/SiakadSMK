<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_datajur extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getTampilJur()
	{
		$query = $this->db->query("SELECT * from jurusan");
		return $query->result_array();
	}

	public function insertJur(){
		$data = array (
			'nama_jurusan'=>$this->input->post('jurusan')
		);
		$this->db->insert('jurusan', $data);
	}

	public function getJur($id){
		$this->db->where('id_jurusan', $id);
		$query=$this->db->get('jurusan');
		return $query->result();
	}

	public function updateById($id){
		$data = array (
			'nama_jurusan'=>$this->input->post('jurusan')
		);
		$this->db->where('id_jurusan', $id);
		$this->db->update('jurusan', $data);
	}

	public function delete($id){
		$this->db->where('id_jurusan', $id);
		$this->db->delete('jurusan');
	}

}