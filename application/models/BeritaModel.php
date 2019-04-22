<?php
	class BeritaModel extends CI_Model{

        function getAllBerita($id){
            $this->db->where('id_user ',$id);
            $data=$this->db->get('berita');
            return $data->result_array();
        }
        function getAllData(){
            $data=$this->db->query('SELECT * FROM `berita` JOIN user USING(id_user)');
            return $data->result_array();
        }
    
        public function create_post($post_image,$id){
            $num_char = 40;
            $text = $this->input->post('isi');
            $ringkas=substr($text, 0, $num_char) . '...';
			$data = array(
				'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'ringkasan' => '<div>'.$ringkas.'</div>',
				'kategori' => $this->input->post('kategori'),
				'id_user' => $id,
				'image' => $post_image
			);
			return $this->db->insert('berita', $data);
        }
        public function update_post($post_image,$id){
            $num_char = 40;
            $text = $this->input->post('isi');
            $ringkas=substr($text, 0, $num_char) . '...';
			$data = array(
				'judul' => $this->input->post('judul'),
                'isi' => $this->input->post('isi'),
                'ringkasan' => '<div>'+$ringkas+'</div>',
				'kategori' => $this->input->post('kategori'),
				'image' => $post_image
			);
            $this->db->where('id_berita',$id);
            return $this->db->update('berita', $data);
        }
    
        public function hapusDataBerita($id){
            $this->db->where('id_berita',$id);
            $this->db->delete('berita');
        }
    
        public function getBeritaById($id){
            $this->db->where('id_berita',$id);
            $mhs=$this->db->get('berita');
            return $mhs->row_array();
        }
    
        
    
        public function cariDataBerita(){
            $keyword = $this->input->post('keyword', true);
            $this->db->like('judul',$keyword);
            $this->db->or_like('isi',$keyword);
            $this->db->or_like('ringkasan',$keyword);
            $this->db->or_like('kategori',$keyword);
            return $this->db->get('berita')->result_array();
        }
    }
    