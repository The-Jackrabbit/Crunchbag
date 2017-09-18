<html lang="en">
   <head>
		<style>
			div.faq-answer {
				display: none;
			}
			.faq-title {
				padding: 12pt 24pt;
			}
			.faq-title h3 {
				font-size: 16pt;
			}
			.faq-answer {
				padding: 0pt 24pt;
			}
			div.toggle hr {
				border-top: 1pt solid #ddd;
				border-left: 0pt;
			}
		</style>
	</head>
   <body>
		<div class="toggle">
			<hr>
			<div class="faq-title">
				<h3>Are Crunchbags available in stores?</h3>
			</div>
			<div class="faq-answer">
				<p>Crunchbags are not quite ready to be seen on your favorite store’s shelf but we do hope as our business expands we will be able to work with a few retail locations to provide better access to a fun autumn adventure anytime anywhere. </p>
			</div>
		</div>
		<script>
			$('div.toggle').click(function() {
				$(this).children('.faq-answer').toggle();
			})
		</script>
   </body>
</html>
