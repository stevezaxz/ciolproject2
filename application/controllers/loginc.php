<?php

class loginc extends CI_Controller {

    public function login() {
        $data = array(
            'title' => 'Login'
        );
        $this->load->view('header', $data);
        $this->load->view('loginview');
    }

}
