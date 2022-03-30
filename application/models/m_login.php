<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class m_login extends CI_Model{
    function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
    }
    function input_akun($data,$table){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}	
}