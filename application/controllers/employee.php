<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	function __Construct(){
		parent::__Construct ();
	   	$this->load->model('employeeModel');
	}
	public function index()
	{
		$this->data['employeeNG'] = $this->employeeModel->displayEmployeeNG();
		$this->data['employee'] = $this->employeeModel->displayEmployee();
		$this->data['team']=$this->employeeModel->countTeam();
		$this->load->view('header');
		$this->load->view('employees',$this->data);
	}

	public function add(){
		$notification = NULL;
		$config['upload_path'] = './img/profile-pics/';
		$config['file_name'] = $this->input->post('EmpID');
		$config['allowed_types'] = 'jpg|png';

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('EmpProfilePic'))
		{
			$this->data['error']=$this->upload->display_errors();
		}
		else
		{
			$name = $_FILES["EmpProfilePic"]["name"];
			$ext = end((explode(".", $name)));
			$date = $this->input->post('EmpBirthdate');
			$newDate = substr($date, 6, 10)."-".$date['3'].$date['4']."-".substr($date, 0, 2);

			$upload = array('upload_data' => $this->upload->data());
			$data = array(
				'EmpID' => $this->input->post('EmpID'),
				'EmpFirstName' => $this->input->post('EmpFirstName'),
				'EmpMiddleName' => $this->input->post('EmpMiddleName'),
				'EmpLastName' => $this->input->post('EmpLastName'),
				'EmpGender' => $this->input->post('EmpGender'),
				'EmpBirthdate' => $newDate,
				'EmpStatus' => $this->input->post('EmpStatus'),
				'EmpContact' => $this->input->post('EmpContact'),
				'EmpEmail' => $this->input->post('EmpEmail'),
				'EmpProfilePic' => $this->input->post('EmpID').".".$ext
			);
		$this->employeeModel->addEmployee($data);
		$this->data['success']="Successfully Added to the list.";
		}

		$this->data['employeeNG'] = $this->employeeModel->displayEmployeeNG();
		$this->data['employee'] = $this->employeeModel->displayEmployee();
		$this->data['team']=$this->employeeModel->countTeam();
		$this->load->view('header');
		$this->load->view('employees',$this->data);
	}
}
