<?php
include("connectToDatabase.php");
session_start();
$user_info_query = mysqli_query($con,"
	SELECT * 
	FROM users 
	WHERE userId='$_SESSION[userId]';
");
if ($user_info_query->num_rows > 0) {
	while ($row = $user_info_query->fetch_assoc()) {
		$_SESSION["firstName"] = $row["firstName"];
		$_SESSION["username"] = $row["username"];
		$_SESSION["email"] = $row["email"];
		
	}
}

include("./disconnectFromDatabase.php");
?>