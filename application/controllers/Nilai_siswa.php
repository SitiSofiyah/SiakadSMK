<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Nilai_siswa extends CI_Controller {


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
		$this->load->model('model_datapeng');
		$this->load->model('nilai_siswa_model');
		$session_data=$this->session->userdata("siswa");
		$nis=$session_data['nis'];
		$object['nis'] = $session_data['nis'];
		$object["pengumuman"] = $this->model_datapeng->getJmlPengumuman();
		$object["nilai"] = $this->nilai_siswa_model->getNilai_siswa($nis);
		$this->load->view('siswa/view_nilai_siswa',$object);
	}

	public function detail($id)
	{
		
		$this->load->model('nilai_model');
		$object["nilai"]=$this->nilai_model->detail($id);
		$this->load->view('guru/view_detail_nilai',$object); 
	}

	// public function print($nis)
	// {
	// 	$object =  $this->nilai_siswa_model->getNilai_siswa($nis);
	// 	foreach($object as $row){
	// 		$nis = $row->nis;
	// 		$nama = $row->nama;
	// 		$mapel = $row->nama_mapel;
	// 		$semester = $row->semester;
	// 		$thn = $row->thn_ajaran;
	// 		$uh1 = $row->UH1;
	// 		$uh2 = $row->UH2;
	// 		$uh3=$row->UH3;
	// 		$uh4=$row->UH4;
	// 		$uts =$row->UTS;
	// 		$uas = $row->UAS;
	// 		$rata = $row->rata;
	// 	}

	// 	$a = "Raport Siswa SMK Paramita Mojokerto";
	// 	$b = "--------------***------------------";
	// 	exec('echo'.$a.'> /dev/usb/lpl');
	// 	exec('echo'.$b.'> /dev/usb/lpl');
	// 	exec('echo Nis : '.$nis.'> /dev/usb/lpl');
	// 	exec('echo Nama : '.$nama.'> /dev/usb/lpl');
	// 	exec('echo Mapel : '.$mapel.'> /dev/usb/lpl');	
	// 	exec('echo Semester : '.$semester.'> /dev/usb/lpl');
	// 	exec('echo Nis : '.$thn.'> /dev/usb/lpl');
	// 	exec('echo'.$b.'> /dev/usb/lpl');	
	// 	exec('echo UH1 : '.$uh1.'> /dev/usb/lpl');
	// 	exec('echo UH2 : '.$uh2.'> /dev/usb/lpl');
	// 	exec('echo UH3 : '.$uh3.'> /dev/usb/lpl');	
	// 	exec('echo UH4 : '.$uh4.'> /dev/usb/lpl');
	// 	exec('echo UTS : '.$uts.'> /dev/usb/lpl');
	// 	exec('echo UAS : '.$uas.'> /dev/usb/lpl');
	// 	exec('echo Rata-Rata : '.$rata.'> /dev/usb/lpl');

	// 	redirect('Nilai_siswa','refresh');
	// }

}