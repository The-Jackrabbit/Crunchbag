<?php session_start();?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
		<link rel="icon" href="./Assets/favicon.ico" />
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">		
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
			.inner-transbox {	
				padding: 10px;
				background-color: rgba(120,30,0,.3);
				width: min-content;
				white-space: nowrap;
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
			.step-description {
				width: 60%;
			}
			.step {
				background-color: white;
				padding: 12pt;
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
			<div class="step">
				<p class="step-description">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
   </body>
</html>
