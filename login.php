<html lang="en">
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
		<link rel="icon" href="./Assets/favicon.ico" />
		<style>
			div.login-form {
				background-color: white;
				width: min-content;
				box-shadow: 3pt 3pt 10pt gray;
				padding: 12pt;
				text-align: center;
				position: absolute;
				top: 50%;
				left: 50%;
				transform: translateY(-50%) translateX(-50%);
			}
			div.login-form input[type=submit] {
				width: 100%;
				background-color: #7A1906;
				color: white;
			}
			div.login-form input {
				margin: 4pt 0pt;
			}
			a.signup-redirect {
				font-size: 7pt;
				
			}
			.login-banner {
				background-image: url("/Assets/T_17.svg");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				height:200pt;
				position: absolute;
				left: 0;
				right: 0;
				text-align: center;
				color: white;
				z-index: -1;
				margin-bottom: 400pt;			
			}
			div.login-banner-body {
				position: relative;
				top: 50%;
				transform: translateY(-50%);
				margin: 0 auto;
			}
			.banner-text-title {
				font-size: 70pt;
				font-weight: lighter;
			}
			.banner-text {
				margin-top: 10pt;
				font-size: 48pt;
			}
			.footer {
				position: absolute;
				top: 100%;
				left: 0;
				right: 0;
			}
			.banner-padding {
				padding-bottom: 200pt;
			}
			.entry input {
				background-color: transparent !important;
				border: none;
				border-radius: 0pt;
				border-bottom: 1pt solid #33464F;
				width: 100%;
				font-size: 16pt;
				color: white !important;
			}
			.entry input::-webkit-input-placeholder {
				color: #ccc !important;
			}
			table.signup-form {
				width: 100%;
			}
			table.signup-form tr td:first-child {
				width: 120pt;
				font-size: 14pt;
				color: #33464F;
			}
			table.signup-form tr  td {
				vertical-align: middle;
			}
			table.signup-form tr {
				height: 60pt;
				vertical-align: middle;
			}
			#myFooter {
				background-color: #49606C !important;
			}
			input[type=submit] {
				width: 200pt;
				height: 50pt;
				background-color: #7A1906;
				border:none;
				color: white;
				font-size: 18pt;
				margin:0 auto;
			}
			table.signup-form td.signup {
				margin:0 auto;
				text-align: center;
				
			}
			body {
				background-color: #49606C;
			}
		</style>
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
		<div class="login-banner">	
			<div class="login-banner-body">
			  <div class="banner-text">Login</div>
			</div>
		</div>
		<div class="banner-padding"></div>
		<div class="max-inline">
			<?php
				if ($_GET["redirect"]) {
					echo '<h1>you goofed, try again bozo</h1>';
				}
			?>
			<form action="./Helpers/submitSignup.php" method="POST" id='signup-form'>
			<table class="signup-form">
				<tr class="entry">
					<td>Username:</td>
					<td>
						<input type="text" name="first_name" placeholder="Username">
					</td>
				</tr>
				<tr class="entry">
					<td>Password:</td>
					<td>
						<input type="text" name="last_name" placeholder="Password">
					</td>
				</tr>
				<tr >
					<td class="signup" colspan="2">
						<input type="submit" value="Login">
					</td>
				</tr>
			</table>
		</form>
			
		</div>
		<div class="footer">
			<?php include("./Components/footer/footer.php");?>
		</div>
   </body>
</html>
