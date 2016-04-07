<?php
	$name = $_POST['url'];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://www.dnsinspect.com/reports");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $name);
	$output = curl_exec($ch);
	$info = curl_getinfo($ch);
	curl_close($ch);
	echo $output;
 ?>