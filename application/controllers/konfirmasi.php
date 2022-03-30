<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konfirmasi extends CI_Controller {

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
		$sandi = $this->session->userdata("username");
		//$this->load->model('m_pembayaran');
		$data = array(
			'barang' => $this->m_pembayaran->Ambil3("where nama = '$sandi'")->result_array(),
		);
		//$data['barang']=$this->m_pembayaran->Ambil3("where nama = '$sandi'");
		
		//$data['barang'] = $this->m_pembayaran->ambil()->result_array();

		$this->load->view('konsumen/v_tb_pembayaran', $data);
	}	
	
	public function add(){
		$this->load->view('konsumen/pembayaran');
	}
	
	public function insert(){
			$this->load->model('m_pembayaran');
			$config =array(
			'upload_path' => 'assets/bukti_tf',
			'allowed_types' => 'jpg|PNG|jpeg',
			'max_size' => '200000',
			);
			$this->load->library('upload', $config);
			$this->upload->do_upload('file_upload');
			$upload_data = $this->upload->data();
			$id_pembayaran = '';
			$nama = $_POST['nama'];
			$no_tlpn = $_POST['no_tlpn'];
			$tgl_transfer = $_POST['tgl_transfer'];
			$bank = $_POST['bank'];
			$no_rekening= $_POST['no_rek'];
			$atas_nama = $_POST['atas_nama'];
			$nominal_tf = $_POST['nominal_tf'];			
			$file_name = $upload_data['file_name'];
			//$sewa = $this->session->userdata("username");	
		
			$data = array(
				//'alat' => $this->m_home->sewa("where nama = '$sewa'")->result_array(),
				'id_pembayaran' => $id_pembayaran,
				'nama' => $nama,
				'no_tlpn' => $no_tlpn,
				'tgl_transfer' => $tgl_transfer,
				'bank' => $bank,
				'no_rekening' => $no_rekening,
				'atas_nama' => $atas_nama,
				'status'=> 'belum lunas',
				'nominal_tf'=>$nominal_tf,
				'bukti_tf'=>$file_name,			
			);
			$this->db->insert('pembayaran', $data);
			redirect('konfirmasi/index');
		
	}	
}