<?php 
	include("./connectToDatabase.php");
	//print_r($_POST);
	/*
		PUT QUERIES HERE
		EXAMPLE
		$items  = mysqli_query($con,
		"INSERT INTO videoGameMarkers(
			videoGameId, idString, x, y, userId, score, status, title, body, mapId, assetId
		)
		VALUES 
		($_POST[gameId], 'Whiterun_home', $_POST[y],$_POST[x], $_SESSION[userId], 0, '$_POST[status]', '$_POST[title]','$_POST[description]', $_POST[mapId], '$_POST[asset]');
		");
	*/
	$result = mysqli_query($con,"
	SELECT * 
	FROM users 
	WHERE username='$_POST[username]'");
	if ($result->num_rows >0) {
		header("Location: /signup.php?username='taken'");
	}
	$pw = password_hash($_POST[password], PASSWORD_DEFAULT);
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

	header("Location: /home.php");
	exit;
?>