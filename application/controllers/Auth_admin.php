<?php

class Auth_admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Login_admin');
    }

    function index() {
        $this->load->view('admin/login');
    }

    function chek_login() {
        if (isset($_POST['submit'])) {
            // proses login disini

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $loginadmin = $this->Login_admin->chekLogin($username, $password);
            if (!empty($loginadmin)) {
    
                $this->session->set_userdata('admin',$loginadmin);
                redirect('dashboard');
            } else {
                
                redirect('auth_admin');
            }
    }}

    function logout() {
        $this->session->sess_destroy();
        redirect('auth_admin');
        
    }


}