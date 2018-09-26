<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_resume_step2_m extends CI_Model {
	
	public function fetch_course($user_id)
	{
		$this->db->select('*');
		$this->db->from('education');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_course($records,$user_id)
	{
		$this->db->where("user_id", $user_id);
		$query = $this->db->update('education', $records);
		return $query;
	}

}

/* End of file Create_resume_step2_m.php */
/* Location: ./application/models/Create_resume_step2_m.php */