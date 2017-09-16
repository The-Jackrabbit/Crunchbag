<?php session_start();?>
<html lang="en">
   <head>
	   
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
      <link rel="stylesheet" href="./Assets/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<script src="./Assets/jquery.min.js">
		</script>
		<link rel="icon" href="./Assets/favicon.ico" />
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
					"activeLink" => "faq.php",
               "actionLinks" => Array(
                     "login.php" => "Login",
                     "signup.php" => "Signup"
					)
            );
         include("./Components/header/header.php");
      ?>
		<div class="max-inline">
			<div class="faqHeader">Frequently Asked Questions</div>
			</div>
			<div class="container">
				<!--<br /> -->
				<div class="container"> 
				<div class="toggle">
					<div class="toggle-title ">
						<h3>
						<i></i>
						<span class="title-name">Where are these luxurious leaves from?</span>
						</h3>
					</div>
					<div class="toggle-inner">
						<p>Answer</p>
					</div>
					</div><!-- END OF TOGGLE -->
					<div class="toggle">
						<div class="toggle-title ">
							<h3>
							<i></i>
							<span class="title-name">Why do I need a bag of leaves?</span>
							</h3>
						</div>
						
						<div class="toggle-inner">
							<p>If you have to ask you don't deserve them.</p>
						</div>
						</div><!-- END OF TOGGLE -->
						
						<div class="toggle">
							<div class="toggle-title  ">
								<h3>
								<i></i>
								<span class="title-name"> Will more scents be added to the collection?</span>
								</h3>
							</div>
							
							<div class="toggle-inner">
								<p>Answer</p>
							</div>
							
							</div><!-- END OF TOGGLE -->
							
				  
				  
						<div class="toggle">
							<div class="toggle-title  ">
								<h3>
								<i></i>
								<span class="title-name"> Do you accept donations of leaves?</span>
								</h3>
							</div>
							
							<div class="toggle-inner">
								<p>Answer</p>
							</div>
							
							</div><!-- END OF TOGGLE -->
							
				  
				  
						<div class="toggle">
							<div class="toggle-title ">
								<h3>
								<i></i>
								<span class="title-name">  How are Crunchbag leaves so crisp?</span>
								</h3>
							</div>
							
							<div class="toggle-inner">
								<p>Answer</p>
							</div>
							
							</div><!-- END OF TOGGLE -->
						<div class="toggle">
							<div class="toggle-title ">
								<h3>
								<i></i>
								<span class="title-name">Does Crunchbag ship internatioanlly?</span>
								</h3>
							</div>
							
							<div class="toggle-inner">
								<p>Answer.</p>
							</div>
							
							</div><!-- END OF TOGGLE -->
						<div class="toggle">
							<div class="toggle-title ">
								<h3>
								<i></i>
								<span class="title-name">Are Crunchbags available in stores??</span>
								</h3>
							</div>
							
							<div class="toggle-inner">
								<p>Answer</p>
							</div>
							
							</div><!-- END OF TOGGLE -->
				  
				  
						<!--</div> -->
					<script src="./Assets/faq.js">
		</script>
			<style>
				.faqHeader {
					font-size: 27px;
					margin: 20px;
				}
			</style>	
		</div>
   </body>
</html>
