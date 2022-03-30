<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {
	function __construct()
    {
        parent::__construct();
    }
	
	 public function takeUser($username, $pass) 
  { 
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('pass', $pass);
    $this->db->where('status', 1);
    //$this->db->where('level', $level);
    $query = $this->db->get();
    return $query->num_rows(); 
  }

	public function tampil($where= "") {
      //$data = $this->db->query('select * from data_alat '.$where);
	  $data = $this->db->get_where('data_alat',array('ID_alat' => $where));
      return $data->result();
	}
	
	function tampil2(){
    	
		$q="SELECT * FROM data_alat ";
		$query = $this->db->query($q);
		return $query->result();
	}
	
	function user(){
		$q="SELECT * FROM user ";
		$query = $this->db->query($q);
		return $query->result();
	}
	
	public function lihat_alat($where=""){
    $data= $this->db->query('select * from data_alat '.$where);
    return $data;
    }
	
	public function sewa_alat($tabelName,$data){
    $res = $data = $this->db->insert($tabelName,$data);
    return $res;
    }	
	
	public function pencarian($alat){
    $this->db->where("kategori",$alat);
    return $this->db->get("data_alat");
	} 
	
	public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }
  
	public function Simpan2($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }
  
	public function sewa($where=''){
	$data = $this->db->query('SELECT * FROM konsumen '.$where);
    return $data;
  }
  
  public function Ambil4($where= "") {
    $data = $this->db->query('select * from konsumen '.$where);
    return $data;
  }
  
  public function Simpan3($tabel, $data = array()){
	foreach ($data as $alat)
	{
    $this->db->insert($table, $alat);
	}
  }
		
}


?>