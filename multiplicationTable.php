<?php
	echo '<table border= "1">';

	$emptyCell = " ";

	for($idx = 0; $idx <= 100; $idx++) {
		// Begin Row
		echo"<tr>";
		for($idx2 = 0; $idx2 <= 100; $idx2++) {
			// Check if first row
			if($idx == 0) {
				// Account for necessary empty cell at start of row
				if($idx2 == 0) {
					echo "<td>".$emptyCell."</td>";
				}
				else {
					echo "<td>".$idx2."</td>";
				}
			}
			// Check if current cell is positioned on first column or row
			else if($idx2 == 0 && $idx != 0) { echo "<td>".$idx."</td>"; }
			// If curren cell is not positioned on first column or row, put
			// product of column and row numbers in cell
			else {echo "<td>".$idx*$idx2."</td>"; }
		}
		// end row
		echo"</tr>";

	}

	echo '</table>';




?>
