<?php
	include("../Helpers/databaseCredentials.php");
	
	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	// Create database
	$clear = "DROP DATABASE IF EXISTS $database;";
	$sql = "CREATE DATABASE $database";
	mysqli_query($conn, $clear);
	if ($conn->query($sql) === TRUE) {
		echo "Database created successfully";
	} else {
		echo "Error creating database: " . $conn->error;
	}
	$conn->close();


	// CONNECT TO NEWLY CREATED DATABASE
	$con=mysqli_connect($servername,$username,$password, $database);
	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	// Perform queries 
	mysqli_query($con,"DROP TABLE IF EXISTS users;");
	$pw = password_hash("12345", PASSWORD_DEFAULT);
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
		'Luke',
		'Masters',
		'luke',
		'musicdude97@gmail.com',
		'$pw',
		'7518 Quigg Street',
		'Charlottesville',
		'20124',
		'Virginia'
	),
	(
		'Kacey',
		'Price',
		'kacey',
		'kc@g.com',
		'$pw',
		'123 Tjs house way',
		'Charlottesville',
		'22903',
		'Virginia'
	),
	(
		'Gen',
		'Schmitt',
		'gen',
		'gs@g.com',
		'$pw',
		'124 Tjs house way',
		'Charlottesville',
		'22903',
		'Virginia'
	);");
	
	mysqli_query($con, "DROP TABLE IF EXISTS products;");
	mysqli_query($con, "CREATE TABLE products(
		productId SERIAL PRIMARY KEY,
		price DOUBLE PRECISION,
		productName varchar(500),
		productImage varchar(1000),
		productDescription varchar(1000)
	);");
	mysqli_query($con,"INSERT INTO products(
		price,
		productName,
		productImage,
		productDescription
	)
	VALUES 
		(
			50.00,
			'Individual Pile',
			'Assets/img/purLeaf.jpg',
			''
		),
		(
			80.00,
			'Couple\'s Pile',
			'Assets/img/purLeaf.jpg',
			''
		),
		(
			150.00,
			'Family Pile',
			'Assets/img/purLeaf.jpg',
			''
		),
		(
			25.00,
			'Cinnamon',
			'Assets/img/Cinn.jpg',
			'Optional Scent'
		),
		(
			25.00,
			'Chai',
			'Assets/img/Chai.jpg',
			'Optional Scent'
		),
		(
			25.00,
			'Pumpkin Spice',
			'Assets/img/PSL.jpg',
			'Optional Scent'
		)
	;");
	
	mysqli_query($con, "DROP TABLE IF EXISTS transactionLog;");
	mysqli_query($con, "CREATE TABLE transactionLog(
		transactionId SERIAL PRIMARY KEY,
		transactionDate TIMESTAMP,
		transactionStart DATETIME,
		transactionEnd DATETIME,
		deliveryDate DATETIME,
		transactionBy varchar(1000),
		transactionAmount DOUBLE PRECISION,
		bitcoinSource varchar(1000),
		bitcoinTarget varchar(1000)
	);");
	mysqli_query($con,"INSERT INTO transactionLog(
		transactionDate,
		transactionStart,
		transactionEnd,
		deliveryDate,
		transactionBy,
		transactionAmount,
		bitcoinSource,
		bitcoinTarget 
	)
	VALUES 
		(
			NOW(),
			NOW(),
			DATE_ADD(NOW(), INTERVAL 12 MINUTE),
			DATE_ADD(NOW(), INTERVAL 1 MONTH),
			'luke',
			114.21,
			'musicdude97@gmail.com',
			'crunchbag.UVa@gmail.com'
		),
		(
			DATE_ADD(NOW(), INTERVAL -10 DAY),
			DATE_ADD(NOW(), INTERVAL -10 DAY),
			DATE_ADD(DATE_ADD(NOW(), INTERVAL -10 DAY), INTERVAL 5 MINUTE),
			DATE_ADD(DATE_ADD(NOW(), INTERVAL -10 DAY), INTERVAL 1 MONTH),
			'luke',
			57.54,
			'musicdude97@gmail.com',
			'crunchbag.UVa@gmail.com'
		),
		(
			DATE_ADD(NOW(), INTERVAL -1 MONTH),
			DATE_ADD(NOW(), INTERVAL -1 MONTH),
			DATE_ADD(DATE_ADD(NOW(), INTERVAL -1 MONTH), INTERVAL 7 MINUTE),
			DATE_ADD(DATE_ADD(NOW(), INTERVAL -1 MONTH), INTERVAL 1 MONTH),
			'luke',
			17.32,
			'musicdude97@gmail.com',
			'crunchbag.UVa@gmail.com'
		)
		
	;");
	mysqli_query($con, "DROP TABLE IF EXISTS productTransactions;");
	mysqli_query($con, "CREATE TABLE productTransactions(
		productTransactionId SERIAL PRIMARY KEY,
		transactionId integer,
		productId integer,
		userId integer,
		quantity integer,
		amount DOUBLE PRECISION
	);");
	mysqli_query($con,"INSERT INTO productTransactions(
		transactionId,
		productId,
		userId,
		quantity,
		amount
	)
	VALUES 
		(
			3,
			5,
			1,
			1,
			17.32
		),
		(
			2,
			1,
			1,
			1,
			30.12
		),
		(
			2,
			6,
			1,
			1,
			17.89
		),
		(
			1,
			6,
			1,
			1,
			17.89
		),
		(
			1,
			5,
			1,
			1,
			17.32
		),
		(
			1,
			2,
			1,
			2,
			102.21
		)
		
	;");
	mysqli_close($con);
?>