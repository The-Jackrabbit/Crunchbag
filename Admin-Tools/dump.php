<style>
	table.dump {
		border-collapse: collapse;
	}
	table.dump thead {
		background-color: #C076B7;
	}
	table.dump tbody {
		background-color: #EED5FF;
	}
	table.dump th, table.dump td {
		border: 1pt solid gray;
		padding: 2pt;
	}
</style>
<?php 
	echo '
		<table class="dump">
			<thead>
				<tr>
					<th>Var</th>
					<th>Value</th>
				</tr>
			</thead>
	';
	if ($source->num_rows > 0) {
		foreach( array_keys($source) as $keys) {
			echo '<tr><td>', $keys, '</td><td>';
			if (is_array($source[$keys])) {
				$source =$source[$keys]; 
				include("dump.php");
			} else {
				echo $source[$keys];
			}
			echo '</td></tr>';
		}
	}
	
	echo '</table>';
?>