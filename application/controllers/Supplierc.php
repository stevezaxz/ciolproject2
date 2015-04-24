<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplierc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Searchm");
        $this->load->model("Emailm");
    }

    public function supplierprofile($company_trade_name) {
        $results = $this->Searchm->getsupplierprofile($company_trade_name);
//        print_r($results);
//        echo count($results['photos']);
        $data = array(
            'title' => 'Suppliers Profile'
        );
        $this->load->view('header', $data);
        $this->load->view('supplierprofile', $results);
    }

    public function sendmessage() {
        $company_id = $this->input->post("company_id");
        $name = $this->input->post("name");
        $email = $this->input->post("email");
        $message = $this->input->post("message");
        $company_email = $this->input->post("company_email");
        if ($this->Searchm->setmessages($company_id, $name, $email, $message)) {
            echo "success";
            $this->Emailm->sendmailmessage($company_id, $name, $email, $message, $company_email);
        } else {
            echo "error";
        }
    }
    
   

}
