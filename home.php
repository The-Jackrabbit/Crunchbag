<?php session_start();?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
		<link rel="icon" href="./Assets/favicon.ico" />
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<script src="./Assets/jquery.min.js"></script>
		<style>
			p, a, h1, h2, h3, span, div {
<<<<<<< HEAD
				
=======
				font-family: 'Lora', serif;
>>>>>>> origin/master
			}
			.banner {
				background-image: url("./Assets/T_17.svg");
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
				width: 100%;
				vertical-align: middle;
			}
			
			.step-description {
				vertical-align: middle;
			}
			.step-description p {
				padding: 12pt;
				background-color: white;
				border: double;
				border-width: 20px;
			}
			.step-graphic {
				width: 200pt;
			}
			.step-graphic img {
				width: 200pt;
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
			.normal-text{
				line-height: 50px;
				color:rgba(120,40,0,0.8);
				text-align: center;
				font-family: 'Raleway', sans-serif;
				font-size: 20pt;
			
			}

		</style>
	</head>
   <body style="background-color: rgba(120,60,0,.1);">
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
		<div class="step-container">
			<table class="step-table">
				<tr>
					<td class="step-description"><p class="normal-text">
						High quality leaves are collected from local neighboorhood families at no charge.
						</p></td>
					<td class="step-graphic">
						<img src="./Assets/step1.png">
					</td>
				</tr>
			</table>
		</div>
		<div class="step-container">
			<table class="step-table">
				<tr>
					<td class="step-graphic">
						<img src="./Assets/step2.png">
					</td>
					<td class="step-description">
						<p class="normal-text">
						Leaves are professionally dried and prepared to prevent breakdown. 
						</p>
					</td>
					
				</tr>
			</table>
		</div>
		<div class="step-container">
			<table class="step-table">
				<tr>
				<td class="step-description">
						<p class="normal-text">
						 A CrunchBag leaf bag is stuffed with dry, crisp leaves to be sent to your door step at anytime of year.
						</p>
					</td>
					<td class="step-graphic">
						<img src="./Assets/step3.png">
					</td>
					
					
				</tr>
			</table>
		</div>
		

		</div>
   </body>
</html>
