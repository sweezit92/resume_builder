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
		$this->load->view('create_resume_step2');
	}

}

/* End of file Create_resume_step2.php */
/* Location: ./application/controllers/Create_resume_step2.php */