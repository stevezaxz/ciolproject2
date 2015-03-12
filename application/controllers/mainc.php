<?php

class mainc extends CI_Controller {

    public function index() {
        $data = array(
            'title' => 'Welcome to Suppliers Netzwerk'
        );
        $this->load->view('header', $data);
        $this->load->view('home');
    }

}
