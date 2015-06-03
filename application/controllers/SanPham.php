<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SanPham extends CI_Controller {	

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Product');
    }

	// Index controller
	public function index() {		
		$data['products'] = $this->Product->getList();
		// print_r($data);
		$this->load->view('product', $data);
		
		// http://stackoverflow.com/questions/2038755/how-to-put-a-dot-after-three-digits-of-a-number
		// echo number_format(1254631 , 0, ',', '.');  // prints 1.254.631
	}
	
	public function thanh_toan() {
		$checkErrorData = false;
		$totalAgainst = 0;

		// Validate against products
		$product = $this->input->post('product');
		// echo json_encode($product);
		foreach ($product as $key => $val) {
			$maSp = str_replace('product_', '', $val['id']);
			$productDataBase = $this->Product->getListById($maSp);
			if($productDataBase['GiaMoi'] != intval($val['price'])) {
				$checkErrorData = true;
			}
			$totalAgainst += $productDataBase['GiaMoi'] * intval($val['amount']);
		}

		// Validate against total price
		$total = intval($this->input->post('total'));		
		if($total != $totalAgainst) {
			$checkErrorData = true;
		}

		// Send mail
		if(!$checkErrorData) {			
			$city = $this->input->post('city');
			$optionCity = $this->input->post('optionCity');
			$name_Email = $this->input->post('name');
			$title = $this->input->post('title');
			$address = $this->input->post('address');
			$phone = $this->input->post('phone');
			$email = $this->input->post('email');
			
			$from_Email = $email != "" ? $email : 'temp@email.com';
			$to_Email = 'giaothuy17@gmail.com';
			$user_Email = 'giaothuy17@gmail.com';
			$pass_Email = '0915123947';
			$title_Email = 'Đơn đặt hàng sản phẩm';
			$message_Email = 'Sản Phẩm'. json_encode($product) . ' | Thành tiền: ' . $total . ' | Thành phố: ' . $city .  ' | Phương thức: ' . $optionCity . ' | Tên khách hàng: ' . $name_Email . ' | Địa chỉ: ' . $address . ' | Điện thoại: ' . $phone . ' | Email: ' . $email;

			// print_r($message_Email);
			$this->load->model('Email');
			echo $this->Email->sendMail($from_Email, $name_Email, $to_Email, $user_Email, $pass_Email, $title_Email, $message_Email); 			

		} else {
			echo "Error";
		}
		
	}
	
}
?>