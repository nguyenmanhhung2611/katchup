<?php
class Email extends CI_Model {
	
    function __construct()
    {        
        parent::__construct(); // Call the Model constructor
        $this->load->library('email');
    }

	function sendMail($from_Email, $name_Email, $to_Email, $user_Email, $pass_Email, $title_Email, $message_Email) {
		// Configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '465';
        $config['smtp_user'] = $user_Email;
        $config['smtp_pass'] = $pass_Email;
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; // Use double quotes
        $this->email->initialize($config);

		$this->email->from($from_Email, $name_Email);
		$this->email->to($to_Email);
		$this->email->subject($title_Email);
		$this->email->message($message_Email);

		if (!$this->email->send()) {
			// echo "Send mail error: " + $this->email->print_debugger();
			return false;
		}
		// echo "Send mail success";
		return true;
	}
}

?>