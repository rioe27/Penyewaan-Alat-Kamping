<?php

class overview extends CI_Controller {
	
    function __construct(){
		parent::__construct();
		
	}

		public function admin(){
		$this->load->view('admin/overview');
	}
}