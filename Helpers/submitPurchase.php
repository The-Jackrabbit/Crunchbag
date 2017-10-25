<?php
	session_start();
	if (isset($_POST["email"])) {
		$_SESSION["email"] = $_POST["email"];
	}
	foreach($_POST as $key => $value) {
		if ($key != "email") {
			$_SESSION["cart"][$key] = $value;
			
		}
		
	}
	header("Location: ../purchaseConfirmation.php");
?>