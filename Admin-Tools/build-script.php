<?php
	include('../Helpers/connectToDatabase.php');

	// Perform queries 
	mysqli_query($con,"DROP TABLE IF EXISTS users;");
	echo "test";
	mysqli_query($con,"CREATE TABLE users(
		userId SERIAL PRIMARY KEY,
		firstName varchar(100),
		lastName varchar(100),
		username varchar(100),
		email varchar(500),
		password varchar(500),
		address varchar(500),
		city varchar(500),
		zipCode varchar(500),
		state varchar(500)
	);");
	
	
	mysqli_close($con);
?>