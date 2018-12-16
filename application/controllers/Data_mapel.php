<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mapel extends CI_Controller {

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
		$this->load->model('Model_dataMapel');
		$data['id'] = $this->Model_dataMapel->getTampilMapel();
		$this->load->view('admin/view_data_mapel',$data);

	}
	public function create()
	{
		$this->load->model('Model_dataMapel');
		$this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		
		if ($this->form_validation->run() == FALSE)
			{ $this->load->view('admin/input_data_mapel'); 
	}
		else
		{
			$this->Model_dataMapel->insertMapel();
			echo "<script> alert('Data Mapel berhasil ditambahkan'); window.location.href='../Data_mapel';</script>";
		}

	}

	public function update($id)
	{
		$this->load->model('Model_dataMapel');
		$this->form_validation->set_rules('nama_mapel', 'Nama Mapel', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'trim|required');
		
		
		
		$data['data_mapel']=$this->Model_dataMapel->getMapel($id);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('admin/edit_data_mapel', $data);
		}else{
			$this->Model_dataMapel->updateById($id);
			echo "<script> alert('Data Mapel berhasil diedit'); window.location.href='../../Data_mapel';</script>";

		}
	}

	public function delete($id)
	{
		$this->load->model('Model_dataMapel');
		$this->Model_dataMapel->delete($id);
		redirect('data_mapel');
	}

	// public function createPdf()
	// {
	// 	$this->load->library('pdf');
	// 	$this->load->model('Model_Mapel');
	// 	$data["mapel_list"] = $this->Model_Mapel->getTampilMapel1();
	// 	$this->pdf->load_view('admin/report_datamapel', $data);
		
	// }


}
