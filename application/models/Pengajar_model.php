<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getTampilPengajar()
	{
		$query = $this->db->query("SELECT * FROM mapel inner join detail_pengajar on mapel.id_mapel = detail_pengajar.fk_mapel inner join kelas on detail_pengajar.fk_kelas = kelas.id_kelas inner join guru on detail_pengajar.nip = guru.nip");
		return $query->result_array();
	}

	public function insertPengajar()
	{
	
			$object=array(
			'nip'=>$this->input->post('nip'),
			'fk_mapel'=>$this->input->post('mapel'),
			'fk_kelas'=>$this->input->post('kelas'),
			'thn_ajaran'=>$this->input->post('thn'));
		$this->db->insert('detail_pengajar', $object);
	}

	public function delete($id){
		$this->db->where('id_pengajar', $id);
		$this->db->delete('detail_pengajar');
	}

	public function updateById($id){
		$object = array (
			'nip'=>$this->input->post('nip'),
			'fk_mapel'=>$this->input->post('mapel'),
			'fk_kelas'=>$this->input->post('kelas'),
			'thn_ajaran'=>$this->input->post('thn'));

		$this->db->where('id_pengajar', $id);
		$this->db->update('detail_pengajar', $object);
		
	}
	
}