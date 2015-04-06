<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Companyc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata("is_login_company")) {
            redirect("Loginc/login");
        }
    }

    public function index() {
        $this->load->view("supplierheader");
        $this->load->view("suppliermain");
        $this->load->view("supplierfooter");
    }

}
