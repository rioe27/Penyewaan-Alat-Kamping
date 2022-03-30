<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class m_pendaftaran extends CI_Model{
    function get_id_akun(){
		$ngambil = $this->session->userdata("username");
		$this->db->select('id_user');
		$this->db->from('user');
		$this->db->where('username',$ngambil);
		$query = $this->db->get();
		return $query->result();
	}
	function tambah_data($table,$data){
		$this->db->insert($table,$data);
	}
	
	
}
