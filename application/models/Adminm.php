<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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

    public function getcompanyfulldetails($company_id) {
        $result = array();
        $query1 = $this->db->query("select * From tblcompany where company_id = '$company_id'");

        foreach ($query1->result_array() as $value) {
            $result['companydetails'] = $value;
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
                $result['upload_details'][] = $uploads->upload_file_name . "-" . $upload_location;
            }
        }

        $query3 = $this->db->query("select b.description from tblcompany as a, tblservices as b, tblcompanyservices as c where a.company_id = c.company_id and b.services_id= c.services_id and a.company_id ='$company_id'");
        if ($query3->num_rows() > 0) {
            foreach ($query3->result_array() as $services) {
                $result['services'][] = $services;
            }
        }


        $query4 = $this->db->query("select b.* from tblcompany as a, tblheadoffice as b, tblcompanyheadoffice as c where a.company_id = c.company_id and b.head_office_id= c.head_office_id and a.company_id = '$company_id'");
        if ($query4->num_rows() > 0) {
            foreach ($query4->result_array() as $head_office) {
                $result['head_office'] = $head_office;
            }
        }

        $query5 = $this->db->query("select b.* from tblcompany as a, tblcontactperson as b, tblcompanycontactperson as c where a.company_id = c.company_id and b.contact_person_id= c.contact_person_id and a.company_id = '$company_id'");
        if ($query5->num_rows() > 0) {
            foreach ($query5->result_array() as $contact_person) {
                $result['contact_person'][] = $contact_person;
            }
        }


        $query6 = $this->db->query("select b.* from tblcompany as a, tblcategory as b, tblcompanycategory as c where a.company_id = c.company_id and b.category_id= c.category_id and a.company_id = '$company_id' order by category_name");
        if ($query6->num_rows() > 0) {
            foreach ($query6->result_array() as $category) {
                $result['category'][] = $category;
            }
        }

        $query7 = $this->db->query("select b.* from tblcompany as a, tblbranches as b, tblcompanybranches as c where a.company_id = c.company_id and b.branches_id= c.branches_id and a.company_id = '$company_id'");
        if ($query7->num_rows() > 0) {
            foreach ($query7->result_array() as $branches) {
                $result['branches'][] = $branches;
            }
        }


        return $result;
    }

    public function usernmanagementlist() {
        $query = $this->db->query("select * From tblcompany order by company_trade_name");
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $value) {
                $result['companylist'][] = $value;
            }
        }
        return $result;
    }

    public function editcompanystatus($company_id, $flag) {
        if ($flag == 1) {
            # if 1 update from active to inactive
            $query = $this->db->query("update tblcompany set status='Inactive' where company_id = '$company_id'");
        } elseif ($flag == 2) {
            # if 2 update from inactive to active
            $query = $this->db->query("update tblcompany set status='Active' where company_id = '$company_id'");
        }
        return $query;
    }

}
