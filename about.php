<?php session_start();?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="./Assets/reset.css" />
      <link rel="stylesheet" href="./Assets/styles.css" />
		<link rel="icon" href="./Assets/favicon.ico" />
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
		integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
		crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
		integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
		crossorigin=""></script>
		<script src="./Assets/jquery.min.js"></script>
		<style>
			
			.step-container {
				vertical-align: middle;
				background-color: #f2e8e3;
				padding: 15px;
				margin-bottom: 24pt;
				background-color: white;
				box-shadow: 4pt 4pt 4pt grey;
			}
			
			.heading-container {
				width: 30%;
				vertical-align: middle;
				background-color: #f2e8e3;
				padding: 20px;
				border-radius: 25px;
				margin-top: 30px;
				margin-left: 30px;
				text-align: center;
			}
			
			.step-description {
				vertical-align: middle;
			}
			.step-description p {
				padding: 12pt;
				background-color: white;
				font-size: 18pt;
				line-height: 125%;
			}
			.step-graphic {
				width: 150pt;
			}
			.step-graphic img {
				width: 150pt;
			}
			#mapid { 
				display: inline-block;
				height: 200pt;
				width: 100%;
				vertical-align: top;
			}
			.text-container {
				width: 50%;
				height: 100%;
				padding-right: 12pt;
			}
			.text {
				
				height: 100%;
				
				padding: 12pt;
			}
			.about-info {
				padding-bottom: 200pt;
				vertical-align: top;
				margin: 0 auto;
				table-layout: fixed;
				height: 200pt;
			}
			.actions input {
				color: white;
				border: none !important;
				width: 200pt;
				height: 50pt;
				margin: 12pt;
				font-size: 18pt;
				background-color: #7A1906 !important;
			}
			.actions {
				width: min-content;
				white-space: nowrap;
				margin: 0 auto;
			}
			.actions * {
				display: inline-block;
			}
			.purchase {
				background-color: #D4321D !important;
			}
			.signup {
				background-color: #F0AF45 !important;
			}		
			.text ul {
				padding: 10pt 0pt;
				padding-left: 20pt;
				list-style: disc;
			}
			.text ul li {
				padding: 4pt;
			}
			.owner-signature {
				margin: 15pt;
				float: right;
			}
			.owner-signature p {
				padding: 2pt;
			}
			.about-section {
				margin-bottom: 36pt;
				background-color: white;
				box-shadow: 4pt 4pt 4pt grey;
				padding: 12pt;
			}
			ul.leaf {
				list-style-image: url('/Assets/img/leafbullet.png');
				padding-left: 5pt;
				line-height: 20px;
			}
		</style>
		<script>
			$(document).ready(function() {
				var mymap = L.map('mapid').setView([38.035415, -78.503547], 15);
			 L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
				attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
				maxZoom: 18,
				id: 'mapbox.streets',
				accessToken: 'pk.eyJ1IjoiYm94ZnVsbG9mbW9vIiwiYSI6ImNqNHExODJ4czA3Y2EzM3Bjb29oeXRqaWoifQ.dj_ikTE412eU5X114wJOEA'
			 }).addTo(mymap);
			 var marker = L.marker([38.035415, -78.503547]).addTo(mymap);
			 var options = {
					layers: [
						L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 18, attribution: '...' })
					],
					zoom: 5,
					center: L.latLng({ lat: 38.991709, lng: -76.886109 })
			 }
			})
			 

		</script>
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
					"activeLink" => "about.php",
               "actionLinks" => Array(
                     "login.php" => "Login",
                     "signup.php" => "Signup"
					)
            );
         include("./Components/header/header.php");
      ?>
		<div class="max-inline">
			<div class="about-section">
				<h1>About Us</h1>	
				<hr>
				<table class="about-info">
					<tr>
						<td class="text-container">
							<div class="text">
								<p style="line-height: 20pt;">	In Spring 2016 we found ourselves surrounded by lush green trees all around the University of Virginia Campus, a gorgeous site to see but a depressing moment for those of us who thrive off of the sound of leaves crunching under our feet with each step we take.  From this moment on we were dedicated to delivering crisp dry leaves to anyone, everywhere, at anytime. </p>
								<ul class="leaf">
									<li>Customers can rest assured they are jumping into a plush pile of leaves free from sticks, debris and harmful insects.</li>
									<li>We pride ourselves on being the only leaf pile delivery service currently operating in the United States. </li>
									<li>Mother Nature may charge less, but no one else incorporates enhanced scents, guaranteed availability any time of year or the quality assurance of knowing exactly what is in the leaf pile in which you love jumping. </li>
								</ul>
							</div>
						</td>
						<td>
							<div id="mapid"></div>
						</td>
					</tr>
				</table>
			</div>
			<div class="about-sddection">
			<h1>How Does it Work?</h1>
			<hr>
			<div class="step-container">
			<table class="step-table">
				<tr>
					<td class="step-description"><p >
						High quality leaves are raked and collected from local neighboorhood families at no charge.
						</p></td>
					<td class="step-graphic">
						<img src="/Assets/img/step1.png">
					</td>
				</tr>
			</table>
		</div>
		<div class="step-container">
			<table class="step-table">
				<tr>
					<td class="step-graphic">
						<img src="/Assets/img/step2.png">
					</td>
					<td class="step-description">
						<p >
						Leaves are professionally dried and prepared to prevent breakdown. 
						</p>
					</td>
					
				</tr>
			</table>
		</div>
		<div class="step-container">
			<table class="step-table">
				<tr>
				<td class="step-description">
						<p >
						 A CrunchBag leaf bag is stuffed with dry, crisp leaves to be sent to your door step at anytime of year.
						</p>
					</td>
					<td class="step-graphic">
						<img src="/Assets/img/step3.png">
					</td>
				</tr>
			</table>
		</div>
		
		</td>		
		</td>
		</table>

		</div>
		</div>
			</div>

			
			<div class="actions">
				<form action="./signup.php">
					<input class="signup" type="submit" value="Sign Up">
				</form>
				<form action="./purchase.php">
					<input class="purchase" type="submit" value="Purchase">
				</form>
			</div>
			
		</div>
		<?php include("./Components/footer/footer.php");?>
   </body>
</html>
