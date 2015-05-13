<?php
class contactform extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->helper('security');
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation', 'email'));
    }

    function index()
    {
		// Set message for field
		$this->form_validation->set_message('name', 'Vui lòng nhập tên của bạn');
		$this->form_validation->set_message('valid_email','Địa chỉ Email không hợp lệ' );
		$this->form_validation->set_message('required','Trường %s này là bắt buộc.' );
		
         //set validation rules
        $this->form_validation->set_rules('name', 'Họ & tên', 'trim|required|xss_clean|callback_alpha_space_only',array('xss_clean' => 'Error Message: your xss is not clean.'));
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('subject', 'Tiêu đề', 'trim|required|xss_clean');
        $this->form_validation->set_rules('message', 'Tin nhắn', 'trim|required|xss_clean');

        //run validation on form input
        if ($this->form_validation->run() == FALSE)
        {
            //validation fails
            $this->load->view('contact');
        }
        else
        {
            //get the form data
            $name = $this->input->post('name');
            $from_email = $this->input->post('email');
			$body ="From: $name\n E-Mail: $from_email\n Subject:\n $subject";
            $subject = $this->input->post('subject');
            $message = $this->input->post('message');
			
            //set to_email id to which you want to receive mails
            $to_email = 'giaothuy17@gmail.com';

            //configure email settings
            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'giaothuy17@gmail.com';
            $config['smtp_pass'] = '0915123947';
            $config['mailtype'] = 'html';
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
            //$this->load->library('email', $config);
            $this->email->initialize($config);                            

            //send mail
            $this->email->from($from_email, $name);
            $this->email->to($to_email);
            $this->email->subject($body.$subject);
            $this->email->message($message);
            if ($this->email->send())
            {
                // mail sent
                $this->session->set_flashdata('msg','<div class="alert alert-success text-center">Thư của bạn đã được gửi thành công!</div>');
                redirect('contactform/index');
            }
            else
            {
                //error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Có một lỗi khi gửi, vui lòng thử lại!</div>');
                redirect('contactform/index');
            }
        }
    }
    
    //custom validation function to accept only alphabets and space input
    function alpha_space_only($str)
    {
        if (!preg_match("/^[a-zA-Z ]+$/",$str))
        {
            $this->form_validation->set_message('alpha_space_only', '%s là tiếng Việt không dấu và có khoảng trắng');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }

}
?>