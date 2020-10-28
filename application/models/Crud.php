<?php
class Crud extends CI_Model{	
	
	public function is_user(){
		if ($this->session->userdata('type') != 'Customer' && $this->session->userdata('login_in') != true) {
	      redirect(base_url(), 'refresh');
	    }
	}

	public function is_admin(){
		if ($this->session->userdata('type') != 'Admin' && $this->session->userdata('login_in') != true) {
	      redirect(base_url(), 'refresh');
	    }
	}

	public function get_user($user_id){		
		self::is_user();
		return $this->db->get_where('users',['uid'=>$user_id])->row();		
	}

	public function get_card($user_id){		
		self::is_user();
		$query = $this->db->get_where('bank_card',['uid'=>$user_id]);

		// if($query->num_rows()==0):
			return $query->row_array();
		// else:
		// 	return false;
		// endif;		
	}

	public function send_request(){
		self::is_user();
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['country'] = $this->input->post('country');
		$data['zip'] = $this->input->post('zip');
		$data['ticketid'] = generator();
		$data['is_request'] = 1;
		$data['is_card'] = 1;
		$query = $this->db->where('uid',$this->session->userdata('user_id'))->update('users',$data);
		return $query;
	}

	public function add_card(){
		self::is_user();
		$data['card_provider'] = $this->input->post('card_provider');
		$data['card_name'] = $this->input->post('card_name');
		$data['cvv'] = $this->input->post('cvv');
		$data['card_number'] = $this->input->post('card_number');
		$data['card_type'] = $this->input->post('card_type');
		$data['bank_name'] = $this->input->post('bank_name');
		$data['expiry_date'] = $this->input->post('expiry_date');
		$data['uid'] = $this->session->userdata('user_id');
		$data['creation_date'] = set_date();
		$data['card_by'] = $this->session->userdata('firstname').' '.$this->session->userdata('lastname');
		$data['status'] = 1;		
		return $this->db->insert('bank_card',$data);		

	}

	public function register(){
		self::is_admin();
		// if(isset($_FILES['file_images']) && $_FILES['file_images']['name'] != ""):
		$image_name = $_FILES['file_images']['name'];
	    $image_type = $_FILES['file_images']['type'];
	    $image_size = $_FILES['file_images']['size'];
	    $image_tmp  = $_FILES['file_images']['tmp_name'];
	    $image_extension = explode('.', $image_name);
	    $image_extension = end($image_extension);
	    $image_allowed_type = array('image/png','image/jpg','image/gif','image/jpeg');
	    $image_allowed_extention = array('jpeg','jpg','png','gif');
	    $rename_image = $this->input->post('firstname').'_MYBANK_'.date('Y').".".$image_extension;
		$destination = "upload";
		$member_image = $destination.'/'.$rename_image;
		move_uploaded_file($_FILES['file_images']['tmp_name'],$destination.'/'.$rename_image);
		$data['firstname'] = ucfirst(strtolower(trim($this->input->post('firstname'))));
		$data['lastname'] = ucfirst(strtolower(trim($this->input->post('lastname'))));
		$data['phone'] = $this->input->post('phone');
		$data['mother'] = $this->input->post('mother');
		$data['ssn'] = $this->input->post('ssn');
		$data['email'] = $this->input->post('email');
		$data['dob'] = $this->input->post('dob');
		$data['gender'] = $this->input->post('gender');
		$data['rootine'] = $this->input->post('rootine');
		$data['address'] = $this->input->post('address');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['country'] = $this->input->post('country');
		$data['zip'] = $this->input->post('zip');
		$pass = str_shuffle('$#76'.strtoupper($this->input->post('firstname')).'*!2');
		$data['password'] = md5(sha1($pass)).sha1($pass);
		$data['userid'] = 'MB/'.generator1();
		$data['creation_date'] = set_date();
		$data['user_level'] = 1;
		$data['ticketid'] = generator();
		$data['info'] = $pass;
		$data['images'] = $member_image;
		return $this->db->insert('users',$data);
	}

	public function loading(){
		self::is_admin();
		$data['ballance'] = $this->input->post('ballance');
		$data['book_ballance'] = $this->input->post('book_ballance');
		$data['credit_limit'] = $this->input->post('credit_limit');
		$data['withdraw_limit'] = $this->input->post('withdraw_limit');
		$data['savings'] = $this->input->post('savings');
		$data['sign'] = $this->input->post('sign');
		$num = "12345678900987654321234567890";	
		$data['lastpin'] =substr(str_shuffle(strtoupper($num)), 0,4);
		$query = $this->db->where('uid',$this->input->post('l_users'))->update('users',$data);
		return $query;
	}

	public function check_mail($email){		
		$query = $this->db->where('email',$email)->get('users');
		if($query->num_rows()>0):
			return true;
		else:
			return false;
		endif;
	}

	public function create_history( $charges, $amount){
		$data['transaction_type'] = 'Withdraw';
		$data['charges'] = $charges;
		$data['amount'] = $amount;
		$data['status'] = 1;
		$data['uid'] = $this->session->userdata('user_id');
		$data['transaction_date'] = set_date();
		$query = $this->db->insert('history',$data);
		return $query;
	}

	public function update_payment($leftover,$main_ballance){
		self::is_user();
		$data['withdraw_limit'] = $leftover;
		$data['ballance'] = $main_ballance;
		$data['book_ballance'] = $main_ballance;
		$data['savings'] = $leftover;
		$data['ticketid'] = generator();		
		$query = $this->db->where('uid',$this->session->userdata('user_id'))->update('users',$data);
		return $query;
	}
}