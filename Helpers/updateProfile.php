<?php session_start();?>
<?php 
	include("sessionVariables.php"); 
?>
<?php
	include("connectToDatabase.php"); 
	if (isset($_POST["context"])) {

		if ($_POST["context"] == "personal") {
			$firstName = "";
			$lastName = "";
			$username = "";
			$email = "";
			$personal_info_query = mysqli_query($con, "	
				SELECT firstName, lastName, username, email
				FROM users
				WHERE userId=$_SESSION[userId];
			");
			if ($personal_info_query->num_rows > 0) {
				while ($row = $personal_info_query->fetch_assoc()) {
					$firstName = $row["firstName"];
					$lastName = $row["lastName"];
					$username = $row["username"];
					$email = $row["email"];
				}
			}
			$username_availability_query = mysqli_query($con, "	
				SELECT userId, username
				FROM users
				WHERE username='$_POST[username]'
				AND userId<>$_SESSION[userId];
			");
			$email_availability_query = mysqli_query($con, "	
				SELECT userId, email
				FROM users
				WHERE email='$_POST[email]'
				AND userId<>$_SESSION[userId];
			");
			if ($username_availability_query->num_rows == 0) {
				$update_username_query = mysqli_query($con, "	
					UPDATE users
					SET username = '$_POST[username]',
					firstName = '$_POST[firstName]',
					lastName = '$_POST[lastName]'
					WHERE userId=$_SESSION[userId];
				");
			} else {
				header("Location: ../settings.php?usernameUpdate=0");
			}

			
			if ($email_availability_query->num_rows == 0) {
				$update_email_query = mysqli_query($con, "	
					UPDATE users
					SET email = '$_POST[email]',
					firstName = '$_POST[firstName]',
					lastName = '$_POST[lastName]'
					WHERE userId=$_SESSION[userId];
				");
			} else {
				header("Location: ../settings.php?emailUpdate=0");
			}
			$e = $email_availability_query->num_rows == 0 ? 1 : 0;
			$u = $username_availability_query->num_rows == 0 ? 1 : 0;
			if ($e && $u) {
				header("Location: ../settings.php?personalUpdate=1");
			} else {
				header("Location: ../settings.php?emailUpdate=$e&usernameUpdate=$u");
			}
			

		}
		elseif ($_POST["context"] == "address") {
			$update_address_query = mysqli_query($con, "	
				UPDATE users
				SET address = '$_POST[address]'
				,city = '$_POST[city]'
				,zipCode = '$_POST[zipCode]'
				,state = '$_POST[state]'
				WHERE userId=$_SESSION[userId];
			");
			header("Location: ../settings.php?addressUpdate=1#update-address");
		}
		elseif ($_POST["context"] == "password") {
			// GET OLD PASSWORD
			$password_hash = "";
			$password_query = mysqli_query($con, "	
				SELECT password
				FROM users
				WHERE userId=$_SESSION[userId];
			");
			if ($password_query->num_rows > 0) {
				while ($row = $password_query->fetch_assoc()) {
					$password_hash = $row["password"];
				}
			}

			if (password_verify($_POST["oldPassword"], $password_hash)) {
				$new_password_hash = password_hash($_POST["newPassword"], PASSWORD_DEFAULT);
				$update_password_query = mysqli_query($con, "	
					UPDATE users
					SET password = '$new_password_hash'
					WHERE userId=$_SESSION[userId];
				");
				header("Location: ../settings.php?passwordUpdate=1#update-password");
			} else {
				header("Location: ../settings.php?passwordUpdate=0#update-password");
			}

		}
	}
	include("./updateSessionInfo.php");
	include("disconnectFromDatabase.php"); 

?>