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

    public function getcompanylist() {
        $query = $this->db->query("select * From tblcompany");
        $result = array();
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $value) {
                $results['companylist'][] = $value;
            }
            return $results;
        } else {
            return 0;
        }
    }

    public function getcompanydetails($company_id) {
//        $array = array();
//        $query = $this->db->query("select * From tblcompany where company_id ='$company_id' ");
//        if ($query->num_rows() > 0) {
//            foreach ($query->result() as $value) {
//                $array = array(
//                    'company_registrants_name' => $value->company_registrants_name,
//                    'company_username' => $value->company_username,
//                    'company_trade_name' => $value->company_trade_name,
//                    'company_tin' => $value->company_tin,
//                    'company_bir_registration_no' => $value->company_bir_registration_no,
//                    'company_website' => $value->company_website,
//                    'company_history' => $value->company_history
//                );
//            }
//            return $array;
//        } else
//            return false;
        $array = array();
        $query = $this->db->query("SELECT a.*, b.*
                FROM tblcompany AS a, tblheadoffice AS b, tblcompanyheadoffice AS c
               WHERE     a.company_id = c.company_id
                     AND b.head_office_id = c.head_office_id
                     AND a.company_id = '$company_id'");


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $array = array(
                    'company_registrants_name' => $value->company_registrants_name,
                    'company_username' => $value->company_username,
                    'company_trade_name' => $value->company_trade_name,
                    'company_tin' => $value->company_tin,
                    'company_bir_registration_no' => $value->company_bir_registration_no,
                    'company_website' => $value->company_website,
                    'company_history' => $value->company_history,
                    'head_office_address' => $value->head_office_address,
                    'head_office_city_municipality' => $value->head_office_city_municipality,
                    'head_office_province' => $value->head_office_province,
                    'head_office_region' => $value->head_office_region,
                    'head_office_zip' => $value->head_office_zip,
                    'head_office_telephone' => $value->head_office_telephone,
                    'head_office_fax' => $value->head_office_fax,
                    'head_office_email' => $value->head_office_email,
                );
            }

            $query1 = $this->db->query("SELECT  distinct(b.category_name)
                        FROM tblcompany AS a, tblcategory AS b, tblcompanycategory AS c
                       WHERE     a.company_id = c.company_id
                             AND b.category_id = c.category_id
                       AND a.company_id = '$company_id' order by category_name");

            foreach ($query1->result() as $category) {
                $array['category_name'][] = $category->category_name;
            }

            $query2 = $this->db->query("SELECT b.upload_file_name,b.upload_file_location
                        FROM tblcompany AS a, tbluploads AS b, tblcompanyuploads AS c
                       WHERE     a.company_id = c.company_id
                             AND b.upload_id = c.upload_id
                             AND a.company_id = '$company_id'");
            if ($query2->num_rows() > 0) {
                foreach ($query2->result() as $uploads) {
                    $upload_file_loc_array = explode("/", $uploads->upload_file_location);
                    $upload_location = $upload_file_loc_array[4] . "/" . $upload_file_loc_array[5] . "/" . $upload_file_loc_array[6];
                    $array['upload_details'][] = $uploads->upload_file_name . "-" . $upload_location;
                }
            }

            return $array;
        }
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

    public function disapprovecompany($company_id) {
        $this->db->trans_begin();
        $query = $this->db->query("update tblcompany set is_verified ='2' where company_id = '$company_id' ");
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

}
