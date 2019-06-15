<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_controller{
	public function __construct(){
		parent::__construct();
	}

	public function view($page = 'home'){
		if(empty($_SESSION["loginadmin"])){
			$this->load->view('admin/pages/login');
		} else {
		if( ! file_exists(APPPATH. '/views/admin/pages/'. $page .'.php')){
			show_404();
		}
		$this->load->view('admin/pages/'.$page);
		}
	}
}