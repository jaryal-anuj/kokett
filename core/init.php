<?php
session_start();
date_default_timezone_set('UTC');

//$_SESSION['flash_msg']= [];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$errors = array();
require_once 'database/connection.php';
require_once 'functions/common.php';
require_once 'functions/users.php';



?>
