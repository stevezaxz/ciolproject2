<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Searchc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Searchm");
    }

    public function search() {
        $data = array(
            'title' => "Search Results"
        );
        $search_category = $this->input->post("search_category_hidden");
        $seach_item = $this->input->post("search_item");
        $seach_region = $this->input->post("search_region_hidden");
        $results = $this->Searchm->getsearch($search_category, $seach_item, $seach_region);
//        print_r($result);
        $results['searchkeyword'] = $seach_item;
        $this->load->view("header", $data);
        $this->load->view("searchresults", $results);
    }

}
