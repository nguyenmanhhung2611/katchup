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
		//<?php echo $idDocument; 
	}
}
?>