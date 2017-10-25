<?php session_start();?>
<?php include("./Helpers/sessionVariables.php"); ?>
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
				padding: 12pt;
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
				height: min-content;
			}
			ul.leaf {
				list-style-image: url('Assets/img/leafbullet.png');
				padding-left: 5pt;
				line-height: 20px;
			}
			.child-image {
				width: 100%;
			}
		</style>
		<script src="Assets/jquery.min.js"></script>
		
	</head>
   <body>
		<?php
         $pkg = $header_pkg;
         include("./Components/header/header.php");
		?>
		<div class="max-inline">
			<div class="confirmHeader">Welcome to CrunchBag!</div>
			<div class= "confirm-section">
			<td class="text-container">
				<div style="text-align: center;"><img src="Assets/img/fall.png" ALT="image" class="child-image"></div>
							<div class="text">
								<p style="line-height: 20pt;"> Thank you for joining the mission toward more enjoyable leafpile fun all year round! We hope you take the time to explore the options presented to you as a member of CrunchBag and indulge in a life changing order, you won't be disapointed! </p>
								<p style="line-height: 20pt;"> As a member you may enjoy: </p>
								<ul class="leaf">
									<li>Exclusive information regarding promotions and discounts</li>
									<li>Updated release dates for new scents and products. </li>
									<li>The opportunity to give your opinion on potential new updates to our system. </li>
								</ul>
							</div>
						</td>
						</div>
			
		</div>
		
		<div class="footer">
			<?php include("./Components/footer/footer.php");?>
		</div>
   </body>
</html>
