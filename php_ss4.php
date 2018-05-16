<?php
	$num=$_GET['num1'];
	$num2=0;

	echo "The Multiplication Table of "; echo $num; echo "<br>";

	for($num2=1; $num2<=10; $num2++) {
        echo $num; echo " x  "; echo $num2; echo " = ";  echo $num*$num2; echo "<br>";
        }

	


?>