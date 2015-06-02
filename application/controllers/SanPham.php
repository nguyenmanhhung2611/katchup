<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SanPham extends CI_Controller {

	var $data;

	public function __construct()
    {
        parent::__construct();
    }

	// Index controller
	public function index() {
		// $this->load->model('Product');
		// $data['products'] = $this->Product->getList();
		// print_r($data);
		// $this->load->view('product', $data);
		$this->load->view('product');
		
		// http://stackoverflow.com/questions/2038755/how-to-put-a-dot-after-three-digits-of-a-number
		// echo number_format(1254631 , 0, ',', '.');  // prints 1.254.631
	}
	
	public function thanh_toan() {
		echo "done";
	}
	
}
?>