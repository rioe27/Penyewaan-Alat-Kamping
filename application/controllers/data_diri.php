<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_diri extends CI_Controller {

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
        //load model admin
        $this->load->helper('url','date');
        $this->load->model('m_data_diri');
        $this->load->library('session','form_valiadtion');
        // if($this->session->userdata('status') != "login"){
		 	// redirect(base_url("index.php/login"));
		 // }

    }
    public function profil_kons()
    {
      $data['bio']=$this->m_data_diri->get_id_akun();
      //$data['les_aktif']=$this->m_data_diri->jmlh_penugasan_aktif_kons();
      //$data['les_tidak_aktif']=$this->m_data_diri->jmlh_penugasan_tdk_aktif_kons();

      $this->load->view('konsumen/v_profil' ,$data);
    }

    public function insert_bio_kons()
    {
      $this->form_validation->set_rules('nama', 'NAMA','required');
       $this->form_validation->set_rules('alamat','alamat','required');
       $this->form_validation->set_rules('no_tlpn','no_tlpn','required');

      $id_konsumen = $this->input->post('id_kons');
      $nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $notlpn = $this->input->post('no_tlpn');
		$idakun = $this->input->post('idakun');
      if($this->form_validation->run()==FALSE){
        echo "<script>
            window.alert('Harap isi form dengan benar');
            window.location='profil_kons';
            </script>";
      }
      else{
        $data =array(
          'nama' => $nama,
          'alamat' => $alamat,
          'no_tlpn' => $notlpn,
		  'id_akun'=> $idakun
        );
       $where = array('id_konsumen' => $id_konsumen);
        $this->m_data_diri->update_data($where,$data,'konsumen');
        $this->session->set_flashdata('pesan', 'Data berhasil di perbarui');
        redirect(site_url("user/index"));
      }
    }
    

    

}