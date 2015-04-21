<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplierc extends CI_Controller {

    public function supplierprofile() {
        $data = array(
            'title' => 'Suppliers Profile'
        );
        $this->load->view('header', $data);
        $this->load->view('supplierprofile');
    }

}
