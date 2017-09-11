<style>
	#dropdown-menu {
		background-color: #D45C4C;
		width: 200pt;
		height:100%;
		z-index: 1000;
	}
	.head {
		background-color: #B23323;
		height: min-content;
		width: 100%;
	}
	.dropdown-link {
		padding: 15pt 5pt;
	}
	#dropdown-menu a {
		color: white;
		text-decoration: none;
		font-size: 18pt;
	}
	.dropdown-callToAction {
		padding: 10pt 18pt;
		margin: 0 auto;
	}
	.dropdown-callToAction input {
		width: 75pt;
		padding: 4pt 0pt;
		margin-bottom: 10pt;
		font-size: 14pt;
		border: none;
	}
	.dropdown-callToAction input.signup {
		background-color: #F0AF45;
		color: white;
		float: right;
		
	}
	.head {
		padding: 20pt 0pt;
	}
	.head p.dropdown-minify {
		height: 20pt;
		padding-right: 15pt;
		text-align: end;
		color: #6E1A0F;
		font-size: 20pt;
		cursor: pointer;
	}
</style>
<div id="dropdown-menu">
	<div class="head">
		<p class="dropdown-minify" id="minify">X</p>
	</div>
	<div class="dropdown-links">
	<?php
		foreach ($pkg["links"] as $url => $link) {
			echo "<div class='dropdown-link'>
						<p>
							<a href='./${url}'>{$link}</a>
						</p>
						
					</div>
					<hr>";
		};
	?>
	</div>
	<div class="dropdown-callToAction">
		<div  >
		<input type="button" value="Login" class="login">
		<input type="button" value="Signup" class="signup">
		</div>
	</div>
	<script>
		$("#minify").click(function() {
			$("#dropdown-menu-container").toggle();
		})
	</script>
</div>