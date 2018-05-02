<?php
	$x = $_GET['num1'];

	if ($x >= 97) {
		echo "Your grade point equivalence is 1.00";
	} else if ($x >=92 && $x <=96 ) {
		echo "Your grade point equivalence is 1.25";
	} else if ($x >=87 && $x <=91 ) {
		echo "Your grade point equivalence is 1.50";
	} else if ($x >=82 && $x <=86 ) {
		echo "Your grade point equivalence is 1.75";
	} else if ($x >=77 && $x <=81 ) {
		echo "Your grade point equivalence is 2.00";
	} else if ($x >=72 && $x <=76 ) {
		echo "Your grade point equivalence is 2.25";
	} else if ($x >=68 && $x <=71 ) {
		echo "Your grade point equivalence is 2.50";
	} else if ($x >=64 && $x <=67 ) {
		echo "Your grade point equivalence is 2.75";
	} else if ($x >=60 && $x <=63 ) {
		echo "Your grade point equivalence is 3.00";
	} else if ($x >=54 && $x <=59 ) {
		echo "Your grade point equivalence is 4.00";
	} else if ($x <=53 ) {
		echo "Your grade point equivalence is 5.00";
	} else {
		echo "You have entered a wrong number. Please refresh page.";
	}

?>