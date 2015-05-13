<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
	
	// Index controller
	public function index() {
		$this->load->view('ajaxTest');
	}
	
	public function ajaxPostNoParam() {
		// echo "{'a':'1', 'b':'2'}";
		$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
		//$a = array('<foo>',"'bar'",'"baz"','&blong&');
		echo json_encode($arr);
	}

	public function ajaxPostParam() {		
		//$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
		// $eid = $this->input->post('id');
		// echo $eid;

		$email = $this->input->post('email');
		echo $email;
	}

	public function ajaxPostParamInURL() {		
		if (isset($_GET['id'])) {
		    echo $_GET['id'];
		}else{
		    // Fallback behaviour goes here
		    echo "Not ok";
		}
	}

}
?>