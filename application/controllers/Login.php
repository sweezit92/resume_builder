<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function check_login()
	{
		$this->load->model('login_m');
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$login_query = $this->login_m->check_all($email,$password);
		if($login_query > 0)
		{
			$get_user = $this->login_m->user_details($email);
			$session_data = array(
									'user_id' => $get_user->user_id,
									'name' =>$get_user->full_name,
									'email'=>$get_user->email,
									'phone'=>$get_user->phone
								  );
			$this->session->set_userdata('logged_in', $session_data);
			redirect('create_resume_step1');
		}else{
			$this->session->set_flashdata("failed", "Login Failed!");
	        redirect('login');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */