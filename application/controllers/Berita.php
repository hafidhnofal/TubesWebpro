<?php
class Berita extends CI_Controller{
    function __construct(){
		parent::__construct();		
        $this->load->model('BeritaModel');
		$this->load->model('LoginModel');
		$this->load->model('UserModel');
		$this->load->helper(array('form', 'url'));
	} 
	
	function beritaLihat($id){
		$data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
		$data['berita'] = $this->BeritaModel->getBeritaById($id);
		$this->load->view('template/headerProfile',$data);
        $this->load->view('pages/berita/beritaLihat_v',$data);
        $this->load->view('template/footer');
	}
    function beritaHome(){
		if(!$this->session->userdata('nama')){
			redirect(base_url());
		}
        $data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
		$data['judul'] = 'Daftar Berita';
		
		$id=$this->UserModel->get_id_by_email($this->session->userdata('nama'));
		$data['berita'] = $this->BeritaModel->getAllBerita($id);
		if ($this->input->post('keyword')) {
			$data['berita'] = $this->BeritaModel->cariDataBerita();
		}

        $this->load->view('template/headerProfile',$data);
        $this->load->view('pages/berita/beritaHome_v',$data);
        $this->load->view('template/footer');
	}
	function beritaTambah_v(){
		if(!$this->session->userdata('nama')){
			redirect(base_url());
		}

		$data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
		$this->load->view('template/headerProfile',$data);
        $this->load->view('pages/berita/beritaTambah_v',$data);
        $this->load->view('template/footer');
	}
	function beritaUbah_v($id){
		if(!$this->session->userdata('nama')){
			redirect(base_url());
		}

		$data['user']=$this->LoginModel->get_data_user($this->session->userdata('nama'));
		$data['berita'] = $this->BeritaModel->getBeritaById($id);
		$this->load->view('template/headerProfile',$data);
        $this->load->view('pages/berita/beritaUbah_v',$data);
        $this->load->view('template/footer');
	}

	public function tambah(){
		// Check login
		if(!$this->session->userdata('nama')){
			redirect(base_url());
		}
		$data['title'] = 'Create Post';
			// Upload Image
			$config['upload_path'] 		= './asset/images/berita/';
			$config['allowed_types'] 	= 'gif|jpg|png';
			$config['overwrite'] 		= true;
			$config['max_size'] 		= '2048';
			$config['max_width'] 		= '2000';
			$config['max_height'] 		= '2000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('userfile')){
				$errors = array('error' => $this->upload->display_errors());
				$post_image = 'noimage.jpg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$post_image = $this->upload->data("file_name");
			}
			$id=$this->UserModel->get_id_by_email($this->session->userdata('nama'));
			$this->BeritaModel->create_post($post_image,$id);

			redirect('berita/beritahome');
	}

	public function hapus($id){
		$this->BeritaModel->hapusDataBerita($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('berita/beritahome');
	}

	public function ubah($id){
		// Check login
		if(!$this->session->userdata('nama')){
			redirect(base_url());
		}
		$config['upload_path'] 		= './asset/images/berita/';
		$config['allowed_types'] 	= 'gif|jpg|png';
		$config['overwrite'] 		= true;
		$config['max_size'] 		= '2048';
		$config['max_width'] 		= '2000';
		$config['max_height'] 		= '2000';

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('userfile')){
			$errors = array('error' => $this->upload->display_errors());
			$post_image = 'noimage.jpg';
		} else {
			$data = array('upload_data' => $this->upload->data());
			$post_image = $this->upload->data("file_name");
		}
		$this->BeritaModel->update_post($post_image,$id);
		// Set message
		$this->session->set_flashdata('flash','Diubah');
		redirect('berita/beritahome');
	}      
    
}