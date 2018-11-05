<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

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
		$user = $this->session->userdata('siswa');

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
		$this->load->model('siswa_model');
		$session_data=$this->session->userdata("siswa");
		$nis=$session_data['nis'];
		$object["siswa"] = $this->siswa_model->getSiswa($nis);
		$this->load->view('siswa/view_profil_siswa', $object);
	}

	public function notify()
	{
		$this->load->model('model_datapeng');
		$object["pengumuman"] = $this->model_datapeng->getNotifPengumuman();
		$this->load->view('siswa/view_notify',$object);
	}
}
