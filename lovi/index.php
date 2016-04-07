<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Grabing using cURL</title>
</head>
<body>
	<form action="http://www.dnsinspect.com/reports" method="post">
		<input type="text" name="name" placeholder="input dns here">
		<input type="submit" name="submit" value="Cari">
	</form>
	<?php
		if (isset($_POST['submit'])) {
			/*$dns = 'mayoreta.com';
			$url = 'http://www.dnsinspect.com/reports';
			$curl_handle = curl_init();
			curl_setopt($curl_handle, CURLOPT_URL, "$url");
			curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 2);
			curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl_handle, CURLOPT_POST, 1);
			curl_setopt($curl_handle, CURLOPT_POSTFIELDS, "name=$dns");
			$buffer = curl_exec($curl_handle);
			curl_close($curl_handle);
			// check for success or failure
			if (empty($buffer)) {
			    echo 'failed';
			} else {
			    echo 'success';
			}*/
			/*$dns = $_POST['name'];
			$ch = curl_init();
			$post = array('name' => 'mayoreta.com');
			curl_setopt($ch, CURLOPT_URL,"http://www.dnsinspect.com/reports");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post)	;
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$server_output = curl_exec ($ch);

			curl_close ($ch);

			echo $server_output;*/
		}
	?>
</body>
</html>