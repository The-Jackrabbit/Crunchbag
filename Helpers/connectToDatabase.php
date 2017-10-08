<?php 
	include("databaseCredentials.php");
	
	$con=mysqli_connect($servername,$username,$password, $database);
	// Check connection
	//echo "hi";
	if (mysqli_connect_errno()) {
		//echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	// Perform queries 
?>