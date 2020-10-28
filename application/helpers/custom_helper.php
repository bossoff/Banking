<?php

// defined('BASEPATH') exit('No direct script access allowed');

function user_url($controller, $sub_controller){
	$CI	=&	get_instance();
	$CI->Crud->is_user();
	redirect(base_url().'bank/in/'.$controller.'/'.strtolower($CI->session->userdata('firstname')).'/'.$sub_controller.'/', 'refresh');
}

function admin_url($controller, $sub_controller){
	$CI	=&	get_instance();
	$CI->Crud->is_admin();
	redirect(base_url().'admin/control/'.$controller.'/'.strtolower($CI->session->userdata('firstname')).'/'.$sub_controller.'/', 'refresh');
}

function admin_nav($controller, $sub_controller){
	$CI	=&	get_instance();
	$CI->Crud->is_admin();
	return base_url().'admin/control/'.$controller.'/'.strtolower($CI->session->userdata('firstname')).'/'.$sub_controller.'/';
}

function clean_url(){
	redirect(base_url(),'refresh');
}

function set_alert($type, $message){
    get_instance()->session->set_flashdata('message-' . $type, $message);
}
  
function blank_page($message = '', $alert = 'danger'){
    set_alert($alert, $message);
    redirect(admin_url('not_found'));
}

if(!function_exists('nav_url')){
	function nav_url($controller,$sub_controller){
		$CI	=&	get_instance();
		return base_url().'bank/in/'.$controller.'/'.strtolower($CI->session->userdata('firstname')).'/'.$sub_controller.'/';
	}
}

function ip(){
	if (!empty($_SERVER["REMOTE_ADDR"])){
        $ip_address = $_SERVER["REMOTE_ADDR"];
    }
    elseif(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ip_address = $_SERVER["HTTP_CLIENT_IP"];
    }else{
        $ip_address = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    if(!empty($ip_address)){
            $handle = fopen("approved_ips.txt", 'a');
            fwrite($handle, $ip_address.',');
            // implode(',', $ip_address);
    }  

    return $ip_address; 
}

if (!function_exists('is_active')){
	function is_active($selected_page_name = "") {
        $CI	=&	get_instance();
        if ($CI->session->userdata('last_page') == $selected_page_name){
            return "active";
        }else {
            return "";
        }
	}
}

if (!function_exists('is_multi_level_active')){
    function is_multi_level_active($selected_pages = "", $item = "") {
        $CI	=&	get_instance();
		for ($i = 0; $i < sizeof($selected_pages); $i++) {
			if ($CI->session->userdata('last_page') == $selected_pages[$i]) {
	            if ($item == 1) {
	                return "opened active";
	            }else {
	                return "opened";
	            }
	        }
		}
		return "";
    }
}

function generator(){
	$str = "abcdefghijklmnpqrstuvwxyz";
	$num = "12345678900987654321234567890";
	return  substr(str_shuffle(strtoupper($num.$str)), 0,12);
}

function generator1(){
	$str = "abcdefghijklmnpqrstuvwxyz";
	$num = "12345678900987654321234567890";
	return  substr(str_shuffle(strtoupper($num.$str)), 0,8);
}

function last_four_digit_credit_card($card_num){
	$num_chars = strlen($card_num);
	$num_stars = $num_chars - 4;
	$last_four = substr($card_num, -4);
	$stars[] = '';
	for ($i=10; $i < $num_stars; $i++) { 
		$stars[] = 'XXXX-';
	}
	$stars_now = implode("", $stars);
	$display = $stars_now.$last_four;
	// return $num_stars;
	return $display;
}  

function four_digit_pin($card_num){
	$num_chars = strlen($card_num);
	$num_stars = $num_chars - 4;
	$last_four = substr($card_num, -4);
	$display = $last_four;
	return $display;
}

function set_date(){
	date_default_timezone_set('Africa/Lagos');
	$DateTime = date('d/m/Y - h:i:s A', time());
	return $DateTime;
}