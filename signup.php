<html lang="en">
   <head>
      <link rel="stylesheet" href="Assets/reset.css" />
      <link rel="stylesheet" href="Assets/styles.css" />
		<link rel="icon" href="Assets/favicon.ico" />
		<script src="Assets/jquery.min.js"></script>
		<style>
			div.login-form {
				background-color: white;
				width: min-content; width: -moz-min-content;
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
				background-image: url("Assets/T_22.svg");
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
			.entry input , .entry select{
				background-color: transparent ;
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
				padding: 12pt;
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
							<input required type="text" id="first_name" name="first_name" placeholder="First Name">
							<?php
								$text = "First Names cannot include numbers or symbols";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>Last Name:</td>
						<td>
							<input required type="text" id="last_name" name="last_name" placeholder="Last Name">
							<?php
								$text = "Last Names cannot include numbers or symbols";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>Username:</td>
						<td>
							<input required id="username" type="text" name="username" placeholder="Username">
							<?php

								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>Email:</td>
						<td>
							<input required id="email" type="text" name="email" placeholder="Email">
							<?php
								$text = "Email must match the form something@somewhere.blah";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>Password:</td>
						<td>
							<input required id="password" type="password" name="password" placeholder="Password">
							<?php

								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>Confirm Password:</td>
						<td>
							<input required id="password-confirmation" type="password" name="confirm_password" placeholder="Confirm Password">
							<?php

								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr >
						<td colspan="2">
							<hr>
						</td>
					</tr>
					<tr class="entry">
						<td>Address:</td>
						<td>
							<input required id="address" type="text" name="address" placeholder="1918 Pennsylvania Avenue">
							<?php

								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>City:</td>
						<td>
							<input required id="city" type="text" name="city" placeholder="Redmond">
							<?php

								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>ZIP Code:</td>
						<td>
							<input required id="zip" type="text" name="zip" placeholder="12134">
							<?php
								$text = "Zip Codes cannot include numbers or symbols and must be at least 5 digits";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>State:</td>
						<td>
							<select required name="state" id="state">
								<option selected disabled>State</option>
								<?php include("./Components/statesDropdown/states.php"); ?>
								
							</select>
							<?php

								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr >
						<td class="signup" colspan="2">
							<input id="signup-button" type="submit" value="Sign Up">
							<?php

								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
				</table>
			</form>
			</div>
		</div>
		<script>
			
			<?php
				if($_GET['email']=== '0') {
					echo '$("#email").css("background-color", "rgb(255, 178, 173)").attr("placeholder", "Email already in use");';
				}
				if ($_GET['user']=== '0') {
					echo '$("#username").css("background-color", "rgb(255, 178, 173)").attr("placeholder", "Username taken");';
				}
			?>
			
		</script>
		<!-- input required VALIDATION -->
		<script>
			$.fn.toggleErrorMessage = function(condition) {
				var state = $(this).siblings('#error-dialogue').css("display");
				if (condition) {
					if (state === "none") {
						$(this).siblings('#error-dialogue').slideToggle();
					}
				}
				else {
					if (state !== "none") {
						$(this).siblings('#error-dialogue').slideToggle();
					}
				}
			}
			$('form input').keyup(function() {
				var input_id = $(this).attr("id");
				var num_pattern = /[0-9]/;
				var sym_pattern = /[!@#$%^&*();:.\/]/;
				if (input_id === "first_name" || input_id === "last_name") {
					var num_test = !num_pattern.test($(this).val());
					var sym_test = !sym_pattern.test($(this).val());
					$(this).toggleErrorMessage(!(num_test && sym_test));
					
				}

				if (input_id === "zip") {
					var zip_pattern = /[^0-9]/;
					var zip_test = zip_pattern.test($(this).val());
					$(this).toggleErrorMessage(zip_test);
				}
			});
			$('form input#email').change(function() {
				var email_pattern = /[a-zA-Z0-9]+[@][a-zA-Z0-9]+[.][a-zA-Z0-9]+/;
				var email_test = email_pattern.test($(this).val());
				$(this).toggleErrorMessage(!(email_test));
				
			})
			$(document).ready(function() {
				$('a').css("color", "blue");
			})
			$("#signup-form").submit(function() {
				// MATCHING PASSWORDS
				var password = $('#password').val();
				var confirmedPassword = $('#password-confirmation').val();
				if (password !== confirmedPassword){
					$('#password-confirmation').css('background-color', '#FFB2AD');
					
					return false;
				}

			});
			// CHANGES RED INPUT TO YELLOW WHEN YOU CHANGE IT
			$('input').focus(function() {
				if ($(this).css("background-color") === 'rgb(255, 178, 173)') {
					$(this).css("background-color", "#FFEC9C");
				}
			});
		</script>
		<div class="footer">
			<?php include("./Components/footer/footer.php");?>
		</div>
   </body>
</html>
