<?php
    class pages extends CI_Controller{
        function __construct(){
            parent::__construct();		
            $this->load->model('LoginModel');
            $this->load->model('BeritaModel');
            $this->load->model('KomenModel');
        }
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
            }

            
            $data['berita']=$this->BeritaModel->getAllData();
            if ($this->input->post('keyword')) {
                $data['berita'] = $this->BeritaModel->cariDataBerita();
            }
            if(!$this->session->userdata('nama')){
                $this->load->view('template/header');
                $this->load->view('pages/'.$page,$data);
                $this->load->view('template/footer');
            }else{
                $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
                $this->load->view('template/headerAsLogin', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('template/footer');  
            }
            
        }

        function readmore($id){
            $data['berita'] = $this->BeritaModel->getBeritaById($id);
            $data['komen'] = $this->KomenModel->get_comments($id);
            if(!$this->session->userdata('nama')){
                $this->load->view('template/header');
                $this->load->view('pages/berita/beritaLihat_v',$data);
                $this->load->view('template/footer');
            }else{
                $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
                $data['komen'] = $this->KomenModel->get_comments($id);
                $this->load->view('template/headerAsLogin', $data);
                $this->load->view('pages/berita/beritaLihat_v',$data);
                $this->load->view('template/footer');  
            }
        }

        function search(){

        }

    }