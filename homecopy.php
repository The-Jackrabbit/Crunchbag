<?php session_start();?>
<html lang="en">
   <head>
      <link rel="stylesheet" href="Assets/reset.css" />
      <link rel="stylesheet" href="Assets/styles.css" />
		<link rel="icon" href="Assets/favicon.ico" />
		<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:200" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">        <link rel="stylesheet" href="assets/css/Footer-white.css">
		  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-white.css">
		<script src="Assets/jquery.min.js"></script>
		<style>
			p, a, h1, h2, h3, span, div {
				font-family: 'Lora', serif;
			}
			.banner {
				background-image: url("Assets/banner5.jpeg");
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				height:400pt;
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

			}
			span.light-italic {
				font-style: italic;
			}
			.banner-padding {
				padding-bottom: 400pt;
			}

			.step-container {
				width: 75%;
				vertical-align: middle;
				background-color: #f2e8e3;
				padding: 15px;
				border-radius: 25px;
				margin: 10px;
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
				border: double;
				border-width: 15px;
			}
			.step-graphic {
				width: 150pt;
			}
			.step-graphic img {
				width: 150pt;
			}
			.left-align {
				float: left;
			}
			.right-align {
				float: right;
			}
			table.step-table {
				table-layout: fixed;
			}

			.transbox {
				padding: 30px;
				background-color: rgba(255,255,255,0.5);
				width: min-content; width: -moz-min-content;
				white-space: nowrap;
				margin: 0 auto;
				
			}
			.inner-inner-transbox {	
				padding: 20px;
				background-color: rgba(120,60,0,.6);
				width: min-content; width: -moz-min-content;
				white-space: nowrap;
				border-style: double;
				
			}	
			.inner-inner-transbox * {
				font-family: 'Lora', serif !important;
			}
			.inner-transbox {	
				padding: 10px;
				background-color: rgba(120,30,0,.3);
				width: min-content; width: -moz-min-content;
				white-space: nowrap;
				
			}
			.normal-text{
				line-height: 30px;
				color:rgba(120,40,0,0.8);
				text-align: center;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 15pt;
			
			}
			
			.heading-text{
				line-height: 30px;
				color:rgba(120,40,0,0.8);
				font-family: 'Lora', serif;
				font-size: 40pt;
				font-weight: bold;
				text-align: center;
			}
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			#myFooter{
    padding-top:32px;
}

#myFooter .container{
    text-align: center;
}

#myFooter .footer-copyright{
    margin-bottom: 35px;
    text-align: center;
    color: #777;
}

#myFooter ul{
    list-style-type: none;
    padding: 0;
    margin-bottom: 18px;
}

#myFooter a{
    color: #282b2d;
    font-size: 18px;
}

#myFooter li{
    display: inline-block;
    margin: 0px 15px;
    line-height: 2;
}

#myFooter .footer-social{
    text-align: center;
    padding-top: 25px;
    padding-bottom: 25px;
    background-color: #d8c2ba;
}

#myFooter .fa{
    font-size: 36px;
    margin-right: 15px;
    margin-left: 20px;
    background-color: #b23323;
    color: #d0d0d0;
    border-radius: 50%;
    padding: 10px;
    height: 60px;
    width: 60px;
    text-align: center;
    line-height: 43px;
    text-decoration: none;
    transition:color 0.2s;
}

#myFooter .fa-facebook:hover{
   color: white;
}

#myFooter .fa-facebook:focus{
    color: white; 
}

#myFooter .fa-google-plus:hover{
    color: white;
}

#myFooter .fa-google-plus:focus{
    color: white;
}

#myFooter .fa-twitter:hover{
    color: white;

}

#myFooter .fa-twitter:focus{
    color: white;
}



/* Containers */

	.container {
		margin-left: auto;
		margin-right: auto;
	}

	.container.\31 25\25 {
		width: 100%;
		max-width: 1200px;
		min-width: 960px;
	}

	.container.\37 5\25 {
		width: 720px;
	}

	.container.\35 0\25 {
		width: 480px;
	}

	.container.\32 5\25 {
		width: 240px;
	}

	.container {
		width: 960px;
	}

	@media screen and (min-width: 737px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 1500px;
			min-width: 1200px;
		}

		.container.\37 5\25 {
			width: 900px;
		}

		.container.\35 0\25 {
			width: 600px;
		}

		.container.\32 5\25 {
			width: 300px;
		}

		.container {
			width: 1200px;
		}

	}

	@media screen and (min-width: 737px) and (max-width: 1200px) {

		.container.\31 25\25 {
			width: 100%;
			max-width: 1200px;
			min-width: 960px;
		}

		.container.\37 5\25 {
			width: 720px;
		}

		.container.\35 0\25 {
			width: 480px;
		}

		.container.\32 5\25 {
			width: 240px;
		}

		.container {
			width: 960px;
		}

	}


/* Grid */

	.row > * {
		float: left;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.\34 u, .\34 u\24 {
		width: 33.3333333333%;
		clear: none;
		margin-left: 0;
	}


/* Basic */

	body {
		background: #252122;
		background-image: url("images/bg02.png");
		font-family: 'Source Sans Pro';
		font-weight: 300;
		color: #5d5d5d;
	}

		body.is-loading * {
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
		}

	input, textarea, select {
		font-family: 'Source Sans Pro';
		font-weight: 300;
		color: #5d5d5d;
	}

	strong, b {
		color: #252122;
		font-weight: 400;
	}

	i, em {
		font-style: italic;
	}

	sub {
		position: relative;
		top: 0.5em;
		font-size: 0.8em;
	}

	sup {
		position: relative;
		top: -0.5em;
		font-size: 0.8em;
	}

	blockquote {
		border-left: solid 0.75em #dddddd;
		padding: 1em 0 1em 1.5em;
		font-style: italic;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #252122;
		font-weight: 700;
	}

	h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
		color: inherit;
		text-decoration: none;
	}




/* Button */

	input[type="button"],
	input[type="submit"],
	input[type="reset"],
	button,
	.button {
		-webkit-appearance: none;
		display: inline-block;
		text-decoration: none;
		cursor: pointer;
		border: 0;
		border-radius: 5px;
		background: #b23323;
		color: #fff !important;
		font-weight: 700;
		outline: 0;
		-moz-transition: background-color .25s ease-in-out;
		-webkit-transition: background-color .25s ease-in-out;
		-ms-transition: background-color .25s ease-in-out;
		transition: background-color .25s ease-in-out;
	}

		input[type="button"]:hover,
		input[type="submit"]:hover,
		input[type="reset"]:hover,
		button:hover,
		.button:hover {
			background: #d95947;
		}

		input[type="button"]:active,
		input[type="submit"]:active,
		input[type="reset"]:active,
		button:active,
		.button:active {
			background: #d95947;
		}

		input[type="button"].alt,
		input[type="submit"].alt,
		input[type="reset"].alt,
		button.alt,
		.button.alt {
			background: #b23323;
		}

			input[type="button"].alt:hover,
			input[type="submit"].alt:hover,
			input[type="reset"].alt:hover,
			button.alt:hover,
			.button.alt:hover {
				background: #d95947;
			}

			input[type="button"].alt:active,
			input[type="submit"].alt:active,
			input[type="reset"].alt:active,
			button.alt:active,
			.button.alt:active {
				background: #d95947;
			}

		input[type="button"].icon:before,
		input[type="submit"].icon:before,
		input[type="reset"].icon:before,
		button.icon:before,
		.button.icon:before {
			opacity: 0.35;
			position: relative;
			top: 0.05em;
			margin-right: 0.75em;
		}




/* Icons */

	.icon {
		position: relative;
		text-decoration: none;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.icon > .label {
			display: none;
		}

		.icon.featured {
			position: relative;
			display: inline-block;
			background-color: #632f0f;
			width: 9em;
			padding: 1.75em 0 0.75em 0;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
			margin: 0 0 4.5em 0;
			cursor: default;
		}

			.icon.featured:before {
				font-size: 4.5em;
				line-height: 1em;
				color: #fff;
			}

			.icon.featured:after {
				content: '';
				position: absolute;
				bottom: -1.95em;
				left: 0;
				border-top: solid 2em #632f0f;
				border-left: solid 4.5em transparent;
				border-right: solid 4.5em transparent;
			}

			.icon.featured.alt {
				background-color: #b23323;
			}

			.icon.featured.alt:after {
				border-top-color: #b23323;
			}

			.icon.featured.alt2 {
				background-color: #f0af45;
			}

			.icon.featured.alt2:after {
				border-top-color: #f0af45;
			}



/* Intro */

	#intro {
		text-align: center;
	}


/* Desktop */

	@media screen and (min-width: 737px) {



		/* Button */

			input[type="button"],
			input[type="submit"],
			input[type="reset"],
			button,
			.button {
				font-size: 1.1em;
				padding: 0.65em 1.5em 0.65em 1.5em;
			}

				input[type="button"].big,
				input[type="submit"].big,
				input[type="reset"].big,
				button.big,
				.button.big {
					font-size: 1.5em;
					padding: 0.75em 1.5em 0.75em 1.5em;
				}

		/* List */

			ul.actions li {
				display: inline-block;
				margin-left: 1em;
			}

				ul.actions li:first-child {
					margin-left: 0;
				}

			ul.links li {
				display: inline-block;
				border-left: solid 1px rgba(255, 255, 255, 0.05);
				padding: 0 0 0 1em;
				margin: 0 0 0 1em;
			}

				ul.links li:first-child {
					border-left: 0;
					padding-left: 0;
					margin-left: 0;
				}

			ul.social {
				margin: 0 0 3.25em 0;
			}

				ul.social li {
					margin-left: 0.75em;
				}


		/* Intro */

			#intro {
				overflow: hidden;
			}

				#intro section {
					margin: 3em 0;
					padding: 2.5em 0;
				}

				#intro h2 {
					font-size: 1.75em;
				}

				#intro p {
					margin: 0;
				}

				#intro .middle {
					position: relative;
					z-index: 1;
				}

				#intro .button {
					min-width: 12em;
				}

				#intro footer {
					margin: 0;
				}

	}
		/* Intro */

			#intro {
				padding: 0;
			}

				#intro section {
					padding: 1em 2em;
				}

/* Mobile */

	#navPanel, #titleBar {
		display: none;
	}

	@media screen and (max-width: 736px) {

	
		/* Intro */

			#intro {
				padding: 0 25px 0 25px;
			}

				#intro section {
					position: relative;
					border-top: solid 1px #dfdfdf;
					padding: 2.5em 0 0 0;
					margin: 1.5em 0 0 0 !important;
				}

					#intro section.first {
						border-top: 0;
						padding-top: 0;
					}

					#intro section p {
						margin: 0;
					}

	}
	
	/* Button */

			input[type="button"],
			input[type="submit"],
			input[type="reset"],
			button,
			.button {
				position: relative;
				padding: 0.65em 0 0.65em 0 !important;
				width: 100%;
				text-align: center;
				font-size: 1.25em;
				margin: 0.25em 0 0.25em 0;
			}

				input[type="button"].icon,
				input[type="submit"].icon,
				input[type="reset"].icon,
				button.icon,
				.button.icon {
					padding-right: 1em !important;
				}

}

		</style>
	</head>
   <body style="background-color: #e0d2cc;">
      <?php
         $pkg = Array(
               "title" => "CrunchBag",
					"title_url" => "home.php",
					"links" => Array(
						"about.php" => "About",
						"faq.php" => "FAQ",
						"purchase.php" => "Purchase"
					),
					"activeLink" => "",
               "actionLinks" => Array(
                     "login.php" => "Login",
                     "signup.php" => "Signup"
					)
            );
         include("./Components/header/header.php");
      ?>
		<div class="banner">
			
			<div class="banner-body">
			  <div class="transbox">
				<div class="inner-transbox">
				  <div class="inner-inner-transbox">
					<p class="banner-text-title">crunchy leaves</p>
					<p class="banner-text">any<span class="light-italic">time</span>. any<span class="light-italic">where.</span></p>
				 </div>
				</div>
			  </div> 
			</div>
		</div>
		
		<div class="banner-padding"></div>
		
		
		
						
		<section id="intro" class="container">
								<div class="row">
									<div class="4u 12u(mobile)">
										<section class="first">
											<i class="icon featured fa-leaf"></i>
											<header>
												<h2>Ipsum consequat</h2>
											</header>
											<p>High quality leaves are raked and collected from local neighboorhood families at no charge. Leaves are professionally dried and prepared to prevent breakdown. </p>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="middle">
											<i class="icon featured alt fa-truck"></i>
											<header>
												<h2>Magna etiam dolor</h2>
											</header>
											<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
										</section>
									</div>
									<div class="4u 12u(mobile)">
										<section class="last">
											<i class="icon featured alt2 fa-dropbox"></i>
											<header>
												<h2>Tempus adipiscing</h2>
											</header>
											<p>A CrunchBag leaf bag is stuffed with dry, crisp leaves to be sent to your door step at anytime of year.</p>
										</section>
									</div>
								</div>
									
							</section>
							<style>
								.button-container {
									width: min-content; width: -moz-min-content;
									white-space: nowrap;
									margin: 0 auto;
								}
							</style>
							<div class="button-container">
								<a href="/purchase.php" class="button big">Get Started</a></li>
								<a href="/faq.php" class="button alt big">Learn More</a></li>
							
							</div>
								
	    <td>
			<div class="heading-container">
			<b class="heading-text">
			 How it works
			</b>
			</div>
		<tr>
		<td>	
	    
		<div class="max-inline">
		<div class="step-container">
			<table class="step-table">
				<tr>
					<td class="step-description"><p class="normal-text">
						High quality leaves are raked and collected from local neighboorhood families at no charge.
						</p></td>
					<td class="step-graphic">
						<img src="Assets/step1.png">
					</td>
				</tr>
			</table>
		</div>
		<div class="step-container">
			<table class="step-table">
				<tr>
					<td class="step-graphic">
						<img src="Assets/step2.png">
					</td>
					<td class="step-description">
						<p class="normal-text">
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
						<p class="normal-text">
						 A CrunchBag leaf bag is stuffed with dry, crisp leaves to be sent to your door step at anytime of year.
						</p>
					</td>
					<td class="step-graphic">
						<img src="Assets/step3.png">
					</td>
				</tr>
			</table>
		</div>
		
		</td>		
		</td>
		</table>

		</div>
		</div>
		-->
		<?php include("./Components/footer/footer.php");?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
   </body>
</html>
