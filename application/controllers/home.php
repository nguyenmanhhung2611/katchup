<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Index controller
	public function index() {
		$this->load->view('index');
	}
	
	public function document() {
		$this->load->Model('Mdocument');
		
		$data['count_all_document'] = $this->Mdocument->countDocument();
		$this->load->view('document', $data);
	}

	public function documentList($pageNum = 1, $recPerPage = DEFAULT_NUMBER_RECORDS_PER_PAGE) {
		$this->load->Model('Mdocument');
		$data['list_document'] = $this->Mdocument->selectPage_Lastest($pageNum, $recPerPage);
		$data['count_all_document'] = $this->Mdocument->countDocument();
		$this->load->view('document/document-list', $data);
	}

	public function detailDocument($id) {

		$data['idDocument'] = $id;
		$this->load->view('detail-document', $data);
		//<?php echo $idDocument; 
	}

	public function documentCategory() {
		$this->load->Model('MdocumentCategory');
		$data['list_document_category'] = $this->MdocumentCategory->selectAll();
		$data['count_all_document_category'] = $this->MdocumentCategory->countDocument();
		$this->load->view('document/document-category-list', $data);
	}
}
?>