<?php
session_start();

$sessionId = $_SESSION['sessionId'];

if($sessionId != ''){
	
	header("Location: map.php");	
}else{

	header("Location: login.php");
}
?>