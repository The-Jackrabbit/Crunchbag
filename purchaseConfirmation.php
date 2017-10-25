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
					}
					
				?>

			</div>
			<hr>
			<div class="cart-confirmation-footer">
				<span class="cart-total">
					<label>Total: </label><?php echo "$".number_format($sum, 2);?>
				</span>
				<?php
					$_SESSION["sum"] = $sum;
					$sum = 0.30;

					include("./Helpers/connectToDatabase.php");
					if (isset($_SESSION["userId"])) {
						$pending_purchase_query = mysqli_query($con,"SELECT *
						FROM transactionLog
						WHERE transactionEnd = '3001-01-01'
						AND transactionBy = $_SESSION[userId];");
						if ($pending_purchase_query->num_rows == 0) {
							mysqli_query($con,"INSERT INTO transactionLog(
								transactionDate,
								transactionStart,
								transactionEnd,
								transactionBy,
								transactionAmount,
								bitcoinSource,
								bitcoinTarget
							)
							VALUES (
								Now(),
								Now(),
								'3001-01-01',
								'$_SESSION[username]',
								$sum,
								'$_SESSION[email]',
								'crunchbag.uva@gmail.com'
							);");
						}
					} else {
						$id = session_id();
						$pending_purchase_query = mysqli_query($con,"SELECT *
						FROM transactionLog
						WHERE transactionEnd = '3001-01-01'
						AND transactionBy = '$id';");
						if ($pending_purchase_query->num_rows == 0) {
							mysqli_query($con,"INSERT INTO transactionLog(
								transactionDate,
								transactionStart,
								transactionEnd,
								transactionBy,
								transactionAmount,
								bitcoinSource,
								bitcoinTarget
							)
							VALUES (
								Now(),
								Now(),
								'3001-01-01',
								'$id',
								$sum,
								'$_SESSION[email]',
								'crunchbag.uva@gmail.com'
							);");
						}
						
					}
					
					
					include("./Helpers/disconnectFromDatabase.php");
				?>
				<form action="https://test.bitpay.com/checkout" method="post" >
					
  					<input type="hidden" name="action" value="checkout" />
  					<input type="hidden" name="posData" value="" />
					<input type="hidden" name="price" value="<?php echo $sum;?>" />
  					<input type="hidden" name="data" value="gKARxl3aXk+XK4ebKD2NeCzVODQZETKfLsZcHDtlADhaLM3br+dkzveLlDJdGC0marp9lyhuBmZGFQESte1b/9R/LyMXktY2vg9DxezTXE7NcNlr32DomZYURUD/FQqkNI5Ejhfn+L7Gi1wddJSMM3k6Rb3MP+q1IMYeAUO2x1XNzcPx343AGoaBYrOt1alHjaym54UYJ7egzhXdHIJo6k8Ftlsoly57Ld6y/fEisfAvaIdNnG/2UN3ztFIl7iHbie/fVsx4w7APacICrL7pCg==" />
  					<input type="image" src="https://test.bitpay.com/img/button-large.png" border="0" name="submit" alt="BitPay, the easy way to pay with bitcoins." >
				</form>
				
				
			</div>
		</div>
	</div>

	<?php include("./Components/footer/footer.php");?>
   </body>
</html>
