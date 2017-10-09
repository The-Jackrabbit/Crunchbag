<?php 
	$_GET["first_name"] = isset($_GET["first_name"]) ? $_GET["first_name"] : '';
	$_GET["last_name"] = isset($_GET["last_name"]) ? $_GET["last_name"] : '';
	$_GET["email"] = isset($_GET["email"]) ? $_GET["email"] : '';
	$_GET["email_result"] = isset($_GET["email_result"]) ? $_GET["email_result"] : '';
	$_GET["username"] = isset($_GET["username"]) ? $_GET["username"] : '';
	$_GET["username_result"] = isset($_GET["username_result"]) ? $_GET["username_result"] : '';
	$_GET["address"] = isset($_GET["address"]) ? $_GET["address"] : '';
	$_GET["city"] = isset($_GET["city"]) ? $_GET["city"] : '';
	$_GET["zip"] = isset($_GET["zip"]) ? $_GET["zip"] : '';

?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="Assets/reset.css" />
      <link rel="stylesheet" href="Assets/styles.css" />
		<link rel="icon" href="Assets/favicon.ico" />
		<script src="Assets/jquery.min.js"></script>
		
	</head>
   <body>
		<?php
         $pkg = Array(
               "title" => "CrunchBag",
					"title_url" => "home.php",
					"links" => Array(
						"about.php" => "About",
						"faq.php" => "FAQ",
						"purchase.php" => "Purchase"
					),
					"activeLink" => "",
               "actionLinks" => Array(
                     "login.php" => "Login",
                     "signup.php" => "Signup"
					)
            );
         include("./Components/header/header.php");
		?>
		<div class="max-inline">
			
		</div>
		
		<div class="footer">
			<?php include("./Components/footer/footer.php");?>
		</div>
   </body>
</html>
