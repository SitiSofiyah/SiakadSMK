<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_guru extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$user = $this->session->userdata('admin');

		   if (!isset($user)) { 
		   		echo "<script> alert('Anda harus login dahulu!');
				window.location.href='Auth_admin';</script>"; 
		   } 
		   else { 
		      return true;
		   }
	}

	public function index()
	{
		$this->load->model('pengajar_model');
		$object["pengajar"] = $this->pengajar_model->getTampilPengajar();
		$this->load->view('admin/view_detail_guru',$object);
	}

	public function create()
	{
		$this->load->model('pengajar_model');
		$this->load->model('model_dataMapel');
		$this->load->model('model_kelas');
		$this->load->model('guru_model');
		$this->form_validation->set_rules('nip', 'nip', 'trim|required');
		$this->form_validation->set_rules('mapel', 'mapel', 'trim|required');
		$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
		$this->form_validation->set_rules('thn', 'tahun ajaran', 'trim|required');
		$object["guru"] = $this->guru_model->getGuru_list();
		$object["mapel"] = $this->model_dataMapel->getTampilMapel();
		$object["kelas"] = $this->model_kelas->getTampilKelas();
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/add_pengajar',$object);
		} else {
			$this->pengajar_model->insertPengajar();
			echo "<script> alert('data pengajar telah ditambahkan!');
				window.location.href='../detail_guru';</script>";
		    // redirect('data_guru');
		}
	}

	public function delete($id)
	{
		$this->load->model('pengajar_model');
		$this->pengajar_model->delete($id);
		redirect('detail_guru');
	}

	public function update($id)
	{
		$this->load->model('pengajar_model');
		$this->load->model('model_dataMapel');
		$this->load->model('model_kelas');
		$this->load->model('guru_model');
		$this->form_validation->set_rules('nip', 'nip', 'trim|required');
		$this->form_validation->set_rules('mapel', 'mapel', 'trim|required');
		$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
		$this->form_validation->set_rules('thn', 'tahun ajaran', 'trim|required');
		$object["guru"] = $this->guru_model->getGuru_list();
		$object["mapel"] = $this->model_dataMapel->getTampilMapel();
		$object["kelas"] = $this->model_kelas->getTampilKelas();
		$object["pengajar"] = $this->pengajar_model->getPengajar($id);
		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/edit_pengajar', $object);
		}else{
			$this->pengajar_model->updateById($id);
			echo "<script> alert('Data Pengajar berhasil diedit'); window.location.href='../../Detail_guru';</script>";

		}
	}

}