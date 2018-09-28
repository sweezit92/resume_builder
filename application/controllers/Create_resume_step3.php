<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_resume_step3 extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('create_resume_step3_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data["fetch_cert"] =$this->create_resume_step3_m->fetch_cert($user_id);;
		$this->load->view('create_resume_step3',$data);
	}

	public function update_certificate()
	{
		$this->load->model('create_resume_step3_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$deck = implode(",",$this->input->post("deck"));
		$propulsion = implode(",",$this->input->post("propulsion"));
		$interior = implode(",",$this->input->post("interior"));
		$engineering = implode(",",$this->input->post("engineering"));
		$culinary = implode(",",$this->input->post("culinary"));
		$massage = implode(",",$this->input->post("massage"));
		$personnal_trainer = implode(",",$this->input->post("personnal_trainer"));
		$other = implode(",",$this->input->post("other"));
		$language = implode(",",$this->input->post("language"));
		$level = implode(",",$this->input->post("level"));
		$offshore = implode(",",$this->input->post("offshore"));
		$certificate = implode(",",$this->input->post("certificate"));
		$stcw = implode(",",$this->input->post("stcw"));
		$date = time();

		$records = array(
							"deck" => $deck,
							"propulsion" => $propulsion,
							"interior" => $interior,
							"engineering" => $engineering,
							"culinary" => $culinary,
							"massage" => $massage,
							"personnal_trainer" => $personnal_trainer,
							"other" => $other,
							"language" => $language,
							"level" => $level,
							"offshore" => $offshore,
							"certificate" => $certificate,
							"stcw" => $stcw,
							"date" => $date
						);
		$update_cert = $this->create_resume_step3_m->update_cert($records,$user_id);
		redirect('create_resume_step4');
	}

}

/* End of file Create_resume_step3.php */
/* Location: ./application/controllers/Create_resume_step3.php */