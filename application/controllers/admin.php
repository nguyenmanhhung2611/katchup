<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}
	
	// Index controller
	public function index() {
		$this->load->view('admin/index');
	}
	
	public function login() {
		$_SESSION['admin_username'] = $_POST['username'];
		echo $_SESSION['admin_username'];
	}

	/*** Document Manager */
	public function documentManager($pageNum = 1, $recPerPage = DEFAULT_NUMBER_RECORDS_PER_PAGE) {
		$this->load->Model('Mdocument');
		//$data['list_document'] = $this->Mdocument->selectPage($pageNum, $recPerPage);
		$data['count_all_document'] = $this->Mdocument->countDocument();
		$this->load->view('admin/document-manager', $data);
		
	}
	
	public function showDocument($pageNum = 1, $recPerPage = DEFAULT_NUMBER_RECORDS_PER_PAGE) {
		$this->load->Model('Mdocument');
		$data['list_document'] = $this->Mdocument->selectPage($pageNum, $recPerPage);
		$data['count_all_document'] = $this->Mdocument->countDocument();
		$this->load->view('admin/document-show', $data);
	}
	
	public function addDocument() {
		$this->load->view('admin/document-add');
	}
	
	public function addDocumentResult() {
		// execute add record
		
		// send result to model
		
	}
	// end Document Manager
}
?>