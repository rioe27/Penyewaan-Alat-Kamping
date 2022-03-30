<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class beranda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/beranda
	 *	- or -
	 * 		http://example.com/index.php/beranda/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/beranda/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->helper('url','date');
        $this->load->model('m_home');
        $this->load->library('session');

    }
	
	public function index()
	{
		$this->load->model('m_home');
		$data['sewa'] = $this->m_home->tampil2();  
		$this->load->view('v_home', $data);
	}	
	
	public function konsumen()
	{
		$this->load->model('m_home');
		$data['konsumen'] = $this->m_home->user();  
		$this->load->view('v_home', $data);
	}	
	
	 public function lihat($id)
    {
		
		$this->load->model('m_home');
		$data_soal = $this->m_home->lihat_alat("where ID_alat = '$id'");//->result_array();

       
        if($data_soal->num_rows() ){
            $data=array(
                        "sewa"=>$this->m_home->lihat_alat("where ID_alat='$id'")->result(),
                        );
					
            $this->load->view("v_lihat_alat",$data);
			//$this->ceklogin();	
        }else{
            $this->load->view("v_home",$data);
        }                            
    }
	
	public function pencarian(){
		$alat = $_POST['sinbi'];
		$this->load->model('m_home');		
		$data['sewa'] = $this->m_home->pencarian($alat)->result_array();
		$this->load->view("v_home2",$data); 
    } 

	public function persyaratan()
	{
		$this->load->view('v_persyaratan');
	}
	
	public function about()
	{
		$this->load->view('v_persyaratan');
	}
	
	public function ceklogin(){

		if(!$this->session->userdata('id_user')){
			header('location:'.base_url().'login');
			exit(0);
		}

	}
}