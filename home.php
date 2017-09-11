<?php session_start();?>
<html>
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<script src="./Assets/jquery.min.js"></script>
		<style>
			.banner {
				background-image: url("./Assets/banner-bg.png");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				height:400pt;
				position: absolute;
				left: 0;
				right: 0;
				text-align: center;
				font-weight: lighter;
				color: white;
				z-index: -1;
			}
			div.banner-body {
				position: relative;
				top: 50%;
				transform: translateY(-50%);
			}
			.banner-text-title {
				font-size: 70pt;
			}
			.banner-text {
				margin-top: 10pt;
				font-size: 28pt;

			}
			span.light-italic {
				font-style: italic;
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
				<p class="banner-text-title">Crunchy leaves</p>
				<p class="banner-text">any<span class="light-italic">time</span>, any<span class="light-italic">where</span></p>
			</div>
		</div>
		<div class="max-inline">
			
		</div>
   </body>
</html>
