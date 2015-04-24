<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Index controller
	public function index() {
		$this->load->view('index');
	}
	
	public function tailieu() {
		$this->load->view('document');
	}
}
?>