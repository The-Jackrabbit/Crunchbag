<?php 
	include("./connectToDatabase.php");
	//print_r($_POST);
	
	$username_check = mysqli_query($con,"
		SELECT * 
		FROM users 
		WHERE username='$_POST[username]';");
	
	$email_check = mysqli_query($con,"
		SELECT * 
		FROM users 
		WHERE email='$_POST[email]';");

	$username_result = ($username_check->num_rows > 0 ? true : false);
	$email_result = ($email_check->num_rows > 0 ? true : false);
	
	if ($username_result || $email_result) {
		header("Location: ../signup.php?username_result=$username_result&username=$_POST[username]&email_result=$email_result&email=$_POST[email]&zip=$_POST[zip]&address=$_POST[address]&city=$_POST[city]&first_name=$_POST[first_name]&last_name=$_POST[last_name]");
	} else {
		$pw = password_hash($_POST["password"], PASSWORD_DEFAULT);
		mysqli_query($con,"INSERT INTO users(
			firstName,
			lastName,
			username,
			email,
			password,
			address,
			city,
			zipCode,
			state
		)
		VALUES (
			'$_POST[first_name]',
			'$_POST[last_name]',
			'$_POST[username]',
			'$_POST[email]',
			'$pw',
			'$_POST[address]',
			'$_POST[city]',
			'$_POST[zip]',
			'$_POST[state]'
		);");
		include("./disconnectFromDatabase.php");
		$target_email = $_POST['email'];
		$email_username = $_POST['username'];
		include("./signupMail.php");
		header("Location: ../signupConfirmation.php");
	}
	
	include("./disconnectFromDatabase.php");
	
	//header("Location: /home.php");
	exit;
?>