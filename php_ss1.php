<?php


$x = $_GET['num1'];
$y = $_GET['num2'];

function sum($x,$y) {
	$result = $x + $y;
	return $result;
	}

function difference($x,$y)
	{
	$result = $x - $y;
	return $result;
	}

function product($x,$y)
	{
	$result = $x * $y;
	return $result;
	}

function quotient($x,$y)
	{
	$result = $x / $y;
	return $result;
	}


print $x. " + " .$y. " = " .sum("$x","$y"). "<br>"; 
print $x. " - " .$y. " = " .difference("$x","$y"). "<br>";
print $x. " x " .$y. " = " .product("$x","$y"). "<br>";
print $x. " / " .$y. " = " .quotient("$x","$y"). "<br>";



?>