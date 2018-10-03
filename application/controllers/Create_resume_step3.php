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
		
		$offshore = implode(",",$this->input->post("offshore"));
		$certificate = implode(",",$this->input->post("certificate"));
		$stcw = implode(",",$this->input->post("stcw"));
		$date = time();

		$records = array(
							
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