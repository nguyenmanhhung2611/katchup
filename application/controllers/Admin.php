<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('Util');
	}

	// Index controller
	public function index() {
		$this->load->view('admin/index-fake');
	}

	public function index31() {
		$this->load->view('admin/index');
	}


	// bullshit login
	public function login() {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (($username === ADMIN_PAGE_DEFAULT_USERNAME) && ($password === ADMIN_PAGE_DEFAULT_PASSWORD)) {
			$data['loginStat'] = true;
		} else {
			$data['loginStat'] = false;
		}
		$this->load->view('admin/index', $data);
	}


	/// Document Manager
	public function addDocument() {
		$this->load->helper('form');
		$this->load->Model('Mdocument');
		$data['categoryList'] = $this->Mdocument->getAllCategory(array(DANH_MUC_COL_MA_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC));
		$this->load->view('admin/addDocument', $data);
	}

	public function editDocument($documentID) {
		$this->load->helper('form');
		$this->load->Model('Mdocument');

		$data['document'] = $this->Mdocument->getDocumentByIDWithCategory($documentID);
		$data['categoryList'] = $this->Mdocument->getAllCategory(array(DANH_MUC_COL_MA_DANH_MUC, DANH_MUC_COL_TEN_DANH_MUC));
		$this->load->view('admin/editDocument', $data);
	}

	public function documentList() {
		$this->load->Model('Mdocument');

		$arr_column_to_get = array(TAI_LIEU_COL_MA_TAI_LIEU,
			TAI_LIEU_COL_TEN_TAI_LIEU,
			TAI_LIEU_COL_TEN_TAI_LIEU_TIENG_NHAT,
			DANH_MUC_COL_TEN_DANH_MUC,
			TAI_LIEU_COL_HINH_ANH,
			//TAI_LIEU_COL_MO_TA,
			//TAI_LIEU_COL_CHI_TIET_BAI_VIET,
			TAI_LIEU_COL_NGAY_DANG,
			TAI_LIEU_COL_LUOT_VIEW,
			TAI_LIEU_COL_GHI_CHU,
			);
		$data['list_document'] = $this->Mdocument->getAllDocumentWithCategory($arr_column_to_get);
		$this->load->view('admin/showDocumentList', $data);
	}

	public function executeAddNewDocument() {

		$config['upload_path']          = DOCUMENT_PAGE_RESOURCE_IMAGE_PATH;
		$config['allowed_types']        = 'gif|jpg|png';


        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload()) {
        	echo "Thêm ảnh thất bại";
        	$error = array('error' => $this->upload->display_errors());
        	echo "<pre>";
        	print_r($error);
        	echo "</pre>";
        	echo '<h1><a href="admin/documentList">Về trang danh sách tài liệu</a></h1>';
        } else {
            $data[TAI_LIEU_COL_HINH_ANH] = $this->upload->data('file_name');
            $data[TAI_LIEU_COL_TEN_TAI_LIEU] = $_POST['tenTaiLieu'];
			$data[TAI_LIEU_COL_TEN_TAI_LIEU_TIENG_NHAT] = $_POST['tenTaiLieuTiengNhat'];
			
			$data[TAI_LIEU_COL_MO_TA] = $_POST['moTaTaiLieu'];
			$data[TAI_LIEU_COL_MA_DANH_MUC] = $_POST['danhMuc'];
			$data[TAI_LIEU_COL_CHI_TIET_BAI_VIET] = $_POST['chiTiet'];
			$data[TAI_LIEU_COL_NGAY_DANG] = $_POST['ngayDang'];
			$data[TAI_LIEU_COL_GHI_CHU] = $_POST['ghiChu'];
	
			$this->load->model('Mdocument');
			$kq = $this->Mdocument->insertDocument($data);

			if ($kq) {
				echo "Thêm dữ liệu thành công";
				?><h1><a href="admin/documentList">Về trang danh sách tài liệu</a></h1><?php
			} else {
				echo "Thêm dữ liệu thất bại";
				?><h1><a href="admin/documentList">Về trang danh sách tài liệu</a></h1><?php
			}
        }
	}

	public function executeUpdateDocument($documentID, $changeImage = false) {

		if ($_FILES['userfile']['name'] !== "") {
			$config['upload_path']          = DOCUMENT_PAGE_RESOURCE_IMAGE_PATH;
			$config['allowed_types']        = 'gif|jpg|png';
			$changeImage = true;
	        $this->load->library('upload', $config);
		}
		
		echo $changeImage;




        if ( ($changeImage)&&(! $this->upload->do_upload())) {
        	echo "Thêm ảnh thất bại";
        	$error = array('error' => $this->upload->display_errors());
        	echo "<pre>";
        	print_r($error);
        	echo "</pre>";
        	echo '<h1><a href="admin/documentList">Về trang danh sách tài liệu</a></h1>';
        } else {
            if ($changeImage) $data[TAI_LIEU_COL_HINH_ANH] = $this->upload->data('file_name');
            $data[TAI_LIEU_COL_TEN_TAI_LIEU] = $_POST['tenTaiLieu'];
			$data[TAI_LIEU_COL_TEN_TAI_LIEU_TIENG_NHAT] = $_POST['tenTaiLieuTiengNhat'];
			
			$data[TAI_LIEU_COL_MO_TA] = $_POST['moTaTaiLieu'];
			$data[TAI_LIEU_COL_MA_DANH_MUC] = $_POST['danhMuc'];
			$data[TAI_LIEU_COL_CHI_TIET_BAI_VIET] = $_POST['chiTiet'];
			$data[TAI_LIEU_COL_NGAY_DANG] = $_POST['ngayDang'];
			$data[TAI_LIEU_COL_GHI_CHU] = $_POST['ghiChu'];
	
			//print_r($data);
			$this->load->model('Mdocument');
			$kq = $this->Mdocument->updateDocument($documentID, $data);

			if ($kq) {
				echo "Sửa dữ liệu thành công";
				echo '<h1><a href="admin/documentList">Về trang danh sách tài liệu</a></h1>';
			} else {
				echo "Sửa dữ liệu thất bại";
				echo '<h1><a href="admin/documentList">Về trang danh sách tài liệu</a></h1>';
			}
        }
	}


	/// Category Manager
	public function addCategory() {
		$this->load->helper('form');
		$this->load->view('admin/addCategory');
	}

	public function editCategory($categoryID) {
		$this->load->helper('form');
		$this->load->Model('Mdocument');

		$data['category'] = $this->Mdocument->getCategoryByID($categoryID);
		$this->load->view('admin/editCategory', $data);
	}

	public function categoryList() {
		$this->load->Model('Mdocument');

		$arr_column_to_get = array(
			);
		$data['list_category'] = $this->Mdocument->getAllCategory($arr_column_to_get);
		$this->load->view('admin/showCategoryList', $data);
	}

	public function executeAddNewCategory() {
			$data[DANH_MUC_COL_TEN_DANH_MUC] = $_POST['tenDanhMuc'];
			$data[DANH_MUC_COL_TEN_DANH_MUC_TIENG_NHAT] = $_POST['tenDanhMucTiengNhat'];
			$data[DANH_MUC_COL_MO_TA] = $_POST['moTaDanhMuc'];
			$data[DANH_MUC_COL_GHI_CHU] = $_POST['ghiChu'];

			$this->load->model('Mdocument');
			$kq = $this->Mdocument->insertCategory($data);

			if ($kq) {
				echo "Thêm dữ liệu thành công";
				?><h1><a href="admin/categoryList">Về trang danh sách danh mục</a></h1><?php
			} else {
				echo "Thêm dữ liệu thất bại";
				?><h1><a href="admin/categoryList">Về trang danh sách danh mục</a></h1><?php
			}
	}

	public function executeUpdateCategory($categoryID) {

	}
}


?>