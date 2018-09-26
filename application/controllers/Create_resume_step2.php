<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_resume_step2 extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('create_resume_step2_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data["fetch_course"] = $this->create_resume_step2_m->fetch_course($user_id);
		$this->load->view('create_resume_step2',$data);
	}

	public function update_course()
	{
		$this->load->model('create_resume_step2_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$course_name = implode(",",$this->input->post("course_name"));
		$institute_name = implode(",",$this->input->post("institute_name"));
		$university = implode(",",$this->input->post("university"));
		$start_date = implode(",",$this->input->post("start_date"));
		
		$c_end_date = count($this->input->post("end_date"));

		$end_date = $this->input->post("end_date");
		for($i=1 ; $i < $c_end_date ; $i++){
			
			if($end_date[$i] == ""){
				$end_date[$i] = "Currently Studying";
			}
		}

		$final_date = implode(",",$end_date);
		$date = time();

		$records = array(
							"course" => $course_name,
							"institute" => $institute_name,
							"university" => $university,
							"start" => $start_date,
							"end" => $final_date,
							"date" => $date
						);
		$update_course = $this->create_resume_step2_m->update_course($records,$user_id);
		redirect(create_resume_step3);
		
		
	}

}

/* End of file Create_resume_step2.php */
/* Location: ./application/controllers/Create_resume_step2.php */