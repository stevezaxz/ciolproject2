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

}
