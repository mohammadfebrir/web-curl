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
if (isset($_POST['cari'])) {
 	function bacaHTML($url){
       // inisialisasi CURL
       $data = curl_init();
       // setting CURL
       //SSL VERIFY
       //curl_setopt($data, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
       curl_setopt($data, CURLOPT_URL, "http://who.cc/whois/".$_POST['url']);
       //curl_setopt($data, CURLOPT_POST, 1);
       //curl_setopt($data, CURLOPT_POSTFIELDS, "domain=" . $_POST['url'] . "&mode=" . $_POST['mode']);
       // menjalankan CURL untuk membaca isi file
       $hasil = curl_exec($data);
       curl_close($data);
       return $hasil;
   	}

    $link = $_POST['url'];
	$kodeHTML =  bacaHTML($link);
	//SCRAPPING
    // $pecah = explode('<div class="outPut2">', $kodeHTML);
    // $pecahLagi = explode('</div>', $pecah[1]);
    //echo "<ul>".$pecahLagi[0]."</div>";
    echo $kodeHTML;
  }
?>

</body>
</html>