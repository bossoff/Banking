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

	 	$this->load->view('auth/inc/meta');
	 	$this->load->view('auth/inc/css');
	 	// $this->load->view('auth/inc/css');
	 ?>
	<title><?=$system_name. ' - ' .$page_title;?></title>

</head>
 <body class="login-page">

 	<div class="signup-login">

 		<?php 

 		include $page_name.".php";
 		// $this->load->view('auth/'.$page_name);

 		?>
 	</div>

 	<?php 
	 	$this->load->view('auth/inc/js');
	 ?>

</body>
</html>