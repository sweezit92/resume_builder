<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cv_preview_m extends CI_Model {

	public function fetch_preview($user_id){
		$this->db->select('*');
		$this->db->from('certificate');
		$this->db->where('certificate.user_id',$user_id);
		$this->db->join('education','education.user_id = certificate.user_id');
		$this->db->join('personal','personal.user_id = certificate.user_id');
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_experience($user_id){
		$this->db->select('*');
		$this->db->from('certificate');
		$this->db->where('certificate.user_id',$user_id);
		$this->db->join('experience','experience.user_id = certificate.user_id');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Cv_preview_m.php */
/* Location: ./application/models/Cv_preview_m.php */