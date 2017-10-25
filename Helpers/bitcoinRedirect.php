<?php
	session_start();
	$target_email = $_SESSION['email'];
	$username = $_SESSION['username'];
	
	include("./connectToDatabase.php");
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
	
	include("./disconnectFromDatabase.php");
	include("./purchaseMail.php");
	header("Location: ../thankyou.php");
?>