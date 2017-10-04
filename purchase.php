<?php session_start();?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="Assets/reset.css" />
      <link rel="stylesheet" href="Assets/styles.css" />
      <link rel="stylesheet" href="Assets/purchase.css"/>
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<script src="Assets/jquery.min.js"></script>
		<script src="Assets/purchase.js"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js '></script>
		<link rel="icon" href="Assets/favicon.ico" />
		<style>
			.products-container {
				min-height: 75vh !important;
				margin: 0 auto;
				text-align: center;
				width: 100%;
			}
			.shop-card {
				display: inline-block !important;
			}
			body {
				background-color: #e0d2cc !important;
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
					"activeLink" => "purchase.php",
               "actionLinks" => Array(
                     "login.php" => "Login",
                     "signup.php" => "Signup"
					)
            );
         include("./Components/header/header.php");
      ?>
	<div class="max-inline"> 
		<div class='products-container'>
			<div class='shop-card' data-cat='Amazon'>
				<div class="title">
				Individual Pile
				</div>
				<div class="desc">
				</div>
				<div class="product">
					<img src= "Assets/img/purLeaf.jpg" />
				</div>
				<div class='cta'>
				<div class="price">$50.00</div>
				<button class="button">Add to cart</button>
				</div>
			</div>

			<div class='shop-card' data-cat='Amazon'>
				<div class="title">
				Couple's Pile
				</div>
				<div class="desc">
					
				</div>
				<div class="product">
					<img src= "Assets/img/purLeaf.jpg" />
				</div>
				<div class='cta'>
				<div class="price">$80.00</div>
				<button class="button">Add to cart</button>
				</div>
			</div>

			<div class='shop-card' data-cat='Lenovo'>
				<div class="title">
				Family Pile
				</div>
				<div class="desc">
				</div>
				<div class="product">
					<img src= "Assets/img/purLeaf.jpg" />
				</div>
				<div class='cta'>
				<div class="price">$150.00</div>
				<button class="button">Add to cart</button>
				</div>
			</div>
			
			<div class='shop-card' data-cat='Amazon'>
				<div class="title">
				Cinnamon
				</div>
				<div class="desc">
				Optional Scent
				</div>
				<div class="product">
					<img src= "Assets/img/Cinn.jpg" />
				</div>
				<div class='cta'>
				<div class="price">$25.00</div>
				<button class="button">Add to cart</button>
				</div>
			</div>
			
			<div class='shop-card' data-cat='Lenovo'>
				<div class="title">
				Chai
				</div>
				<div class="desc">
				Optional Scent
				</div>
				<div class="product">
					<img src= "Assets/img/Chai.jpg" />
				</div>
				<div class='cta'>
				<div class="price">$25.00</div>
				<button class="button">Add to cart</button>
				</div>
			</div>
			
			<div class='shop-card'>
				<div class="title">
				Pumpkin Spice
				</div>
				<div class="desc">
				Optional Scent
				</div>
				<div class="product">
					<img src= "Assets/img/PSL.jpg" />
				</div>
				<div class='cta'>
				<div class="price">$25.00</div>
				<button class="button">Add to cart</button>
				</div>
			</div>
			
		</div>

		<div class='modal'>
			<div>asdasdas asd as </div>
			<div>asdasdas asd as </div>
			<div>asdasdas asd as </div>
			<div>asdasdas asd as </div>
		</div>
  		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
   	<script  src="js/index.js"></script>
	</div>
	<?php include("./Components/footer/footer.php");?>
   </body>
</html>
