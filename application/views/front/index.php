<!DOCTYPE html>
<html>
<head>
	<?php

		$system_name = $this->db->get_where('settings',['type' => 'system_name'])->row()->description;
	    $system_fullname = $this->db->get_where('settings',['type' => 'system_fullname'])->row()->description;
	    $system_domain = $this->db->get_where('settings',['type' => 'domain'])->row()->description;
	    $system_email1 = $this->db->get_where('settings',['type' => 'system_email1'])->row()->description;
	    $system_email2 = $this->db->get_where('settings',['type' => 'system_email2'])->row()->description;
	    $system_address = $this->db->get_where('settings',['type' => 'address'])->row()->description;
	    $system_phone1 = $this->db->get_where('settings',['type' => 'phone'])->row()->description;
	    $system_phone2 = $this->db->get_where('settings',['type' => 'phone2'])->row()->description;
	    $system_slogan = $this->db->get_where('settings',['type' => 'slogan'])->row()->description;
	    $system_author = $this->db->get_where('settings',['type' => 'author'])->row()->description;
	    $website_description = $this->db->get_where('settings',['type' => 'website_description'])->row()->description;
	    $website_keywords = $this->db->get_where('settings',['type' => 'website_keywords'])->row()->description;
	    $system_social_media = $this->db->get_where('settings',['type' => 'system_social_media'])->row()->description; 
	    $fb = $this->db->get_where('settings',['type' => 'fb'])->row()->description;
		$tw = $this->db->get_where('settings',['type' => 'tw'])->row()->description;
		$gp = $this->db->get_where('settings',['type' => 'gp'])->row()->description;
		$ig = $this->db->get_where('settings',['type' => 'ig'])->row()->description;
		$pi = $this->db->get_where('settings',['type' => 'pi'])->row()->description;
		$li = $this->db->get_where('settings',['type' => 'li'])->row()->description; 

		include 'inc/meta.php';
		include 'inc/css.php';
	?>

	<title><?=$system_name. ' - ' .$page_title;?></title>

	<?php

		$user = $this->Crud->get_user($this->session->userdata('user_id'));

		$firstname = $user->firstname;
		$lastname = $user->lastname;
		
		$email = $user->email;
		$images = $user->images;
		$dob = $user->dob;
		$gender = $user->gender;
		$mother = $user->mother;
		$city = $user->city;
		$address = $user->address;
		$ssn = $user->ssn;
		$routing = $user->rootine;
		$userid = $user->userid;
		$phone = $user->phone;
		$address = $user->address;
		$user_level = $user->user_level;
		$lastpin = $user->lastpin;
		$sign = $user->sign;
		$is_request = $user->is_request;
		$ballance = $user->ballance;
		$savings = $user->savings;
		$credit_limit = $user->credit_limit;
		$withdraw_limit = $user->withdraw_limit;
		$book_ballance = $user->book_ballance;
		$book_ticketid = $user->ticketid;
		$is_card = $user->is_card;
		$expery_date = $user->expery_date;
		$url_name = 'raji';

		$cards = [];
		$cards = $this->Crud->get_card($this->session->userdata('user_id'));

		// if(!empty($this->session->userdata('user_id'))){			
		// 	$card_name = $cards->card_name;
		// 	$bank_name = $cards->bank_name;
		// 	$expiry_date = $cards->expiry_date;
		// 	$card_provider = $cards->card_provider;
		// 	$card_type = $cards->card_type;
		// 	$card_number = $cards->card_number;
		// 	$cvv = $cards->cvv;
		// 	$is_new_card = $cards->status;
		// }

			$card_name = $cards['card_name'];
			$bank_name = $cards['bank_name'];
			$expiry_date = $cards['expiry_date'];
			$card_provider = $cards['card_provider'];
			$card_type = $cards['card_type'];

			$card_number = $cards['card_number'];
			strlen($card_number);
			$cvv = $cards['cvv'];
			$is_new_card = $cards['status'];
		// if($status==1)user_url('get','bank_cards');

	?>

</head>
<body>

	
	<div id="preloader">
        <div id="status"></div>
    </div>

    <div id="main-wrapper">
    	<?php
			include 'inc/header.php';
			include 'aside.php';
			include $page_name.".php";
			include 'inc/footer.php';
			
    	?>

    </div>

    <?php include 'inc/js.php';?>

</body>
</html>