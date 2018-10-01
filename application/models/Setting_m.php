<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_m extends CI_Model {

	public function update_password($records,$user_id)
	{
		$this->db->where("user_id", $user_id);
		$query = $this->db->update('user', $records);
		return $query;
	}

}

/* End of file Setting_m.php */
/* Location: ./application/models/Setting_m.php */