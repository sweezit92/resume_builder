<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']['user_id']){
            redirect('login');
        }
    }

	public function index()
	{
		$this->load->view('setting');
	}

	public function update_pass()
	{
		$this->load->model('setting_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$new_pass = $this->input->post("new_password");
		$confirm_pass = $this->input->post("confirm_password");

		if($new_pass != $confirm_pass)
		{
			$this->session->set_flashdata("failed", "Password doesn't match!");
	        redirect('setting');
		}
		else{
			$records = array(
							"password" => $new_pass
						);
			$update_password = $this->setting_m->update_password($records,$user_id);
			$this->session->set_flashdata("success", "Password updated successfully!");
	        redirect('setting');
		}
	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */