<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class m_data_diri extends CI_Model{
    function data_diri_kons()
   {
     $ngambil =$this->session->userdata("iduser");
     $q="SELECT konsumen.id_konsumen, konsumen.nama,konsumen.alamat,konsumen.no_tlpn,konsumen.id_akun,user.username,user.password FROM user , konsumen WHERE user.id_user = konsumen.id_akun AND id_akun = $ngambil";
     $query = $this->db->query($q);
     return $query->result();
    }

  function get_id_akun(){
		$ngambil = $this->session->userdata("username");
		$this->db->select('id_user');
		$this->db->from('user');
		$this->db->where('username',$ngambil);
		$query = $this->db->get();
		return $query->result();
	}
	
	function input_akun($data,$table){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}	
	
	function update_data($where, $data, $table){
  		$this->db->where($where);
  		$this->db->update($table, $data);
  	}
}