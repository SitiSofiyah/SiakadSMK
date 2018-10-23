<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_nilai_siswa extends CI_Controller {

	public function index()
	{
		$this->load->model('nilai_model');
		$object["nilai"] = $this->nilai_model->getNilai_list();
		$this->load->view('guru/view_data_nilai',$object);
	}

	public function create()
	{
		$this->load->model('nilai_model');
		$this->form_validation->set_rules('nis', 'Nis', 'trim|required');
		$this->form_validation->set_rules('mapel', 'mapel', 'trim|required');
		$this->form_validation->set_rules('semester', 'semester', 'trim|required');
		$this->form_validation->set_rules('uh1', 'uh1', 'trim|required');
		$this->form_validation->set_rules('uh2', 'uh2', 'trim|required');
		$this->form_validation->set_rules('uh3', 'uh3', 'trim|required');
		$this->form_validation->set_rules('uh4', 'uh4', 'trim|required');
		$this->form_validation->set_rules('uts', 'uts', 'trim|required');
		$this->form_validation->set_rules('uas', 'uas', 'trim|required');
		$this->load->model('model_dataMapel');
		$object["mapel"] = $this->model_dataMapel->getTampilMapel();
		$id = $this->nilai_model->getID();
		$idn = $this->nilai_model->getIDNilai();
		if($id==null){
			$id = 0;
			$idn=0;
		}

		if ($this->form_validation->run() == FALSE)
			{ $this->load->view('guru/input_data_nilai',$object); 
	}
		else
		{
			
			$this->nilai_model->insert($id,$idn);
			echo "<script> alert('Data Nilai berhasil ditambahkan'); window.location.href='../Data_nilai_siswa';</script>";
		}

	}

}