<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kerusakan extends CI_Controller {

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
		$this->load->model('m_kerusakan');
        $this->load->helper('url');
	}
	
	public function index()
	{
		
		$this->load->model('m_kerusakan');
		$data = array(
			'barang'=>$this->m_kerusakan->ambil()->result_array(),			
		);  
		
		//$data['barang'] = $this->m_kerusakan->ambil()->result_array();

		$this->load->view('admin/v_kerusakan', $data);
	}	
	
	public function add(){
		$this->load->view('admin/v_tambah_data');
	}
	    	//Tambah Master Barang
	public function insert(){
			$this->load->model('m_kerusakan');
			//$id_kerusakan = '';
			$label_alat = $_POST['label_alat'];
			$nama_barang = $_POST['nama_barang'];
			$jumlah = $_POST['jumlah'];
			$kategori_barang = $_POST['kategori_barang'];
			$keterangan = $_POST['keterangan'];
			$status_alat = $_POST['status_alat'];
			
			$data = array(
				//'id_kerusakan' => $id_kerusakan,
				'label_alat' => $label_alat,
				'nama_barang' => $nama_barang,
				'jumlah' => $jumlah,
				'kategori_barang' => $kategori_barang,
				'keterangan' => $keterangan,
				'status_alat' =>$status_alat,
			);
			$this->db->insert('kerusakan_alat', $data);
			redirect('kerusakan');
	}
	
    public function edit($label_alat = 0){
		$this->load->model('m_kerusakan');
		$data_soal = $this->m_kerusakan->Ambil("where id_kerusakan = '$label_alat'")->result_array();

		$data = array(
			'id_kerusakan' => $data_soal[0]['id_kerusakan'],
			'label_alat' => $data_soal[0]['label_alat'],
			'nama_barang' => $data_soal[0]['nama_barang'],
			'kategori_barang' => $data_soal[0]['kategori_barang'],
			'jumlah' => $data_soal[0]['jumlah'],
			'keterangan' => $data_soal[0]['keterangan'],			
			'status_alat' => $data_soal[0]['status_alat'],
		);
		$this->load->view('admin/v_edit_status', $data);
	}

	public function update(){
		$this->load->model('m_kerusakan');
		$admin = $this->input->post('id_kerusakan');
		$data = array(
		 	'id_kerusakan' => $this->input->post('id_kerusakan'),
			
            'status_alat' => $this->input->post('status_alat'),
			
		);

        $this->m_kerusakan->Rubah($data);
        redirect('kerusakan');		
	}
	
	public function lihat($label_alat = 0){
		//$this->lihat();
		$this->load->model('m_kerusakan');
		$data_soal = $this->m_kerusakan->Ambil("where id_kerusakan = '$label_alat'")->result_array();

		$data = array(
			'id_kerusakan' => $data_soal[0]['id_kerusakan'],
			'label_alat' => $data_soal[0]['label_alat'],
			'nama_barang' => $data_soal[0]['nama_barang'],
			'kategori_barang' => $data_soal[0]['kategori_barang'],
			'jumlah' => $data_soal[0]['jumlah'],
			'keterangan' => $data_soal[0]['keterangan'],			
			'status_alat' => $data_soal[0]['status_alat'],
		);
		$this->load->view('admin/v_lihat', $data);
	}
	
}
