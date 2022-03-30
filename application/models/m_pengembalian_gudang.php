<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengembalian_gudang extends CI_Model {  
	
 //public function Tampil($where= "") {
   //   $data = $this->db->query('select * from penyewaan '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
     // return $data;
  //}
 public function Ambil($where= "") {
      $data = $this->db->query('select * from pengembalian '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
      return $data;
  }
  
 	public function tampil_data(){
		return $this->db->get('pengembalian');
		}
		
	public function Rubah($data)
  {
    $this->db->where('ID_pengembalian',$data['ID_pengembalian']);
    $this->db->update('pengembalian',$data);

  }



}