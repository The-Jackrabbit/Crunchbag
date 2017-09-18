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
			
			#mapid { 
				display: inline-block;
				height: 180pt;
				width: 39%;
				vertical-align: top;
			}
			.text {
				width: 60%;
				display: inline-block;
			}
			.about-info {
				padding-bottom: 200pt;
				vertical-align: top;
				margin: 0 auto;
			}
			.actions input {
				color: white;
				border: none !important;
				width: 200pt;
				height: 50pt;
				margin: 12pt;
				font-size: 18pt;
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
			<h1>About Us</h1>	
			<hr>
			<div class="about-info">
				<div class="text">
					<p>Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros. Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.  Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.</p>
					<ul>
						<li>List item 1</li>
						<li>List item 2</li>
						<li>List item 3</li>
					</ul>
					<p> Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros. Proin iaculis, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.</p>
					<div class="owner-signature">
						<p>- Kacey Price</p>
						<p>- Gen Schmitt</p>
						<p>- Luke Masters</p>
					</div>
				</div>
				<div id="mapid">


				</div>

			</div>
			

			<hr>
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
