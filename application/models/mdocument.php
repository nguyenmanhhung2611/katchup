

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mdocument extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
/****************************** SELECT FUNCTIONS */
	
	public function selectAll() {
		$query = $this->db->get(TB_TAI_LIEU);
		return $query->result_array();
	}
	
	public function selectPage($pageNum, $recPerPage) {
		$this->db->limit($recPerPage, ($pageNum - 1) * $recPerPage);
		$query = $this->db->get(TB_TAI_LIEU);
		return $query->result_array();
	}
	
	public function countDocument() {
		$this->db->select('count(*)');
		$query = $this->db->get(TB_TAI_LIEU);
		return $query->result_array()[0]['count(*)'];
	}
	
	
	
////////////////////////

	
/****************************** INSERT FUNCTIONS */
	
	public function addDocument($data) {
		$data[] = $id;
		$this->load->view('detail-document', $data);
		//<?php echo $idDocument; 
	}
	
	
////////////////////////
}
?>