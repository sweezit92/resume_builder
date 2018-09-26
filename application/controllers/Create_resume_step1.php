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
		$this->load->model('create_resume_step1_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data["get_personal"] = $this->create_resume_step1_m->fetch_personal($user_id);
		$this->load->view('create_resume_step1',$data);
	}

	public function add_personal()
	{
		$this->load->model('create_resume_step1_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$fullname = $this->input->post("full_name");
		$rank = $this->input->post("rank");
		$nationality = $this->input->post("nationality");
		$about = $this->input->post("about");
		$residence = $this->input->post("residence");
		$location = $this->input->post("location");
		$dob = $this->input->post("dob");
		$prefix = $this->input->post("prefix");
		$phone = $this->input->post("phone");
		$email = $this->input->post("email");
		$skype = $this->input->post("skype");
		$linkedin = $this->input->post("linkedin");
		$visa = $this->input->post("visa");
		$seamans_book = $this->input->post("seamans_book");
		$smoke = $this->input->post("smoke");
		$start_job = $this->input->post("start_job");
		$tatto = $this->input->post("tatto");
		$date = time();

		if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array(
									"full_name" => $fullname,
									"professional_rank" => $rank,
									"nationality" => $nationality,
									"about_yourself" => $about,
									"residence" => $residence,
									"current_location" => $location,
									"dob" => $dob,
									"prefix" => $prefix,
									"telephone" => $phone,
									"email" => $email,
									"skype" => $skype,
									"linkedIn" => $linkedin,
									"visa" => $visa,
									"seamans_book" => $seamans_book,
									"smoke" => $smoke,
									"start_job" => $start_job,
									"tatto" => $tatto,
									"image" => $image,
									"date" => $date
								  );
                }else{
					$records=array(
									"full_name" => $fullname,
									"professional_rank" => $rank,
									"nationality" => $nationality,
									"about_yourself" => $about,
									"residence" => $residence,
									"current_location" => $location,
									"dob" => $dob,
									"prefix" => $prefix,
									"telephone" => $phone,
									"email" => $email,
									"skype" => $skype,
									"linkedIn" => $linkedin,
									"visa" => $visa,
									"seamans_book" => $seamans_book,
									"smoke" => $smoke,
									"start_job" => $start_job,
									"tatto" => $tatto,
									"date" => $date
								  );
                }
		}else{
			$records=array(
							"full_name" => $fullname,
							"professional_rank" => $rank,
							"nationality" => $nationality,
							"about_yourself" => $about,
							"residence" => $residence,
							"current_location" => $location,
							"dob" => $dob,
							"prefix" => $prefix,
							"telephone" => $phone,
							"email" => $email,
							"skype" => $skype,
							"linkedIn" => $linkedin,
							"visa" => $visa,
							"seamans_book" => $seamans_book,
							"smoke" => $smoke,
							"start_job" => $start_job,
							"tatto" => $tatto,
							"date" => $date
						  );
		}

		$update_details = $this->create_resume_step1_m->update_details($records,$user_id);
		redirect('create_resume_step2');
	}
}

/* End of file Create_resume_step1.php */
/* Location: ./application/controllers/Create_resume_step1.php */