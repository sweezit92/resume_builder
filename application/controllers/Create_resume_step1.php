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
		$location = $this->input->post("");
		echo $dob = $this->input->post("dob");
		exit;
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
									"full_name" => $user_id,
									"professional_rank" => "vendor",
									"nationality" => $cus_name,
									"about_yourself" => $cus_email,
									"residence" => $cus_phone,
									"current_location" => $brand,
									"dob" => $model,
									"prefix" => $image,
									"telephone" => $get_vendor_details->store_address,
									"email" => $cus_address,
									"skype" => $date,
									"linkedIn" => "pending",
									"visa" => $user_id,
									"seamans_book" => "vendor",
									"smoke" => $cus_name,
									"start_job" => $cus_email,
									"tatto" => $cus_phone,
									"image" => $image,
									"date" => $model
								  );
                }else{
					$records=array(
									"user_id" => $user_id,
									"type" => "vendor",
									"cus_name" => $cus_name,
									"cus_email" => $cus_email,
									"cus_phone" => $cus_phone,
									"brand_id" => $brand,
									"model_id" => $model,
									"billing_address" => $get_vendor_details->store_address,
									"shipping_address" => $cus_address,
									"date" => $date,
									"order_status" => "pending"
								  );
                }
		}else{
			$records=array(
							"user_id" => $user_id,
							"type" => "vendor",
							"cus_name" => $cus_name,
							"cus_email" => $cus_email,
							"cus_phone" => $cus_phone,
							"brand_id" => $brand,
							"model_id" => $model,
							"billing_address" => $get_vendor_details->store_address,
							"shipping_address" => $cus_address,
							"date" => $date,
							"order_status" => "pending"
						  );
		}
	}
}

/* End of file Create_resume_step1.php */
/* Location: ./application/controllers/Create_resume_step1.php */