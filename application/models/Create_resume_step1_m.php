<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_resume_step1_m extends CI_Model {

	public function insert_model($insert_array)
	{
		$this->db->insert('personal', $insert_array);
		return true;
	}

}

/* End of file Create_resume_step1_m.php */
/* Location: ./application/models/Create_resume_step1_m.php */