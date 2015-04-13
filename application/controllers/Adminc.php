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

    public function featuredsupplier($message = null) {
        $results = $this->Adminm->getads();
        $this->load->view("companyheader");
        $this->load->view("featuredsupplier", $results);
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

    public function uploadads() {
        $base_url = base_url("ads");
        $config['upload_path'] = "ads/";
        $config['allowed_types'] = 'gif|jpg|png';
        $config['overwrite'] = 'true';
        $config['max_size'] = '24048000';
        $this->load->library("upload", $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload("uploadads1")) {

            $message = array(
                'message' => $this->upload->display_errors(),
                'flag' => "error"
            );
//            $this->featuredsupplier($message);
            redirect("Adminc/featuredsupplier");
        } else {
            $upload_file_name = $this->upload->data("file_name");
            $upload_file_location = $this->upload->data("full_path");
//            echo $upload_file_name . " " . $upload_file_location;
            $this->Adminm->setuploadads($upload_file_name, $upload_file_location);

            $message = array(
                'message' => $this->upload->display_errors(),
                'flag' => "success"
            );
//            $this->featuredsupplier($message);  
            redirect("Adminc/featuredsupplier");
        }
    }

    public function setads() {
        $ads_id = $this->input->post("ads_id");
        $ads_description = $this->input->post("ads_description");
        $ads_title = $this->input->post("ads_title");

        if ($this->Adminm->setads($ads_id, $ads_description, $ads_title)) {
            echo "success";
        } else {
            echo "error";
        }
    }

    public function getadsdetail() {
        $ads_id = $this->input->post("ads_id");
        $result = $this->Adminm->getadsdetail($ads_id);
        echo json_encode($result);
//        echo $ads_id;
    }

    public function uploadphotos() {
        $company_id = $this->input->post("company_id_upload");
        $company_name = $this->input->post("company_id_name");

        if (!is_dir("photos/$company_name")) {
            mkdir("photos/$company_name");
            $config['upload_path'] = "photos/$company_name";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = 'true';
            $config['max_size'] = '24048000';
            $this->load->library("upload", $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload("uploadads1")) {
                $message = array(
                    'message' => $this->upload->display_errors(),
                    'flag' => "error"
                );
                redirect("Adminc/viewcompanyprofile");
            } else {
                $upload_file_name = $this->upload->data("file_name");
                $upload_file_location = $this->upload->data("full_path");
                $this->Adminm->setuploadphotos($upload_file_name, $upload_file_location);
                $message = array(
                    'message' => $this->upload->display_errors(),
                    'flag' => "success"
                );
                redirect("Adminc/viewcompanyprofile");
            }
        } else {
            $config['upload_path'] = "photos/$company_name";
            $config['allowed_types'] = 'gif|jpg|png';
            $config['overwrite'] = 'true';
            $config['max_size'] = '24048000';
            $this->load->library("upload", $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload("uploadads1")) {
                $message = array(
                    'message' => $this->upload->display_errors(),
                    'flag' => "error"
                );
                redirect("Adminc/viewcompanyprofile");
            } else {
                $upload_file_name = $this->upload->data("file_name");
                $upload_file_location = $this->upload->data("full_path");
                $this->Adminm->setuploadphotos($company_id, $upload_file_name, $upload_file_location);
                $message = array(
                    'message' => $this->upload->display_errors(),
                    'flag' => "success"
                );
                redirect("Adminc/viewcompanyprofile");
            }
        }
    }

    public function getphotosdetails() {
        $photos_id = $this->input->post("photos_id");
        $result = $this->Adminm->getphotosdetails($photos_id);
        echo json_encode($result);
//        echo $ads_id;
    }

    public function setphotos() {
        $photos_id = $this->input->post("photos_id");
        $photos_description = $this->input->post("photos_description");
        $photos_title = $this->input->post("photos_title");

        if ($this->Adminm->setphotos($photos_id, $photos_description, $photos_title)) {
            echo "success";
        } else {
            echo "error";
        }
    }

}
