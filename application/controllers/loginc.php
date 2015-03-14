<?php

class loginc extends CI_Controller {

    public function login() {
        $data = array(
            'title' => 'Login'
        );
        $this->load->view('header', $data);
        $this->load->view('loginview');
    }

    public function auth() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->query("select  * from tblcompany");
        if ($query->num_rows() > 0) {
           $res = $query->result();
           $username = $res[2];
           
        } else {
            $useradmin = $this->db->query("select * from tbluseradmin");
            if ($useradmin->num_rows() > 0) {
                //proceed to admin 
            } else {
                //incorrect user account
            }
        }
    }

}
