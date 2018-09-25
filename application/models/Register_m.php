<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_m extends CI_Model {

	public function check_user($email)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('email', $email);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insert_user($insert_array)
	{
		$this->db->insert('user', $insert_array);
		return $this->db->insert_id();
	}

	public function insert_all($all_array)
	{
		$this->db->insert('personal', $all_array);
		$this->db->insert('education', $all_array);
		$this->db->insert('certificate', $all_array);
		$this->db->insert('experience', $all_array);
		return true;
	}

}

/* End of file Register_m.php */
/* Location: ./application/models/Register_m.php */