<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_resume_step5 extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('create_resume_step5_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data["fetch_experience"] = $this->create_resume_step5_m->fetch_experience($user_id);
		$this->load->view('create_resume_step5',$data);
	}

	public function update_experience()
	{
		$this->load->model('create_resume_step5_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$title = implode(",",$this->input->post("title"));
		$company_name = implode(",",$this->input->post("company_name"));
		$vessel_name = implode(",",$this->input->post("vessel_name"));
		$vessel_length = implode(",",$this->input->post("vessel_length"));		
		$veseel_type = implode(",",$this->input->post("veseel_type"));
		$Start_date = implode(",",$this->input->post("Start_date"));
		$c_end_date = count($this->input->post("end_date"));
		$end_date = $this->input->post("end_date");
		for($i=1 ; $i < $c_end_date ; $i++){
			
			if($end_date[$i] == ""){
				$end_date[$i] = "Currently working";
			}
		}
		$final_date = implode(",",$end_date);		
		$company_loc = implode(",",$this->input->post("company_loc"));
		$company_description = implode(",",$this->input->post("company_detail"));
		$contact_person = implode(",",$this->input->post("contact_person"));
		$contact_info = implode(",",$this->input->post("contact_info"));		
		$task = implode(",",$this->input->post("task"));
		$date = time();

		$records = array(
							"title" => $title,
							"company" => $company_name,
							"vessel_name" => $vessel_name,
							"vessel_length" => $vessel_length,
							"vessel_type" => $veseel_type,
							"start" => $Start_date,
							"end" => $final_date,
							"company_location" => $company_loc,
							"company_description" => $company_description,
							"contact_person" => $contact_person,
							"contact_info" => $contact_info,
							"task" => $task,
							"date" => $date
						);
		
		$update_experience = $this->create_resume_step5_m->update_experiencez($records,$user_id);
		redirect('cv_preview');
		
		
	}

}

/* End of file Create_resume_step5.php */
/* Location: ./application/controllers/Create_resume_step5.php */