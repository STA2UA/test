<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");        
header("Access-Control-Allow-Orgin: ".((isset($_SERVER['HTTP_ORIGIN'])) ? $_SERVER['HTTP_ORIGIN'] : "*"));
header("Access-Control-Allow-Headers: X-Requested-With"); 
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

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
