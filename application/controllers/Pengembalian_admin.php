<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian_admin extends CI_Controller {

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
		$this->load->model('m_pengembalian_admin');
        $this->load->helper('url');
	}
	
	public function index()
	{
		$this->load->model('m_pengembalian_admin');
		$data = array(
			'kembali'=>$this->m_pengembalian_admin->ambil()->result_array(),			
		);  
		$this->load->view('admin/v_laporan_kembali',$data);
	}		
	

	public function denda($kode = 0){
		$this->load->model('m_pengembalian_admin');
		$data_soal = $this->m_pengembalian_admin->Ambil("where ID_sewa = '$kode'")->row_array();
		$kembali = $this->m_pengembalian_admin->ambil()->result_array("where ID_sewa = '$kode'");	
		foreach($kembali as $rak) { 
								$sandi=$rak['tgl_pengembalian'];
								$tglkembali = new DateTime($sandi);
								$skrg = new DateTime();
								$difference = $skrg->diff($tglkembali);
								$difference = $tglkembali->diff($skrg);
								$sinbi=$difference->days;
		}
		$data = array(
			'ID_sewa' => $data_soal['ID_sewa'],
			'nama' => $data_soal['nama'],
			'nama_alat' => $data_soal['nama_alat'],
			'tgl_pengembalian' => $data_soal['tgl_pengembalian'],
			'tgl_penyewaan' => $data_soal['tgl_penyewaan'],
			'denda' => $data_soal['denda'],
			'keterangan' => $data_soal['keterangan'],
			'sandi' => $sinbi,
		);
		$tglkembali = new DateTime($data_soal['tgl_pengembalian']);
		$skrg = new DateTime();
		if($tglkembali<$skrg){
			$difference = $skrg->diff($tglkembali);
			$data['denda']=$difference->days * 1000;
		} else{
			//$data['denda']=9999999;
		}
		//$skrg->modify("-1 days");
		$data['error']=$this->session->flashdata('error');
		//$warning = $tglkembali <= $skrg ? " bg-warning" : "";
		//$warning = (($tglkembali <= $skrg) && ($difference->days > 7)) ? " bg-danger" : $warning;
		$this->load->view('admin/v_input_denda',$data);
		
	}
	public function simpan_status(){
			$this->load->model('m_pengembalian_admin');
			
			//$id_denda = '';
			$ID_sewa = $_POST['ID_sewa'];;
			$nama = $_POST['nama'];
			$nama_alat =$_POST['nama_alat'];
			$status = $_POST['status'];
			$denda = $_POST['denda'];
			$denda1 = $_POST['denda1'];
			$keterangan = $_POST['keterangan'];			
			
			$data = array(
				//'id_denda' => $id_denda,
				'ID_sewa' => $ID_sewa,
				'nama' => $nama,
				'nama_alat' => $nama_alat,
				'status' => $status,
				'denda' => $denda,
				'keterangan' => $keterangan,					
			);
			//$this->db->insert('denda', $data);
			if($denda<$denda1){
				$this -> session -> set_flashdata('error','denda tidak boleh lebih kecil dari '.$denda1);
				redirect('pengembalian_admin/denda/'.$ID_sewa);
			}
			$this->m_pengembalian_admin->rubah($data);
			redirect('pengembalian_admin');
			//$data2 = array(
			//'kembali'=>$this->m_pengembalian_admin->ambil()->result_array(),			
			//);
			//$this->load->view('admin/v_laporan_kembali', $data2);
	}

	public function update(){
		$this->load->model('m_pengembalian_admin');
		$admin = $this->input->post('ID_sewa');
		$data = array(
			'ID_sewa' => $this->input->post('ID_sewa'),	
			'status' => $this->input->post('status'),
		);

        $this->m_pengembalian_admin->Rubah($data);
        redirect('Pengembalian_admin/index');
		
	}
	
	
}