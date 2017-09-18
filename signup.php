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
			div.login-form input[type=submit] {
				width: 100%;
				background-color: #7A1906;
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
			.login-banner {
				background-image: url("/Assets/T_22.svg");
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
		
		<div class="max-inline">
			<div class="login-form">
				
				<form action="./Helpers/submitSignup.php" method="POST" id='signup-form'>
					<table>
						<tr>
							<td>
								First Name
							</td>
							<td>
								<input type="text" placeholder="First Name" name="firstName">
							</td>
						</tr>
						<tr>
						<td>
							Last Name
						</td>
						<td>
							<input type="text" placeholder="Last Name" name="lastName">
						</td>
						</tr>
						<tr>
							<td>
								Email
							</td>
							<td>
							<input type="text" placeholder="Email" name="email" id="email">
							</td>
						</tr>
						<tr>
						<td>
							Username
						</td>
						<td>
						<input type="text" placeholder="Username" name="username" id="username">
						</td>
					</tr>
					<tr>
					<td>
					Password
					</td>
					<td>
					<input required type="password" placeholder="Password" name="password" id="password">
					</td>
				</tr>
				<tr>
							<td>
							Confirm Password
							</td>
							<td>
							<input required type="password" placeholder="Confirm Password" id="password-confirmation">
							</td>
						</tr>
					</table>
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
		<div class="footer">
			<?php include("./Components/footer/footer.php");?>
		</div>
   </body>
</html>
