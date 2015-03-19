<?php

class Adminc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata("is_login")) {
            redirect("Loginc/login");
        }
    }

    public function index() {
        $this->load->view("companyheader");
        $this->load->view("companymain");
        $this->load->view("companyfooter");
    }

    public function requestreg() {
        $this->load->view("companyheader");
        $this->load->view("requestreg");
        $this->load->view("companyfooter");
    }

    public function requestup() {
        $this->load->view("companyheader");
        $this->load->view("requestup");
        $this->load->view("companyfooter");
    }

    public function usermanage() {
        $this->load->view("companyheader");
        $this->load->view("usermanage");
        $this->load->view("companyfooter");
    }

    public function featuredsupplier() {
        $this->load->view("companyheader");
        $this->load->view("featuredsupplier");
        $this->load->view("companyfooter");
    }

}
