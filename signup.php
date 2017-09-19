<html lang="en">
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
		<link rel="icon" href="./Assets/favicon.ico" />
		<script src="./Assets/jquery.min.js"></script>
		<style>
			div.login-form {
				background-color: white;
				width: min-content;
				box-shadow: 3pt 3pt 10pt gray;
				padding: 12pt;
				text-align: center;
				margin: 0 auto;
				position: absolute;
				top: 60%;
				left: 50%;
				transform: translateY(-50%) translateX(-50%);
			}
			div.login-form input {
				margin: 4pt 0pt;
			}
			
			a.signup-redirect {
				font-size: 7pt;
				
			}
			rect, path {
				fill: white;
			}
			.login-banner {
				background-image: url("/Assets/T_22.svg");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				height:200pt;
				position: absolute;
				down: 50pt;
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
			body {
				background-color: #FBC06F !important;
			}
			.banner-padding {
				padding-bottom: 200pt;
			}
			.entry input {
				background-color: transparent !important;
				border: none;
				border-radius: 0pt;
				border-bottom: 1pt solid #843F13;
				width: 100%;
				font-size: 16pt;
				color: black !important;
			}
			.entry input::-webkit-input-placeholder {
				color: #DF7A00 !important;
			}
			table.signup-form {
				width: 100%;
			}
			table.signup-form tr td:first-child {
				width: 120pt;
				font-size: 14pt;
				color: #843F13;
			}
			table.signup-form tr  td {
				vertical-align: middle;
			}
			table.signup-form tr {
				height: 60pt;
				vertical-align: middle;
			}
			#myFooter {
				background-color: #EAAF5E  !important;
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
			.signup-card {
				background-color: white;
				box-shadow: 4pt 4pt 4pt grey;
				width: 700pt;
				padding: 12pt;
				display: inline-block;
				margin: 12pt;
				vertical-align: top;
				min-height: 400pt;
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
			  <div class="banner-text">Sign Up</div>
			</div>
		</div>
		<div class="banner-padding"></div>
		<div class="max-inline">
			<div class= "signup-card">
			<form action="./Helpers/submitSignup.php" method="POST" id='signup-form'>
				<table class="signup-form">
					<tr class="entry">
						<td>First Name:</td>
						<td>
							<input type="text" name="first_name" placeholder="First Name">
						</td>
					</tr>
					<tr class="entry">
						<td>Last Name:</td>
						<td>
							<input type="text" name="last_name" placeholder="Last Name">
						</td>
					</tr>
					<tr class="entry">
						<td>Username:</td>
						<td>
							<input type="text" name="username" placeholder="Username">
						</td>
					</tr>
					<tr class="entry">
						<td>Email:</td>
						<td>
							<input type="text" name="email" placeholder="Email">
						</td>
					</tr>
					<tr class="entry">
						<td>Password:</td>
						<td>
							<input type="password" name="password" placeholder="Password">
						</td>
					</tr>
					<tr class="entry">
						<td>Confirm Password:</td>
						<td>
							<input type="password" name="confirm_password" placeholder="Confirm Password">
						</td>
					</tr>
					<tr >
						<td class="signup" colspan="2">
							<input type="submit" value="Sign Up">
						</td>
					</tr>
				</table>
			</form>
			</div>
		</div>
		<script>
			$("#signup-form").submit(function() {
				var password = $('#password').val();
				var confirmedPassword = $('#password-confirmation').val();
				if (password !== confirmedPassword){
					$('#password-confirmation').css('background-color', '#FFB2AD');
					return false;
				}
			});
			$('input').focus(function() {
				if ($(this).css("background-color") === 'rgb(255, 178, 173)') {
					$(this).css("background-color", "#FFEC9C");
				}
			});
			<?php
				if($_GET['email']=== '0') {
					echo '$("#email").css("background-color", "rgb(255, 178, 173)").attr("placeholder", "Email already in use");';
				}
				if ($_GET['user']=== '0') {
					echo '$("#username").css("background-color", "rgb(255, 178, 173)").attr("placeholder", "Username taken");';
				}
			?>
			
		</script>
		<div class="footer">
			<?php include("./Components/footer/footer.php");?>
		</div>
   </body>
</html>
