<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

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
		$this->load->model('guru_model');
		$session_data=$this->session->userdata("guru");
		$nip=$session_data['nip'];
		$object["guru"] = $this->guru_model->getGuru($nip);
		$this->load->view('guru/view_profil_guru',$object);
	}

	public function siswa()
	{
		$this->load->model('model_datapeng');
		$object["pengumuman"] = $this->model_datapeng->getJmlPengumuman();
		$this->load->model('model_datasiswa');
		$session_data=$this->session->userdata("guru");
		$nip=$session_data['nip'];
		$object["siswa"] = $this->model_datasiswa->getDataSiswa($nip);
		$this->load->view('guru/view_data_siswa',$object);
	}

	public function notify()
	{
		$this->load->model('model_datapeng');
		$object["pengumuman"] = $this->model_datapeng->getJmlPengumuman();
		$object["pengumumann"] = $this->model_datapeng->getNotifPengumuman();
		$this->load->view('guru/view_notify',$object);
	}
}
