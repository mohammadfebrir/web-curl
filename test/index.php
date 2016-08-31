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
						    	<li class="active"><a href="index.php">Home</a></li>
								<!--<li><a class="page-scroll" href="#Fitur">Fitur</a></li>-->
						    	<li><a class="page-scroll" href="#Tentang">Tentang</a></li>
						    	<li><a class="page-scroll" href="#Kontak">Kontak</a></li>
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
			<input type="text" name="url" value="Masukan Nama Domain..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Masukan Nama Domain...';}">
			<div class="contact_btn">
			   <label class="btn1 btn-2 btn-2g">
                   <input name="cari" type="submit" id="submit" value="Cari"></label>
			</div>
		</form>
		<div class="clearfix"></div>
	  </div>
	</div>

   
  <div class="inner_wrap1">
	<ul class="item_module">
		<li class="module_right">
         <?php
         error_reporting(0);
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
        ?>
    </li>
		<div class="clearfix"> </div>
	 </ul>
  </div>

<!-- Fitur Section -->
<!--<section id="Fitur">-->
	<!--<div class="clearfix"></div>
	<div class="offering">
		<h2>Fitur yang kami tawarkan</h2>
		<h3>Examples report</h3>
		<div class="real">
			<h4>Fitur</h4>-->
			<!-- 1 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>MX Lookup</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 2 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Blacklist Check</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 3 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>DNS Lookup</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 4 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Test Email Server</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 5 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Reverse Lookup</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 6 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Whois Lookup</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 7 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>DNS Check</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 8 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>SPF Record Lookup</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 9 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>DKIM Lookup</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 10 -->
            <!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Port Scan</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 11 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>AAAA,SRV,DNSKEY,CERT,LOC,IPSECKEY Lookup</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 12 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Domain Health</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 13 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>What is My IP</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 14 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>ASN,ARIN,CNAME,TXT,SOA,TCP,HTTP,HTTPS Lookup</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 15 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Ping</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 16 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Trace</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 17 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Email Deliverability</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>-->
			<!-- 18 -->
			<!--<div class="col-sm-6">
				<ul class="service_grid">
					<i class="s1"> </i>
					<li class="desc1 wow fadeInRight" data-wow-delay="0.4s">
						<p>Brand Reputation</p>
					</li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</section>-->

<!-- Tentang Section -->
<section id="Tentang" class="bg-light-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading">Tentang</h2>
				<h3 class="section-subheading text-muted">Kelompok 1 KSI</h3>
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
								<h4>Nama   :Moch Aldy Mulya Saputra</h4>
								<h4 class="subheading">Nim    :10112706</h4>
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
								<h4>Nama   :Mohammad Febri Ramadlan</h4>
								<h4 class="subheading">Nim    : 10112695</h4>
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
								<h4>Nama   :Loviana Mayoreta</h4>
								<h4 class="subheading">Nim    : 10112459</h4>
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
								<h4>Nama   :Gani Gunawan K</h4>
								<h4 class="subheading">Nim    : 10112429</h4>
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
                                <h4>Nama   :Rahmat Syaparudin</h4>
                                <h4 class="subheading">Nim    : 10112747</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"></p>
                            </div>
                        </div>
                    </li>
					<li class="timeline-inverted">
						<div class="timeline-image">
							<h4>Be Part
								<br>Of Our
								<br>Story!</h4>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- Kontak Section -->
<section id="Kontak">
	<div class="contact">
		<div class="container">
			<h1>Kontak Kami</h1>
			<div class="col-md-9 wow fadeInLeft" data-wow-delay="0.4s">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63372.402356235354!2d107.61912279999999!3d-6.917463900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f8aa08188b%3A0x632d24e6061e8903!2sUNIKOM!5e0!3m2!1sid!2sid!4v1459782913643" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
			</div>
			<div class="col-md-3 wow fadeInRight" data-wow-delay="0.4s">
				<address class="address">
					<p>DNS KSI-12, <br>Unikom.</p>
					<dl>
						<dt></dt>

						<dd>Telephone:<span> xxxxx</span></dd>
						<dd>FAX: <span>xxxxx</span></dd>
						<dd>E-mail:&nbsp; <a href="alldymulya@gmail.com">Kelompok1@gmail.co</a></dd>
					</dl>
				</address>
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