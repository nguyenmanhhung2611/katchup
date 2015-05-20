<?php
	

	class Mdocument extends CI_Model {

		function __construct() {
			parent::__construct();
			$this->load->database();
		}

		function getDocumentByID($id, $arr_column = array()) {
			if (count($arr_column)>0) {
				$str_select = '';
				foreach ($arr_column as $column) {
					$str_select .= $column.',';
				}
				$str_select = trim($str_select, ",");

				$this->db->select($str_select);
			}
			
			$this->db->from(TB_TAI_LIEU);
			$this->db->where(TAI_LIEU_COL_MA_TAI_LIEU, $id);
			$query = $this->db->get();
			return $query->result_array()[0];
		}

		function getAllDocument($arr_column = array()) {
			if (count($arr_column)>0) {
				$str_select = '';
				foreach ($arr_column as $column) {
					$str_select .= $column.',';
				}
				$str_select = trim($str_select, ",");

				$this->db->select($str_select);
			}
			
			$this->db->select('*')->from(TB_TAI_LIEU)
			->join(TB_DANH_MUC_TAI_LIEU, TB_TAI_LIEU.'.'.TAI_LIEU_COL_MA_DANH_MUC.'='.TB_DANH_MUC_TAI_LIEU.'.'.DANH_MUC_COL_MA_DANH_MUC);
			$query = $this->db->get();
			return $query->result_array();
		}

		function getLatestDocument($categoryID = -1) {
			$this->db->select('*')->from(TB_TAI_LIEU)
			->join(TB_DANH_MUC_TAI_LIEU, TB_TAI_LIEU.'.'.TAI_LIEU_COL_MA_DANH_MUC.'='.TB_DANH_MUC_TAI_LIEU.'.'.DANH_MUC_COL_MA_DANH_MUC)
			->order_by(TAI_LIEU_COL_NGAY_DANG, 'desc');
			if ($categoryID > 0) {
				$this->db->where(TB_TAI_LIEU.'.'.TAI_LIEU_COL_MA_DANH_MUC, $categoryID);
			}
			
			$query = $this->db->get();
			return $query->result_array();
		}

		function getPopularDocument() {
			$this->db->select('*')->from(TB_TAI_LIEU)
			->join(TB_DANH_MUC_TAI_LIEU, TB_TAI_LIEU.'.'.TAI_LIEU_COL_MA_DANH_MUC.'='.TB_DANH_MUC_TAI_LIEU.'.'.DANH_MUC_COL_MA_DANH_MUC)
			->order_by(TAI_LIEU_COL_LUOT_VIEW, 'desc');
			
			$query = $this->db->get();
			return $query->result_array();
		}


		function getAllCategory($arr_column = array()) {
			if (count($arr_column)>0) {
				$str_select = '';
				foreach ($arr_column as $column) {
					$str_select .= $column.',';
				}
				$str_select = trim($str_select, ",");

				$this->db->select($str_select);
			}
			
			$this->db->from(TB_DANH_MUC_TAI_LIEU);
			$query = $this->db->get();
			return $query->result_array();	
		}

		function getCategoryByID($id, $arr_column = array()) {
			if (count($arr_column)>0) {
				$str_select = '';
				foreach ($arr_column as $column) {
					$str_select .= $column.',';
				}
				$str_select = trim($str_select, ",");

				$this->db->select($str_select);
			}
			
			$this->db->from(TB_DANH_MUC_TAI_LIEU);
			$this->db->where(DANH_MUC_COL_MA_DANH_MUC, $id);
			$query = $this->db->get();
			return $query->result_array()[0];	
		}

	}
?>