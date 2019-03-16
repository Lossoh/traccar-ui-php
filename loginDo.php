<?php
session_start();
include('traccarApi-1.1.php');

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$a = gps::login($username, $password);
$sessionId = gps::$cookie;
$_SESSION['sessionId'] = $sessionId;
$response = $a->response;
$responseCode = $a->responseCode;

if($responseCode == '200'){
	
	
	echo ('true');
}else{
	
	echo 'Incorrect username/password';
}

?>