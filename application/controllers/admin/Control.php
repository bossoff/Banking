<?php

class Control extends CI_Controller{

	private function is_admin(){

		$this->Crud->is_admin();
	}
	
	public function index($param1='',$param2='',$param3=''){
		self::is_admin();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'rdr_dc'
		) 
			admin_url('dashboard','rdr_dc');
		$this->dashboard();		
		
	}

	public function dashboard($param1='',$param2='',$param3=''){
		self::is_admin();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'rdr_dc'
		) 
			admin_url('dashboard','rdr_dc');

		$page_data['page_title'] = 'Dashboard';
		$page_data['page_name'] = 'dashboard';
		$this->load->view("back/index", $page_data);
	}


	public function create(){
		self::is_admin();
		if(!$this->input->post())die();

		if($this->input->post()){
			
			if($this->Crud->check_mail($this->input->post('email'))){
				$this->session->set_flashdata('er','this user already created.');
				admin_url('dashboard','rdr_dc');			
			}
			$this->Crud->register();
			$this->session->set_flashdata('success','New client regitered.');
            admin_url('dashboard','rdr_dc');
		}		
	}


	public function set_load(){
		self::is_admin();
		if(!$this->input->post())die();

		if($this->input->post()){
			$this->Crud->loading();
			$this->session->set_flashdata('l_success','This User Acount has been Load.');
            admin_url('dashboard','rdr_dc');
		}		
	}


	public function users($param1='',$param2='',$param3=''){
		self::is_admin();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'rdr_dc'
		) 
			admin_url('dashboard','rdr_dc');

		$page_data['page_title'] = 'All Users';
		$page_data['page_name'] = 'users';
		$this->load->view("back/index", $page_data);
	}

	public function cards($param1='',$param2='',$param3=''){
		self::is_admin();
		if(
			empty($param1) || $param1 != strtolower($this->session->userdata('firstname')) 
			|| 
			empty($param2) || $param2 != 'rdr_dc'
		) 
			admin_url('dashboard','rdr_dc');

		$page_data['page_title'] = 'Add Credit Card';
		$page_data['page_name'] = 'cards';
		$this->load->view("back/index", $page_data);
	}



}