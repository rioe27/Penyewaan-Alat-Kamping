<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kerusakan extends CI_Model {

    public function Ambil($where= "") {
      $data = $this->db->query('select * from kerusakan_alat '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
      return $data;
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Rubah($data)
  {
    $this->db->where('id_kerusakan',$data['id_kerusakan']);
    $this->db->update('kerusakan_alat',$data);

  }

}