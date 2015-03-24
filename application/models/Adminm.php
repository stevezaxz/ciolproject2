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

    public function getcompanydetails($company_id) {
        $array = array();
        $query = $this->db->query("select * From tblcompany where company_id ='$company_id' ");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $array = array(
                    'company_registrants_name' => $value->company_registrants_name,
                    'company_username' => $value->company_username,
                    'company_trade_name' => $value->company_trade_name,
                    'company_tin' => $value->company_tin,
                    'company_bir_registration_no' => $value->company_bir_registration_no,
                    'company_website' => $value->company_website,
                    'company_history' => $value->company_history
                );
            }
            return $array;
        } else
            return false;
    }

    public function approvecompany($company_id) {
        $this->db->trans_begin();
        $query = $this->db->query("update tblcompany set is_verified ='1' where company_id = '$company_id' ");
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

}
