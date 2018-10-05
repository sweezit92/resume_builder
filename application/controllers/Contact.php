<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->load->library('email_template');
    }

	public function index()
	{
		$this->load->view('contact');
	}

	public function send_message()
	{
		$name = $this->input->post("name");
		$email = $this->input->post("email");
		$phone = $this->input->post("phone");
		$message = $this->input->post("message");
		
		$main_text = $this->email_template->send_enquiry($name,$email,$phone,$message);
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from($email);
		$this->email->to('support@marinecv.com'); 
		$this->email->subject('Web Enquiry');
		$this->email->message($main_text);

        $okay = $this->email->send();

		$this->load->view('contact');
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */