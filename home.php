<?php session_start();?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
		<link rel="icon" href="./Assets/favicon.ico" />
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<script src="./Assets/jquery.min.js"></script>
		<style>
			p, a, h1, h2, h3, span, div {
				font-family: 'Lora', serif;
			}
			.banner {
				background-image: url("./Assets/banner5.jpeg");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				height:400pt;
				position: absolute;
				left: 0;
				right: 0;
				text-align: center;
				
				color: white;
				z-index: -1;
				margin-bottom: 400pt;
				
			}
			div.banner-body {
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
				font-size: 28pt;

			}
			span.light-italic {
				font-style: italic;
			}
			.banner-padding {
				padding-bottom: 400pt;
			}

			.step-container {
				width: 75%;
				vertical-align: middle;
				background-color: #f2e8e3;
				padding: 15px;
				border-radius: 25px;
				margin: 10px;
			}
			
			.heading-container {
				width: 30%;
				vertical-align: middle;
				background-color: #f2e8e3;
				padding: 20px;
				border-radius: 25px;
				margin-top: 30px;
				margin-left: 30px;
				text-align: center;
			}
			
			.step-description {
				vertical-align: middle;
			}
			.step-description p {
				padding: 12pt;
				background-color: white;
				border: double;
				border-width: 15px;
			}
			.step-graphic {
				width: 150pt;
			}
			.step-graphic img {
				width: 150pt;
			}
			.left-align {
				float: left;
			}
			.right-align {
				float: right;
			}
			table.step-table {
				table-layout: fixed;
			}

			.transbox {
				padding: 30px;
				background-color: rgba(255,255,255,0.5);
				width: min-content;
				white-space: nowrap;
				margin: 0 auto;
				
			}
			.inner-inner-transbox {	
				padding: 20px;
				background-color: rgba(120,60,0,.6);
				width: min-content;
				white-space: nowrap;
				border-style: double;
				
			}	
			.inner-inner-transbox * {
				font-family: 'Lora', serif !important;
			}
			.inner-transbox {	
				padding: 10px;
				background-color: rgba(120,30,0,.3);
				width: min-content;
				white-space: nowrap;
				
			}
			.home-info-card {
				background-color: white;
				box-shadow: 4pt 4pt 4pt grey;
				width: 190pt;
				padding: 12pt;
				display: inline-block;
				margin: 12pt;
				vertical-align: top;
				min-height: 520pt;
			}
			.info-icon {
				width: 100%;
			}
			.info-icon img {
				max-width:100%;
				max-height:100%;
			}
			.cards {
				margin: 0 auto;
				text-align: center;
			}
			li.home-info-card {
				margin: 10px;
			}
			.card-text{
				line-height: 25px; 
				color: #4f4541;
				font-family: 'Roboto', sans-serif;
				text-align: "left";
			}
			
			ul.leaf {
				list-style-image: url('/Assets/leafbullet.png');
				padding-left: 5pt;
			}
			.actions input {
				color: white;
				border: none !important;
				width: 200pt;
				height: 50pt;
				margin: 12pt;
				font-size: 18pt;
				background-color: #7A1906  !important;
			}
			.actions {
				width: min-content;
				white-space: nowrap;
				margin: 0 auto;
			}
			.actions * {
				display: inline-block;
			}
			div.definition {
				background-color: white;
				padding: 24pt 12pt;
				width: 86%;
				margin: 0 auto;
				box-shadow: 4pt 4pt 4pt grey;
			}
			td.enumeration {
				width: 20pt;
			}
			td.definition {
				line-height: 125%;
			}
			div.definition h3 {
				margin: 6pt 0pt;
			}
			table.definition tr {
				height: 50pt;
			}
		
		</style>

	</head>
   <body style="background-color: #e0d2cc;">
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
		<div class="banner">	
			<div class="banner-body">
			  <div class="transbox">
				<div class="inner-transbox">
				  <div class="inner-inner-transbox">
					<p class="banner-text-title">crunchy leaves</p>
					<p class="banner-text">any<span class="light-italic">time</span>. any<span class="light-italic">where.</span></p>
				 </div>
				</div>
			  </div> 
			</div>
		</div>
		<div class="banner-padding"></div>
		<div class="max-inline">
			<div class="definition">
				<h1>Definition: <img src="./Assets/s-logo.png"></h1>
				<h3><span style= "font-style: italic;" >plural</span> CrunchyBois</h3>
				<table class="definition">
					<tr>
						<td class="enumeration">1</td>
						<td class="definition"><span style= "font-style: italic;" >noun:</span> a local Charlottesville, Virginia service that rakes, collects, prepares, and delivers high-quality, crisp leaves around the world to allow everyone to enjoy those autumn feels </td>
					</tr>
					<tr>
						<td class="enumeration">2</td>
						<td class="definition"><span style= "font-style: italic;" >noun:</span> our delivery parcel; a bag full of sweet, dry leaves </td>
					</tr>
					<tr>
						<td class="enumeration">3</td>
						<td class="definition"><span style= "font-style: italic;" >adjective:</span> a way to describe high quality leaves </td>
					</tr>
					<tr>
						<td></td>
						<td class="definition"><span style= "font-style: italic;" >example sentence:</span>  "Wow Tom, those squishy leaves aren't CrunchBag at all. We should just order a CrunchBag of leaves from CrunchBag, where they are guaranteed to be CrunchBag. </td>
					</tr>
				</table>
			</div>
			<div class="cards">

				<div class="home-info-card">
					<div class="info-icon">
						<img src="./Assets/leaf-pentagon.png">
					</div>
					<div class="info-text">
						<h1 style= "font-weight: bold; padding: 20px; color: #4f4541; ">Collection</h1>
						<ul class="leaf">
							<li style="margin: 10px; text-indent: -10px;"><p class="card-text">High quality leaves are raked and collected from local neighboorhood families. </p> </li>
							<li style="margin: 10px; text-indent: -10px;"><p class="card-text">Leaf raking and collection comes to no cost to the family or orgnaization. </p> </li>
							<li style="margin: 10px; text-indent: -10px;"><p class="card-text">Already have your leaves raked and ready to go? We donate 20% of proceeds to local charities for pre-collected leaves.</p> </p> </li>
						</ul>
					</div>
				</div>
				<div class="home-info-card">
					<div class="info-icon">
						<img src="./Assets/truck-pentagon.png">
					</div>
					<div class="info-text">
						<h1 style= "font-weight: bold; padding: 20px; color: #4f4541; ">Preparation</h1>
						<ul class= "leaf">
							<li style="margin: 10px; text-indent: -10px;"><p class="card-text">Is autumn rainy in your area this year? Our leaves are professionally dried and prepared to prevent organic breakdown and ensure optimal frollic readiness. </p> </p></li>
							<li style="margin: 10px; text-indent: -10px;"><p class="card-text">Are leaves not quite enough to get that cozy autumnal feeling? Choose from three festive scents of potpourri to add to your pile of leaves!</p> </li>
						</ul>
				</div>
				</div>
				<div class="home-info-card">
					<div class="info-icon">
						<img src="./Assets/box-pentagon.png">
					</div>
					<div class="info-text">
						<h1 style= "font-weight: bold; padding: 20px; color: #4f4541; ">Autumn</h1>
						<ul class= "leaf">
							<li style="margin: 10px; text-indent: -10px;"><p class="card-text">A <span style= "font-family: 'Lora', serif; font-weight: bold;">CrunchBag</span> leaf bag is stuffed with dry, crisp leaves to be sent to your door step at anytime of year.</p> </li>
							<li style="margin: 10px; text-indent: -10px;"><p class="card-text"> Recieve your <span style= "font-family: 'Lora', serif; font-weight: bold;">CrunchBag</span> bag and enjoy the autumn feels.</p></li>
							<img style= "margin-top:20pt;" src="Assets/leaves.png" alt= leaves>
						</ul>		

					</div>
				</div>

			</div>

			<div class="actions">
				<form action="./about.php">
					<input class="about" type="submit" value="Learn More">
				</form>
				<form action="./purchase.php">
					<input class="purchase" type="submit" value="Get Started">
				</form>
			</div>
			

		</div>
		
		<?php include("./Components/footer/footer.php");?>
		
   </body>
</html>
