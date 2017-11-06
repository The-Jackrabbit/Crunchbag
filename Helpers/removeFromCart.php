<?php
	session_start();

	$_SESSION["cart"][$_POST["productId"]] = 0;
	header("Location: /$_POST[url]");
?>