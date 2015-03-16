<?php

class supplierc extends CI_Controller {

    public function supplierprofile() {
        $data = array(
            'title' => 'Suppliers Profile'
        );
        $this->load->view('header', $data);
        $this->load->view('supplierprofile');
    }

}
