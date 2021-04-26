<?php
	libxml_use_internal_errors(true);
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	$eraser = filter_input(INPUT_POST, 'eraser', FILTER_VALIDATE_INT);
	$bulletPen = filter_input(INPUT_POST, 'bulletPen', FILTER_VALIDATE_INT);
	$highLighter = filter_input(INPUT_POST, 'highLighter', FILTER_VALIDATE_INT);
	$shipping = $_POST['shipping'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$delivery = 0;
	$deliveryTag = "";
	$total = 0;

	

	if($shipping == "free"){
		$delivery = 0;
		$deliveryTag = "Free shipping";
	}else if($shipping == "threeDay"){
		$delivery = 5;
		$deliveryTag = "Three Days";
	}else if ($shipping == "overNight"){
		$delivery = 20;
		$deliveryTag = "Over Night";
	}
	
	$eraserCost = 3;
	$bulletPenCost = 5;
	$highLighterCost = 8;

	$total = ($eraserCost * $eraser) + ($highLighterCost * $highLighter) + ($bulletPenCost * $bulletPen);
	$total += $delivery;



	echo "<!DOCTYPE html>
	<html>
	<head>
		<title>Purchase Success</title>
		<link rel='stylesheet' type='text/css' href='style.css'>
	</head>
	<body>
		<p align='left'>Your username is: ". $username . 
		"<br>Your password is: " . $password .
		 "</p>";
	
	echo "<p align='left'>Here is a copy of your receipt:</p>";
	echo "<table><thead><tr>";
	echo "<th></th>";
	echo "<th>Quantity</th>" ; 
	echo "<th>Cost Per Item</th>";
	echo "<th>Sub Total</th></tr></thead>";
	
	echo "<tbody><tr><th>Eraser</th>";
	echo "<td>". $eraser . "</td>";
	echo "<td>$5</td>" ;
	echo "<td>$" . ($eraserCost * $eraser) . "</td>";

	echo "<tbody><tr><th>Bullet Pen</th>";
	echo "<td>". $bulletPen . "</td>";
	echo "<td>$5</td>" ;
	echo "<td>$" . ($bulletPenCost * $bulletPen) . "</td>";
	
	echo "<tbody><tr><th>highLighter</th>";
	echo "<td>". $highLighter . "</td>";
	echo "<td>$10</td>" ;
	echo "<td>$" . ($highLighterCost * $highLighter) . "</td>";

	echo "<tbody><tr><th>Shipping</th>";
	echo "<td colspan='2'>". $deliveryTag . "</td>";
	echo "<td>$" . $delivery . "</td>";

	echo "<tbody><tr><th colspan='3'>Total Cost</th>";
	echo "<th>$" . $total . "</th>";

	echo "</tbody></table>";

	echo "</body>
	</html>";
?>
