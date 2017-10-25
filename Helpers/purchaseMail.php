<?php
	$subject = "Thanks for giving us your money!";
	$body = "Hi, ". $email_username." it looks like you just made the best decision of your life. 
	 We'd encourage you to do it again. Your total came to $".number_format($total, 2).".... wow
	 ... you sure you should be spending that much on leaves?  Like really?  Aight it's your money.";
	 include("/Helpers/mail_protocol.php");

?>
