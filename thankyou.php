<?php
	session_start();
	include("./Helpers/sessionVariables.php");
?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="Assets/reset.css" />
      <link rel="stylesheet" href="Assets/styles.css" />
		<link rel="icon" href="Assets/favicon.ico" />
		<script src="Assets/jquery.min.js"></script>
		<style>
			.confirmHeader {
				font-size: 27px;
				margin: 20px;
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
			td.kermit img {
				max-width: 300pt;
			}
			table.confirmation-graphic p {
				line-height: 20pt;
			}
			table.confirmation-graphic td {
				vertical-align: top;
			}
			td.text {
				padding-left: 24pt;
			}
		</style>
		
		
	</head>
   <body>
		<?php
         $pkg = $header_pkg;
         include("./Components/header/header.php");
		?>
		<div class="max-inline">
		
			<div class="confirmHeader">Thanks for your purchase!</div>
				<div class= "confirm-section">
					<table class="confirmation-graphic">
						<tr>
							<td class="kermit">
								<img src="Assets/img/Kermit.jpg" alt="image">
							</td>
							<td class="text" style = "vertical-align: middle">
								<p style="font-weight: bold"> Thank you for your CrunchBag purchase! Get ready for the crunchy fun - your friends will be green with envy (note the Kermit reference)! </p>
								<ul class="leaf">
									<li>We will ship your CrunchBag in less than 5 business days. </li>
									<li>Check your email for a confirmation!</li>
									<li>Contact Us if you have any questions about your order! </li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
		</div>
		
		<div class="footer">
			<?php include("./Components/footer/footer.php");?>
		</div>
   </body>
</html>
