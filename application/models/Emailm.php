<?php

class Emailm extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function sendemailclient($head_office_email, $username, $return_id) {
//        $this->load->view("successpage");
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

    public function sendmailconnection() {
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'nevetsjohn@gmail.com',
            'smtp_pass' => '10118023603aAaAqQ',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        return $config;
    }

    public function sendmailmessage($company_id, $name, $email, $message, $company_email) {
        $this->load->library("email", $this->sendmailconnection());
        $this->email->set_newline("\r\n");
        $this->email->from("nevetsjohn@gmail.com", "Suppliers Netzwerk");
        $this->email->to($company_email);
        $this->email->subject("Message Notification");
        $this->email->message("<html>
                                <body>
                                     <p>You have a new message, please check you account. </p>
                                </body>
                               </html>");
    }

}
