<?php
	session_start();

	$_SESSION["cart"][$_POST["productId"]] += 1;
	header("Location: /$_POST[url]");
?>