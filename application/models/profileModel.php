<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfileModel extends CI_Model {
	function displayProfile($empID){
		$this->db->select();	
		$this->db->from('employee_info')
		->where('employee_info.EmpID', $empID)
		->join('team', 'employee_info.TeamID = team.TeamID','left');
		$this->db->order_by("EmpLastName", "asc");
		$query=$this->db->get();
        return $query->result_array(); 
	}
}