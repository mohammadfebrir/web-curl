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
	function bacaHTML($url){
       // inisialisasi CURL
       $data = curl_init();
       // setting CURL
       curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($data, CURLOPT_URL, $url);
       // menjalankan CURL untuk membaca isi file
       $hasil = curl_exec($data);
       curl_close($data);
       return $hasil;
   	}

   	$link = $_POST['url'];
	$kodeHTML =  bacaHTML($link);
    $pecah = explode('<div class="menu">', $kodeHTML);
    $pecahLagi = explode('</div>', $pecah[1]);
    echo "<ul>".$pecahLagi[0]."</div>";
?>

</body>
</html>