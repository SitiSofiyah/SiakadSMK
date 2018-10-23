<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pengumuman extends CI_Controller {

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
		$this->load->model('model_datapeng');
		$data["peng_list"] = $this->model_datapeng->getTampilPeng();
		$this->load->view('view_data_pengumuman', $data);
	}

	public function create()
	{
		$this->load->model('model_datapeng');
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('isi', 'Isi', 'trim|required');
		/*$this->form_validation->set_rules('tgL_peng', 'Tanggal Pengumuman', 'trim|required');*/
		$id=$this->model_datapeng->getID();
		if($id==null){
			$id=0;
		}
		if ($this->form_validation->run() == FALSE)
			{ $this->load->view('input_data_peng'); 
	}
		else
		{
			$this->model_datapeng->insertPeng($id);
			echo "<script> alert('Data Pengumuman berhasil ditambahkan'); window.location.href='../Data_pengumuman';</script>";
		}

	}

	public function update($id)
	{
		$this->load->model('model_datapeng');
		$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
		$this->form_validation->set_rules('isi', 'Isi', 'trim|required');
		$this->form_validation->set_rules('tgl_peng', 'Tanggal Pengumuman', 'trim|required');
		
		$data['data_pengumuman']=$this->model_datapeng->getPeng($id);

		if ($this->form_validation->run() == FALSE){
			$this->load->view('edit_data_peng', $data);
		}else{
			$this->model_datapeng->updateById($id);
			echo "<script> alert('Data Pengumuman berhasil diedit'); window.location.href='../../Data_pengumuman';</script>";

		}
	}

	public function delete($id)
	{
		$this->load->model('model_datapeng');
		$this->model_datapeng->delete($id);
		redirect('data_pengumuman');
	}
}
