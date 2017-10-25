<?php
	session_start();
	$target_email = $_SESSION['email'];
	$username = $_SESSION['username'];
	include("./purchaseMail.php");
	header("Location: ../thankyou.php");
?>