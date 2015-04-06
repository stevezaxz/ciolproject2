<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class aboutc extends CI_Controller {

    public function test() {
        $this->load->view('header');
        $this->load->view('aboutinfo');
    }

}
