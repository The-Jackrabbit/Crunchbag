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
						<p>We collect leaves at no charge from communities all over the United States! If you have excess leaves or are looking for an alternative to standard lawn material removal services check out our curb to Crunchbag service.</p>
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
								<p>At the moment we are working to perfect a few tantalizing scents bouquets look out for these new fragrances starting Spring 2018! Until then we hope you enjoy our current selections including cinnamon, nutmeg and pumpkin spice.</p>
							</div>
							
							</div><!-- END OF TOGGLE -->
							
				  
				  
						<div class="toggle">
							<div class="toggle-title  ">
								<h3>
								<i></i>
								<span class="title-name"> Do you accept donations of wet or soiled leaves?</span>
								</h3>
							</div>
							
							<div class="toggle-inner">
								<p>Yes! In addition to our curb to Crunchbag program we utilize partially spoiled leaves as fertilizer for a few of our trees on site. Keep in mind while we do collect these leaves we do so at a reduced rate.</p>
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
								<p>Our crisp joyous leaves come about as a result of a detailed process including the use of durable collection bags, a state of the art dry room, and impeccably packaged leaves using patented technology so they arrive at your door in perfect condition ready to be enjoyed.</p>
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
								<p>Unfortunately at the moment due to the fragility of each leaf and the increased potential for damage with international shipping we do not currently ship anywhere outside of North America.</p>
							</div>
							
							</div><!-- END OF TOGGLE -->
						<div class="toggle">
							<div class="toggle-title ">
								<h3>
								<i></i>
								<span class="title-name">Are Crunchbags available in stores?</span>
								</h3>
							</div>
							
							<div class="toggle-inner">
								<p>Crunchbags are not quite ready to be seen on your favorite store’s shelf but we do hope as our business expands we will be able to work with a few retail locations to provide better access to a fun autumn adventure anytime anywhere. </p>
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
