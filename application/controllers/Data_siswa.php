<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_siswa extends CI_Controller {

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
		$this->load->model('model_datasiswa');
		$data["siswa_list"] = $this->model_datasiswa->getTampilSiswa();
		$this->load->view('admin/view_data_siswa', $data);
	}

	public function create()
	{
		$this->load->model('model_datasiswa');
		$this->form_validation->set_rules('nis', 'Nis', 'trim|required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		//$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		
		
		if ($this->form_validation->run() == FALSE)
			{ $this->load->view('admin/input_data_siswa'); 
	}
		else
		{
			$this->model_datasiswa->insertSiswa();
			echo "<script> alert('Data Siswa berhasil ditambahkan'); window.location.href='../Data_siswa';</script>";
		}

	}

	public function update($id)
	{
		$this->load->model('model_datasiswa');
		$this->form_validation->set_rules('nis', 'Nis', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
		
		
		$data['data_siswa']=$this->model_datasiswa->getSiswa($id);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/edit_data_siswa', $data);
		}else{
			$this->model_datasiswa->updateById($id);
			echo "<script> alert('Data Siswa berhasil diedit'); window.location.href='../../Data_siswa';</script>";

		}
	}

	public function delete($id)
	{
		$this->load->model('model_datasiswa');
		$this->model_datasiswa->delete($id);
		redirect('data_siswa');
	}

	public function createPdf()
	{
		$this->load->library('pdf');
		$this->load->model('model_datasiswa');
		$data["siswa_list"] = $this->model_datasiswa->getTampilSiswa();
		$this->pdf->load_view('admin/report_dtasiswa', $data);
		
	}
}
