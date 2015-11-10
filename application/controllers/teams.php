<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teams extends CI_Controller {
	
	function __Construct(){
		parent::__Construct ();
	   	$this->load->database();
	   	$this->load->model('teamModel');
	}

	public function index()
	{
		$data['employeeCount']	=	$this->teamModel->employeeCount();
		$data['employee']		=	$this->teamModel->employeeList();
		$data['morning']		=	$this->teamModel->displayAM();
		$data['evening']		=	$this->teamModel->displayPM();

		$this->load->view('header');
		$this->load->view('teams',$data);
	}
	// view teams
	public function view_team($TeamID = 0)
	{
		if($TeamID < 1){
			redirect('teams/');
		}
		$data['time']		=	$this->teamModel->displayTimeTracker();
		$data['employee']	=	$this->teamModel->displayEmployees($TeamID);
		$data['teamInfo']	=	$this->teamModel->displayTeamInfo($TeamID);
		
		$this->load->view('header');
		$this->load->view('view-team', $data);
	}

	//Syncronization of biometric file
	public function sync(){
		if($_POST){
			$config['upload_path'] = './biofile/';
			$config['file_name'] = 'bio';
			$config['allowed_types'] = 'txt|TXT';
			$config['max_size']	= '500000';

			$this->load->library('upload', $config);

			//delete file if exist
			if (file_exists('./biofile/bio.txt')) { unlink("./biofile/bio.txt");} 

			//trying to upload the file
			if ( ! $this->upload->do_upload('imagefile'))
			{
				//Notification of error in uploading file
				$data['error']=$this->upload->display_errors();
			}
			else
			{
				//delete old record
				$this->teamModel->deleteTimeRecord();

				//get data from the view using post and revice format
				$from 	= 	DateTime::createFromFormat('d/m/Y', $this->input->post('DateFrom'));
				$from 	= 	$from->format('Y-m-d');
				$to 	= 	DateTime::createFromFormat('d/m/Y', $this->input->post('DateTo'));
				$to 	= 	$to->format('Y-m-d');

				$fromY	=	$from[0].$from[1].$from[2].$from[3];
				$fromM 	=	$from[5].$from[6];
				$fromD	= 	$from[8].$from[9];
				$toY	=	$to[0].$to[1].$to[2].$to[3];
				$toM 	=	$to[5].$to[6];
				$toD	= 	$to[8].$to[9];

				if (file_exists('./biofile/dateCover.txt')) { unlink("./biofile/dateCover.txt");} 

				$file = './biofile/dateCover.txt';
				$person = $from." ".$to;
				file_put_contents($file, $person, FILE_APPEND);

				//loop each line of the uploaded file
				$file = file('./biofile/bio.TXT');
				for ($i = 1; $i < count($file); $i++) {
			  		$datY 		= 	substr($file[$i], 32, 4);
			  		$datM 		= 	substr($file[$i], 37, 2);
			  		$datD 		= 	substr($file[$i], 40, 2);
			  		$bioDate	= 	$datY."-".$datM."-".$datD;
			  		//echo "<br>";

			  		//trappings if the line of the file is accepted in  the given scope of date
			  		if($datY == $fromY || $datY == $toY){
			  			if(	$datM == $fromM || $datM == $toM){
			  				if(($fromM == $datM && $datD >= $fromD) || ($toM == $datM && $datD <= $toD)){
			  					//request model to save in the database
			  					$record = array(
			  						'EmpID'				=>	substr($file[$i], 8, 8),
			  						'TimeTrackerDate'	=>	$bioDate,
			  						'TimeTrackerTime'	=>	substr($file[$i], 44, 5)
								);
			  					$this->teamModel->addTimeRecord($record);
			  				}
			  			}
			  		}

				}
				//For notification that Analyisis was performed successfully
				$data['success'] = 'Successfully Analyze Biometric file.';
			}

			//delete file if exist
			if (file_exists('./biofile/bio.txt')) { unlink("./biofile/bio.txt");} 
		}

		$data['employeeCount']	=	$this->teamModel->employeeCount();
		$data['teamCount']		=	$this->teamModel->teamCount();

		$this->load->view('header');
		$this->load->view('analyze', $data);
		
	}
}