<!DOCTYPE html>
 <?php echo $this->session->flashdata('gagal_login'); ?>
<html class="no-js" lang="en">
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
		
		<link href="<?php echo base_url().'assets/sbadmin/vendor/datatables/dataTables.bootstrap4.css'?>" rel="stylesheet" >
		
		<!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->

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
						<!--<h3>Selamat Datang <?php //echo $user->username;?></h3>-->
						<li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-user-o"></i> Log Out</a></li>
						
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
									<h2> Diaz_Adventure </h2>
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
								

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Sewa</span>									
										<a href="#">
									</a>									
								</div>
								<!-- /Cart -->
								
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
						<li><a href="<?php echo base_url('user/index'); ?>">Home</a></li>						
						<li><a href="index.php/about">About</a></li>
						<li><a href="<?php echo base_url('user/persyaratan'); ?>">Persyaratan</a></li>
						<li><a href="<?php echo base_url('user/sewa'); ?>">Sewa Alat</a></li>
						<li><a href="<?php echo base_url('konfirmasi/index'); ?>">Pembayaran</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
		
	<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					 <div class="table-responsive">
							<form method="post" action="<?php echo base_url("user/pencarian")?>">
                          <div class="col-md-2 col-sm-2 col-xs-2" align="center">Alat Kamping
                              <select class="form-control" name="sinbi">
                            <option>Alat Kamping</option>
                            <option>Tenda</option>
                            <option>Cooking Set</option>
                            <option>Jacket</option>
                            <option></option>
                          </select></div>
                         
                        <br><input type="submit" class="btn btn-primary" value="Cari"></div>
                        </form> <br>
					<!-- /section title -->
										
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									 <?php 
							foreach ($sewa as $alat ) {
                     ?>
									<form action ="<?php echo base_url(); ?>user/pinjam" method = 'POST'>
										<!-- product -->
										<div class="product">
											<div class="product-img">
												  <img src="<?php echo base_url()."assets/"; ?>img/<?php echo $alat->gambar; ?>" alt="gambar">
												
											</div>
											<div class="product-body">
												<p class="product-category"><?php echo $alat->kategori; ?></p>
												<h3 class="product-name"><a href="<?php echo base_url();?>user/lihat/<?php echo $alat->ID_alat; ?>"> <?php echo $alat->nama_alat; ?></a></h3>
												<div class="col-md-8">
												<h4 class="product-price">Rp <?php echo number_format($alat->harga_sewa,0,".",".") ?>  / Hari</h4>
												</div>
												<div class="col-md-4">
												<input type="hidden" name="ID_sewa" value="<?php echo $alat->ID_alat;?>" >
												<input type="hidden" name="nama_alat" value="<?php echo $alat->nama_alat;?>" >
												<input type="hidden" name="harga_sewa" value="<?php echo $alat->harga_sewa;?>" >
												
												<input type="number" name="jumlah_alat" id="<?php echo $alat->ID_alat;?>" value="1" class="quantity form-control"> 
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"> <i class="fa fa-shopping-cart"></i> Sewa</button>
											</div>
											
										</div>
										<!-- /product -->
									</FORM>
						   <?php
            }
                           
                         ?>		
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
					
					
					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- FOOTER -->
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
									<li><a href="#"><i class="fa fa-envelope-o"></i>Diaz_AdventureRent@yahoo.com</a></li>
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
			
			<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</span>
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