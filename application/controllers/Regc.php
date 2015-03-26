<?php

class regc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Regm');
    }

    public function index() {
        $data = array(
            'title' => 'Registration'
        );
        $this->load->view('header', $data);
        $this->load->view('registration');
    }

    public function register() {
        $business_trade_name = $this->input->post('business_trade_name');
        $base_url = base_url("uploads");
        mkdir("uploads/" . $business_trade_name);
        $config['upload_path'] = "uploads/" . $business_trade_name;
        $config['allowed_types'] = 'doc|docx|pdf|gif|jpg|png|txt';
        $config['overwrite'] = 'true';
        $config['max_size'] = '24048000';

        $this->load->library("upload", $config);
        $this->upload->initialize($config);

        $uploads = array();
        for ($x = 0; $x <= 2; $x++) {
            if ($this->upload->do_upload("upload" . $x)) {

                $uploads[] = array(
                    'upload_file_name' => $this->upload->data("file_name"),
                    'upload_file_location' => $this->upload->data("full_path"),
                );
            }
        }

        $registrants_name = $this->input->post('registrants_name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $tin_no = $this->input->post('tin_no');
        $bir = $this->input->post('bir');
        $website = $this->input->post('website');
        $overview_history = $this->input->post('overview_history');

        $tblcompany = array(
            'company_id' => '',
            'company_registrants_name' => $registrants_name,
            'company_username' => $username,
            'company_password' => md5($password),
            'company_trade_name' => $business_trade_name,
            'company_tin' => $tin_no,
            'company_bir_registration_no' => $bir,
            'company_website' => $website,
            'company_history' => $overview_history,
            'is_verified' => '0',
            'status' => 'Active'
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
        $other_services = $this->input->post("other_services");
//        $return_id = $this->Regm->registersupplier($tblcompany, $tblheadoffice, $contact_sales, $contact_procurement, $contact_account, $branches_contact_person, $branches_address, $branches_province, $branches_telephone, $branches_fax, $branches_email, $hook, $categories, $other_services, $uploads);
//        if ($return_id) {
//            $this->sendemailclient($head_office_email, $username, $return_id);
////            $this->sendemailadmin($username, $return_id);
//        } else {
//            $data = array(
//                'heading' => 'Registration error',
//                'message' => '<p>There was an error encountered. Please try again.</p>'
//            );
//            $this->load->view("errors/html/error_general", $data);
//        }
    }

    public function checkusername() {

        $username = $this->input->post('username');
        if ($this->Regm->checkusername($username)) {
            echo 1; //Username already exist
        } else {
            echo 0;
        }
    }

    public function testerror() {
        $data = array(
            'heading' => 'Registration error',
            'message' => '<p>There was an error encountered. Please try again.</p>'
        );
        $this->load->view("errors/html/error_general", $data);
    }

    public function sendemailclient($head_office_email, $username, $return_id) {
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
Dear " . $username . ",\n

<p>We have received your registration to join the Supplier's Network. We thank you for the interest you've shown in our company.

Please be informed that we are in the midst of processing the applications and shall get in touch with you again once your profile is already verified and advertised in our site. 

You will receive an email containing a successful notification.</p>
                                        </body>

                                   </html>");

        $this->email->send();
        $this->email->clear();
        $this->email->from('nevetsjohn@gmail.com', 'Netzwerk Suppliers Network');
        $this->email->to('nevetsjohn@gmail.com'); #ADMIN EMAIL ADDRESS

        $this->email->subject('Netzwerk Registration ');
        $this->email->message("<html>
                    
                                        <body>
                Username " . $username . ",\n
                Company ID " . $return_id . ",\n
                 <p>This user needs confirmation, check on the admin module</p>
                                        </body>

                                   </html>");

        $this->email->send();
    }

    public function sendemailadmin($username, $return_id) {
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
        $this->email->to('nevetsjohn@gmail.com'); #ADMIN EMAIL ADDRESS

        $this->email->subject('Netzwerk Registration ');
        $this->email->message("<html>
                    
                                        <body>
                Username " . $username . ",\n
                Company ID " . $return_id . ",\n
                 <p>This user needs confirmation, check on the admin module</p>
                                        </body>

                                   </html>");

        $this->email->send();
    }

}
