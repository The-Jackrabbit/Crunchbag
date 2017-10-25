<?php session_start();?>
<?php include("./Helpers/sessionVariables.php"); ?>
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
			.cart-icon {
				position: fixed;
				bottom: 20;
				right: 20;
			}
			.cart-icon span {
				background-color: #B23323;
				padding: 0pt 5pt;
				border-radius: 15pt;
			}
			.cart-icon img {
				
				width: 30pt;
				height: 30pt;
				background-color: rgba(200, 200, 200, 0.8);
				border-radius: 30pt;
				vertical-align: middle;
				padding: 5pt;
				cursor: pointer;
			}
			.cart-full {
				display:none;
				position: fixed;
				bottom: 0;
				right: 20;
				width: 250pt;
				height: 280pt;
				background-color: white;
				color: black;
			}
			.cart-full-header {
				background-color: #B23323;
				width: 100%;
				height: 40pt;
				vertical-align: middle;
				
			}
			.cart-full-body {
				width: 100%;
				height: 200pt;
				overflow-y: scroll;
			}
			.cart-full-header-title {
				font-size: 12pt;
				color: black;
				line-height: 40pt;
				padding-left:12pt;
			}
			.minify {
				font-size: 24pt;
				cursor: pointer;
				line-height: 40pt;
				padding-right:12pt;
				float: right;
				color: black;
			}
			.cart-full-checkout {
				width: 100%;
				height: 40pt;
			}
			input.checkout {
				float: right;
				margin-right: 12pt;
			}
			.cart-price {
				float: right;
			}
			.cart-full-item {
				padding: 12pt;
			}
			.checkout-page {
				height: 50pt;
				width: 100%;
			}
			.checkout-page-button {
				margin: 0 auto;
			}
			.actions input {
				border: none !important;
				width: 200pt;
				display: block;
				font-size: 18pt;
				margin: 12pt;
			}
			.actions input.about {
				color: white;
				height: 50pt;
				background-color: #7A1906 ;
			}
			.actions input.email {
				color: black;
				height: 30pt;
				background-color: white;
			}
			.actions {
				width: min-content; width: -moz-min-content;
				white-space: nowrap;
				margin: 0 auto;
			}
			.actions * {
				display: inline-block;
			}
		</style>
	</head>
   <body>
      <?php
         $pkg = $header_pkg;
         include("./Components/header/header.php");
      ?>
	<div class="max-inline"> 
		<div class='products-container'>
			<?php

				include("./Helpers/connectToDatabase.php");
				$items = mysqli_query($con,
				"SELECT * FROM products; ");
				include("./Helpers/disconnectFromDatabase.php");

				if ($items->num_rows > 0) {
					while ($row = $items->fetch_assoc()) {
						echo "<div class='shop-card'>";
						echo "<div class='hidden-vals' style='display: none'>
							<input type='hidden' class='id' name='id' value='$row[productId]'>
							<input type='hidden' class='name' name='name' value='$row[productName]'>
							<input type='hidden' class='price' name='price' value='$row[price]'>
						</div>";
						echo "<div class='title'>$row[productName]</div>";
						echo "<div class='desc'>$row[productDescription]</div>";
						echo "<div class='product'>
									<img src='$row[productImage]'/>
								</div>";

						echo "<div class='cta'>";
						echo "<div class='price'>$".number_format($row['price'], 2)."</div>";
						echo "<button class='button'>Add to cart</button></div>";
						echo "</div>";
					}
				}
			?>
		</div>
		
		<form method="POST" action="./Helpers/submitPurchase.php" class="hidden-form">
			<?php

				include("./Helpers/connectToDatabase.php");
				$items = mysqli_query($con,
				"SELECT * FROM products; ");
				include("./Helpers/disconnectFromDatabase.php");

				if ($items->num_rows > 0) {
					while ($row = $items->fetch_assoc()) {
						echo "<input type='hidden' name='$row[productId]' class='$row[productId]' value=0>";
					}
				}
			?>
			<div class="actions">
				<?php
					if(!isset($_SESSION["email"])) {
						echo '<input class="email" required type="text" name="email" value="" placeholder="Your email">';
					}
				?>
				<input class="about" type="submit" value="Checkout">
				
			</div>

			<div class="cart-icon">
				<span id="cart-total">0</span>
				<img src="./Assets/shopping-cart.png" width="30pt" height="30pt">
			</div>
			<div class="cart-full" id="cart-full">
				<div class="cart-full-header" >
					<span class="cart-full-header-title">Cart</span>
					<span class="minify" id="minify">-</span>
				</div>
				<div id="cart" class="cart-full-body">
					
				</div>
				<div class="cart-full-checkout">
					<input class="checkout" type="submit" value="Checkout">
				</div>
			</div>
		</form>
		
	</div>


	<script>
		$("button").click(function() {
			$(this).parents('.shop-card').each(function() {
				var price = 0;
				var id = 0;
				var name = '';
				$(this).find('.hidden-vals').each(function() {
					id = $(this).find('.id').val();
					price = parseInt($(this).find('.price').val());
					name = $(this).find('.name').val();
					var item = `
						<div class='cart-full-item'>
							<p>1x ` + name + `<span class='cart-price'>$` + price.toFixed(2) + `</span></p>
							<hr>
						</div>
						`;
					$("#cart").append(item);

					$('form.hidden-form').find('input.' + id).each(function() {
						var newVal = parseInt($(this).val()) + 1;
						$(this).val(newVal);
					})
				});
			})
			$('#cart-total').each(function() {
				var newVal = parseInt($(this).text()) + 1;
				$(this).text(newVal);
			})
		});
		$(".minify").click(function() {
			console.log("hidisha");
			$(this).parents(".cart-full").slideToggle();
		})
		$(".cart-icon").click(function() {
			$("#cart-full").slideToggle();
		})
	</script>
	<?php include("./Components/footer/footer.php");?>
   </body>
</html>
