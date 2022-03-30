<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewaan_gudang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 // function __construct(){
		//parent::__construct();		
		//$this->load->model('m_penyewaan_gudang');
          //      $this->load->helper('url');
	//}
	
	public function index()
	{
		$this->load->model('m_penyewaan_gudang');
		$data = array(
			'penyewaan'=>$this->m_penyewaan_gudang->ambil()->result_array(),			
		);  
		
		//$data['penyewaan'] = $this->m_penyewaan_gudang->tampil()->result_array();

		//$this->load->view('gudang/v_laporan_sewa', $data);
		
		//$data['penyewaan'] = $this->m_penyewaan_gudang->tampil_data()->result();
		$this->load->view('gudang/v_laporan_sewa',$data);
	}		
	
	public function tampil($kode = 0){
		//$this->tampil();
		$this->load->model('m_penyewaan_gudang');
		$data_soal = $this->m_penyewaan_gudang->Ambil("where ID_sewa = '$kode'")->result_array();

		$data = array(
			'ID_sewa' => $data_soal[0]['ID_sewa'],
			'nama' => $data_soal[0]['nama'],
			'no_tlpn' => $data_soal[0]['no_tlpn'],
			'alamat' => $data_soal[0]['alamat'],
			'nama_alat' => $data_soal[0]['nama_alat'],
			'tgl_penyewaan' => $data_soal[0]['tgl_penyewaan'],
			'tgl_pengembalian' => $data_soal[0]['tgl_pengembalian'],
			
		);
		$this->load->view('gudang/v_lihat_laporan', $data);
	} 
	
	
	
}