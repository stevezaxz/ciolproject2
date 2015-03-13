<?php

class regm extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function registersupplier($tblcompany, $tblheadoffice, $contact_sales, $contact_procurement, $contact_account, $branches_contact_person, $branches_province, $branches_address, $branches_telephone, $branches_fax, $branches_email, $hook, $categories, $other_services) {

        $this->db->trans_begin();
        $this->db->insert('tblcompany', $tblcompany);
        $company_last_id = $this->db->insert_id();
        $this->db->insert('tblheadoffice', $tblheadoffice);
        $head_office_last_id = $this->db->insert_id();
        $this->db->insert('tblcompanyheadoffice', $tblcompanyheadoffice = array(
            'company_id' => $company_last_id,
            'head_office_id' => $head_office_last_id
        ));

        $this->db->insert('tblcontactperson', $contact_sales);
        $company_contact_person_last_id_sales = $this->db->insert_id();
        $this->db->insert('tblcompanycontactperson', $tblcompanycontactpersonsales = array(
            'company_id' => $company_last_id,
            'contact_person_id' => $company_contact_person_last_id_sales
        ));

        $this->db->insert('tblcontactperson', $contact_procurement);
        $company_contact_person_last_id_procurement = $this->db->insert_id();
        $this->db->insert('tblcompanycontactperson', $tblcompanycontactpersonprocurement = array(
            'company_id' => $company_last_id,
            'contact_person_id' => $company_contact_person_last_id_procurement
        ));

        $this->db->insert('tblcontactperson', $contact_account);
        $company_contact_person_last_id_account = $this->db->insert_id();
        $this->db->insert('tblcompanycontactperson', $tblcompanycontactpersonaccount = array(
            'company_id' => $company_last_id,
            'contact_person_id' => $company_contact_person_last_id_account
        ));

//         $branches_province, $branches_telephone, $branches_fax, $branches_email, $hook

        for ($x = 0; $x <= $hook; $x++) {
            $this->db->query("insert into tblbranches values('','$branches_contact_person[$x]','$branches_address[$x]','$branches_province[$x]','$branches_telephone[$x]','$branches_fax[$x]','$branches_email[$x]')");
            $branches_last_id = $this->db->insert_id();

            $this->db->insert('tblcompanybranches', $tblcompanybranches = array(
                'company_id' => $company_last_id,
                'branches_id' => $branches_last_id
            ));
        }
        $cat_array = array();
        foreach ($categories as $value) {
            $cat_array = explode("#", $value);
            $this->db->query("insert into tblcategory values('','$cat_array[0]','$cat_array[1]')");
            $tblcategory_last_id = $this->db->insert_id();
            $this->db->insert('tblcompanycategory', $tblcompanycategory = array(
                'company_id' => $company_last_id,
                'category_id' => $tblcategory_last_id
            ));
        }

        if (isset($other_services)) {
            foreach ($other_services as $services_value) {
                $this->db->insert('tblservices', $tblservices = array(
                    'services_id' => '',
                    'description' => $services_value
                ));
                $other_services_last_id = $this->db->insert_id();
                $this->db->insert('tblcompanyservices', $tblcompanyservices = array(
                    'company_id' => $company_last_id,
                    'services_id' => $other_services_last_id
                ));
            }
        }


        if ($this->db->trans_status() == FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
            return $company_last_id;
        }
    }

}
