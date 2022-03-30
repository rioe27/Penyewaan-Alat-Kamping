<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian_gudang extends CI_Controller {

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
	 
	 function __construct(){
		parent::__construct();		
		$this->load->model('m_pengembalian_gudang');
        $this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->model('m_pengembalian_gudang');
		$data = array(
			'pengembalian'=>$this->m_pengembalian_gudang->ambil()->result_array(),			
		);  
		
		//$data['penyewaan'] = $this->m_penyewaan_gudang->tampil()->result_array();

		//$this->load->view('gudang/v_laporan_sewa', $data);
		
		//$data['penyewaan'] = $this->m_penyewaan_gudang->tampil_data()->result();
		$this->load->view('gudang/v_laporan_kembali',$data);
	}		
	
	public function tampil($kode = 0){
		//$this->tampil();
		$this->load->model('m_pengembalian_gudang');
		$data_soal = $this->m_pengembalian_gudang->Ambil("where ID_pengembalian = '$kode'")->result_array();

		$data = array(
			'ID_pengembalian' => $data_soal[0]['ID_pengembalian'],
			'ID_sewa' => $data_soal[0]['ID_sewa'],
			'nama' => $data_soal[0]['nama'],
			'tgl_penyewaan' => $data_soal[0]['tgl_penyewaan'],
			'tgl_pengembalian' => $data_soal[0]['tgl_pengembalian'],
			'nama_alat' => $data_soal[0]['nama_alat'],
			'deskripsi_kondisi_alat' => $data_soal[0]['deskripsi_kondisi_alat'],
		);
		$this->load->view('gudang/v_lihat_laporan_pengembalian', $data);
	} 
	
	public function cek($kode = 0){
		$this->load->model('m_pengembalian_gudang');
		$data_soal = $this->m_pengembalian_gudang->Ambil("where ID_pengembalian = '$kode'")->result_array();

		$data = array(
			'ID_pengembalian' => $data_soal[0]['ID_pengembalian'],
			'ID_sewa' => $data_soal[0]['ID_sewa'],
			'nama' => $data_soal[0]['nama'],
			'tgl_penyewaan' => $data_soal[0]['tgl_penyewaan'],
			'tgl_pengembalian' => $data_soal[0]['tgl_pengembalian'],
			'nama_alat' => $data_soal[0]['nama_alat'],
			'deskripsi_kondisi_alat' => $data_soal[0]['deskripsi_kondisi_alat'],
		);
		$this->load->view('gudang/v_pengecekan_alat', $data);
	}

	public function update(){
		$this->load->model('m_pengembalian_gudang');
		$gudang = $this->input->post('ID_pengembalian');
		$data = array(
		 	'ID_pengembalian' => $this->input->post('ID_pengembalian'),	
			'ID_sewa' => $this->input->post('ID_sewa'),
			'nama' => $this->input->post('nama'),
			'nama_alat' => $this->input->post('nama_alat'),
			'tgl_penyewaan' => $this->input->post('tgl_penyewaan'),
			'tgl_pengembalian' => $this->input->post('tgl_pengembalian'),		
            'deskripsi_kondisi_alat' => $this->input->post('deskripsi'),
        );

        $this->m_pengembalian_gudang->Rubah($data);
        redirect('Pengembalian_gudang/index');
		
	}
	
}