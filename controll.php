<?php
	$controll_file = 'order.txt';

	$order = file_get_contents($controll_file);
	file_put_contents($controll_file, "");
	echo $order;
?>
