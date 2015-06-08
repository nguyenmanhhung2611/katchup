<?php
	

	class Mdocument extends CI_Model {

		function __construct() {
			parent::__construct();
			$this->load->database();
			$this->load->library('util');
		}

		function getDocumentByID($id, $arr_column = array()) {
			$this->db->select($this->util->convertArrayColumnToString($arr_column));
			$this->db->from(TB_TAI_LIEU);
			$this->db->where(TAI_LIEU_COL_MA_TAI_LIEU, $id);
			$query = $this->db->get();
			return $query->result_array()[0];
		}

		function getDocumentListByID($arr_id, $arr_column = array()) {
			$this->db->select($this->util->convertArrayColumnToString($arr_column));
			$this->db->from(TB_TAI_LIEU);
			foreach ($arr_id as $id) {
				$this->db->or_where(TAI_LIEU_COL_MA_TAI_LIEU, $id);	
			}
			
			$query = $this->db->get();
			return $query->result_array();
		}

		function getDocumentByIDWithCategory($id, $arr_column = array()) {
			$this->db->select($this->util->convertArrayColumnToString($arr_column));
			$this->db->from(TB_TAI_LIEU)
			->join(TB_DANH_MUC_TAI_LIEU, TB_TAI_LIEU.'.'.TAI_LIEU_COL_MA_DANH_MUC.'='.TB_DANH_MUC_TAI_LIEU.'.'.DANH_MUC_COL_MA_DANH_MUC, "left");
			$this->db->where(TAI_LIEU_COL_MA_TAI_LIEU, $id);
			$query = $this->db->get();
			return $query->result_array()[0];
		}

		function getAllDocument($arr_column = array()) {
			$this->db->select($this->util->convertArrayColumnToString($arr_column));
			$this->db->from(TB_TAI_LIEU);
			$query = $this->db->get();
			return $query->result_array();
		}

		function getAllDocumentWithCategory($arr_column = array()) {
			$this->db->select($this->util->convertArrayColumnToString($arr_column));
			$this->db->from(TB_TAI_LIEU)
			->join(TB_DANH_MUC_TAI_LIEU, TB_TAI_LIEU.'.'.TAI_LIEU_COL_MA_DANH_MUC.'='.TB_DANH_MUC_TAI_LIEU.'.'.DANH_MUC_COL_MA_DANH_MUC, "left");
			$query = $this->db->get();
			return $query->result_array();
		}

		function getLatestDocument($categoryID = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING, $pageNum = 1, $recPerPage = DOCUMENT_PAGE_DEFAULT_NUMBER_ITEM_PER_PAGE) {
			$this->db->select('*')->from(TB_TAI_LIEU)
			->join(TB_DANH_MUC_TAI_LIEU, TB_TAI_LIEU.'.'.TAI_LIEU_COL_MA_DANH_MUC.'='.TB_DANH_MUC_TAI_LIEU.'.'.DANH_MUC_COL_MA_DANH_MUC, "left")
			->order_by(TAI_LIEU_COL_NGAY_DANG, 'desc')
			->limit($recPerPage, ($pageNum - 1) * $recPerPage);
			if ($categoryID !== DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING) {
				$this->db->where(TB_TAI_LIEU.'.'.TAI_LIEU_COL_MA_DANH_MUC, $categoryID);
				
			}
			
			$query = $this->db->get();
			return $query->result_array();
		}

		function getPopularDocument() {
			$this->db->select('*')->from(TB_TAI_LIEU)
			->join(TB_DANH_MUC_TAI_LIEU, TB_TAI_LIEU.'.'.TAI_LIEU_COL_MA_DANH_MUC.'='.TB_DANH_MUC_TAI_LIEU.'.'.DANH_MUC_COL_MA_DANH_MUC, "left")
			->order_by(TAI_LIEU_COL_LUOT_VIEW, 'desc')
			->limit(DOCUMENT_PAGE_DEFAULT_NUMBER_ITEM_MOST_VIEW);
			
			$query = $this->db->get();
			return $query->result_array();
		}


		function getAllCategory($arr_column = array()) {
			$this->db->select($this->util->convertArrayColumnToString($arr_column));
			$this->db->from(TB_DANH_MUC_TAI_LIEU);
			$query = $this->db->get();
			return $query->result_array();	
		}

		function getCategoryByID($id, $arr_column = array()) {
			$this->db->select($this->util->convertArrayColumnToString($arr_column));
			$this->db->from(TB_DANH_MUC_TAI_LIEU);
			$this->db->where(DANH_MUC_COL_MA_DANH_MUC, $id);
			$query = $this->db->get();
			return $query->result_array()[0];	
		}

		function countAllDocument($categoryID = DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING) {
			$this->db->from(TB_TAI_LIEU);
			if ($categoryID !== DOCUMENT_PAGE_DEFAULT_CATEGORY_STRING) {
				$this->db->where(TAI_LIEU_COL_MA_DANH_MUC, $categoryID);
				
			}
			return $this->db->count_all_results();
		}

		/// INSERT DATA
		function insertDocument($data) {
			return $this->db->insert(TB_TAI_LIEU, $data);
		}

		function updateDocument($documentID, $data) {
			
			return $this->db->update(TB_TAI_LIEU, $data, array(TAI_LIEU_COL_MA_TAI_LIEU => $documentID));
		}

		function raiseDocumentView($documentID) {
			$this->db->select(TAI_LIEU_COL_LUOT_VIEW)->
										from(TB_TAI_LIEU)->
										where(TAI_LIEU_COL_MA_TAI_LIEU, $documentID);
			$query = $this->db->get();
			$currentCount = $query->result_array()[0][TAI_LIEU_COL_LUOT_VIEW];

			$this->updateDocument($documentID, array(TAI_LIEU_COL_LUOT_VIEW => ($currentCount+1)));

		}

		function insertCategory($data) {
			return $this->db->insert(TB_DANH_MUC_TAI_LIEU, $data);
		}

		function updateCategory($categoryID, $data) {
			
			return $this->db->update(TB_DANH_MUC_TAI_LIEU, $data, array(DANH_MUC_COL_MA_DANH_MUC => $categoryID));
		}
	}
?>