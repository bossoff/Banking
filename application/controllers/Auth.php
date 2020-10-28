<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	 private function catche(){
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
	
	public function index(){
		self::catche();
		$this->login();		
	}

	public function login(){
		$page_data['page_name'] = 'login';
		$page_data['page_title'] = 'login';
		$this->load->view('auth/index',$page_data);
	}

	public function checkin($param=''){	
		self::catche();
		// $this->form_validation->set_rules('userid', 'User ID','trim|required|valid_email');
 		// $this->form_validation->set_rules('passcode','Passcode', 'required',['required' => 'You must provide a %s.']);

        if (empty($param)) die('Access Deny!');
        if($this->input->post()){
        	// $data = '';
        	if ($this->form_validation->run() == false) {
	           	$userid    = $this->input->post('userid');
                $pass = $this->input->post('passcode');
                $passcode = md5(sha1($pass)).sha1($pass);
                $query = $this->db->query("SELECT * FROM users WHERE userid = '$userid' || email = '$userid' AND password = '$passcode'");
				if(empty($userid) && empty($passcode)){ 
					set_alert('danger', 'Forms required *');
                	clean_url();
                }				
			 	if($query->num_rows()>0){
			 		$row = $query->row();
			 		$user_level = $row->user_level;

			 		if($user_level==1){
			 			if($row->email == $userid){
			 				set_alert('danger', 'Invalid Userid or Passcode');
                			clean_url();
			 			}else{
			 				$data = [
				 				'user_id' => $row->uid,
				 				'login_in' => true,
				 				'type' => 'Customer',
				 				'userid' => $row->userid,
				 				'firstname' => $row->firstname,
				 				'lastname' => $row->lastname,
				 			];
			 			}
			 			$this->session->set_userdata($data);
			 			user_url('api','dashboard');
			 		}

			 		if($user_level == 2){
			 			$data = [
			 				'user_id' => $row->uid,
			 				'login_in' => true,
			 				'type' => 'Admin',
			 				'userid' => $row->userid,
			 				'firstname' => $row->firstname,
			 				'lastname' => $row->lastname
			 			];
			 			$this->session->set_userdata($data);
			 			admin_url('dashboard','dashboard');
			 		}

			 	}
			 	if($query->num_rows()==0){
					set_alert('danger', 'Invalid Userid or Passcode');
                	clean_url();
				}
	        }
        }
       
    }

	

	public function checkup(){
		
	}

	public function checkback(){
		
	}

	public function checkout(){
		self::catche();        
        $this->session->sess_destroy();
        $this->session->unset_userdata('firstname');
        $this->session->unset_userdata('user_level');
        clean_url();
       
	}
	

}
