<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cv_preview extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->model('cv_preview_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data["get_cv_preview"] = $this->cv_preview_m->fetch_preview($user_id);
		$data["get_experience"] = $this->cv_preview_m->fetch_experience($user_id);
		//print_r($data["get_cv_preview"]);
		$this->load->view('cv_preview',$data);
	}

}

/* End of file Cv_preview.php */
/* Location: ./application/controllers/Cv_preview.php */