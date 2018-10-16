<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_guru extends CI_Controller {

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
		$this->load->model('guru_model');
		$object["guru"] = $this->guru_model->getGuru_list();
		$this->load->view('view_data_guru',$object);
	}

	public function create()
	{
		$this->load->model('guru_model');
		$this->form_validation->set_rules('nip', 'nip', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_rules('tempat', 'tempat', 'trim|required');
		$this->form_validation->set_rules('tanggalLahir', 'tanggalLahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('gol', 'gol', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('add_guru');
		} else {
			$this->guru_model->insertGuru();
			echo "<script> alert('data guru telah ditambahkan!');
				window.location.href='../data_guru';</script>";
		    // redirect('data_guru');
		}
	}

	public function update($id)
	{
		$this->load->model('guru_model');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('tempat', 'tempat', 'trim|required');
		$this->form_validation->set_rules('tanggalLahir', 'tanggalLahir', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('status', 'status', 'trim|required');
		$this->form_validation->set_rules('gol', 'gol', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'trim|required');
		$object['guru'] = $this->guru_model->getGuru($id);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('edit_guru', $object);
		} else {
			$this->guru_model->updateById($id);
			echo "<script> alert('data guru telah di update!');
				window.location.href='../../data_guru';</script>";
			// redirect('data_guru');
		}	
	}

	public function delete($id)
	{
		$this->load->model('guru_model');
		$this->guru_model->delete($id);
		
		 redirect('data_guru');
	}

	
}
