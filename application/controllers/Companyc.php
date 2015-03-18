<?php

class Companyc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata("is_login")) {
            redirect("Loginc/login");
        }
    }

    public function index() {
        echo "asd";
    }

}
