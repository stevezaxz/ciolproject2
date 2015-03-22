<?php

class Adminc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata("is_login")) {
            redirect("Loginc/login");
        }
        $this->load->model("Adminm");
    }

    public function index() {
        $this->load->view("companyheader");
        $this->load->view("companymain");
        $this->load->view("companyfooter");
    }

    public function requestreg() {
        $result = $this->Adminm->getrequestreglist();
        $this->load->view("companyheader");
        $this->load->view("requestreg", $result);
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

//    public function getrequestreg() {
//        $result = $this->Adminm->getrequestreglist();
//        if($result) {
//            
//        }
//        else {
//            
//        }
////        print_r($result);
//    }
}
