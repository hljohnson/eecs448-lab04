<?php
	echo '<table border= "1">';
	
	$emptyCell = " ";
	for($idx = 0; $idx <= 100; $idx++) {
		echo"<tr>".PHP_EOL;
		for($idx2 = 0; $idx2 <= 100; $idx2++) {
			/* first row */
			if($idx == 0) {
				/*account for necessary empty cell at start of row*/
				if($idx2 == 0) {
					echo "<td>".$emptyCell."</td>";
				}
				else {
					echo "<td>".$idx2."</td>";
				}
			}	
			else if($idx2 == 0 && $idx != 00) { echo "<td>".$idx."</td>"; }
			else {echo "<td>".$idx*$idx2."</td>"; }
		}
		echo"</tr>".PHP_EOL;
		
	}

	echo '</table>';




?>
