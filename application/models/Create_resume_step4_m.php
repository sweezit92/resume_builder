<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_resume_step4_m extends CI_Model {

	public function fetch_cert($user_id)
	{
		$this->db->select('*');
		$this->db->from('certificate');
		$this->db->where('user_id', $user_id);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function update_cert($records,$user_id)
	{
		$this->db->where("user_id", $user_id);
		$query = $this->db->update('certificate', $records);
		return $query;
	}

}

/* End of file Create_resume_step3_m.php */
/* Location: ./application/models/Create_resume_step3_m.php */