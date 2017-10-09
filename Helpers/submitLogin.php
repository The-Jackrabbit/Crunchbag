<?php 
	include("connectToDatabase.php");

	// Perform queries 
	//print_r($_POST);
	
	$result = mysqli_query($con,"
		SELECT * 
		FROM users 
		WHERE username='$_POST[username]'");
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			//print_r($row);
			if (password_verify($_POST["password"], $row["password"])) {
				//echo "eyyyyyyyy";
				session_start();
				$_SESSION["userId"] = $row["userId"];
				$_SESSION["firstName"] = $row["firstName"];
				$_SESSION["username"] = $row["password"];
				header("Location: ../about.php"); /* Redirect browser */
				
			} else {
			//	echo "<p>$pw_hash</p>";
			//	echo "<p>$row[password]</p>";
			}
		}
		
	} else {
		header("Location: ../login.php?redirect=true"); /* Redirect browser */
		
	}
?>
