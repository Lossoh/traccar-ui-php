<?php
include('traccarApi-1.1.php');

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$name = $_REQUEST['name'];
$attributes = '{}';

$a = gps::signup($name,$email,$password);
$response = $a->response;
$responseCode = $a->responseCode;

if($responseCode == '200'){
	
	echo ('true');
}else{
	
	echo 'Invalid Data Try Again';
}
?>