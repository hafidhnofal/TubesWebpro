<?php
class Login extends CI_Controller{
    function v_login(){
		$this->load->view('pages/login_v');
    }
    function __construct(){
		parent::__construct();		
		$this->load->model('LoginModel');
	}
    
    function action_login(){
        $email = $this->input->post('username');
		$password = $this->input->post('password');
        $where = array(
			'email' => $email,
            'password' => $password);
            
        $cek = $this->LoginModel->cek_login("user",$where)->num_rows();

        if($cek > 0){
                       
            $data_session = array(
                'nama' => $email,
                'status' => "login");
            $this->session->set_userdata($data_session);
            $data['user']=$this->LoginModel->get_data_user($email);
            
            redirect(base_url());
            }else{
                $this->load->view('pages/login_v');
                echo "<script>alert('Email or Password is Wrong, Please try again!');</script>";
            }
    }
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
    }
    
    function view_aktivitas(){
        if(!$this->session->userdata('nama')){
			redirect(base_url());
		}
        $data['title']= "Aktivitas Info";
        $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
        
        $this->load->view('template/headerProfile', $data);
        $this->load->view('pages/bodyAktivitas',$data);
        $this->load->view('template/footer');
    }

    function view_profile(){
        if(!$this->session->userdata('nama')){
			redirect(base_url());
		}
        $data['title']= "Profile Info";
        $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
        
        $this->load->view('template/headerProfile', $data);
        $this->load->view('pages/bodyProfile',$data);
        $this->load->view('template/footer');
    }

    function view_badge(){
        if(!$this->session->userdata('nama')){
			redirect(base_url());
		}
        $data['title']= "Profile Info";
        $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
        
        $this->load->view('template/headerProfile', $data);
        $this->load->view('pages/bodyBadge',$data);
        $this->load->view('template/footer');
    }

    function view_dashboard(){
        if(!$this->session->userdata('nama')){
			redirect(base_url());
		}
        $data['title']= "Dashboard";
        $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
        
        $this->load->view('template/headerProfile', $data);
        $this->load->view('pages/bodyDashboard',$data);
        $this->load->view('template/footer');
    }

    function view_editakun(){
        if(!$this->session->userdata('nama')){
			redirect(base_url());
		}
        $data['title']= "Edit Akun";

        $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
    
        $this->load->view('pages/editAkun',$data);

    }

    function update_user(){
        if(!$this->session->userdata('nama')){
			redirect(base_url());
		}
        $data['title'] = 'Update User';

        $this->LoginModel->update($this->session->userdata('nama'));

        $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
        $this->load->view('template/headerProfile', $data);
        $this->load->view('pages/bodyDashboard',$data);
        $this->load->view('template/footer');
    }
}