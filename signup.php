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
			}
			div.login-form input[type=submit] {
				width: 100%;
				background-color: dodgerblue;
				color: white;
			}
			div.login-form input {
				margin: 4pt 0pt;
			}
			div.login-form input[type=text], div.login-form input[type=password] {
				margin: 4pt 0pt;
				height: 30pt;
				width: 200pt;
			}
			a.signup-redirect {
				font-size: 7pt;
				
			}
			rect, path {
				fill: white;
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
					"activeLink" => "",
               "actionLinks" => Array(
                     "login.php" => "Login",
                     "signup.php" => "Signup"
					)
            );
         include("./Components/header/header.php");
      ?>
		<div class="max-inline">
			<div class="login-form">
				
				<form action="./Helpers/submitSignup.php" method="POST" id='signup-form'>
					<input type="text" placeholder="First Name" name="firstName">
					<input type="text" placeholder="Last Name" name="lastName">
					<input type="text" placeholder="Email" name="email" id="email">
					<input type="text" placeholder="Username" name="username" id="username">
					<input required type="password" placeholder="Password" name="password" id="password">
					<input required type="password" placeholder="Confirm Password" id="password-confirmation">
					<input type="submit" value="Sign Up">
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
   </body>
</html>
