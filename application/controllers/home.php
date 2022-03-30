<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
  //  function __construct(){
      //  parent::__construct();
        //load model admin
      ///  $this->load->helper('url','date');
        //$this->load->model('m_login');
       // $this->load->library('session','form_validation');
        //if($this->session->userdata('status') != "login"){
		// 	redirect(base_url("index.php/login"));
		// }
		
		
    
	public function index()	
	{
	$this->load->model('m_home');
		$data = array(
			'alat'=>$this->m_home->ambil()->result_array(),			
		);  
		
		//$data['barang'] = $this->m_barangmaster->ambil()->result_array();

		$this->load->view('konsumen/v_home', $data);
	}	
	
	public function ceklogin(){

		if(isset($_POST['login'])){
			$user = $this->input->post('user',true);
			$pass = $this->input->post('pass',true);
			$cek = $this->m_login->proseslogin($user,$pass);
			$hasil = count($cek);
			if ($hasil> 0){
				$pelogin = $this->db->get_where('tbuser',array('username'=> $user, 'password' => $pass))->row();
				if($pelogin->level == 'konsumen'){
					redirect('home/beranda');
				}elseif($pelogin->level2 == 'admin'){
					redirect('overview/admin');
				}elseif($pelogin->leve3 == 'gudang'){
					redirect('gudang/index');
				}
				elseif($pelogin->leve4 == 'owner'){
					redirect('home/gudang');
				
			}else{
				
				redirect('welcome/index');
			}

		}
	}

	}
}