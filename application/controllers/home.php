<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Index controller
	public function index() {
		$this->load->view('index');
	}
	
	public function document() {
		$this->load->view('document');
	}

	public function detailDocument($id) {
		$data['idDocument'] = $id;
		$this->load->view('detail-document', $data);
	}
	
	public function news() {
		$this->load->view('news');
	}

	public function product() {
		$this->load->model('Product');
		$data['products'] = $this->Product->getList();

		$this->load->view('product', $data);
		
		// http://stackoverflow.com/questions/2038755/how-to-put-a-dot-after-three-digits-of-a-number
		// echo number_format(1254631 , 0, ',', '.');  // prints 1.254.631
	}

	public function register() {
        $this->load->model('Captcha');
		if ($this->Captcha->rpHash($_POST['defaultReal']) != $_POST['defaultRealHash']) {
			print "Error";
		}
	}
	
}
?>