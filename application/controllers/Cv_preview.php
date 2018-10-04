<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cv_preview extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->library('email_template');
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('cv_preview_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data["get_cv_preview"] = $this->cv_preview_m->fetch_preview($user_id);
		$data["get_experience"] = $this->cv_preview_m->fetch_experience($user_id);
		$data["get_payment_details"] = $this->cv_preview_m->fetch_payments($user_id);
		//print_r($data["get_cv_preview"]);
		$this->load->view('cv_preview',$data);
	}

	public function payments(){
		$this->load->model('cv_preview_m');

		$user_id = $this->input->post('user_id');
		$amount = $this->input->post('amount');
		$payment_status = 'success';
		$date = time();

		$records = array(
			"amount" => $amount,
			"date" => $date,
			"status" => $payment_status
		);
		
		$insert_payments = $this->cv_preview_m->add_paymentzz($records,$user_id);
		
		if($insert_payments){
		/* SEND EMAIL */
			$user_details = $this->cv_preview_m->user_info($user_id);
			$fullname = $user_details->full_name;
			$email_id = $user_details->email;
			$phone = $user_details->phone;

			$payment_success_email = $this->email_template->payment_successful($fullname,$email_id,$phone,$amount);
			$this->load->library('email');
			$this->email->set_mailtype("html");
            $this->email->from('noreply@portme.co');
            $this->email->to($email_id); 
            $this->email->subject('Payment Successful');
            $this->email->message($payment_success_email);

            $okay = $this->email->send();
		}
		redirect('cv_preview');
	}
}

/* End of file Cv_preview.php */
/* Location: ./application/controllers/Cv_preview.php */