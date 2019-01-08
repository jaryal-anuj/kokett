<?php
function base_url() {
	return 'http://localhost/kokett/';
}

function esc($data){
	return htmlentities($data,ENT_QUOTES,'UTF-8');
}

function dd($data,$dump=true) {
	if(is_array($data) || is_object($data)) {
		echo "<pre>",print_r($data),"</pre>";
	}else{
		echo $data;
	}


	if($dump){
		exit;
	}
}


function xss_clean($data) {

  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}

function set_flashdata($key,$value) {

	$_SESSION['flash_msg'][$key] = $value;
}

function get_flashdata($key) {

	if(isset($_SESSION['flash_msg'][$key]) ){
		$data = $_SESSION['flash_msg'][$key];
		unset($_SESSION['flash_msg'][$key]);
		return $data;
	}
	return null;
}

function has_flashdata($key) {
	if(isset($_SESSION['flash_msg'][$key]) ){
		return true;
	}
	return false;
}

function get_error($key) {
	global $errors;
	if(isset($errors[$key][0])){
		return $errors[$key][0];
	}

	return null;
}

function has_error($key) {
	global $errors;
	if(isset($errors[$key][0])){
		return true;
	}

	return null;
}

function old_value($key) {
	if(isset($_POST[$key])) {
		return $_POST[$key];
	}
	return null;
}

function auth_check(){
	
}
?>