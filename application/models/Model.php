<?php
	class Model extends CI_Model {

		//$table = "";
		//$data = array();

		function __construct() {
			parent::__construct();
			$this->load->database();
		}

		
		function insert() {
		//	$this->db->insert($table, $data);
		//	return $this->db->insert_id();
		}

		function delete() {

		}

		function update() {
			echo "hehe";
		}

		function select() {

		}

		public static function convertArrayColumnToString($arr_column) {
			$str_select = '';
			if (count($arr_column)>0) {
				foreach ($arr_column as $column) {
					$str_select .= $column.',';
				}
				$str_select = trim($str_select, ",");
			}
			return $str_select;
		}

	}
?>