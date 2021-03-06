<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class loginc extends CI_Controller {

    public function login() {
        $data = array(
            'title' => 'Login'
        );
        if ($this->session->has_userdata("is_login_admin")) {
            redirect("Adminc/index");
        } else if ($this->session->has_userdata("is_login_company")) {
            redirect("Companyc/index");
        } else {
            $this->load->view('loginview');
        }
    }

    public function auth() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->db->query("select  * from tblcompany where company_username='$username' and company_password= '" . md5($password) . "' and status='Active' and is_verified='1'");
        if ($query->num_rows() > 0) {
            $res = $query->result();
            $username = $res[2];
            $session_var = array(
                'username' => $username,
                'is_login_company' => TRUE
            );
            $this->session->set_userdata($session_var);
            redirect("Companyc/index");
        } else {
            $useradmin = $this->db->query("select * from tbluser  where username='$username' and password= '" . md5($password) . "'  and status='Active'");
            if ($useradmin->num_rows() > 0) {
                $res = $useradmin->result();
                $username = $res[2];
                $session_var = array(
                    'username' => $username,
                    'is_login_admin' => TRUE
                );
                $this->session->set_userdata($session_var);
                redirect("Adminc/index");
            } else {
                $data = array(
                    'incorrect_msg' => 'You must specify a valid username and password.'
                );
                $this->load->view("loginview", $data);
            }
        }
//        echo $query->num_rows();
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect("/");
    }

}
