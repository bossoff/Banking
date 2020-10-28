<?php

class Auths extends CI_Model{
	
	public function login($userid, $passcode,$pass=''){
	
			$query = $this->db->query("SELECT * FROM users WHERE userid = '$userid' || email = '$userid' AND password = '$passcode'");

			if(empty($userid) && empty($passcode)) return false;
			if($query->num_rows()==0){
				return false;
			}
		 	if($query->num_rows()>0){
		 		$row = $query->row();
		 		$user_level = $row->user_level;
		 		if($user_level==1){
		 			$data = [
		 				'user_id' => $row->uid,
		 				'login_in' => true,
		 				'type' => 'Customer',
		 				'firstname' => $row->firstname,
		 				'lastname' => $row->lastname,
		 			];
		 		}

		 		if($user_level == 2){
		 			$data = [
		 				'user_id' => $row->uid,
		 				'login_in' => true,
		 				'type' => 'Admin',
		 				'firstname' => $row->firstname,
		 				'lastname' => $row->lastname
		 			];
		 		}
		 		$this->session->set_userdata($data);
		 		return $query;
		 	}
		 	
		// }



	}


	
}