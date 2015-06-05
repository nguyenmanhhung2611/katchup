<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chia_se_tai_lieu_tieng_nhat extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('Util');
	}

	// Index controller
	function index() {
		$this->danh_muc();
	}


	function danh_muc($categoryASCIIName = DOCUMENT_PAGE_DEFAULT_CATEGORY_NAME_ASCII
		, $categoryID = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING
		, $pageNum = 1
		, $recPerPage = DOCUMENT_PAGE_DEFAULT_NUMBER_ITEM_PER_PAGE
		) 
	{

		$data['categoryID'] = $categoryID;
		$data['currentPage'] = str_replace(DEFAULT_PREFIX_PAGING, "", $pageNum);

		$this->load->Model('Mdocument');
		// set category name for documentlist's title
		if ($categoryID !== DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING) {
			$data['categoryName'] = $this->Mdocument->getCategoryByID($categoryID, array(DANH_MUC_COL_TEN_DANH_MUC))[DANH_MUC_COL_TEN_DANH_MUC];
		} else {
			$data['categoryName'] = DOCUMENT_PAGE_DEFAULT_CATEGORY_NAME;
		}

		// redirect if category name doesnot match category id
		$asciiName = $this->util->utf8_to_ascii_url($data['categoryName']);
		if ($asciiName !== $categoryASCIIName) {
			// asciiName : get from database
			// categoryASCIIName : get from param (URL)
			echo "Reloading...";
			// rewrite URL with right categoryName
			header('location:'.ITQ_BASE_URL.'chia-se-tai-lieu-tieng-nhat/danh-muc/'.$asciiName.'/'.$categoryID);
		} else {
			$data['documentList'] = $this->Mdocument->getLatestDocument($categoryID, $data['currentPage'], $recPerPage);
			$data['countDoc'] = count($data['documentList']);
			$data['countAllDoc'] = $this->Mdocument->countAllDocument($categoryID);
			$data['pageCount'] = ceil($data['countAllDoc']/$recPerPage);
			$data['pageList'] = array();

			$data['categoryList'] = $this->Mdocument->getAllCategory(array(DANH_MUC_COL_MA_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC_TIENG_NHAT));
			$data['popularDocumentList'] = $this->Mdocument->getPopularDocument();
			// get documentlist for slide
			$data['articlesInSlide'] = $this->Mdocument->getDocumentListByID(explode(',', DOCUMENT_PAGE_ARTICLES_IN_SLIDE));

			// init pageList
			for ($i=1; $i <= $data['pageCount']; $i++) { 
				$data['pageList'][$i] = 'chia-se-tai-lieu-tieng-nhat/danh-muc/'.$asciiName."/".$categoryID."/".DEFAULT_PREFIX_PAGING.$i;
			}
			
			$this->load->view('document', $data);
		}

	}

	public function tai_lieu($documentASCIIName, $documentID) {
		$data['documentID'] = $documentID;
		$this->load->model('Mdocument');
		$data['documentSummary'] = $this->Mdocument->getDocumentByID($documentID);


		// redirect if name does not match id
		$asciiName = $this->util->utf8_to_ascii_url($data['documentSummary'][TAI_LIEU_COL_TEN_TAI_LIEU]);
		if ($asciiName !== $documentASCIIName) {
			echo "Reloading...";
			header('location:'.ITQ_BASE_URL.'chia-se-tai-lieu-tieng-nhat/tai-lieu/'.$asciiName.'/'.$documentID);
		} else {
			$data['popularDocumentList'] = $this->Mdocument->getPopularDocument();
			$data['categoryList'] = $this->Mdocument->getAllCategory(array(DANH_MUC_COL_MA_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC_TIENG_NHAT));
			$this->load->view('detail-document', $data);
		}
	}
	
	public function countDocumentView($documentID) {
		if(!$this->session->userdata('session_'.$documentID)) {//Kiểm tra nếu chưa xem lần nào, tức là chưa có session
		//thì set session cho bài viết này
			$this->session->set_userdata('session_'.$documentID,1);
			//Tăng lượt view của bài viết lên 1
			$this->load->Model('Mdocument');
			$this->Mdocument->raiseDocumentView($documentID);
		}  
	}

/**
	Redirect... friendly with SEO
*/
	


}


?>