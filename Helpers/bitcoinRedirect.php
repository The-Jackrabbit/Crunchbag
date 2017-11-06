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

		$sum = $_SESSION["sum"];
		$transaction_id = 0;
		if (isset($_SESSION["userId"])) {
			$pending_purchase_query = mysqli_query($con,"SELECT *
			FROM transactionLog
			WHERE transactionEnd = '3001-01-01'
			AND transactionBy = $_SESSION[userId];");
			if ($pending_purchase_query->num_rows == 0) {
				mysqli_query($con,"INSERT INTO transactionLog(
					transactionDate,
					transactionStart,
					transactionEnd,
					transactionBy,
					transactionAmount,
					bitcoinSource,
					bitcoinTarget
				)
				VALUES (
					Now(),
					Now(),
					'3001-01-01',
					'$_SESSION[username]',
					$sum,
					'$_SESSION[email]',
					'crunchbag.uva@gmail.com'
				);");
				$transaction_query = mysqli_query($con,
					"SELECT MAX(transactionId) as new
					FROM transactionLog
				;");
				if ($transaction_query->num_rows > 0) {
					while ($transaction_row= $transaction_query->fetch_assoc()) {
						$transaction_id = $transaction_row["new"];
					}
				}
				
				
			}
			foreach ($_SESSION['cart'] as $key=>$value) {
				
				if ($value > 0) {
					$price = 0.00;
					$price_query = mysqli_query($con,"SELECT * FROM products
							WHERE productId=$key;");
					if ($price_query->num_rows > 0) {
						while ($price_row = $price_query->fetch_assoc()) {
							$price = $price_row ["price"]*$value;
						}
					}
					
					
					mysqli_query($con,"INSERT INTO productTransactions(
						transactionId,
						productId,
						userId,
						quantity,
						amount
					)
					VALUES 
					(
						$transaction_id,
						'$key',
						$_SESSION[userId],
						'$value',
						$price
					);");
				}
			}
		} else {
			$id = session_id();
			$pending_purchase_query = mysqli_query($con,"SELECT *
			FROM transactionLog
			WHERE transactionEnd = '3001-01-01'
			AND transactionBy = '$id';");
			if ($pending_purchase_query->num_rows == 0) {
				mysqli_query($con,"INSERT INTO transactionLog(
					transactionDate,
					transactionStart,
					transactionEnd,
					transactionBy,
					transactionAmount,
					bitcoinSource,
					bitcoinTarget
				)
				VALUES (
					Now(),
					Now(),
					'3001-01-01',
					'$id',
					$sum,
					'$_SESSION[email]',
					'crunchbag.uva@gmail.com'
				);");
			}
			
		}


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
