<?php
	class RegisterModel extends CI_Model{
		public function register(){
			// User data array
			$data = array(
				'nama' => $this->input->post('name'),
				'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'tgl_lahir' => $this->input->post('birthday'),
                'jns_kelamin' => $this->input->post('sex'),
                'negara' => $this->input->post('country'),
                'kota_asal' => $this->input->post('city'),
                'telp' => $this->input->post('phone_number')
			);
            // Insert user
            
			return $this->db->insert('user', $data);
        }

        public function cek_email(){
            
        }
    }