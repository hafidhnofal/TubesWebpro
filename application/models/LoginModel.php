<?php
class LoginModel extends CI_Model{
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
    }
    function get_data_user($email){
        $this->db->where('email', $email);
        $usr=$this->db->get('user');
        return $usr->row_array();
    }

    
}