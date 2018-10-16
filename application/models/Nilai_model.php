<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function getJenisNilai_list(){
		$query = $this->db->query("select * from jenis_nilai");
		return $query->result_array();
	}
	public function getNilai_list(){
		$query = $this->db->query("select mapel.*, siswa.*,nilai.*, jenis_nilai.*, (0.4*uas)+(0.3*uts)+(((uh1+uh2+uh3+uh4)/4)*0.3) as rata from siswa inner join nilai on nilai.fk_nis=siswa.nis inner join jenis_nilai on nilai.fk_jenisNilai = jenis_nilai.id_jenisNilai inner join mapel on nilai.fk_mapel=mapel.id_mapel");
		return $query->result_array();
	}

	public function getID(){
		$this->db->select("MAX(id_jenisNilai)+1 AS id");
		$this->db->from("jenis_nilai");
		$query=$this->db->get();
		return $query->row()->id;
	}
	public function getIDNilai(){
		$this->db->select("MAX(id_nilai)+1 AS id");
		$this->db->from("nilai");
		$query=$this->db->get();
		return $query->row()->id;
	}

	public function insert($id,$idn){

		$object = array (
			'id_jenisNilai'=>$id,
			'uh1'=>$this->input->post('uh1'),
			'uh2'=>$this->input->post('uh2'),
			'uh3'=>$this->input->post('uh3'),
			'uh4'=>$this->input->post('uh4'), 
			'uts'=>$this->input->post('uts'),
			'uas'=>$this->input->post('uas')
		);
		$this->db->insert('jenis_nilai', $object);

		$data = array (
			'id_nilai'=>$idn,
			'fk_nis'=>$this->input->post('nis'),
			'fk_mapel'=>$this->input->post('mapel'),
			'semester'=> $this->input->post('semester'), 
			'fk_jenisNilai'=>$id, 
			'thn_ajaran'=>$this->input->post('thn_ajaran')
		);
		$this->db->insert('nilai', $data);
		
	}
}