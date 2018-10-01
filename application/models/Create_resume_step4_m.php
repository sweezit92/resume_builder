<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_resume_step4_m extends CI_Model {

	public function fetch_experience($user_id)
	{
		$this->db->select('*');
		$this->db->from('experience');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}

	public function update_experience($records,$user_id)
	{
		$this->db->where("user_id", $user_id);
		$query = $this->db->update('experience', $records);
		return $query;
	}

}

/* End of file Create_resume_step1_m.php */
/* Location: ./application/models/Create_resume_step1_m.php */