<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai_siswa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		
	}
	
	
	public function getNilai_siswa($id){
		$query = $this->db->query("select mapel.*, siswa.*,nilai.*, jenis_nilai.*, (0.4*uas)+(0.3*uts)+(((uh1+uh2+uh3+uh4)/4)*0.3) as rata from siswa inner join nilai on nilai.fk_nis=siswa.nis inner join jenis_nilai on nilai.fk_jenisNilai = jenis_nilai.id_jenisNilai inner join mapel on nilai.fk_mapel=mapel.id_mapel where nis='$id'");
		return $query->result_array();
	}

}