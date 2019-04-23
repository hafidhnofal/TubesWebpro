<?php
	class KomenModel extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function create_comment($post_id){
			$data = array(
				'id_berita' => $post_id,
				'nama' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'isi' => $this->input->post('body')
			);

			return $this->db->insert('komen', $data);
		}

		public function get_comments($post_id){
			$query = $this->db->get_where('komen', array('id_berita' => $post_id));
			return $query->result_array();
        }
        
        public function hapusDataKomen($id){
            $this->db->where('id_comment',$id);
            $this->db->delete('komen');
        }

        
        public function getBeritaByIdKomen($id){

            $this->db->where('id_berita',$id);
            $brt=$this->db->get('berita');
            return $brt->row_array();
        }
	}