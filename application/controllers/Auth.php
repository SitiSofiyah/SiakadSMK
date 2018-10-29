<?php

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('login_siswa');
        $this->load->model('login_guru');

    }

    function index() {
        $this->load->view('login');
    }

    function chek_login() {
        if (isset($_POST['submit'])) {
            // proses login disini

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $login_siswa = $this->login_siswa->chekLogin($username, $password);
            $login_guru = $this->login_guru->chekLogin($username, $password);
            if (!empty($login_siswa)) {
                // sukses login user

                $this->session->set_userdata('siswa',$login_siswa);
                redirect('Siswa');
            } elseif (!empty($login_guru)) {
                // login guru
                $session = array(
                    'nama'  =>  $login_guru['nama'],
                    'nip'       =>  $login_guru['nip']);
                $this->session->set_userdata('guru',$session);
               redirect('Guru');
            } else {
                // gagal login
                redirect('auth');
            }
        } else {
            redirect('auth');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }

}