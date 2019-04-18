<?php
class User extends CI_Controller{
    function __construct(){
		parent::__construct();		
		$this->load->model('UserModel');
	} 

    function update_user(){
        $data['title'] = 'Update User';
        $email = $this->session->userdata('nama');

        $this->UserModel->update($email);
        redirect('login/view_dashboard');
    }
    function getID(){
        $email = $this->session->userdata('nama');
        return $this->UserModel->get_id_by_email($email);
    }

}