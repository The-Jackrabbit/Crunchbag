<?php
	session_start();
	if (isset($_SESSION["email"])) {
		$target_email = $_SESSION['email'];
	}
	$total = 0;
	$email_username = "Valued anonymous customer";
	if (isset($_SESSION["sum"])) {
		$total = $_SESSION["sum"];
	}
	if(isset($_SESSION["username"])) {
		$email_username = $_SESSION['username'];
	}
	
	
	include("./connectToDatabase.php");
	if (isset($_SESSION["userId"])) {
		$pending_purchase_query = mysqli_query($con,"SELECT *
		FROM transactionLog
		WHERE transactionEnd = '3001-01-01'
		AND transactionBy = $_SESSION[userId];");
		if ($pending_purchase_query->num_rows > 0) {
			mysqli_query($con,"UPDATE
			transactionLog
			SET transactionEnd = Now()
			WHERE transactionEnd = '3001-01-01'
			AND transactionBy = $_SESSION[userId];");
		}
	} else {
		$id = session_id();
		$pending_purchase_query = mysqli_query($con,"SELECT *
		FROM transactionLog
		WHERE transactionEnd = '3001-01-01'
		AND transactionBy = '$id';");
		if ($pending_purchase_query->num_rows > 0) {
			mysqli_query($con,"UPDATE
			transactionLog
			SET transactionEnd = Now()
			WHERE transactionEnd = '3001-01-01'
			AND transactionBy = '$id';");
		}
	}
	foreach ($_SESSION['cart'] as $key=>$value) {
		$_SESSION['cart'][$key] = 0;
	}
	
	
	include("./disconnectFromDatabase.php");
	include("./purchaseMail.php");
	header("Location: ../thankyou.php");
?>
<?php

				
				
			?>