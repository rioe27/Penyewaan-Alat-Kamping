<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengembalian_admin extends CI_Model {  
	
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
  
  public function Ambil2($where= "") {
      $data = $this->db->query('select tgl_pengembalian from penyewaan '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
      return $data;
  }
  
 	public function tampil_data(){
		return $this->db->get('penyewaan');
		}
		
	public function Rubah($data)
  {
    $this->db->where('ID_sewa',$data['ID_sewa']);
    $this->db->update('penyewaan',$data);

  }
	public function Rubah2($data)
  {
    $this->db->where('id_denda',$data['id_denda']);
    $this->db->update('denda',$data);

  }
  
	public function tampil() {
	return $this->db->get('penyewaan');
	}
  
	public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

}