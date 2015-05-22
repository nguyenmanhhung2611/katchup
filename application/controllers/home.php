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

	public function changeDocumentList($categoryID = -1, $pageNum = 1, $recPerPage = DOCUMENT_PAGE_DEFAULT_NUMBER_ITEM_PER_PAGE) {
		$this->load->model('Mdocument');
		
		$data['documentList'] = $this->Mdocument->getLatestDocument($categoryID, $pageNum, $recPerPage);
		$data['countDoc'] = count($data['documentList']);
		$data['categoryName'] = "";
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

	public function getDocumentListPagination($categoryID = -1, $pageNum = 1, $recPerPage = DOCUMENT_PAGE_DEFAULT_NUMBER_ITEM_PER_PAGE) {
		$this->load->model('Mdocument');
		$data['categoryName'] = "";
		$data['documentList'] = $this->Mdocument->getLatestDocument($categoryID);
		if ($categoryID > 0) {
			$data['categoryName'] = $this->Mdocument->getCategoryByID($categoryID, array(DANH_MUC_COL_TEN_DANH_MUC))[DANH_MUC_COL_TEN_DANH_MUC];
		}
	}

	public function pagination($pageNum, $recPerPage, $countDoc) {
		$this->load->library('Ajax_pagination');
		$config['first_link'] = '<<';
		$config['last_link'] = '>>';
		$config['div'] = 'content'; //Div tag id
		$config['base_url'] = "home/changeDocumentList/".$pageNum."/".$recPerPage;
		$config['total_rows'] = $countDoc;
		$config['per_page'] = $recPerPage;
		$config['postVar'] = 'page';

		$this->ajax_pagination->initialize($config);
		echo $this->ajax_pagination->create_links();

	}
}
?>