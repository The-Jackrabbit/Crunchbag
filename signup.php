<?php session_start();?>
<?php include("./Helpers/sessionVariables.php"); ?>
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
			.taken-dialogue-container {
				width: 100%;
				z-index: 10000;
			}
			.taken-dialogue-body {
				margin: 6pt 0pt;
				padding: 6pt;
				border: 1pt solid lightgray;
			}
			.taken-dialogue-body span {
				color: red;
			}
		</style>
	</head>
   <body>
		<?php
         $pkg = $header_pkg;
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
							<input required type="text" id="first_name" name="first_name" placeholder="First Name" value=<?php echo "'$_GET[first_name]'";?>>
							<?php
								$text = "First Names cannot include numbers or symbols";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>Last Name:</td>
						<td>
							<input required type="text" id="last_name" name="last_name" placeholder="Last Name" value=<?php echo "'$_GET[last_name]'";?>>
							<?php
								$text = "Last Names cannot include numbers or symbols";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>Username:</td>
						<td>
							<input required id="username" type="text" name="username" placeholder="Username" value=<?php echo "'$_GET[username]'";?>>
							
							<?php
								$text = "Usernames must be 5-20 letters/numbers long, and cannot start with . or _ and cannot include __, _., ._, or ..";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
							<?php
								if ($_GET["username_result"] == 1) {
									echo "<div class='taken-dialogue-container'>
											<div class='taken-dialogue-body'>
												<p>:( somebody is already using <span>$_GET[username]</span> as their username</p>
											</div> 
										</div>
										";
								}
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>Email:</td>
						<td>
							<input required id="email" type="text" name="email" placeholder="Email" value=<?php echo "'$_GET[email]'";?>>
							
							<?php
								$text = "Email must match the form something@somewhere.blah";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
							<?php
								if ($_GET["email_result"] == 1) {
									echo "<div class='taken-dialogue-container'>
											<div class='taken-dialogue-body'>
												<p>:( somebody is already using <span>$_GET[email]</span> as their email</p>
											</div> 
										</div>
										";
								}
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
							<div id="password-mismatch" class='taken-dialogue-container' style="display: none">
								<div class='taken-dialogue-body'>
									<p>:( your passwords don't match</p>
								</div> 
							</div>
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
							<input required id="address" type="text" name="address" placeholder="1918 Pennsylvania Avenue" value=<?php echo "'$_GET[address]'";?>>
							<?php
								$text = "Addresses can only have letters, numbers, and standard punctuation";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>City:</td>
						<td>
							<input required id="city" type="text" name="city" placeholder="Redmond" value=<?php echo "'$_GET[city]'";?>>
							<?php
								$text = "Cities can only contain letters and certain punctuation (-, spaces,', etc)";
								include("./Components/errorDialogue/errorDialogue.php");
							?>
						</td>
					</tr>
					<tr class="entry">
						<td>ZIP Code:</td>
						<td>
							<input required id="zip" type="text" name="zip" placeholder="12134" value=<?php echo "'$_GET[zip]'";?>>
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

								<option selected disabled value="">State</option>
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
				var user_pattern = /^(?=.{5,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+/;//
				
				if (input_id === "first_name" || input_id === "last_name") {
					var num_test = !num_pattern.test($(this).val());
					var sym_test = !sym_pattern.test($(this).val());
					$(this).toggleErrorMessage(!(num_test && sym_test));
					
				}
			});
			$('form input#email').change(function() {
				var email_pattern = /[a-zA-Z0-9]+[@][a-zA-Z0-9]+[.][a-zA-Z0-9]+/;
				var email_test = email_pattern.test($(this).val());
				$(this).toggleErrorMessage(!(email_test));	
			});
			$('form input#zip').change(function() {
				var zip_pattern = /[^0-9]/;
				var zip_strict_pattern = /^\d{5}(?:[-\s]\d{4})?$/;
				var zip_test = zip_pattern.test($(this).val());
				var zip_test_strict = !(zip_strict_pattern.test($(this).val()));
				$(this).toggleErrorMessage(zip_test_strict);
			});
			$('form input#address').change(function() {
				var address_pattern = /^[a-zA-Z0-9\s,.'-]*$/;
				var address_test = address_pattern.test($(this).val());
				$(this).toggleErrorMessage(!address_test);
			});
			$('form input#username').change(function() {
				var user_pattern = /^(?=.{5,20}$)(?![_.])(?!.*[_.]{2})[a-zA-Z0-9._]+/;//
				
				var user_test = user_pattern.test($(this).val());
				$(this).toggleErrorMessage(!user_test);
			});

			$("#signup-form").submit(function() {
				// MATCHING PASSWORDS
				var password = $('#password').val();
				var confirmedPassword = $('#password-confirmation').val();
				if (password !== confirmedPassword){
					$('#password-mismatch').slideToggle();
					
					return false;
				}

			});
			$('form input#city').change(function() {
				var city_pattern = /^([a-zA-Z\u0080-\u024F]+(?:. |-| |'))*[a-zA-Z\u0080-\u024F]*$/;
				var city_test = city_pattern.test($(this).val());
				$(this).toggleErrorMessage(!city_test);
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
