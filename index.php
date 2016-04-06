<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>cURL</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="url" placeholder="Type URL Here">
		<input type="submit" name="cari" value="Cari">	
	</form>
	
	<?php
	if(isset($_POST['cari'])) {
		$url = $_POST['url'];
		$curl=curl_init('http://www.dnssy.com/lookup.php?q='.$url.'&t=SOA');
	 
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		 
		$data=curl_exec($curl);
		 
		curl_close($curl);
		
		echo $data;
	}
	?>
</body>
</html>