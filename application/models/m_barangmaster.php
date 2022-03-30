<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barangmaster extends CI_Model {

private $table = "data_alat";

    public $ID_alat;
    public $kode;
    public $nama_alat;
    public $kategori;
    public $stok_alat;
	public $warna;
	public $harga_sewa;
	public $deskripsi;
	public $gambar = "default.png";

    public function rules()
    {
        return [
			['field' => 'kode',
            'label' => 'kode',
            'rules' => 'numeric'],
			
            ['field' => 'nama_alat',
            'label' => 'nama_alat',
            'rules' => 'required'],
			
			['field' => 'kategori',
            'label' => 'kategori',
            'rules' => 'required'],

            ['field' => 'stok_alat',
            'label' => 'stok_alat',
            'rules' => 'numeric'],
			
			['field' => 'warna',
            'label' => 'warna',
            'rules' => 'required'],
			
			['field' => 'harga_sewa',
            'label' => 'harga_sewa',
            'rules' => 'numeric'],
            
            ['field' => 'deskripsi',
            'label' => 'deskripsi',
            'rules' => 'required']
        ];
    }
	
 public function Ambil($where= "") {
      $data = $this->db->query('select * from data_alat '.$where);
	  //$data = $this->db->get_where('data_alat',$where);
      return $data;
  }

  public function Simpan($tabel, $data){
    $res = $this->db->insert($tabel, $data);
    return $res;
  }

  public function Rubah($data)
  {
    $this->db->where('ID_alat',$data['ID_alat']);
    $this->db->update('data_alat',$data);

  }
  
  //public function hapus ($table_name,$id){
    //    $this->db->where('ID_alat',$id);
      //  $hapus = $this->db->delete($table_name);
        //return $hapus;
    //}

  ///public function Hapus($table,$where){
    //return $this->db->delete($table,$where);
  //}
  
  //function delete($where,$table) {
      //$data = $this->db->query('DELETE FROM data_alat where data_alat '.$data);
	  //$data = $this->db->get_where('ID_alat',$data['ID_alat']);
	  //$data = $this->db->get_where('deskripsi',$where);
      //return $data;
	//$this->db->where($where);
	//$this->db->delete($table);
  //} 
  public function delete($ID_alat)
    {
        return $this->db->delete($this->table, array("ID_alat" => $ID_alat));
    }

 /// public function Ambilidalat($kode = 'ID_alat') {
  //$data = $this->db->query("select * from mahasiswa where kode = '$kode'")->result_array();
   // return $data[0]['ID_alat'];
 // }


}