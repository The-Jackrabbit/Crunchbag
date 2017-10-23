<?php session_start();?>
<?php include("./Helpers/sessionVariables.php"); ?>

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
					foreach($_POST as $key => $value) {
						$items = mysqli_query($con,
						"SELECT * FROM products
						WHERE productId=$key; ");
						
						if ($items->num_rows > 0) {
							while ($row = $items->fetch_assoc()) {
								$sum = $sum + $value*$row['price'];
								if ($value > 0) {
									echo "<div class='cart-confirmation-item'>
												<span class='cart-item-desc'>".$value."x $row[productName]</span>
												<span class='cart-item-cost'>$".number_format($value*$row['price'], 2)."</span>
											</div>
											<hr>";
								}
								
							}
						}
					}
				?>

			</div>
			<hr>
			<div class="cart-confirmation-footer">
				<span class="cart-total">
					<label>Total: </label><?php echo "$".number_format($sum, 2);?>
				</span>
				<form action="./bitcoinpay.php" method="POST">
					<input type="submit" value="Bitcoin buy">
					<input type="hidden" name="amount" value="<?php echo $sum;?>">
					<input type="hidden" name="customer" value="<?php echo $_SESSION["email"];?>">
					<input type="hidden" name="merchant" value="<?php echo "crunchbagOfficial@gmail.com";?>">
					
				</form>
				
				
			</div>
		</div>
	</div>

	<?php include("./Components/footer/footer.php");?>
   </body>
</html>
