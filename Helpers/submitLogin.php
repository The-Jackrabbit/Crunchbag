<?php 
	$username = $_POST["username"];
	include("connectToDatabase.php");

	// Perform queries 
	$result = mysqli_query($con,"
		SELECT * 
		FROM users 
		WHERE username='$username'");
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$pw_hash = password_hash($_POST[password], PASSWORD_DEFAULT);
			if (password_verify($_POST[password], $row["password"])) {
				//echo "eyyyyyyyy";
				session_start();
				$_SESSION["userId"] = $row["userId"];
				$_SESSION["firstName"] = $row["firstName"];
				$_SESSION["username"] = $username;
				header("Location: /about.php"); /* Redirect browser */
				
			} else {
			//	echo "<p>$pw_hash</p>";
			//	echo "<p>$row[password]</p>";
			}
		}
		
	} else {
		header("Location: /login.php?redirect=true"); /* Redirect browser */
		
	}
?>
