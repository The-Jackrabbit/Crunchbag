<style>
	.error-dialogue-container {
		width: 100%;
		z-index: 10000;
		display: none;
		background-color: #FFB2AD;
	}
	.error-dialogue-body {
		margin: 6pt 0pt;
		padding: 6pt;
		border: 1pt solid lightgray;
	}
</style>
<div id="error-dialogue" class="error-dialogue-container">
	<div class="error-dialogue-body">
		<p>
			<?php echo $text;?>
		</p>
	</div> 
</div>
