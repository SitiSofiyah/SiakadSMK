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

	public function getMapel($id)
	{
		$query = $this->db->query("SELECT * from mapel where id_mapel=$id");
		return $query->result();
	}

	public function insertMapel(){
		$data = array (
			'nama_mapel'=>$this->input->post('nama_mapel'),
			'semester'=>$this->input->post('semester'),
			'kategori'=>$this->input->post('kategori')
		);
		$this->db->insert('mapel', $data);
	}

	public function getMapelByGuru($data)
	{
		$query = $this->db->query("SELECT * from mapel m inner join detail_pengajar d
			on m.id_mapel=d.fk_mapel inner join guru g on d.nip=g.nip ");
		return $query->result_array();
	}

	public function updateById($id){
		$data = array (
			'nama_mapel'=>$this->input->post('nama_mapel'),
			'semester'=>$this->input->post('semester'),
			'kategori'=>$this->input->post('kategori')
		);
		$this->db->where('id_mapel', $id);
		$this->db->update('mapel', $data);
	}

	public function delete($id){
		$this->db->where('id_mapel', $id);
		$this->db->delete('mapel');
	}
}