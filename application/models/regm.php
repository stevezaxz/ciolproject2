<?php

class regm extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function registersupplier($tblcompany) {

//        print_r($tblcompany);
        $this->db->insert('tblcompany', $tblcompany);
    }

}
