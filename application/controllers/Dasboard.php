<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dasboard extends CI_Controller {
	
    function __construct(){
		parent::__construct();
		$this->load->helper('url','date');
	}

		public function index(){
		$this->load->view('gudang/v_dashboard');
	}
	
	public function admin(){
		$this->load->view('admin/v_dashboard');
	}
}