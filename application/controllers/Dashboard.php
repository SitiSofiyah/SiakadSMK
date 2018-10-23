<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$this->load->model('dash_model');
		$data['jml_jur']=$this->dash_model->getListJur();
		$data['jml_peng']=$this->dash_model->getListPeng();
		$data['jml_guru']=$this->dash_model->getListGuru();
		$data['jml_kelas']=$this->dash_model->getListKelas();
		$data['jml_siswa']=$this->dash_model->getListSiswa();
		$data['jml_mapel']=$this->dash_model->getListMapel();
		$this->load->view('admin/admin_dash', $data);

	}
}
