<?php session_start();?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
		<link rel="icon" href="./Assets/favicon.ico" />
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
		<script src="./Assets/jquery.min.js"></script>
		<style>
			.signup {
				background-color: #F0AF45;
				color: white;
				
				margin: 0 auto;
			}
			
		</style>
	</head>
   <body>
      <?php
         $pkg = Array(
               "title" => "BackLog",
					"title_url" => "dashboard.php",
					"links" => Array(
						"about.php" => "About",
						"faq.php" => "FAQ",
						"purchase.php" => "Purchase"
					),
					"activeLink" => "about.php",
               "actionLinks" => Array(
                     "login.php" => "Login",
                     "signup.php" => "Signup"
					)
            );
         include("./Components/header/header.php");
      ?>
		<div class="max-inline">
			<hr>
			<form "./signup.php">
				<input class="signup" type="submit" value="Sign Up">
			</form>
		</div>
   </body>
</html>
