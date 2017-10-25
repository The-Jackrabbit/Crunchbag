<?php
	session_start();
	foreach($_POST as $key => $value) {
		$_SESSION["cart"][$key] = $value;
		
	}
	header("Location: ../purchaseConfirmation.php");
?>