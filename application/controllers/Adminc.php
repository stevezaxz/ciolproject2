<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Adminc extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->has_userdata("is_login_admin")) {
            redirect("Loginc/login");
        }
        $this->load->model("Adminm");
    }

    public function index() {
        $this->load->view("companyheader");
        $this->load->view("companymain");
        $this->load->view("companyfooter");
    }

    public function requestreg() {
        $result = $this->Adminm->getrequestreglist();
        $this->load->view("companyheader");
        $this->load->view("requestreg", $result);
        $this->load->view("companyfooter");
    }

    public function requestup() {
        $this->load->view("companyheader");
        $this->load->view("requestup");
        $this->load->view("companyfooter");
    }

    public function usermanage() {
        $this->load->view("companyheader");
        $result = $this->Adminm->usernmanagementlist();
        $this->load->view("usermanage", $result);
        $this->load->view("companyfooter");
    }

    public function featuredsupplier() {
        $this->load->view("companyheader");
        $this->load->view("featuredsupplier");
        $this->load->view("companyfooter");
    }

    public function getcompanydetails() {
        $company_id = $this->input->post("company_id");
        $result = $this->Adminm->getcompanydetails($company_id);
        echo json_encode($result);
    }

    public function approvecompany() {
        $company_id = $this->input->post("company_id");
        $result = $this->Adminm->approvecompany($company_id);
        if ($result) {
            echo 'success';
            $this->sendmail($company_id);
        } else {
            echo 'failed';
        }
    }

    public function disapprovecompany() {
        $company_id = $this->input->post("company_id");
        $result = $this->Adminm->disapprovecompany($company_id);
        if ($result) {
            echo 'success';
        } else {
            echo 'failed';
        }
    }

    public function viewcompanyprofile() {
        $result = $this->Adminm->getcompanylist();
        $this->load->view("companyheader");
        $this->load->view("viewcompanyprofile", $result);
        $this->load->view("companyfooter");
    }

    public function viewcompanydetails() {
        $company_id = $this->input->post("company_id");
        $result = $this->Adminm->getcompanyfulldetails($company_id);
        $this->load->view("companyheader");
        $this->load->view("viewcompanydetails", $result);
        $this->load->view("companyfooter");
    }

    public function sendmail($company_id) {
//        $company_id = 58;
        $query = $this->db->query("select a.company_username,b.head_office_email from tblcompany as a, tblheadoffice as b, tblcompanyheadoffice as c where a.company_id = c.company_id and b.head_office_id = c.head_office_id and a.company_id = '$company_id'");
        $row = $query->row();
        $company_username = $row->company_username;
        $company_email = $row->head_office_email;
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
        $this->email->to($company_email);
        $this->email->subject('Netzwerk Registration ');
        $this->email->message("<html>
                    
                                        <body>
Dear " . $company_username . ",\n

<p>
Your account has been successfully activated in our site. You can now log-on into your profile.</p>
                                        </body>

                                   </html>");
        $this->email->send();
    }

    public function editcompanystatus() {
        $company_id = $this->input->post("company_id");
        $flag = $this->input->post("flag");

        $result = $this->Adminm->editcompanystatus($company_id, $flag);
        if ($result) {
            echo "Company Status Updated";
        } else {
            echo "Company Status not Updated";
        }
    }

}
