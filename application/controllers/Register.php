<?php
class Register extends CI_Controller{
    function v_register(){
		$this->load->view('pages/register_v');
    }
    function __construct(){
		parent::__construct();		
		$this->load->model('RegisterModel');
	} 
    public function register(){
        $data['title'] = 'Sign Up';

        //$email=$this->input->post('email');
        //$query = $this->db->get_where('user', array('email' => $email)); 
         
        $this->db->where('email', $this->input->post('email'));
        $query = $this->db->get('user');
        if($query->row_array() >= 1){
            echo "<script>alert('Your email has been registered, or try another email!');</script>";
            $this->load->view('pages/register_v');
            
        }else{
            $this->RegisterModel->register();
            $this->load->view('pages/login_v');
        }
                
            
    }
}