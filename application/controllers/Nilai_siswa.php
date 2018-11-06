<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Nilai_siswa extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$user = $this->session->userdata('siswa');

		   if (!isset($user)) { 
		   		echo "<script> alert('Anda harus login dahulu!');
				window.location.href='Auth';</script>"; 
		   } 
		   else { 
		      return true;
		   }
	}

	public function index()
	{
		$this->load->model('nilai_siswa_model');
		$session_data=$this->session->userdata("siswa");
		$nis=$session_data['nis'];
		$object["nilai"] = $this->nilai_siswa_model->getNilai_siswa($nis);
		$this->load->view('siswa/view_nilai_siswa',$object);
	}

	public function detail($id)
	{
		
		$this->load->model('nilai_model');
		$object["nilai"]=$this->nilai_model->detail($id);
		$this->load->view('guru/view_detail_nilai',$object); 
	}

}