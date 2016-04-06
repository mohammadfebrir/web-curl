<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>cURL</title>
</head>
<body>
	<a href="proses.php">Link</a>
	<form action="" method="post">
		<input type="text" name="keyword" placeholder="Type text here">
		<input type="submit" name="cari" value="Cari">	
	</form>
	
	<?php
	if(isset($_POST['cari'])) {
		$keyword = $_POST['keyword'];
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, 'http://www.google.com/search?hl=en&q='.urlencode($keyword).'&btnG=Google+Search&meta='); 
		$data = curl_exec($ch); 
		curl_close($ch);
		echo $data;
	}
	?>
</body>
</html>