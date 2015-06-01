<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
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
	
	public function document($categoryASCIIName = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING, 
							$categoryID = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING, 
							$pageNum = DEFAULT_PREFIX_PAGING."1", 
							$recPerPage = DOCUMENT_PAGE_DEFAULT_NUMBER_ITEM_PER_PAGE
							) {
		$data['categoryID'] = $categoryID;
		$data['currentPage'] = $this->util->getPageNum($pageNum);
		
		$this->load->model('Mdocument');
		$data['categoryName'] = "";
		if ($categoryID !== DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING) {
			$data['categoryName'] = $this->Mdocument->getCategoryByID($categoryID, array(DANH_MUC_COL_TEN_DANH_MUC))[DANH_MUC_COL_TEN_DANH_MUC];
		} else {
			$data['categoryName'] = DOCUMENT_PAGE_DEFAULT_CATEGORY_NAME;
		}

		// redirect if name does not match id
		$asciiName = $this->util->utf8_to_ascii_url($data['categoryName']);
		if ($asciiName !== $categoryASCIIName) {
			echo "Reloading...";
			header('location:'.ITQ_BASE_URL.DEFAULT_HOME_URL.'/'.DEFAULT_PREFIX_CATEGORY_URL.'/'.$asciiName.'/'.$categoryID);
			//$this->detailDocument($this->util->utf8_to_ascii_url($data['documentSummary'][TAI_LIEU_COL_TEN_TAI_LIEU]), $documentID);
		} else {
			$data['documentList'] = $this->Mdocument->getLatestDocument($categoryID, $data['currentPage'], $recPerPage);
			$data['countDoc'] = count($data['documentList']);
			$data['countAllDoc'] = $this->Mdocument->countAllDocument($categoryID);
			$data['pageCount'] = ceil($data['countAllDoc']/$recPerPage);
			$data['pageList'] = array();

			$data['categoryList'] = $this->Mdocument->getAllCategory(array(DANH_MUC_COL_MA_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC_TIENG_NHAT));
			$data['popularDocumentList'] = $this->Mdocument->getPopularDocument();
			$data['articlesInSlide'] = $this->Mdocument->getDocumentListByID(DOCUMENT_PAGE_ARTICLES_IN_SLIDE);

			// init pageList
			for ($i=1; $i <= $data['pageCount']; $i++) { 
				$data['pageList'][$i] = DEFAULT_HOME_URL."/".DEFAULT_PREFIX_CATEGORY_URL."/".$asciiName."/".$categoryID."/".DEFAULT_PREFIX_PAGING.$i;
			}
			$this->load->view('document', $data);
		}
	}

	public function detailDocument($documentASCIIName, $documentID) {
		$data['documentID'] = $documentID;
		$this->load->model('Mdocument');
		$data['documentSummary'] = $this->Mdocument->getDocumentByID($documentID);


		// redirect if name does not match id
		$asciiName = $this->util->utf8_to_ascii_url($data['documentSummary'][TAI_LIEU_COL_TEN_TAI_LIEU]);
		if ($asciiName !== $documentASCIIName) {
			echo "Reloading...";
			header('location:'.ITQ_BASE_URL.DEFAULT_HOME_URL.'/'.DEFAULT_PREFIX_DOCUMENT_URL.'/'.$asciiName.'/'.$documentID);
			//$this->detailDocument($this->util->utf8_to_ascii_url($data['documentSummary'][TAI_LIEU_COL_TEN_TAI_LIEU]), $documentID);
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

//// Tin Tuc
	public function news() {
		$this->load->view('news');
	}

	public function register() {
        $this->load->model('Captcha');
		if ($this->Captcha->rpHash($_POST['defaultReal']) != $_POST['defaultRealHash']) {
			print "Error";
		}
	}

	public function sitemap() {
		$data = "";
        header("Content-Type: text/xml;charset=iso-8859-1");
        $this->load->view("sitemap",$data);
	}

	
/**
	Redirect... friendly with SEO
*/
	public function chia_se_tai_lieu_tieng_nhat(
					$categoryASCIIName = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING, 
					$categoryID = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING, $pageNum = 1
					) {
		$this->document($categoryASCIIName, $categoryID, $pageNum);
	}

	public function tai_lieu_tieng_nhat($documentASCIIName, $documentID) {
		$this->detailDocument($documentASCIIName, $documentID);
		
	}


}

class Trang_chu extends Home {
	function __construct()
	{
		parent::__construct();
	}
}
?>