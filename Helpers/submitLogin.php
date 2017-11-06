<?php 
	include("connectToDatabase.php");

	// Perform queries 
	//print_r($_POST);
	
	$result = mysqli_query($con,"
		SELECT * 
		FROM users 
		WHERE username='$_POST[username]'");
	$email_result = mysqli_query($con,"
		SELECT * 
		FROM users 
		WHERE email='$_POST[username]'");
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			//print_r($row);
			if (password_verify($_POST["password"], $row["password"])) {
				//echo "eyyyyyyyy";
				session_start();
				$_SESSION["userId"] = $row["userId"];
				$_SESSION["firstName"] = $row["firstName"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["email"] = $row["email"];
				header("Location: ../dashboard.php"); /* Redirect browser */
				
			} else {
				header("Location: ../login.php?pw=0");
			//	echo "<p>$pw_hash</p>";
			//	echo "<p>$row[password]</p>";
			}
		}
		
	}
	elseif ($email_result->num_rows > 0) {
		while ($row = $email_result->fetch_assoc()) {
			//print_r($row);
			if (password_verify($_POST["password"], $row["password"])) {
				//echo "eyyyyyyyy";
				session_start();
				$_SESSION["userId"] = $row["userId"];
				$_SESSION["firstName"] = $row["firstName"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["email"] = $row["email"];
				header("Location: ../dashboard.php"); /* Redirect browser */
				
			} else {
			//	echo "<p>$pw_hash</p>";
			//	echo "<p>$row[password]</p>";
				header("Location: ../login.php?pw=0");
			}
		}
	} else {
		header("Location: ../login.php?username=0"); /* Redirect browser */
		
	}
?>
