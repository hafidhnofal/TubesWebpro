<?php
	class UserModel extends CI_Model{
        function update($email){
            $data = array(
                'nama' => $this->input->post('name'),
                'jns_kelamin' => $this->input->post('sex'),
                'tgl_lahir' => $this->input->post('birthdate_day'),
                'tentang' => $this->input->post('description'),
                'website' => $this->input->post('website'),
                'alamat' => $this->input->post('address'),
                'negara' => $this->input->post('country_id'),
                'provinsi' => $this->input->post('province_id'),
                'kota_asal' => $this->input->post('city_id'),
                'kode_pos' => $this->input->post('postal_code'),
                'telp' => $this->input->post('mobile_phone'),
                'status' => $this->input->post('relation')
            );
            
            $this->db->where('email',$email);
            $this->db->update('user',$data);
        }

        function get_data_user($email){
            $this->db->where('email', $email);
            $usr=$this->db->get('user');
            return $usr->row_array();
        }
        function get_id_by_email($email){

            $this->db->select('id_user');
            $this->db->where('email',$email);
            return $this->db->get('user')->row()->id_user;
             
        }
    }