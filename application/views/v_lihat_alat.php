<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Diaz Adventure</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/electro/css/bootstrap.min.css' ?>"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/electro/css/slick.css' ?> " />
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/electro/css/slick-theme.css'?>"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/electro/css/nouislider.min.css'?>"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="<?php echo base_url().'assets/electro/css/font-awesome.min.css'?> ">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="<?php echo base_url().'assets/electro/css/style.css'?>"/>
 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +6285257587234</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> Diaz_AdventureRent@yahool.com</a></li>
						<li><a href="https://www.google.com/maps/dir/-7.973006,112.6079458/diaz+adventure+malang/@-7.9635559,112.6183499,18z/data=!4m9!4m8!1m1!4e1!1m5!1m1!1s0x2e78827872bb10cf:0x867405c6ae9018a2!2m2!1d112.619174!2d-7.953322">
						<i class="fa fa-map-marker"></i> Jl Mayjen Panjaitan no 187</a></li>
					</ul>
					<ul class="header-links pull-right">
			
						<li><a href=""><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
								<p>	Diaz Adventure </p>
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>					
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
	
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="<?php echo base_url('beranda/index'); ?> ">Home</a></li>					
						<li><a href="#">About</a></li>
						<li><a href="<?php echo base_url('beranda/persyaratan'); ?>">Persyaratan</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->


		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Home</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Detail Alat</a></li>							
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
<section class="content right_sidebar">
			<div class="container">
				<div class="row"> 
				<?php 
                   foreach ($sewa as $alat) { ?>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<div class="blog_large">
							<article class="post">
								<figure class="post_img">

										<img class="img-thumbnail" src="<?php echo base_url()."assets/"; ?>img/<?php echo $alat->gambar; ?>" alt="blog post">		
									
								</figure>
								
							</article>

						</div>

					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="post_content">
									<div class="post_meta">
									<?php echo $this->session->flashdata('lihat'); ?>
									<div class="col-md-6">
									Nama Alat :
										<h2><blockquote class="default">
											 <?php echo $alat->nama_alat; ?>
											 </blockquote>
										</h2>
										<hr>
									</div>
								
									<div class="col-md-6">
									<p>Harga :</p>
									<blockquote class="default">
										Rp <?php echo number_format($alat->harga_sewa,0,".",".") ?>  / Hari
										</blockquote>
										<hr>
										</div>									
									</div>
									
									<div class="col-md-6">
										<p>Kategori :</p>
										<blockquote class="default">
										<?php echo $alat->kategori; ?>
										</blockquote>
										<hr>
										<p>Stok Alat :</p>
										<blockquote class="default">
										<?php echo $alat->stok_alat; ?>
										</blockquote>
										<hr>
									</div>
									
									<div class="col-md-6">
										<p>Warna :</p>
										<blockquote class="default">
										<?php echo $alat->warna; ?>
										</blockquote>
										<hr>
										<p>Deskripsi :</p>
										<blockquote class="default">
										<?php echo $alat->deskripsi; ?>
										</blockquote>
										<hr>
									</div>
										
									<div class="col-md-12">
									<a href="<?php echo base_url('beranda/ceklogin'); ?> " class="btn btn-primary btn-lg"><i class="fa fa-cart-plus"></i> Sewa</a>
									</div>
									<br>
									<br>
						</div>
					</div>
					<?php } ?>
				<!--start info service-->

        <section class="info_service">
            <div class="container">
                <div class="row sub_content">
                    <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInDown">
                    <br>
                    <br>
                        <h1 class="intro text-center">Info ! Transaksi pemesanan</h1>
                    </div>
                    <div class="rs_box">
                        <div class="col-sm-4">
                            <div class="serviceBox_1">
                                <div class="service-icon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Pembayaran</h3>
                                    <p>Lakukan transaksi pembayaran ke bank yang telah ditentukan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="serviceBox_1">
                                <div class="service-icon">
                                    <i class="fa fa-check-square-o"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Konfirmasi pembayaran</h3>
                                    <p>Lakukan konfirmasi pembayaran untuk menyelesikan pemesanan kos anda.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="serviceBox_1">
                                <div class="service-icon">
                                    <i class="fa fa-print"></i>
                                </div>
                                <div class="service-content">
                                    <h3>Cetak Bukti</h3>
                                    <p>Cetak bukti pemesanan anda dan selajutnya diserahkan kepada pemilik kos,untuk mendapatkan kos pesanan anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
			<!-- /container -->
	
		<!-- /SECTION -->

	

		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Tempat Penyewaan alat kamping.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Jl Mayjen Panjaitan no 187</a></li>
									<li><a href="#"><i class="fa fa-phone"></i> +6285257587234</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>Diaz_AdventureRent@yahool.com</a></li>
								</ul>
							</div>
						</div>					

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Persyaratan</a></li>

								</ul>
							</div>
						</div>

					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>


						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->
		
		<!-- jQuery Plugins -->
		<script src="<?php echo base_url().'assets/electro/js/jquery.min.js' ?> "></script>
		<script src="<?php echo base_url().'assets/electro/js/bootstrap.min.js'?> "></script>
		<script src="<?php echo base_url().'assets/electro/js/slick.min.js'?> "></script>
		<script src="<?php echo base_url().'assets/electro/js/nouislider.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/electro/js/jquery.zoom.min.js'?>"></script>
		<script src="<?php echo base_url().'assets/electro/js/main.js'?>"> </script>

	</body>
</html>
