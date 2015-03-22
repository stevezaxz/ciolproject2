<?php

class Adminm extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getrequestreglist() {
        $query = $this->db->query("select * From tblcompany where is_verified='0'");
        $result = array();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $value) {
                $results['requestreg'][] = $value;
            }
            return $results;
        } else {
            return 0;
        }
    }

}
