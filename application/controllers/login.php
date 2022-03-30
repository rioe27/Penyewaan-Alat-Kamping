<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->model('m_login');
        $this->load->library('session');
   //      if($this->session->userdata('status') != "login"){
		 // 	redirect(base_url("index.php/login"));
		 // }

    }
	
	public function index()
	{
		//$this->load->helper('date');
		$this->load->view('v_login');
    }
	
    public function proses(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
			
		$cek = $this->m_login->cek_login("user",$where);
		if($cek ->num_rows() > 0){
 			$row= $cek->row();
			$data_session = array(
				'iduser' => $row->id_user,
				'username' => $row->username,
				'password' => $row->password,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
				if($row->level == "1"){
					redirect(site_url("user/index"));

				}
				else if($row->level == "2"){
					redirect(site_url("Dasboard/admin"));

				}
				else if($row->level == "3"){
					redirect(site_url("Dasboard/index"));

				}								

		}else{
		  $this->session->set_flashdata('pesan', 'Username atau Password Anda Salah');
			redirect(site_url("login"));
		}
    }
	
    function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login/index'));
		}

}