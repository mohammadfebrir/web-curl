<!DOCTYPE HTML>
<html>
<head>
	<title>DNS KSI-12</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
	<script src="js/jquery.easydropdown.js"></script>
	<!--Animation-->
	<script src="js/wow.min.js"></script>
	<link href="css/animate.css" rel='stylesheet' type='text/css' />
	<script>
		new WOW().init();
	</script>
 </head>
<div>
<div class="header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		   <div class="col-sm-8 header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
								<div class="clearfix"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>
				     <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->						
	    		    <div class="clearfix"></div>
	    	    </div>
	            <div class="col-sm-4 header_right">
	    		      
				              </div>
			             </div>
		                 <div class="clearfix"></div>
	                 </div>
	                <div class="clearfix"></div>
           </div>
	</div>
	</nav><br><br><br>
    <div class="banner">
	  <div class="container_wrap">
		<h1>Sebuah web portal yang memeriksa server domain Anda untuk DNS dan surat kesalahan umum dan menghasilkan laporan dengan penjelasan bagaimana memperbaikinya .</h1>
		<form action="" method="post">
			<input type="text" name="dns" autocomplete="off" value="Masukan Nama Domain..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Masukan Nama Domain...';}">
			<select name="tipe" class="bld">
				<option value="whois">Whois</option>
				<option value="dnsrep">DNS Report</option>
			</select>
			<div class="contact_btn">
			   <label class="btn1 btn-2 btn-2g">
                   <input name="cek" type="submit" id="submit" value="Cari">
               </label>
			</div>
		</form>
		<div class="clearfix"></div>
	  </div>
	</div>

   
  <div class="inner_wrap1">
	<ul class="item_module">
		<li class="module_right">
         <?php
		function cekdns($url){
		// inisialisasi CURL
    	$data = curl_init();
    	// setting CURL
	    curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($data, CURLOPT_URL, $url);
	    curl_setopt($data, CURLOPT_HEADER, 0);
	    // menjalankan CURL untuk membaca isi file
	    $hasil = curl_exec($data);
	    curl_close($data);
	    return $hasil;
	}
	if (isset($_POST['cek'])) {
		$tipe = $_POST['tipe'];
		$dns = $_POST['dns'];
		if ($tipe == 'dnsrep') {
			$page = cekdns('www.intodns.com/'."$dns");
			$regex = '/<div class="content">(.*?)<\/div>/s';
			if ( preg_match($regex, $page, $list) ){
			    echo '
			    <div class="row2">
			    <div class="col-md-8">'.$list[0].'</div>
			    <div class="col-md-4 fix">
			    <table width="99%">
					<thead>
						<tr>
							<th>Dampak</th>
							<th>Resiko</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Bocor</td>
							<td>Basah</td>
						</tr>
					</tbody>
			    </table>
			    </div>
				</div>';
			}else { 
			    print "Not found";
			}
		}else{
			function bacaHTML($url){
               // inisialisasi CURL
               $data = curl_init();
               curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
               curl_setopt($data, CURLOPT_URL, "http://who.cc/whois/".$_POST['dns']);
               $hasil = curl_exec($data);
               curl_close($data);
               return $hasil;
            }

            $link = $_POST['dns'];
            $kodeHTML =  bacaHTML($link);
            echo '
			<div class="row2 text-justify">
				<div class="col-md-8"><h4 class="tengah"><strong>Result<strong></h4></div>
				<div class="col-md-2"><h4 class="tengah"><strong>Dampak</strong></h4></div>
				<div class="col-md-2"><h4 class="tengah"><strong>Resiko</strong></h4></div>
			</div>
            <div class="row2">
            <div class="col-md-8">'.$kodeHTML.'</div>
            <div class="col-md-2 text-justify" style="padding-top: 20px;">
				<h4>Informasi domain server dapat diketahui oleh siapapun. Mulai dari siapa pemilik Domain, dimana alamatnya, no telepon, alamat email, kapan domain ini di daftarkan dan kapan domain ini akan expired</h4>
            </div>
            <div class="col-md-2 text-justify" style="padding-top: 20px;">
				<h4>Informasi domain server dapat didapatkan secara bebas. Jika informasi tersebut valid maka akan informasi akan sangat membantu penyerang untuk melakukan pengujian/serangan pada langkah berikutnya.</h4>
            </div>';
		}
	}

	?>
    </li>
		<div class="clearfix"> </div>
	 </ul>
  </div>

<!-- Tentang Section -->
<section id="Tentang" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Kelompok 1</h2>
				<h3 class="section-subheading text-muted">Keamanan Sistem Informasi (KSI 12)</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<ul class="timeline">
					<li>
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="images/foto.png" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h3>Anggota</h3>
								<h4 class="subheading">Nim    : 10112706</h4>
                                <h4 class="subheading">Nama   : Moch Aldy Mulya Saputra</h4>
							</div>
                            <div class="timeline-body">
                                <p class="subheading"></p>
                            </div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="images/foto.png" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>Anggota</h4>
								<h4 class="subheading">Nim    : 10112695</h4>
                                <h4 class="subheading">Nama   : Mohammad Febri Ramadlan</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted"</p>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="images/foto.png" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>Anggota</h4>
								<h4 class="subheading">Nim    : 10112459</h4>
                                <h4 class="subheading">Nama   : Loviana Mayoreta</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted"></p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<img class="img-circle img-responsive" src="images/foto.png" alt="">
						</div>
						<div class="timeline-panel">
							<div class="timeline-heading">
								<h4>Anggota</h4>
								<h4 class="subheading">Nim    : 10112429</h4>
                                <h4 class="subheading">Nama   : Gani Gunawan Kusdiana</h4>
							</div>
							<div class="timeline-body">
								<p class="text-muted"></p>
							</div>
						</div>
					</li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="images/foto.png" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Anggota</h4>
                                <h4 class="subheading">Nim    : 10112747</h4>
                                <h4 class="subheading">Nama   : Rahmat Syaparudin</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"></p>
                            </div>
                        </div>
                    </li>
				</ul>
			</div>
		</div>
	</div>
</section>

   <div class="footer">
   	 <div class="container">
		 <div class="footer_top">
		   <h3>Silahkan hubungi kami melalui email</h3>
		   <form>
			<span>
				<i><img src="images/mail.png" alt=""></i>
				<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
				<label class="btn1 btn2 btn-2 btn-2g"> <input name="submit" type="submit" id="submit" value="Hubungi"> </label>
				<div class="clearfix"> </div>
			</span>
		   </form>
		 </div>
			<h4>Follow Us</h4>
			<ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
			  <li><a href="www.facebook.com/#"> <i class="fb"> </i> </a></li>
			  <li><a href="www.twitter.com/#"><i class="tw"> </i> </a></li>
			  <li><a href="https://plus.google.com/u/0/105728761345997549794"><i class="google"> </i> </a></li>
			  <li><a href="www.youtube.com/#"><i class="u_tube"> </i> </a></li>
			</ul>
			<div class="copy wow fadeInRight" data-wow-delay="0.4s">
			  <p>2016 KSI 12 by  <a href="#" target="_blank">Kelompok 1</a> </p>
			</div>
	 </div>
	   <div class="clearfix"> </div>
   </div>
</body>
</html>		