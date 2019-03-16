<?php
session_start();
include('traccarApi-1.1.php');

$sessionId = $_SESSION['sessionId'];


$a = gps::logout($sessionId);
$response = $a->response;
$responseCode = $a->responseCode;

if($responseCode == '204'){
	
	header("Location: login.php");
}else{
	
	header("Location: map.php");
}

?>