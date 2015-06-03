<?php
/*
	MaSP (int) (auto_increment)
	TenSP (varChar _ 255)
	MoTa (Text)
	GiaCu (int)
	GiaMoi (int)
	TenHinh (varchar _ 255)
    TenHinhHD (varchar _ 255) 
    TrangThai (varchar _ 255)
*/
class Product extends CI_Model {
	
    function __construct()
    {        
        parent::__construct(); // Call the Model constructor
    }

	public function getList() {
		return $this->db->select('*')->from('sanpham')->order_by('MaSP asc, TenSP asc')->get()->result_array();
	}

    public function getListById($id) {
        return $this->db->select('*')->from('sanpham')->where(array('MaSP' => $id))->get()->row_array();
    }

    public function add($name, $des, $oldPrice, $newPrice, $NameImg) {
        try {
            $data = array(
                'TenSP' => $name,
                'MoTa' => $des,
                'GiaCu' => $oldPrice,
                'GiaMoi' => $newPrice,
                'TenHinh' => $NameImg
            );
            $this->db->insert('sanpham', $data);

        } catch (Exception $e) {
            // echo $e->getMessage();
            return false;
        }
        return true;
    }

    public function edit($id, $name, $des, $oldPrice, $newPrice, $NameImg) {
        try {
            $id = (int)$id;
            $data = array(
                'MaSP' => $id,
                'TenSP' => $name,
                'MoTa' => $des,
                'GiaCu' => $oldPrice,
                'GiaMoi' => $newPrice,
                'TenHinh' => $NameImg
            );

            $this->db->where('MaSP', $id);
            $this->db->update('sanpham', $data);

        } catch (Exception $e) {
            // echo $e->getMessage();
            return false;
        }
        return true;
    }

    public function delete($id) {
        try {
            $id = (int)$id;
            // $query['sanpham'] = $this->db->select('*')->from('sanpham')->where(array('MaSP' => $id))->get()->row_array();
            $this->db->delete('sanpham', array('id' => $id));

        } catch (Exception $e) {
            // echo $e->getMessage();
            return false;
        }
        return true;
    }


}

?>