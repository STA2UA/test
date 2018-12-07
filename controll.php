<?php
	$order = $_GET["order"];
	$value = $_GET["value"];
	$controll_file = 'order.txt';

	if ($order == "set") {
		file_put_contents($controll_file, "");
	}

	if ($order == "get") {
		$order = file_get_contents($controll_file);
		file_put_contents($controll_file, $value);
		echo $order;
	}


?>
