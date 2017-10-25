<?php
session_start();
print_r($_SESSION);
echo $_SESSION;

echo session_id();

?>
<table>
	<tr>
		<th>Field</th>
		<th>Value</th>
	</tr>
	<tr>
		<td>$_SESSION["cart"]</td>
		<td><?php print_r($_SESSION["cart"]);?></td>
	</tr>
</table>