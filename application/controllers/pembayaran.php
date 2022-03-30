<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {

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
	 
	 function __construct()
	{
		parent::__construct();				
		$this->load->model('m_pembayaran');
	}
	
	public function index()
	{
		$this->load->model('m_pembayaran');
		$data = array(
			'pembayaran'=>$this->m_pembayaran->ambil()->result_array(),			
		);  
		
		//$data['barang'] = $this->m_pembayaran->ambil()->result_array();

		$this->load->view('admin/v_pembayaran', $data);
	}			

    public function edit($kode = 0){
		$this->load->model('m_pembayaran');
		$data_soal = $this->m_pembayaran->Ambil("where id_pembayaran = '$kode'")->result_array();

		$data = array(
			'id_pembayaran' => $data_soal[0]['id_pembayaran'],
			'nama' => $data_soal[0]['nama'],
			'no_tlpn' => $data_soal[0]['no_tlpn'],
			'tgl_transfer' => $data_soal[0]['tgl_transfer'],
			'bank' => $data_soal[0]['bank'],
			'no_rekening' => $data_soal[0]['no_rekening'],
			'atas_nama' => $data_soal[0]['atas_nama'],
			'nominal_tf' => $data_soal[0]['nominal_tf'],			
			'biaya_sewa' => $data_soal[0]['biaya_sewa'],
			'bukti_tf' => $data_soal[0]['bukti_tf'],
			'status' => $data_soal[0]['status'],
		);
		$this->load->view('admin/v_laporan_pembayaran', $data);
	}

	public function update(){
		$this->load->model('m_pembayaran');
		$config=array(
			'upload_path' =>'./img',
			'allowed_types' =>'gif|jpg|png|jpeg',
			'max_size' => '200000',
			);
			
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_upload');
		$upload_data=$this->upload->data();
		$file_name=$upload_data['file_name'];

		$pembayaran = $this->input->post('id_pembayaran');
		$data = array(
		 	'id_pembayaran' => $this->input->post('id_pembayaran'),
			'status' => $this->input->post('status'),
		);
        $this->m_pembayaran->Rubah($data);
        redirect('pembayaran');
	}
	
	public function lihat($kode = 0){
		//$this->lihat();
		$this->load->model('m_pembayaran');
		$data_soal = $this->m_pembayaran->Ambil("where id_pembayaran = '$kode'")->result_array();

		$data = array(
			'id_pembayaran' => $data_soal[0]['id_pembayaran'],
			'nama' => $data_soal[0]['nama'],
			'no_tlpn' => $data_soal[0]['no_tlpn'],
			'tgl_transfer' => $data_soal[0]['tgl_transfer'],
			'bank' => $data_soal[0]['bank'],
			'no_rekening' => $data_soal[0]['no_rekening'],
			'atas_nama' => $data_soal[0]['atas_nama'],
			'nominal_tf' => $data_soal[0]['nominal_tf'],			
			'biaya_sewa' => $data_soal[0]['biaya_sewa'],
			'bukti_tf' => $data_soal[0]['bukti_tf'],
			'status' => $data_soal[0]['status'],
		);
		$this->load->view('admin/v_lihat_pembayaran', $data);
	}
	
	
	
}