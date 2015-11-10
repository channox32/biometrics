<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __Construct(){
		parent::__Construct ();
	   	$this->load->database();
	   	$this->load->model('profileModel');
	}

	public function index($empID=0)
	{
		if($empID==0){
			redirect('employee/');
		}
		$this->data['profile'] = $this->profileModel->displayProfile($empID);
		if(count($this->data['profile']) != 1){
			redirect('employee/');
		}
		$this->load->view('header');
		$this->load->view('profile',$this->data);
	}

}
