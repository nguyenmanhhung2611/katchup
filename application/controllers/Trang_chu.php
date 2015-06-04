<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trang_chu extends CI_Controller {
	
	//$alias_document;

	function __construct()
	{
		
		parent::__construct();

		//$this->load->helper('url');
		$this->load->library('Util');
	}

	// Index controller
	public function index() {
		$this->load->view('index');
		
	}

	public function sitemap() {
		$data = "";
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap",$data);
	}

	
/**
	Redirect... friendly with SEO
*/

}


?>