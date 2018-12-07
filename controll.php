<?php
header("Access-Control-Allow-Origin: *");

	$order = $_GET["order"];
	$value = $_GET["value"];
	$controll_file = 'order.txt';
	if ($order == "set") {		
		file_put_contents($controll_file, $value);
	}
	if ($order == "get") {
		$order = file_get_contents($controll_file);
		file_put_contents($controll_file, "");
		echo $order;
	}
?>
