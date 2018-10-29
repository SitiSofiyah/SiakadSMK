<?php

class Login_siswa extends CI_Model {

    public $table ="siswa";
    
    function save() {
        $data = array(
            'nis'      => $this->input->post('nis', TRUE),
            'username'  => $this->input->post('username', TRUE),
            'password'   => md5($this->input->post('password', TRUE))
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'nis'      => $this->input->post('nis', TRUE),
            'username'  => $this->input->post('username', TRUE),
            'password'  => $this->input->post('password', TRUE)

        );
        $nis   = $this->input->post('nis');
        $this->db->where('nis',$nis);
        $this->db->update($this->table,$data);
    }
    
    function chekLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('siswa')->row_array();
        return $user;
    }

}