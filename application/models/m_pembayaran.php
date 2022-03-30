<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model {  
	

	public function Ambil($where= "") {
      $data = $this->db->query('select * from pembayaran '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
      return $data;
  }
  
  public function Ambil2($where= "") {
      $data = $this->db->query('select * from pembayaran '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
      return $data;
  }
  
  public function Ambil3($where = '') {
	  //$ngambil = $this->session->userdata("username");
      $data = $this->db->query('SELECT * FROM pembayaran '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
      return $data;
  }
  
 	public function tampil_data(){
		return $this->db->get('pembayaran');
		}
		
	public function Rubah($data)
  {
    $this->db->where('id_pembayaran',$data['id_pembayaran']);
    $this->db->update('pembayaran',$data);

  }

	public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

}