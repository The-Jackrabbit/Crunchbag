<?php
	if ($result->num_rows > 0) {
		echo '<table><thead><tr>';
		// Make Header
			while ($row = $result->fetch_assoc()) {
				foreach ($row as $key=>$value) {
					echo "<th>", $key, "</th>";
				}
			}
			echo '</tr></thead>';
		// MAKE BODY
		echo '<tbody>';
		while ($row = $result->fetch_assoc()) {
			echo "<tr>";
			foreach ($row as $key=>$value) {
				echo "<td>", $value, "</td>";
			}
			echo "</tr>";
		}
		echo '</tbody></table>';
	}
?>