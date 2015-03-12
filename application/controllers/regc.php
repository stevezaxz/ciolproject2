<?php

class regc extends CI_Controller {

    public function index() {
        $data = array(
            'title' => 'Registration'
        );
        $this->load->view('header', $data);
        $this->load->view('registration');
    }

    public function register() {
        $registrants_name = $this->input->post('registrants_name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $business_trade_name = $this->input->post('business_trade_name');
        $tin_no = $this->input->post('tin_no');
        $bir = $this->input->post('bir');

        $overview_history = $this->input->post('overview_history');
        $contact_person_sales_name = $this->input->post('contact_person_sales_name');
        $contact_person_sales_telephone = $this->input->post('contact_person_sales_telephone');
        $contact_person_sales_fax = $this->input->post('contact_person_sales_fax');
        $contact_person_sales_email = $this->input->post('contact_person_sales_email');
        $contact_person_sales_mobile_1 = $this->input->post('contact_person_sales_mobile_1');

        $contact_person_sales_mobile_2 = $this->input->post('contact_person_sales_mobile_2');
        $contact_person_procurement_name = $this->input->post('contact_person_procurement_name');
        $contact_person_procurement_telephone = $this->input->post('contact_person_procurement_telephone');
        $contact_person_procurement_fax = $this->input->post('contact_person_procurement_fax');
        $contact_person_procurement_email = $this->input->post('contact_person_procurement_email');
        $contact_person_procurement_mobile_1 = $this->input->post('contact_person_procurement_mobile_1');
        $contact_person_procurement_mobile_2 = $this->input->post('contact_person_procurement_mobile_2');
        $contact_person_account_name = $this->input->post('contact_person_account_name');
        $contact_person_account_telephone = $this->input->post('contact_person_account_telephone');
        $contact_person_account_fax = $this->input->post('contact_person_account_fax');
        $contact_person_account_email = $this->input->post('contact_person_account_email');
        $contact_person_account_mobile_1 = $this->input->post('contact_person_account_mobile_1');
        $contact_person_account_mobile_2 = $this->input->post('contact_person_account_mobile_2');


        $hook = $this->input->post('hook');
        $branches_contact_person = array();
        $branches_address = array();
        $branches_city_municipality = array();
        $branches_province = array();
        $branches_region = array();
        $branches_zip = array();
        $branches_telephone = array();
        $branches_fax = array();
        $branches_email = array();
        for ($x = 0; $x <= $hook; $x++) {
            $branches_contact_person[] = $this->input->post("branches_contact_person_" . $x);
            $branches_address[] = $this->input->post("branches_address_" . $x);
            $branches_province[] = $this->input->post("branches_province_" . $x);
            $branches_telephone[] = $this->input->post("branches_telephone_" . $x);
            $branches_fax[] = $this->input->post("branches_fax_" . $x);
            $branches_email[] = $this->input->post("branches_email_" . $x);
        }

        $categories = $this->input->post("subcat");
        print_r($categories);
       
    }

}
