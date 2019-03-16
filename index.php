<?php
session_start();

if(!$_SESSION['sessionId']){
	
	header("Location: login.php");	
}else{

	header("Location: map.php");
}
?>