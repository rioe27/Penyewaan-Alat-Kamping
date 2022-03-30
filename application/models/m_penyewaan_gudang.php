<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penyewaan_gudang extends CI_Model {  
	
 //public function Tampil($where= "") {
   //   $data = $this->db->query('select * from penyewaan '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
     // return $data;
  //}
 public function Ambil($where= "") {
      $data = $this->db->query('select * from penyewaan '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
      return $data;
  }
  
 	public function tampil_data(){
		return $this->db->get('penyewaan'); }




}