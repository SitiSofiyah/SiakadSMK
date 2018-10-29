<?php

class Login_guru extends CI_Model {

    public $table ="guru";
    
    function save() {
        $data = array(
            'nip'      => $this->input->post('nip', TRUE),
            'username'  => $this->input->post('username', TRUE),
            'password'   => md5($this->input->post('password', TRUE))
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'nip'      => $this->input->post('nip', TRUE),
            'username'  => $this->input->post('username', TRUE),
            'password'  => $this->input->post('password', TRUE)

        );
        $nip   = $this->input->post('nip');
        $this->db->where('nip',$nip);
        $this->db->update($this->table,$data);
    }
    
    function chekLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('guru')->row_array();
        return $user;
    }

}