<?php
class Demo_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
        error_reporting(0);
    }
     //user login check
    public function userchk($id, $pass) {
        $this->db->select("*");
        $this->db->from("users");
        $this->db->where("user_id", $id);
        $this->db->where("user_password", $pass);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $session_data = $query->row_array();
            $this->session->set_userdata('sessiondata', $session_data);
                    return 1;
        } else {
            return 0;
        }
    }
    
    }
