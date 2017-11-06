<?php session_start();?>
<?php include("./Helpers/sessionVariables.php"); ?>
<?php 
	if (!isset($_SESSION["userId"])) {
		header("Location: ./home.php");
	}
?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="Assets/reset.css" />
      <link rel="stylesheet" href="Assets/styles.css" />
		<link rel="icon" href="Assets/favicon.ico" />
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<script src="Assets/jquery.min.js"></script>
		<style>
			.banner {
				background-image: url("Assets/img/dash.jpg");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				height:300pt;
				position: absolute;
				left: 0;
				right: 0;
				text-align: center;
				color: white;
				z-index: -1;
				margin-bottom: 400pt;			
			}
			div.banner-body {
				position: relative;
				top: 50%;
				transform: translateY(-50%);
				margin: 0 auto;
			}
			.banner-text-title {
				font-size: 70pt;
				font-weight: lighter;
			}
			.banner-text {
				margin-top: 10pt;
				font-size: 28pt;
				color: black;
			}
			.banner-padding {
				padding-bottom: 300pt;
			}

			.transbox {
				padding: 30px;
				width: min-content; width: -moz-min-content;
				white-space: nowrap;
				margin: 0 auto;
			}

			.card {
				background-color: white;
				padding: 12pt;
				box-shadow: 4pt 4pt 4pt grey;
			}
			table.dash-container {
				width: 100%;
			}
			table.dash-container td {
				padding-right:12pt;
				padding-bottom: 12pt;
				width: 50%;
			}
			table.dash-container td:last-child {
				padding-right: 0pt;
			}
			.order-container {
				border: 1pt solid gray;
				border-radius: 12pt;
				margin-bottom: 12pt;
			}
			.order-header {
				background-color: lightgray;
				border-bottom: 1pt solid gray;
				border-radius: 12pt 12pt 0pt 0pt;
				padding: 12pt;
				padding-bottom: 0pt;
			}
			.order-body {
				border-radius: 0pt 0pt 12pt 12pt ;
				padding: 12pt;
			}
			.order-header table {
				font-size: 10pt;
				width: 100%;
				table-layout: fixed;
			}
			.order-header table td.date, .order-header table td.order {
				width: 115pt;
			}
			.order-header table td.total {
				width: 50pt;
			}
			.order-product table {
				margin: 12pt;
			}
			table td {
				vertical-align: top;
			}
			.order-product table td {
				
				font-size: 14pt;
				line-height: 125%;
			}
			.product-rec img {
				width: 150pt;
			}
			.recs {
				max-height: 130pt;
				overflow-y: scroll;
			}
			.cart-confirmation-body {
				height: 98pt;
				overflow-y: scroll;
				padding-left: 12pt;
			}
			.cart-confirmation-body hr {
				width: 80%;
				border: 1pt solid #B5D8FF;

			}
			.cart-confirmation-footer {
				height: 20pt;
				padding-top:12pt;
			}
		</style>

	</head>
   <body>
      <?php
         $pkg = $header_pkg;
         include("./Components/header/header.php");
      ?>
		<div class="banner">	
			<div class="banner-body">
			  <div class="transbox">
					<p class="banner-text">
						<?php
							if (isset($_SESSION['firstName'])) {
								echo "Welcome back, $_SESSION[firstName]!";
							}
						?>
					</p>
			  </div> 
			</div>
		</div>
		<div class="banner-padding"></div>
		<div class="max-inline">
			<table class="dash-container">
				<tr>
					<td>
						<!-- RECS -->
						<div class="recs-container card">
							<h2>Your Recommendations</h2>
							<hr>
							<div class="recs">
								<div class="product-rec">
									<?php
										include("./Helpers/connectToDatabase.php");
										
										for ($i = 3 ; $i < 5 ; $i++) {
											$items = mysqli_query($con,"
												SELECT * FROM products
												WHERE productId = $i;
											");
											if ($items->num_rows > 0) {
												while ($row = $items->fetch_assoc()) {
													echo 
													"<table>
													<tr>
														<td>
															<img src='$row[productImage]'>
														</td>
														<td>
															<h3>$row[productName]</h3>
															<h4>$".number_format($row['price'], 2)."</h4>
															<br>

															<form action='./Helpers/addToCart.php' method='POST'>
																<input type='hidden' value='$row[productId]' name='productId'>
																<input type='hidden' value='dashboard.php' name='url'>
																<input type='submit' value='Try It Out'>
															</form>		
														</td>
													</tr>
												</table>";
													
												}
											}
										}
									?>
									
									
								</div>
							</div>
						</div>
					</td>
					<td>
						<!-- CART -->
						<div class="recs-container card">
							<div class="cart-confirmation-container">
								<h2>
									Your Cart
								</h2>
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
															echo "<div class='cart-confirmation-item' style='padding-top: 4pt;'>
																		<span class='cart-item-desc'><form action='./Helpers/removeFromCart.php' method='POST' class='remove-form'>
																		<input type='submit' value='-' class='remove-item'>
																		<input type='hidden' name='productId' value='$row[productId]'>
																		<input type='hidden' name='url' value='dashboard.php'>
																	</form>".$value."x $row[productName]
																		
																		</span>
																		<span class='cart-item-cost'>$".number_format($value*$row['price'], 2)."</span>
																	</div>
																	<hr align='left'>";
														}
														
													}
												}
											}
										}
										
									?>
								
								</div>
								<div class="cart-confirmation-footer">
									<span class="cart-total">
										<h3>Total: <?php echo "$".number_format($sum, 2);?><a style="float:right" href="./purchaseConfirmation.php">Go to Checkout</a></h3>
									</span>
									
								</div>
							</div>
						</div>
					</td>
					
				</tr>
				<tr>
					<td colspan="2">
						<div class="recs-container card">
							<h2>Your Orders</h2>
							<hr>
							<?php
								include("./Helpers/connectToDatabase.php");
								
								$items = mysqli_query($con,
								"SELECT * FROM transactionLog
								WHERE transactionBy = '$_SESSION[username]'
								ORDER BY transactionStart desc; ");
								
								if ($items->num_rows > 0) {
									while ($row = $items->fetch_assoc()) {
										$delivery_date = date_format(date_create($row["deliveryDate"],new DateTimeZone("EST")),'l jS F Y') ;
										echo "<div class='order-container'>
													<div class='order-header'>
														<table>
															<tr>
																<td class='date'>
																	Order Placed
																</td>
																<td class='total'>
																	Total
																</td>
																<td class='ship'>
																	Ship To
																</td>
																<td class='order'>
																	Order #
																</td>
															</tr>
															<tr>
																<td class='date'>
																	$row[transactionDate]
																</td>
																<td class='total'>
																	$$row[transactionAmount]
																</td>
																<td class='ship'>
																	$row[bitcoinSource]
																</td>
																<td class='order'>
																	$row[transactionId]
																</td>
															</tr>
														</table>
													</div>
													<div class='order-body'>
													<h2>Expected Delivery: $delivery_date </h2>";

										$order_products = mysqli_query($con,
													"SELECT * FROM productTransactions as tp
													JOIN products as p ON tp.productId = p.productId
													WHERE tp.transactionId = $row[transactionId]; ");
										$count = $order_products->num_rows;
										if ($order_products->num_rows > 0) {
											while ($product_row = $order_products->fetch_assoc()) {
												$count -= 1;
												echo "<div class='order-product'>
															<table>
																<tr>
																	<td>
																		<img src='$product_row[productImage]'>
																	</td>
																	<td>
																		<p>$product_row[quantity]x $product_row[productName]</p>
																		<p>$$product_row[amount]</p>
																		<form action='./Helpers/addToCart.php' method='POST'>
																			<input type='hidden' value='$product_row[productId]' name='productId'>
																			<input type='hidden' value='dashboard.php' name='url'>
																			<input type='submit' value='Buy It Again'>
																		</form>
																	</td>
																</tr>
															</table>
														</div>";
												if ($count > 0) {
													echo "<hr>";
												}
											}
										}
										echo "</div></div>";
										
									}
								}
								include("./Helpers/disconnectFromDatabase.php");
							?>
						</div>
					</td>
				</tr>
			</table>

		</div>
		
		<?php include("./Components/footer/footer.php");?>
		
   </body>
</html>
