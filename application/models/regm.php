<?php

class regm extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function registersupplier($tblcompany, $tblheadoffice) {
        $this->db->trans_bein();

        $this->db->insert('tblcompany', $tblcompany);
        $this->db->insert('tblheadoffice', $tblheadoffice);
        $this->db->insert_id();
        if ($this->db->trans_status() == FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db > trans_commit();
        }
    }

}
