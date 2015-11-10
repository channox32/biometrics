<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeamModel extends CI_Model {
	
	// INDEX FUNCTIONS
	function displayAM(){
		$this->db->select();
		$this->db->from('team as t1')
		->join('team_info', 't1.TeamID = team_info.TeamID','right')
		->where('t1.TeamSchedule', 'AM');
		$this->db->order_by("t1.TeamName", "asc");
		$query=$this->db->get();
        return $query->result_array();
	}
	function displayPM(){
		$this->db->select();
		$this->db->from('team')
		->join('team_info', 'team.TeamID = team_info.TeamID','right')
		->where('team.TeamSchedule', 'PM');
		$this->db->order_by("TeamName", "asc");
		$query=$this->db->get();
        return $query->result_array();
	}

	function employeeList(){
		$this->db->select();
		$this->db->from('team_member')
		->join('employee_info', 'team_member.EmpID = employee_info.EmpID','left');
		$query=$this->db->get();
        return $query->result_array();
	}
	function employeeCount(){
		$this->db->select('EmpID');	
		$this->db->from('employee_info');
		$query=$this->db->get();
		return $query->num_rows();
	}
	function teamCount(){
		$this->db->select('team.TeamID');
		$this->db->from('team')
		->join('team_info', 'team.TeamID = team_info.TeamID','right');
		$query=$this->db->get();
        return $query->num_rows();
	}


	// VIEW TEAM FUNCTIONS
	function displayEmployees($TeamID){
		$this->db->select();
		$this->db->from('team_member')
		->join('employee_info', 'team_member.EmpID = employee_info.EmpID','left')
		->where('team_member.TeamID', $TeamID);
		$this->db->order_by("employee_info.EmpLastName", "asc");
		$query=$this->db->get();
		return $query->result_array();
	}
	function displayTeamInfo($TeamID){
		$this->db->select();
		$this->db->from('team')
		->join('team_info', 'team.TeamID = team_info.TeamID','right')
		->where('team.TeamID', $TeamID);
		$query=$this->db->get();
		return $query->result_array();
	}
	function displayTimeTracker(){
		$this->db->select();
		$this->db->from('time_tracker')
		->join('employee_info', 'time_tracker.EmpID = employee_info.EmpID','left');
		$query=$this->db->get();
		return $query->result_array();
	}


	//Analysing Biometric file Page
	function addTimeRecord($record){
		$this->db->insert('time_tracker', $record);
	}
	function deleteTimeRecord(){
		$this -> db -> where(1,1);
		$this->db->delete('time_tracker');
	}


}