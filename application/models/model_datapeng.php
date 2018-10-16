<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_datapeng extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function getTampilPeng()
	{
		$query = $this->db->query("SELECT * from pengumuman");
		return $query->result_array();
	}

	public function insertPeng(){
		$data = array (
			'judul'=>$this->input->post('judul'),
			'isi'=>$this->input->post('isi'), 
			'tgl_pengumuman'=>$this->input->post('tgl_peng')
		);
		$this->db->insert('pengumuman', $data);
	}

	public function getPeng($id){
		$this->db->where('id_pengumuman', $id);
		$query=$this->db->get('pengumuman');
		return $query->result();
	}

	public function updateById($id){
		$data = array (
			'judul'=>$this->input->post('judul'), 
			'isi'=>$this->input->post('isi'),
			'tgl_pengumuman'=>$this->input->post('tgl_peng')
		);
		$this->db->where('id_pengumuman', $id);
		$this->db->update('pengumuman', $data);
	}

	public function delete($id){
		$this->db->where('id_pengumuman', $id);
		$this->db->delete('pengumuman');
	}

}