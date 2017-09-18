<?php session_start();?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
		<link rel="stylesheet" href="./Assets/styles.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<script src="./Assets/jquery.min.js"></script>
		<link rel="icon" href="./Assets/favicon.ico" />
		<style>
			.faqHeader {
				font-size: 27px;
				margin: 20px;
			}
			.container {
				margin: 0 auto;
				width: 80%;
				min-height: 70vh;
			}
			div.toggle {
				cursor: pointer;
			}
			div.faq-answer {
				display: none;
			}
			.faq-title {
				padding: 12pt 24pt;
			}
			.faq-title h3 {
				font-size: 16pt;
			}
			.faq-answer {
				padding: 0pt 24pt;
				padding-bottom: 12pt;
			}
			div.toggle hr {
				border-top: 1pt solid #ddd;
				border-left: 0pt;
			}
		</style>
		
	</head>
   <body>
      <?php
         $pkg = Array(
               "title" => "CrunchBag",
					"title_url" => "home.php",
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
			
			<div class="container">
				<div class="toggle">
					<hr>
					<div class="faq-title">
						<h3>Where are these luxurious leaves from?</h3>
					</div>
					<div class="faq-answer">
						<p>We collect leaves at no charge from communities all over the United States! If you have excess leaves or are looking for an alternative to standard lawn material removal services check out our curb to Crunchbag service.</p>
					</div>
				</div>
				<div class="toggle">
					<hr>
					<div class="faq-title">
						<h3>Why do I need a bag of leaves?</h3>
					</div>
					<div class="faq-answer">
						<p>If you have to ask you don't deserve them.</p>
					</div>
				</div>
				<div class="toggle">
					<hr>
					<div class="faq-title">
						<h3> Will more scents be added to the collection?</h3>
					</div>
					<div class="faq-answer">
						<p>At the moment we are working to perfect a few tantalizing scents bouquets look out for these new fragrances starting Spring 2018! Until then we hope you enjoy our current selections including cinnamon, nutmeg and pumpkin spice.</p>
					</div>
				</div>
				<div class="toggle">
					<hr>
					<div class="faq-title">
						<h3>Do you accept donations of wet or soiled leaves?</h3>
					</div>
					<div class="faq-answer">
						<p>Yes! In addition to our curb to Crunchbag program we utilize partially spoiled leaves as fertilizer for a few of our trees on site. Keep in mind while we do collect these leaves we do so at a reduced rate.</p>
					</div>
				</div>
				<div class="toggle">
					<hr>
					<div class="faq-title">
						<h3>How are Crunchbag leaves so crisp?</h3>
					</div>
					<div class="faq-answer">
						<p>Our crisp joyous leaves come about as a result of a detailed process including the use of durable collection bags, a state of the art dry room, and impeccably packaged leaves using patented technology so they arrive at your door in perfect condition ready to be enjoyed.</p>
					</div>
				</div>
				<div class="toggle">
					<hr>
					<div class="faq-title">
						<h3>Does Crunchbag ship internatioanlly?</h3>
					</div>
					<div class="faq-answer">
						<p>Unfortunately at the moment due to the fragility of each leaf and the increased potential for damage with international shipping we do not currently ship anywhere outside of North America.</p>
					</div>
				</div>	
				<div class="toggle">
					<hr>
					<div class="faq-title">
						<h3>Are Crunchbags available in stores?</h3>
					</div>
					<div class="faq-answer">
						<p>Crunchbags are not quite ready to be seen on your favorite store’s shelf but we do hope as our business expands we will be able to work with a few retail locations to provide better access to a fun autumn adventure anytime anywhere. </p>
					</div>
				</div>
			</div>
			<script>
				$('div.toggle').click(function() {
					$(this).children('.faq-answer').slideToggle();
				})
			</script>
		</div>
		<?php include("./Components/footer/footer.php");?>
   </body>
</html>
