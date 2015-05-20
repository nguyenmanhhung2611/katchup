<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Index controller
	public function index() {
		$this->load->view('index');
	}
	
	public function document($categoryID = -1) {
		$data['categoryID'] = $categoryID;
		$this->load->view('document', $data);
	}

	public function detailDocument($id) {
		$data['documentID'] = $id;
		$this->load->view('detail-document', $data);
	}
	
	public function news() {
		$this->load->view('news');
	}

	public function register() {
        $this->load->model('Captcha');
		if ($this->Captcha->rpHash($_POST['defaultReal']) != $_POST['defaultRealHash']) {
			print "Error";
		}
	}

	public function changeDocumentList($categoryID = -1) {
		$this->load->model('Mdocument');
		$data['categoryName'] = "";
		$data['documentList'] = $this->Mdocument->getLatestDocument($categoryID);
		if ($categoryID > 0) {
			$data['categoryName'] = $this->Mdocument->getCategoryByID($categoryID, array(DANH_MUC_COL_TEN_DANH_MUC))[DANH_MUC_COL_TEN_DANH_MUC];
		}
		
		echo json_encode($data);
	}

	public function showPopularDocument() {
		$this->load->model('Mdocument');
		$data = $this->Mdocument->getPopularDocument();
		
		echo json_encode($data);
	}

	public function showListCategory() {
		$this->load->model('Mdocument');
		$data = $this->Mdocument->getAllCategory(array(DANH_MUC_COL_MA_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC_TIENG_NHAT));
		
		echo json_encode($data);
	}
	
	public function showDocumentSummary($documentID) {
		$this->load->model('Mdocument');
		$data = $this->Mdocument->getDocumentByID($documentID);
		
		echo json_encode($data);
	}
}
?>