<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_resume_step1 extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }
    
	public function index()
	{
		$this->load->view('create_resume_step1');
	}

	public function add_personal()
	{
		$this->load->model('create_resume_step1_m');
		$user_id = 1;
		$fullname = $this->input->post("full_name");
		$rank = $this->input->post("rank");
		$nationality = $this->input->post("nationality");
		$about = $this->input->post("about");
		$residence = $this->input->post("residence");
		$location = $this->input->post("location");
		$dob = $this->input->post("dob");
		$prefix = $this->input->post("prefix");
		$phone = $this->input->post("phone");
		$city = $this->input->post("city");
		$state = $this->input->post("state");
		$current_address = $this->input->post("current_address");
		$permanent_address = $this->input->post("permanent_address");
		$email = $this->input->post("email");
		$skype = $this->input->post("skype");
		$linkedin = $this->input->post("linkedin");
		$visa = $this->input->post("visa");
		$seamans_book = $this->input->post("seamans_book");
		$smoke = $this->input->post("smoke");
		$start_job = $this->input->post("start_job");
		$tatto = $this->input->post("tatto");
		$date = time();

		$insert_array = array( "full_name" => $fullname,
							   "professional_rank" => $rank,
							   "nationality" => $nationality
							 );
		echo $insert_personal = $this->create_resume_step1_m->insert_model($insert_array);
	}
}

/* End of file Create_resume_step1.php */
/* Location: ./application/controllers/Create_resume_step1.php */