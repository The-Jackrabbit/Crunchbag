<?php session_start();?>
<?php 
	include("sessionVariables.php"); 
?>
<?
	include("connectToDatabase.php");
	$info = Array(
		"firstName" => "hi",
		"lastName" => "",
		"username" => "",
		"email" => "",
		"address" => "",
		"city" => "",
		"zipCode" => "",
		"state" => ""
	);
	$info_query = mysqli_query($con,
	"	SELECT * 
		FROM users 
		WHERE userId=$_SESSION[userId]
		LIMIT 1;");
	if ($info_query->num_rows > 0) {
		while ($row = $info_query->fetch_assoc()) {
			$info["firstName"] = $row["firstName"];
			$info["lastName"] = $row["lastName"];
			$info["username"] = $row["username"];
			$info["email"] = $row["email"];
			$info["address"] = $row["address"];
			$info["city"] = $row["city"];
			$info["zipCode"] = $row["zipCode"];
			$info["state"] = $row["state"];
		}
	}
	include("disconnectFromDatabase.php");
?>