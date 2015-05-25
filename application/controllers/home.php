<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Index controller
	public function index() {
		$this->load->view('index');
	}
	
	public function document($categoryID = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING, $pageNum = 1) {
		$data['categoryID'] = $categoryID;
		$data['pageNum'] = $pageNum;
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

	public function changeDocumentList($categoryID = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING, $pageNum = 1, $recPerPage = DOCUMENT_PAGE_DEFAULT_NUMBER_ITEM_PER_PAGE) {
		$this->load->model('Mdocument');
		
		$data['documentList'] = $this->Mdocument->getLatestDocument($categoryID, $pageNum, $recPerPage);
		$data['countDoc'] = count($data['documentList']);
		$data['countAllDoc'] = $this->Mdocument->countAllDocument($categoryID);
		$data['categoryName'] = "";
		if ($categoryID !== DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING) {
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


	
/**
	Redirect... friendly with SEO
*/
	public function chia_se_tai_lieu_tieng_nhat($categoryID = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING, $pageNum = 1) {
		$this->document($categoryID, $pageNum);
	}

	public function tai_lieu_tieng_nhat($documentID) {
		$this->detailDocument($documentID);
		
	}
}
?>