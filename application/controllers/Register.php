<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('register');	
	}

	public function user()
	{
		$this->load->model('register_m');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');
		$date = time();

		if($password != $confirm_password)
		{
			$this->session->set_flashdata("pass_failed", "Password doesn't match!");
	        redirect('register');
		}else{
			$check_exist = $this->register_m->check_user($email);
			if($check_exist > 0)
			{
				$this->session->set_flashdata("duplicate", "This Email Already Exist!");
	        	redirect('register');
			}else{
				$insert_array = array(
										"full_name" => $name,
										"email" => $email,
										"phone" => $phone,
										"password" => $password,
										"date" => $date
									 );
				$insert_data = $this->register_m->insert_user($insert_array);
				if($insert_data != "")
				{
					$all_array = array("user_id" => $insert_data);
					$insert_all = $this->register_m->insert_all($all_array);
					$session_data = array(
											'user_id' => $insert_data,
											'name' =>$name,
											'email'=>$email,
											'phone'=>$phone
										  );
					$this->session->set_userdata('logged_in', $session_data);
					redirect('create_resume_step1');
				}
			}
		}
	}
}
	

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */