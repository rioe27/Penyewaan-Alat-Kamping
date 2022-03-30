<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewaan_admin extends CI_Controller {

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
		//$this->load->model('m_penyewaan_admin');
          //      $this->load->helper('url');
	//}
	
	public function index()
	{
		$this->load->model('m_penyewaan_admin');
		$data = array(
			'penyewaan'=>$this->m_penyewaan_admin->ambil()->result_array(),			
		);  
		
		//$data['penyewaan'] = $this->m_penyewaan_admin->tampil()->result_array();

		//$this->load->view('admin/v_laporan_sewa', $data);
		
		//$data['penyewaan'] = $this->m_penyewaan_admin->tampil_data()->result();
		$this->load->view('admin/v_laporan_sewa',$data);
	}		
	
	public function tampil($kode = 0){
		//$this->tampil();
		$this->load->model('m_penyewaan_admin');
		$data_soal = $this->m_penyewaan_admin->Ambil("where ID_sewa = '$kode'")->result_array();

		$data = array(
			'ID_sewa' => $data_soal[0]['ID_sewa'],
			'nama' => $data_soal[0]['nama'],
			'no_tlpn' => $data_soal[0]['no_tlpn'],
			'alamat' => $data_soal[0]['alamat'],
			'nama_alat' => $data_soal[0]['nama_alat'],
			'tgl_penyewaan' => $data_soal[0]['tgl_penyewaan'],
			'tgl_pengembalian' => $data_soal[0]['tgl_pengembalian'],
			'biaya_sewa' => $data_soal[0]['biaya_sewa'],
			
		);
		
		$this->load->view('admin/v_lihat_laporan', $data);
	}

	public function tampil2($kode = 0){
		 $this->load->library('Pdf');
		//$this->tampil();
		$this->load->model('m_penyewaan_admin');
		$data_soal = $this->m_penyewaan_admin->Ambil("where ID_sewa = '$kode'")->result_array();

		$data = array(
			
			'nama' => $data_soal[0]['nama'],
			'no_tlpn' => $data_soal[0]['no_tlpn'],
			'alamat' => $data_soal[0]['alamat'],
			'nama_alat' => $data_soal[0]['nama_alat'],
			'tgl_penyewaan' => $data_soal[0]['tgl_penyewaan'],
			'tgl_pengembalian' => $data_soal[0]['tgl_pengembalian'],
			'biaya_sewa' => $data_soal[0]['biaya_sewa'],
			
		);
		
		//$d['content'] = $this->load->view('admin/v_lihat_laporan2', $data,false);
		$d['namafile'] = 'Laporan2';
		$this->load->view('admin/v_pdf',$d);
	}
	
	public function cetak()
	{
		$data = array(
			'data'=>$this->m_penyewaan_admin->cetak()->result_array(),			
		);		
		$this->load->library('fpdf');	
		$this->load->view('admin/v_pdf', $data);
	}
	
}