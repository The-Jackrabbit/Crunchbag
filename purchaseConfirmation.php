<?php session_start();?>
<?php include("./Helpers/sessionVariables.php"); 
	
?>

<html lang="en">
   <head>
      <link rel="stylesheet" href="Assets/reset.css" />
      <link rel="stylesheet" href="Assets/styles.css" />
		<script src="Assets/jquery.min.js"></script>
		<link rel="icon" href="Assets/favicon.ico" />
		<style>
			.cart-confirmation-container {
				margin: 0 auto;
				margin-top:120pt;
				margin-bottom: 120pt;
				width: 250pt;
				background-color: white;
				box-shadow: 4pt 4pt 4pt grey;
				padding: 12pt;
			}
			.cart-confirmation-body {
				height: 200pt;
				overflow-y: scroll;
				padding-left: 12pt;
			}
			span.cart-item-cost {
				float: right;
			}
			span.cart-total {
				float: right;
			}
		</style>
	</head>
   <body>
      <?php
         $pkg = $header_pkg;
         include("./Components/header/header.php");
      ?>
	<div class="max-inline"> 	
		<div class="cart-confirmation-container">
			<div class="cart-confirmation-header">
				Your Cart
			</div>
			<hr>
			<div class="cart-confirmation-body">
				<?php
					$sum = 0;
					include("./Helpers/connectToDatabase.php");
					if (isset($_SESSION["cart"])) {
						foreach($_SESSION["cart"] as $key => $value) {
							$items = mysqli_query($con,"
								SELECT * FROM products
								WHERE productId=$key;
							");
							
							if ($items->num_rows > 0 && $value > 0) {
								while ($row = $items->fetch_assoc()) {
									$sum = $sum + $value*$row['price'];
									echo 
									"<div class='cart-confirmation-item'>
										<form action='./Helpers/removeFromCart.php' method='POST' class='remove-form'>
											<input type='submit' value='-' class='remove-item'>
											<input type='hidden' name='productId' value='$row[productId]'>
											<input type='hidden' name='url' value='purchaseConfirmation.php'>
										</form>
										<span class='cart-item-desc'>".$value."x $row[productName]</span>
										<span class='cart-item-cost'>$".number_format($value*$row['price'], 2)."</span>
									</div>
									<hr>";
								}
							}
						}
					}
					$sum = 0.18;
					$_SESSION["sum"] = $sum;
				?>
			</div>
			<hr>
			<div class="cart-confirmation-footer">
				<span class="cart-total">
					<label>Total: </label><?php echo "$".number_format($sum, 2);?>
				</span>
				<form action="https://test.bitpay.com/checkout" method="post" >
  					<input type="hidden" name="action" value="checkout" />
  					<input type="hidden" name="posData" value="" />
					<input type="hidden" name="price" value="<?php echo $sum;?>" />
					<input type="hidden" name="data" value="gKARxl3aXk+XK4ebKD2NeCzVODQZETKfLsZcHDtlADhaLM3br+dkzveLlDJdGC0marp9lyhuBmZGFQESte1b/9R/LyMXktY2vg9DxezTXE7VH5fG4+H39TUzps6SKSJzTru5vPRI/yc5z9B52lVi3XimIe8osoDcRPAqow/Kg0vYH8DIZ2GT1/wnxZQRWj3k03bMNURCrfRfW3Fex8W36Q==" />
  					<input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
				</form>
				
				
			</div>
		</div>
	</div>

	<?php include("./Components/footer/footer.php");?>
   </body>
</html>
