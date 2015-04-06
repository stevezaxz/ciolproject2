<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mainc extends CI_Controller {

    public function index() {
        $data = array(
            'title' => 'Welcome to Suppliers Netzwerk'
        );
        $this->load->view('header', $data);
        $this->load->view('home');
    }

}
