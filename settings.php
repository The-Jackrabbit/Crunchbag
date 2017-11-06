<?php session_start();?>
<?php 
	include("./Helpers/sessionVariables.php"); 
	include("./Helpers/getUserInfo.php");
?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="Assets/reset.css" />
      <link rel="stylesheet" href="Assets/styles.css" />
      <link rel="stylesheet" href="Assets/purchase.css"/>
		<script src="Assets/jquery.min.js"></script>
		<link rel="icon" href="Assets/favicon.ico" />
		<style>
			.card {
				margin-bottom: 12pt;
			}
			body {
				background-color: #e0d2cc;
				color: #843F13;
			}
			.pw-change input {
				width: 100%;
				margin: 6pt 0pt;
			}
			.entry table {
				width: 100%;
			}
			.entry input, .entry select{
				background-color: transparent;
				width: 100%;
				border: none;
				border-radius: 0pt;
				border-bottom: 1pt solid #843F13;
				width: 100%;
				font-size: 16pt;
				color: black;
			}
			.entry input::-webkit-input-placeholder {
				color: #DF7A00;
			}
			input[type=submit] {
				width: 100%;
				height: 50pt;
				background-color: #7A1906;
				border:none;
				color: white;
				font-size: 18pt;
				margin:0 auto;
			}
			.entry td:first-child {
				width: 160pt;
				font-size: 14pt;
				color: #843F13;
			}
			.entry tr {
				height: 60pt;
				vertical-align: middle;
			}
			.changeReport {
				text-align: center;
			}
			.changeReport td {
				padding: 12pt 0;
				font-size: 16pt !important;
				color: white !important;
				vertical-align: middle;
			}
			.pass {
				background-color: #53ED67;
			}
			.fail {
				background-color:  #FFB2AD;
			}
		</style>
	</head>
   <body>
      <?php
         $pkg = $header_pkg;
         include("./Components/header/header.php");
      ?>
	<div class="max-inline"> 
	<div class="user-change card entry">
		<h2>Change Your Personal Info</h2>
		<hr>
		<form action="./Helpers/updateProfile.php" method="POST" id="update-personal-info">
			<input type="hidden" name="context" value="personal">
			<table>
				<?php
					if (isset($_GET["usernameUpdate"])) {
						if ($_GET["usernameUpdate"] == 0) {
							echo "<tr class='changeReport fail'>
										<td colspan='2'>
											: ( Username Already Taken
										</td>
									</tr>";
						}
					}
					if (isset($_GET["emailUpdate"])) {
						if ($_GET["emailUpdate"] == 0) {
							echo "<tr class='changeReport fail'>
										<td colspan='2'>
											: ( Email Already Taken
										</td>
									</tr>";
						}
					}
					if (isset($_GET["personalUpdate"])) {
						if ($_GET["personalUpdate"] == 1) {
							echo "<tr class='changeReport pass'>
										<td colspan='2'>
											: ) Info Updated
										</td>
									</tr>";
						} else {
							echo "<tr class='changeReport fail'>
										<td colspan='2'>
											: ( Oh no! Something went wonky
										</td>
									</tr>";
						}
					}
				?>
				<tr>
					<td>First Name: </td>
					<td>
						<input id="first_name" type="text" name="firstName" placeholder="First Name" value="<?php echo $info["firstName"];?>" >
						<?php
							$text = "First names cannot include numbers or symbols";
							include("./Components/errorDialogue/errorDialogue.php");
						?>
					</td>
				</tr>
				<tr>
					<td>Last Name: </td>
					<td>
						<input id="last_name" type="text" name="lastName" placeholder="Last Name" value="<?php echo $info["lastName"];?>">
						<?php
							$text = "Last names cannot include numbers or symbols";
							include("./Components/errorDialogue/errorDialogue.php");
						?>
					</td>
				</tr>
				<tr>
					<td>Username: </td>
					<td>
						<input id="username" type="text" name="username" placeholder="Username" value="<?php echo $info["username"];?>">
						<?php
							$text = "Usernames must be 5-20 letters/numbers long, and cannot start with . or _ and cannot include __, _., ._, or ..";
							include("./Components/errorDialogue/errorDialogue.php");
						
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
				<tr>
					<td>Email: </td>
					<td>
						<input id="email" type="text" name="email" placeholder="Email" value="<?php echo $info["email"];?>">
						<?php
							$text = "Email must match the form something@somewhere.blah";
							include("./Components/errorDialogue/errorDialogue.php");
						
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
				<tr>
					<td colspan="2">
						<input type="submit" value="Update Personal Info">
					</td>
				</tr>
			</table>
		</form>
	</div>
	
	<div class="address-change card entry">
		<h2>Change Your Address</h2>
		<hr>
		<form action="./Helpers/updateProfile.php" method="POST" id="update-address">
			<input type="hidden" name="context" value="address">
			<table>
				<?php
					if (isset($_GET["addressUpdate"])) {
						if ($_GET["addressUpdate"] == 1) {
							echo "<tr class='changeReport pass'>
										<td colspan='2'>
											: ) Address Updated
										</td>
									</tr>";
						} else {
							
						}
					}
				?>
				<tr>
					<td>Address: </td>
					<td>
						<input id="address" type="text" name="address" placeholder="Address" value="<?php echo $info["address"];?>">
						<?php
							$text = "Addresses can only have letters, numbers, and standard punctuation";
							include("./Components/errorDialogue/errorDialogue.php");
						?>
					</td>
				</tr>
				<tr>
					<td>City: </td>
					<td>
						<input id="city" type="text" name="city" placeholder="City" value="<?php echo $info["city"];?>">
						<?php
							$text = "Cities can only contain letters and certain punctuation (-, spaces,', etc)";
							include("./Components/errorDialogue/errorDialogue.php");
						?>
					</td>
				</tr>
				<tr>
					<td>ZIP Code: </td>
					<td>
						<input id="zip" type="text" name="zipCode" placeholder="ZIP Code" value="<?php echo $info["zipCode"];?>">
						<?php
							$text = "Zip Codes cannot include numbers or symbols and must be at least 5 digits";
							include("./Components/errorDialogue/errorDialogue.php");
						?>
					</td>
				</tr>
				<tr>
					<td>State: </td>
					<td>
						<select required name="state" id="state">
							<option selected disabled value="">State</option>
							<?php include("./Components/statesDropdown/states.php"); ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Update Address">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div class="pw-change card entry" id="update-password">
		<h2>Change Your Password</h2>
		<hr>
		<form action="./Helpers/updateProfile.php" method="POST" id="password-change">
			<input type="hidden" name="context" value="password">
			<table>
				<?php
					if (isset($_GET["passwordUpdate"])) {
						if ($_GET["passwordUpdate"] == 1) {
							echo "<tr class='changeReport pass'>
										<td colspan='2'>
											: ) Password Changed
										</td>
									</tr>";
						} else {
							echo "<tr class='changeReport fail'>
										<td colspan='2'>
											: ( Your Old Password Didn't Match
										</td>
									</tr>";
						}
					}
				?>
				<tr>
					<td>Old Password: </td>
					<td><input type="password" name="oldPassword" placeholder="Old Password"></td>
				</tr>
				<tr>
					<td>New Password: </td>
					<td><input id="password" type="password" name="newPassword" placeholder="New Password"></td>
				</tr>
				<tr>
					<td>Confirm New Password: </td>
					<td>
						<input id="password-confirmation"  type="password" name="newPasswordConfirm" placeholder="Confirm New Password">
						<div id="password-mismatch" class='taken-dialogue-container' style="display: none">
							<div class='taken-dialogue-body'>
								<p>:( your new passwords don't match each other</p>
							</div> 
						</div>
					</td>
					
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="Change Password">
					</td>
				</tr>
			</table>
		</form>
	</div>	
	</div>
	<?php include("./Helpers/inputValidation.html");?>
	<script>
		// SET USER's STATE TO BE SELECTED
		$(document).ready(function() {
			var state = '<?php echo $info["state"]; ?>';
			$('#state').find('option').each(function() {
				if ($(this).val() == state) {
					$('#state').val(state);
				}
			});
		});
	</script>
	<?php include("./Components/footer/footer.php");?>
   </body>
</html>
