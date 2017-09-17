<?php session_start();?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
      <link rel="stylesheet" href="./Assets/purchase.css"/>
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<script src="./Assets/jquery.min.js"></script>
		<script src="./Assets/purchase.js"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js '></script>
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
					"activeLink" => "purchase.php",
               "actionLinks" => Array(
                     "login.php" => "Login",
                     "signup.php" => "Signup"
					)
            );
         include("./Components/header/header.php");
      ?>
	<div class="max-inline"> 
		<div class='navbar'>
  <div class='cart-container'>
    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
    <div class='cart-desc'>0 items</div>
  </div>
  
</div>

  <div class='products-container'>

    <div class='shop-card' data-cat='Amazon'>
      <div class="title">
        Individual Pile
      </div>
      <div class="desc">
      </div>
      <div class="product">
         <img src= "./Assets/purLeaf.jpg" />
      </div>
      <div class='cta'>
        <div class="price">$130</div>
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
         <img src= "./Assets/purLeaf.jpg" />
      </div>
      <div class='cta'>
        <div class="price">$220</div>
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
         <img src= "./Assets/purLeaf.jpg" />
      </div>
      <div class='cta'>
        <div class="price">$90</div>
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
         <img src= "./Assets/purLeaf.jpg" />
      </div>
      <div class='cta'>
        <div class="price">$220</div>
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
         <img src= "./Assets/purLeaf.jpg" />
      </div>
      <div class='cta'>
        <div class="price">$220</div>
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
         <img src= "./Assets/purLeaf.jpg" />
      </div>
      <div class='cta'>
        <div class="price">$220</div>
        <button class="button">Add to cart</button>
      </div>
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
	</div>
   </body>
</html>
