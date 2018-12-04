<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_kelas extends CI_Controller {

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
		$this->load->model('model_datakel');
		$data["kel_list"] = $this->model_datakel->getTampilKel();
		$this->load->view('admin/view_data_kelas', $data);
	}

	public function create()
	{
		$this->load->model('model_datakel');
		$this->load->model('model_kelas');
		$this->form_validation->set_rules('namaKelas', 'Nama Kelas', 'trim|required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
		$data["jurusan"] = $this->model_kelas->getTampilJurusan();
		if ($this->form_validation->run() == FALSE)
			{ $this->load->view('admin/input_data_kel', $data); 
	}
		else
		{
			$this->model_datakel->insertKel();
			echo "<script> alert('Data Kelas berhasil ditambahkan'); window.location.href='../Data_kelas';</script>";
		}

	}

	public function update($id)
	{
		$this->load->model('model_datakel');
		$this->load->model('model_kelas');
		$this->form_validation->set_rules('namaKelas', 'Nama Kelas', 'trim|required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
		
		$data['data_kelas']=$this->model_datakel->getKel($id);
		$data["jurusan"] = $this->model_kelas->getTampilJurusan();

		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/edit_data_kel', $data);
		}else{
			$this->model_datakel->updateById($id);
			echo "<script> alert('Data Kelas berhasil diedit'); window.location.href='../../Data_kelas';</script>";

		}
	}

	public function delete($id)
	{
		$this->load->model('model_datakel');
		$this->model_datakel->delete($id);
		redirect('data_kelas');
	}
}
