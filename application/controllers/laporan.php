<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Laporan extends CI_Controller {
	
    public function __construct()
        {   
            parent::__construct();
            $this->load->library('Pdf');
			
            $this->load->model('m_laporan_cetak');
        }
   
    public function cetak_produk()
        {
            $data['penyewaan'] = $this->m_laporan_cetak->get_produk();
            $this->load->view('admin/v_cetak_produk', $data);
    }   
}