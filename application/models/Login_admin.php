<?php

class Login_admin extends CI_Model {

    public $table ="admin";
    
    function save() {
        $data = array(
            'id_user'      => $this->input->post('id_user', TRUE),
            'username'  => $this->input->post('username', TRUE),
            'password'   => md5($this->input->post('password', TRUE))
        ); 
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'id_admin'      => $this->input->post('id_admin', TRUE),
            'username'  => $this->input->post('username', TRUE),
            'password'  => $this->input->post('password', TRUE)

        );
        $id_admin   = $this->input->post('id_admin');
        $this->db->where('id_admin',$id_admin);
        $this->db->update($this->table,$data);
    }
    
    function chekLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('admin')->row_array();
        return $user;
    }

}