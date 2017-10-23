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
		<style>
			.confirmHeader {
				font-size: 27px;
				margin: 20px;
			}
			.text-container {
				text-align: center;
				width: 50%;
				height: 100%;
				padding-right: 12pt;
			}
			.text {
				height: 25%;
			}
			.text ul {
				padding: 10pt 0pt;
				padding-left: 20pt;
				list-style: disc;
			}
			.text ul li {
				padding: 4pt;
			}
			.confirm-section {
				margin-bottom: 36pt;
				background-color: white;
				box-shadow: 4pt 4pt 4pt grey;
				padding: 12pt;
			}
			ul.leaf {
				list-style-image: url('Assets/img/leafbullet.png');
				padding-left: 5pt;
				line-height: 20px;
			}
		</style>
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
			<div class="confirmHeader">Thanks for your purchase!</div>
			<div class= "confirm-section">
			<div class="text-container">
			<table style="text-align: center;">
				<tr>
				<td style="text-align: center;"><img src="Assets/img/Kermit.jpg" ALT="image"></td>
							<td class="text">
								<p style="line-height: 20pt;"> Thank you for joining the mission toward more enjoyable leafpile fun all year round! We hope you take the time to explore the options presented to you as a member of CrunchBag and indulge in a life changing order, you won't be disapointed! </p>
								<p style="line-height: 20pt;"> As a member you may enjoy: </p>
								<ul class="leaf">
									<li>Exclusive information regarding promotions and discounts</li>
									<li>Updated release dates for new scents and products. </li>
									<li>The opportunity to give your opinion on potential new updates to our system. </li>
								</ul>
							</td>
				</tr>
			<table>
						</div>
						</div>
			
		</div>
		
		<div class="footer">
			<?php include("./Components/footer/footer.php");?>
		</div>
   </body>
</html>
