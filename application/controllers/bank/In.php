
<?php

class In extends CI_Controller{

	private function is_user(){
		$this->Crud->is_user();
	}
	
	public function index($param1='',$param2='' ){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'profile'
		) 
			user_url('api','dashboard');

		$this->session->set_userdata('last_page','dashboard'); 
		 $this->api($param1='',$param2='');
	}

	public function api($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'dashboard'
		) 
			user_url('api','dashboard');

		$this->session->set_userdata('last_page','dashboard'); 
		$page_data['page_title'] = 'Home';
		$page_data['page_name'] = 'dashboard';
		$this->load->view('front/index',$page_data);		
	}

	public function account($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'profile'
		) 
			user_url('api','dashboard');

		$this->session->set_userdata('last_page','profile');  
		$page_data['page_title'] = 'Profile';
		$page_data['page_name'] = 'profile';
		$this->load->view('front/index',$page_data);		
	}

	public function set($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'bank_card'
		) 
			user_url('api','dashboard');

		$this->session->set_userdata('last_page','bank_card');  
		$page_data['page_title'] = 'Bank Card';
		$page_data['page_name'] = 'bank_card';
		$this->load->view('front/index',$page_data);		
	}


	public function req($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'card_request'
		) 
			user_url('api','dashboard');

		$this->session->set_userdata('last_page','card_request');  
		$page_data['page_title'] = 'Card Request';
		$page_data['page_name'] = 'card_request';
		$this->load->view('front/index',$page_data);		
	}	

	public function get($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'bank_cards'
		) 
			user_url('api','dashboard');

		$this->session->set_userdata('last_page','bank_cards');  
		$page_data['page_title'] = 'Bank Card';
		$page_data['page_name'] = 'bank_card';
		$this->load->view('front/index',$page_data);		
	}

	public function site($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'settings'
		) 
			user_url('api','dashboard');

		$this->session->set_userdata('last_page','settings');  
		$page_data['page_title'] = 'settings';
		$page_data['page_name'] = 'settings';
		$this->load->view('front/index',$page_data);		
	}

	public function acounts($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'add_card'
		) 
			user_url('api','dashboard');

		$this->session->set_userdata('last_page','add_card');  
		$page_data['page_title'] = 'Add Card';
		$page_data['page_name'] = 'add_card';
		$this->load->view('front/index',$page_data);		
	}

	public function fund($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'withdraw'
		) 
			user_url('api','dashboard');

		$this->session->set_userdata('last_page','withdraw');  
		$page_data['page_title'] = 'Withdraw';
		$page_data['page_name'] = 'withdraw_card';
		$this->load->view('front/index',$page_data);		
	}

	public function funds($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'withdraw'
		) 
			user_url('api','dashboard');

		if($this->session->userdata('app')==True){
			$this->session->set_userdata('last_page','withdraw');  
			$page_data['page_title'] = 'Withdraw';
			$page_data['page_name'] = 'ballance';
			$this->load->view('front/index',$page_data);
		}else{
			user_url('api','dashboard');
		}		
	}


	public function get_info($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'transaction'
		) 
			user_url('api','dashboard');
		
			$this->session->set_userdata('last_page','transaction');  
			$page_data['page_title'] = 'Recent Transactions';
			$page_data['page_name'] = 'history';
			$this->load->view('front/index',$page_data);
			
	}

	public function funds_($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'withdraw'
		) 
			user_url('api','dashboard');

		if($this->session->userdata('key')==True){
			$this->session->set_userdata('last_page','withdraw');
			$page_data = [
				'page_title' =>'Withdraw',
				'page_name' =>'confirm',
				'charges' => $this->session->userdata('charges'),
				'amount' => $this->session->userdata('amount'),
				'withdraw_amount' => $this->session->userdata('withdraw_amount'),
				'leftover' => $this->session->userdata('leftover'),
				'main_ballance' => $this->session->userdata('main_ballance'),
			];  
			// $page_data['page_title'] = 'Withdraw';
			// $page_data['page_name'] = 'confirm';
			$this->load->view('front/index',$page_data);
		}else{
			user_url('api','dashboard');
		}		
	}


	public function funds_c($param1='',$param2='',$param3=''){
		self::is_user();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'withdraw'
		) 
			user_url('api','dashboard');

		if($this->session->userdata('done')==True){
			$this->session->set_userdata('last_page','withdraw');
			$page_data['page_title'] = 'Withdraw';
			$page_data['page_name'] = 'completed';
			$page_data['amount'] = $this->session->userdata('amount');
			$this->load->view('front/index',$page_data);
		}else{
			user_url('api','dashboard');
		}		
	}

	public function create_request($param){
		self::is_user();
		if(empty($param)||$param != 'set' || empty($this->input->post('zip'))) user_url('api','dashboard');
		$this->Crud->send_request();
		set_alert('success', 'Request Seccessful');
		user_url('req','card_request');
	}

	public function add_request($param){
		self::is_user();
		if(empty($param)||$param != 'set' || empty($this->input->post('card_number'))) user_url('api','dashboard');
		$this->Crud->add_card();
		set_alert('success', 'Request Seccessful');
		user_url('get','bank_cards');
	}

	public function check_card(){
		$app = $this->input->post('pendi');
		if(!$this->input->post())die();
		if($this->input->post('approved')!='approved'){
			set_alert('danger', 'This card is not approved.');
			user_url('fund','withdraw');
		}else{
			$this->session->set_userdata('app',True);
			user_url('funds','withdraw');
		}		
	}

	public function get_amount(){
		$amount  = $this->input->post('amount');
		$curr = $this->db->get_where('users',['uid'=>$this->session->userdata('user_id')])->row_array();
		$ballance = $curr['withdraw_limit'];
		$sign = $curr['sign'];
		if(empty($amount)){
			echo 0;
		}else{			
			$total = $amount - $ballance;
			if($amount >$ballance){
			 	echo$sign.number_format($ballance);

			}elseif($total ==0){			 	
			 	echo$sign.number_format($ballance);
			}else{
			 	echo$sign.number_format($amount);
			}
			
		}	
	}

	public function set_withdraw(){
		$curr = $this->db->get_where('users',['uid'=>$this->session->userdata('user_id')])->row_array();
		$ballance = $curr['withdraw_limit'];
		$main_ballance = $curr['ballance'];
		$amount = $this->input->post('amount');
		$charges = $this->input->post('charges');
		if($amount > $ballance){
			$withdraw_amount = $ballance + $charges;
			
			if($withdraw_amount>$ballance){
				set_alert('danger',"Insuficient balance.");
				user_url('funds','withdraw');
			}else{
				$leftover = $ballance - $withdraw_amount;
				$get_ballance = $main_ballance - $withdraw_amount;
			}
		}else{
			$withdraw_amount = $amount + $charges;
			$leftover = $ballance - $withdraw_amount;
			if($withdraw_amount>$ballance){
				set_alert('danger',"Insuficient balance.");
				user_url('funds','withdraw');
			}else{
				$leftover = $ballance - $withdraw_amount;
				$get_ballance = $main_ballance - $withdraw_amount;
			}
		}

		$data = [

			'charges' => $charges,
			'amount' => $amount,
			'withdraw_amount' => $withdraw_amount,
			'leftover' => $leftover,
			'main_ballance' => $get_ballance, 
			'key' =>True
		];

		$this->session->set_userdata($data);
		user_url('funds_','withdraw');
	}

	public function check_withdraw(){

		if($this->input->post()){			
			user_url('api','dashboard');
		}else{

			$charges = $this->session->userdata('charges');
			$amount =  $this->session->userdata('amount');
			$withdraw_amount =  $this->session->userdata('withdraw_amount');
			$leftover = $this->session->userdata('leftover');
			$main_ballance = $this->session->userdata('main_ballance');
			$this->Crud->create_history($charges, $amount);
			$this->Crud->update_payment($leftover,$main_ballance);
			$this->session->set_userdata('done',True);
			user_url('funds_c','withdraw');
		}
		
	}

	

}