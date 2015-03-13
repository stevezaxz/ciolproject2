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
        $this->load->model('regm');
        $registrants_name = $this->input->post('registrants_name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $business_trade_name = $this->input->post('business_trade_name');
        $tin_no = $this->input->post('tin_no');
        $bir = $this->input->post('bir');
        $website = $this->input->post('website');
        $overview_history = $this->input->post('overview_history');

        $tblcompany = array(
            'company_id' => '',
            'company_registrants_name' => $registrants_name,
            'company_username' => $username,
            'company_password' => $password,
            'company_trade_name' => $business_trade_name,
            'company_tin' => $tin_no,
            'company_bir_registration_no' => $bir,
            'company_website' => $website,
            'company_history' => $overview_history
        );

        $head_office_address = $this->input->post('head_office_address');
        $head_office_city_municipality = $this->input->post('head_office_city_municipality');
        $head_office_province = $this->input->post('head_office_province');
        $head_office_region = $this->input->post('head_office_region');
        $head_office_zip = $this->input->post('head_office_zip');
        $head_office_telephone = $this->input->post('head_office_telephone');
        $head_office_fax = $this->input->post('head_office_fax');
        $head_office_email = $this->input->post('head_office_email');

        $tblheadoffice = array(
            'head_office_id' => '',
            'head_office_address' => $head_office_address,
            'head_office_city_municipality' => $head_office_city_municipality,
            'head_office_province' => $head_office_province,
            'head_office_region' => $head_office_region,
            'head_office_zip' => $head_office_zip,
            'head_office_telephone' => $head_office_telephone,
            'head_office_fax' => $head_office_fax,
            'head_office_email' => $head_office_email
        );

        $contact_person_sales_name = $this->input->post('contact_person_sales_name');
        $contact_person_sales_telephone = $this->input->post('contact_person_sales_telephone');
        $contact_person_sales_fax = $this->input->post('contact_person_sales_fax');
        $contact_person_sales_email = $this->input->post('contact_person_sales_email');
        $contact_person_sales_mobile_1 = $this->input->post('contact_person_sales_mobile_1');
        $contact_person_sales_mobile_2 = $this->input->post('contact_person_sales_mobile_2');

        $contact_sales = array(
            'contact_person_id' => '',
            'contact_person_name' => $contact_person_sales_name,
            'contact_person_department' => 'Sales',
            'contact_person_telephone' => $contact_person_sales_telephone,
            'contact_person_fax' => $contact_person_sales_fax,
            'contact_person_email' => $contact_person_sales_email,
            'contact_person_mobile1' => $contact_person_sales_mobile_1,
            'contact_person_mobile2' => $contact_person_sales_mobile_2
        );

        $contact_person_procurement_name = $this->input->post('contact_person_procurement_name');
        $contact_person_procurement_telephone = $this->input->post('contact_person_procurement_telephone');
        $contact_person_procurement_fax = $this->input->post('contact_person_procurement_fax');
        $contact_person_procurement_email = $this->input->post('contact_person_procurement_email');
        $contact_person_procurement_mobile_1 = $this->input->post('contact_person_procurement_mobile_1');
        $contact_person_procurement_mobile_2 = $this->input->post('contact_person_procurement_mobile_2');

        $contact_procurement = array(
            'contact_person_id' => '',
            'contact_person_name' => $contact_person_procurement_name,
            'contact_person_department' => 'Procurement',
            'contact_person_telephone' => $contact_person_procurement_telephone,
            'contact_person_fax' => $contact_person_procurement_fax,
            'contact_person_email' => $contact_person_procurement_email,
            'contact_person_mobile1' => $contact_person_procurement_mobile_1,
            'contact_person_mobile2' => $contact_person_procurement_mobile_2
        );

        $contact_person_account_name = $this->input->post('contact_person_account_name');
        $contact_person_account_telephone = $this->input->post('contact_person_account_telephone');
        $contact_person_account_fax = $this->input->post('contact_person_account_fax');
        $contact_person_account_email = $this->input->post('contact_person_account_email');
        $contact_person_account_mobile_1 = $this->input->post('contact_person_account_mobile_1');
        $contact_person_account_mobile_2 = $this->input->post('contact_person_account_mobile_2');

        $contact_account = array(
            'contact_person_id' => '',
            'contact_person_name' => $contact_person_account_name,
            'contact_person_department' => 'Account',
            'contact_person_telephone' => $contact_person_account_telephone,
            'contact_person_fax' => $contact_person_account_fax,
            'contact_person_email' => $contact_person_account_email,
            'contact_person_mobile1' => $contact_person_account_mobile_1,
            'contact_person_mobile2' => $contact_person_account_mobile_2
        );

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
//        print_r($categories);

        $other_services = $this->input->post("other_services");
//        print_r($other_services);
        $return_id = $this->regm->registersupplier($tblcompany, $tblheadoffice, $contact_sales, $contact_procurement, $contact_account, $branches_contact_person, $branches_address, $branches_province, $branches_telephone, $branches_fax, $branches_email, $hook, $categories, $other_services);

        if ($return_id) {
            $this->load->view("successpage");
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'nevetsjohn@gmail.com',
                'smtp_pass' => '10118023603aAaAqQ',
                'mailtype' => 'html',
                'charset' => 'iso-8859-1'
            );
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $this->email->from('nevetsjohn@gmail.com', 'Netzwerk Suppliers Network');
            $this->email->to($head_office_email);

            $this->email->subject('Netzwerk Registration ');
            $this->email->message("<html>
                    
                                        <body>
                                            Company: " . $registrants_name . "
                                            Company ID: " . $return_id . "
                                        </body>

                                   </html>");

            $this->email->send();
        } else {
            
        }
    }

    public function testmail() {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'nevetsjohn@gmail.com',
            'smtp_pass' => '10118023603aAaAqQ',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('nevetsjohn@gmail.com', 'Steven');
        $this->email->to('nevetsjohn@live.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

// Set to, from, message, etc.
//        $result = $this->email->send();
    }

}
