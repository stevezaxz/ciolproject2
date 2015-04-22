<?php

class Searchm extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getsearch($search_category, $seach_item, $seach_region) {
//        $query = $this->db->query("select distinct(a.company_id),a.* 
//            from tblcompany as a, tblcategory as b, tblheadoffice as c, tblbranches as d,
//            tblcompanycategory as e, tblcompanyheadoffice as f, tblcompanybranches as g where
//            a.company_id = e.company_id and b.category_id = e.category_id and a.company_id = f.company_id 
//            and c.head_office_id = f.head_office_id and a.company_id = g.company_id and 
//            d.branches_id = g.branches_id and (c.head_office_address like '%Cagayan de oro%' or
//            d.branches_address like '%cagayan de oro%' ) and b.category_name like '%electrical%' and b.category_sub_cat like '%fasteners%' and a.is_verified='1' and status='Active'");
        $query = $this->db->query("select distinct(a.company_id),a.*,h.*
            from tblcompany as a, tblcategory as b, tblheadoffice as c, tblbranches as d,
            tblcompanycategory as e, tblcompanyheadoffice as f, tblcompanybranches as g, tblphotos as h, tblcompanyphotos i where
            a.company_id = e.company_id and b.category_id = e.category_id and a.company_id = f.company_id 
            and c.head_office_id = f.head_office_id and a.company_id = g.company_id and 
            d.branches_id = g.branches_id and a.company_id = i.company_id and h.photos_id = i.photos_id and (c.head_office_address like '%$seach_region%' or
            d.branches_address like '%$seach_region%' ) and b.category_name like '%$search_category%' and b.category_sub_cat like '%$seach_item%' and a.is_verified='1' and status='Active'");
        $result;
        $flag = 0;
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $value) {
                if ($flag != $value['company_id']) {
                    $result['searchresults'][] = $value;
                    $flag = $value['company_id'];
                } elseif ($flag == $value['company_id']) {
                    $flag = $value['company_id'];
                    continue;
                }
            }
            return $result;
        } else
            return false;
    }

    public function getsupplierprofile($company_trade_name) {
        $result = array();
        $query1 = $this->db->query("select * From tblcompany where company_trade_name = '$company_trade_name'");

        foreach ($query1->result_array() as $value) {
            $result['companydetails'] = $value;
        }

        $query2 = $this->db->query("SELECT b.upload_file_name,b.upload_file_location
                        FROM tblcompany AS a, tbluploads AS b, tblcompanyuploads AS c
                       WHERE     a.company_id = c.company_id
                             AND b.upload_id = c.upload_id
                             AND a.company_trade_name = '$company_trade_name'");
        if ($query2->num_rows() > 0) {
            foreach ($query2->result() as $uploads) {
                $upload_file_loc_array = explode("/", $uploads->upload_file_location);
                $upload_location = $upload_file_loc_array[4] . "/" . $upload_file_loc_array[5] . "/" . $upload_file_loc_array[6];
                $result['upload_details'][] = $uploads->upload_file_name . "-" . $upload_location;
            }
        }

        $query3 = $this->db->query("select b.description from tblcompany as a, tblservices as b, tblcompanyservices as c where a.company_id = c.company_id and b.services_id= c.services_id and a.company_trade_name ='$company_trade_name'");
        if ($query3->num_rows() > 0) {
            foreach ($query3->result_array() as $services) {
                $result['services'][] = $services;
            }
        }

        $query4 = $this->db->query("select b.* from tblcompany as a, tblheadoffice as b, tblcompanyheadoffice as c where a.company_id = c.company_id and b.head_office_id= c.head_office_id and a.company_trade_name = '$company_trade_name'");
        if ($query4->num_rows() > 0) {
            foreach ($query4->result_array() as $head_office) {
                $result['head_office'] = $head_office;
            }
        }

        $query5 = $this->db->query("select b.* from tblcompany as a, tblcontactperson as b, tblcompanycontactperson as c where a.company_id = c.company_id and b.contact_person_id= c.contact_person_id and a.company_trade_name = '$company_trade_name'");
        if ($query5->num_rows() > 0) {
            foreach ($query5->result_array() as $contact_person) {
                $result['contact_person'][] = $contact_person;
            }
        }

        $query6 = $this->db->query("select b.* from tblcompany as a, tblcategory as b, tblcompanycategory as c where a.company_id = c.company_id and b.category_id= c.category_id and a.company_trade_name = '$company_trade_name' order by category_name");
        if ($query6->num_rows() > 0) {
            foreach ($query6->result_array() as $category) {
                $result['category'][] = $category;
            }
        }

        $query7 = $this->db->query("select b.* from tblcompany as a, tblbranches as b, tblcompanybranches as c where a.company_id = c.company_id and b.branches_id= c.branches_id and a.company_trade_name = '$company_trade_name'");
        if ($query7->num_rows() > 0) {
            foreach ($query7->result_array() as $branches) {
                $result['branches'][] = $branches;
            }
        }

        $query8 = $this->db->query("select b.* from tblcompany as a, tblphotos as b, tblcompanyphotos as c where a.company_id = c.company_id and b.photos_id= c.photos_id and a.company_trade_name = '$company_trade_name' and b.deleted='0'");

        if ($query8->num_rows() > 0) {
            foreach ($query8->result_array() as $photos) {
                $result['photos'][] = $photos;
            }
        }

        return $result;
    }

}
