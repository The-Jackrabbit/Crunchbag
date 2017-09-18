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
				width: 180pt;
				padding: 12pt;
				display: inline-block;
				margin: 12pt;
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
			<div class="cards">

				<div class="home-info-card">
					<div class="info-icon">
						<img src="./Assets/leaf-pentagon.png">
					</div>
					<div class="info-text">
						<h1>Lorem</h1>
						<p>Lorem ipsum dolem nonagon infinity opens the door Lorem ipsum dolem nonagon infinity opens the door Lorem ipsum dolem nonagon infinity opens the door</p>
					</div>
				</div>
				<div class="home-info-card">
					<div class="info-icon">
						<img src="./Assets/truck-pentagon.png">
					</div>
					<div class="info-text">
						<h1>Lorem</h1>
						<p>Lorem ipsum dolem nonagon infinity opens the door Lorem ipsum dolem nonagon infinity opens the door Lorem ipsum dolem nonagon infinity opens the door</p>
					</div>
				</div>
				<div class="home-info-card">
					<div class="info-icon">
						<img src="./Assets/box-pentagon.png">
					</div>
					<div class="info-text">
						<h1>Lorem</h1>
						<p>Lorem ipsum dolem nonagon infinity opens the door Lorem ipsum dolem nonagon infinity opens the door Lorem ipsum dolem nonagon infinity opens the door</p>
					</div>
				</div>

			</div>
			

		</div>
		
		<?php include("./Components/footer/footer.php");?>
		
   </body>
</html>
