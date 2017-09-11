<?php
	include('../Helpers/connectToDatabase.php');

	// Perform queries 
	mysqli_query($con,"DROP TABLE IF EXISTS users;");
	mysqli_query($con,"DROP TABLE IF EXISTS userAccounts;");
	mysqli_query($con,"DROP TABLE IF EXISTS backlogUserItems;");
	mysqli_query($con,"DROP TABLE IF EXISTS backlogItems;");
	mysqli_query($con,"CREATE TABLE users(
		userId SERIAL PRIMARY KEY,
		firstName varchar(100),
		lastName varchar(100),
		username varchar(100),
		email varchar(500),
		password varchar(500)
	);");
	
	mysqli_query($con,"
		INSERT INTO users(
			username, email, password, firstName, lastName
		)
		VALUES 
		('luke', 'lsm5fm@virginia.edu', '12345', 'Luke', 'Masters'),
		('jon', 'thewhitewolf@thewall.gov', 'ygritte<3', 'Jon', 'Snow');
	");

	mysqli_query($con,"CREATE TABLE userAccounts(
		userAccountId SERIAL PRIMARY KEY,
		userId integer,
		website varchar(500),
		username varchar(500),
		email varchar(500),
		password varchar(500)
	);");

	mysqli_query($con,
		"INSERT INTO userAccounts(
			userId, website, username, email, password
		)
		VALUES 
		(1, 'http://www.crunchyroll.com/', 'lsm5fm', 'lsm5fm@virginia.edu', '12345'),
		(1, 'https://www.funimation.com/', 'boxfullofmoo', 'boxfullofmoo@gmail.com', '12345'),
		(1, 'https://www.spotify.com/us/', 'lsm5fm', 'lsm5fm@gmail.com', '12345');
	");

	mysqli_query($con,"CREATE TABLE backlogUserItems(
		backlogUserItemId SERIAL PRIMARY KEY,
		userId integer,
		objectId integer 
	);");

	mysqli_query($con,"CREATE TABLE backlogItems(
		backlogItemId SERIAL PRIMARY KEY,
		name varchar(500),
		medium varchar(500)
	);");

	mysqli_query($con,
		"INSERT INTO backlogItems(name, medium)
		VALUES
		('Breakfast For Champions', 'book'),
		('Yojimbo', 'movie'),
		('Sanjuro', 'movie'),
		('Suspiria', 'movie')");
	
	mysqli_close($con);
?>