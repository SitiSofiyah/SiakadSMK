<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_jurusan extends CI_Controller {

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
	public function index()
	{
		$this->load->model('model_datajur');
		$data["jur_list"] = $this->model_datajur->getTampilJur();
		$this->load->view('view_data_jurusan', $data);
	}

	public function create()
	{
		$this->load->model('model_datajur');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
			{ $this->load->view('input_data_jur'); 
	}
		else
		{
			$this->model_datajur->insertJur();
			echo "<script> alert('Data Jurusan berhasil ditambahkan'); window.location.href='../Data_jurusan';</script>";
		}

	}

	public function update($id)
	{
		$this->load->model('model_datajur');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'trim|required');
		
		$data['data_jurusan']=$this->model_datajur->getJur($id);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('edit_data_jur', $data);
		}else{
			$this->model_datajur->updateById($id);
			echo "<script> alert('Data Jurusan berhasil diedit'); window.location.href='../../Data_jurusan';</script>";

		}
	}

	public function delete($id)
	{
		$this->load->model('model_datajur');
		$this->model_datajur->delete($id);
		redirect('data_jurusan');
	}
}
