<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplierc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Searchm");
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

}
