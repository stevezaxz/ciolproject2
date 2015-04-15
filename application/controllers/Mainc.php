<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mainc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Adminm");
    }

    public function index() {
        $data = array(
            'title' => 'Welcome to Suppliers Netzwerk'
        );
        $result = $this->Adminm->gethomeimage();
        $this->load->view('header', $data);
        $this->load->view('home', $result);
    }

}
