<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModel extends CI_Model {

	function displayEmployee(){
		$this->db->select('employee_info.EmpID, employee_info.EmpProfilePic, employee_info.EmpLastName, employee_info.EmpFirstName,
		 employee_info.EmpMiddleName, team.TeamName');
		$this->db->from('team_member')
		->join('employee_info', 'team_member.EmpID = employee_info.EmpID')
		->join('team', 'team_member.TeamID = team.TeamID','left');
		$this->db->order_by("employee_info.EmpLastName", "asc");
		$query=$this->db->get();
        return $query->result_array();
	}
	function displayEmployeeNG(){
		$this->db->select('employee_info.EmpID, employee_info.EmpProfilePic, employee_info.EmpLastName, employee_info.EmpFirstName,
		 employee_info.EmpMiddleName');
		$this->db->from('team_member')
		->join('employee_info', 'team_member.EmpID = employee_info.EmpID','right')
		->where('team_member.TeamMemberID', NULL);
		//->join('team', 'team_member.TeamID = team.TeamID','left');
		$this->db->order_by("employee_info.EmpLastName", "asc");
		$query=$this->db->get();
        return $query->result_array();
	}
	function countTeam(){
		$this->db->select('TeamInfoID');	
		$this->db->from('team_info');
		$query=$this->db->get();
		return $query->num_rows();
	}
	function addEmployee($data){
		$this->db->insert('employee_info', $data);
	}
}