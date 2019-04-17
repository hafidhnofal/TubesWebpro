<?php
    class Posts extends CI_Controller{
        public function index(){
            $data['title'] = 'Latest Post';

            $data['posts'] = $this->posts_model->get_posts();
        
            $this->load->view('template/header');
            $this->load->view('posts/index', $data);    
            $this->load->view('template/footer');
            
        }

    }