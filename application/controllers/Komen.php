<?php
	class Komen extends CI_Controller{
        function __construct(){
            parent::__construct();		
            $this->load->model('KomenModel');
            $this->load->model('BeritaModel');
            $this->load->model('LoginModel');
        }
		public function create($post_id){
            $this->KomenModel->create_comment($post_id);
            $data['berita'] = $this->BeritaModel->getBeritaById($post_id);
            $data['komen'] = $this->KomenModel->get_comments($post_id);
            if(!$this->session->userdata('nama')){
                $this->load->view('template/header');
                $this->load->view('pages/berita/beritaLihat_v',$data);
                $this->load->view('template/footer');
            }else{
                $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
                $data['komen'] = $this->KomenModel->get_comments($post_id);
                $this->load->view('template/headerAsLogin', $data);
                $this->load->view('pages/berita/beritaLihat_v',$data);
                $this->load->view('template/footer');  
            }
        }
        
        public function hapus($id, $idb){
            $this->KomenModel->hapusDataKomen($id);
            $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
            $data['berita'] = $this->KomenModel->getBeritaByIdKomen($idb);
            $data['komen'] = $this->KomenModel->get_comments($id);

            
            $this->load->view('template/headerProfile',$data);
            $this->load->view('pages/berita/beritaLihatHome_v',$data);
            $this->load->view('template/footer');
        }
	}