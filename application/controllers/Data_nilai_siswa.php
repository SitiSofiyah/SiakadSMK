<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Data_nilai_siswa extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$user = $this->session->userdata('guru');

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
		$this->load->model('model_datapeng');
		$object["pengumuman"] = $this->model_datapeng->getJmlPengumuman();
		$this->load->model('nilai_model');
		$object["mapelKelas"] = $this->nilai_model->getMapelKelas();
		$object["nilai"] = $this->nilai_model->getNilai_list();
		$this->load->view('guru/view_data_nilai',$object);
	}

	public function create()
	{
		$this->load->model('nilai_model');
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('mapel', 'mapel', 'trim|required');
		$this->form_validation->set_rules('uh1', 'uh1', 'trim|required');
		$this->form_validation->set_rules('uh2', 'uh2', 'trim|required');
		$this->form_validation->set_rules('uh3', 'uh3', 'trim|required');
		$this->form_validation->set_rules('uh4', 'uh4', 'trim|required');
		$this->form_validation->set_rules('uts', 'uts', 'trim|required');
		$this->form_validation->set_rules('uas', 'uas', 'trim|required');
		$this->load->model('siswa_model');
		$this->load->model('model_dataMapel');
		$kelas = $this->input->post('mapel');
		$session_data=$this->session->userdata("guru");
		$data=$session_data['nip'];
		$this->load->model('model_datapeng');
		$object["pengumuman"] = $this->model_datapeng->getJmlPengumuman();
		$object["mapel"] = $this->model_dataMapel->getMapelByGuru($data);
		$object["nilai"] = $this->nilai_model->getNilai_list();
		$id = $this->nilai_model->getID();
		$idn = $this->nilai_model->getIDNilai();
		if($id==null){
			$id = 0;
		}
		if($idn==null){
			$idn = 0;
		}

		if ($this->form_validation->run() == FALSE)
			{ $this->load->view('guru/input_data_nilai',$object); 
	}
		else
		{
			
			$this->nilai_model->insert($id,$idn);
			redirect('Data_nilai_siswa/create');
		}

	}

	public function update($id,$idn)
	{
		$this->load->model('nilai_model');
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('mapel', 'mapel', 'trim|required');
		$this->form_validation->set_rules('semester', 'semester', 'trim|required');
		$this->form_validation->set_rules('uh1', 'uh1', 'trim|required');
		$this->form_validation->set_rules('uh2', 'uh2', 'trim|required');
		$this->form_validation->set_rules('uh3', 'uh3', 'trim|required');
		$this->form_validation->set_rules('uh4', 'uh4', 'trim|required');
		$this->form_validation->set_rules('uts', 'uts', 'trim|required');
		$this->form_validation->set_rules('uas', 'uas', 'trim|required');
		$this->load->model('model_dataMapel');
		$data['data_nilai']=$this->nilai_model->detailNilai($id);
		$data["mapel"] = $this->model_dataMapel->getTampilMapel();
		if ($this->form_validation->run() == FALSE){
			$this->load->view('guru/view_edit_nilai', $data);
		}else{
			$this->nilai_model->updateById($id,$idn);
			echo "<script> alert('Data Nilai berhasil diedit'); window.location.href='../../../Data_nilai_siswa';</script>";

		}
	}

	public function delete($id)
	{
		$this->load->model('nilai_model');
		$this->nilai_model->delete($id);
		redirect('Data_nilai_siswa');
	}

	public function detail($id)
	{
		
		$this->load->model('nilai_model');
		$object["nilai"]=$this->nilai_model->detail($id);
		$this->load->view('guru/view_detail_nilai',$object); 
	}

}