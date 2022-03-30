<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gudang extends CI_Controller {

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
	public function index()
	{
		$this->load->model('m_barangmaster');
		$data = array(
			'barang'=>$this->m_barangmaster->ambil()->result_array(),			
		);  
		
		//$data['barang'] = $this->m_barangmaster->ambil()->result_array();

		$this->load->view('gudang/v_barangmaster', $data);
	}	
	
	public function add(){
		$this->load->view('gudang/v_tambahbarang');
	}
	    	//Tambah Master Barang
	public function insert(){
			$this->load->model('m_barangmaster');
			$config =array(
			'upload_path' => 'assets/img',
			'allowed_types' => 'gif|jpg|PNG|jpeg',
			'max_size' => '200000',
			);
			$this->load->library('upload', $config);
			$this->upload->do_upload('file_upload');
			$upload_data = $this->upload->data();
			$ID_alat = '';
			$kode = $_POST['kode'];
			$nama = $_POST['nama'];
			$stok = $_POST['stok'];
			$harga_sewa = $_POST['harga_sewa'];
			$warna = $_POST['warna'];
			$kategori = $_POST['kategori'];
			$deskripsi = $_POST['deskripsi'];
			$file_name = $upload_data['file_name'];
			
			$data = array(
				'ID_alat' => $ID_alat,
				'kode' => $kode,
				'nama_alat' => $nama,
				'stok_alat' => $stok,
				'harga_sewa' => $harga_sewa,
				'warna' => $warna,
				'kategori' => $kategori,
				'deskripsi' => $deskripsi,
				'gambar' =>$file_name,
			);
			$this->db->insert('data_alat', $data);
			redirect('gudang');
	}
	
    public function edit($kode = 0){
		$this->load->model('m_barangmaster');
		$data_soal = $this->m_barangmaster->Ambil("where ID_alat = '$kode'")->result_array();

		$data = array(
			'ID_alat' => $data_soal[0]['ID_alat'],
			'kode' => $data_soal[0]['kode'],
			'nama_alat' => $data_soal[0]['nama_alat'],
			'kategori' => $data_soal[0]['kategori'],
			'stok_alat' => $data_soal[0]['stok_alat'],
			'warna' => $data_soal[0]['warna'],
			'harga_sewa' => $data_soal[0]['harga_sewa'],
			'deskripsi' => $data_soal[0]['deskripsi'],			
			'gambar' => $data_soal[0]['gambar'],
		);
		$this->load->view('gudang/v_edit_masterbarang', $data);
	}

	public function update(){
		$this->load->model('m_barangmaster');
		$config=array(
			'upload_path' =>'assets/img',
			'allowed_types' =>'gif|jpg|png|jpeg',
			'max_size' => '200000',
			);
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_upload');
		$upload_data=$this->upload->data();
		$file_name=$upload_data['file_name'];
		//$this->ceklogin();
		// $data = array(
		// 'ID_alat' => $this->input->post ("ID_alat"),
		//	'kode' => $this->input->post ("kode"),
		//	'nama_alat' => $this->input->post ("nama_alat"),
		//	'kategori' => $this->input->post ("kategori"),
		//	'stok_alat' => $this->input->post ("stok_alat"),
		//	'warna' => $this->input->post ("warna"),
		//	'harga_sewa' => $this->input->post ("harga_sewa"),
		//	'deskripsi' => $this->input->post ("deskripsi"),					
        //    'gambar' => $file_name );
		// $where = array ('ID_alat' => $this->input->post ("ID_alat"));
      	//$res = $this->m_barangmaster->Rubah($data,$where);
		//$this->m_barangmaster->Rubah($where, $data ,'ID_alat');
		//$this->load->model('m_barangmaster');
		//$this->ceklogin();
		$gudang = $this->input->post('ID_alat');
		$data = array(
		 	'ID_alat' => $this->input->post('ID_alat'),
			'kode' => $this->input->post('kode'),
			'nama_alat' => $this->input->post('nama_alat'),
			'kategori' => $this->input->post('kategori'),
			'stok_alat' => $this->input->post('stok_alat'),
			'warna' => $this->input->post('warna'),
			'harga_sewa' => $this->input->post('harga_sewa'),
            'deskripsi' => $this->input->post('deskripsi'),
			
		);

        $this->m_barangmaster->Rubah($data);
        redirect('gudang');		
	}
	
	public function lihat($kode = 0){
		//$this->lihat();
		$this->load->model('m_barangmaster');
		$data_soal = $this->m_barangmaster->Ambil("where ID_alat = '$kode'")->result_array();

		$data = array(
			'ID_alat' => $data_soal[0]['ID_alat'],
			'kode' => $data_soal[0]['kode'],
			'nama_alat' => $data_soal[0]['nama_alat'],
			'kategori' => $data_soal[0]['kategori'],
			'stok_alat' => $data_soal[0]['stok_alat'],
			'warna' => $data_soal[0]['warna'],
			'harga_sewa' => $data_soal[0]['harga_sewa'],
			'deskripsi' => $data_soal[0]['deskripsi'],			
			'gambar' => $data_soal[0]['gambar'],
		);
		$this->load->view('gudang/v_lihat', $data);
	}
	
	// function delete($ID=null){
		///$this->ceklogin();
		//$hasil = $this->m_barangmaster->Hapus('ID_alat',array('ID_alat' => $kode));
		//$this->load->view('gudang/v_barangmaster', $data);
		//if($hasil == 1){
			//redirect('data_alat');
		//}else{
			//echo "ada yang salah broo";
		//}
		//$this->load->model('m_barangmaster');
		//$hasil = $this->m_barangmaster->delete(ID_alat);
		//$hasil = $this->m_barangmaster->delete("nama_alat = '$data'");
			//redirect('gudang');	

		//$where = array('ID_alat' => $ID);
		//$where = array('kode' => $ID);
		//$this->m_barangmaster->delete($where,'data_alat');
		//redirect('gudang');
		//if (!isset($id)) show_404();
        
        //if ($this->m_barangmaster->delete($ID)) {
        //    redirect(site_url('gudang'));
      //  }
    //}
	//}
	
	public function delete($ID_alat=null)
    {
        if (!isset($ID_alat)) show_404();
        
        if ($this->m_barangmaster->delete($id)) {
            redirect(site_url('gudang/index'));
        }
    } 
	
	//public function hapus_barang($id){
        
      //  $hapus = $this->m_barangmaster->hapus('data_alat',$id);

        //if($hapus > 0 ){
			//echo 'Berhasil Di hapus';
			///redirect(site_url('gudang/index'));
						
		//} else {
			//echo 'Gagal Di hapus';
		//}
//	}
	
}
