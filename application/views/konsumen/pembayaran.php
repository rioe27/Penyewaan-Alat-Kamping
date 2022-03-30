<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Konfirmasi Pembayaran</li>
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
		<fieldset>
		 
		           <div class="table-responsive">
    <div class="col-md-4">
		<div class="row">
		  		<div class="col-md-12">
		  				
					
	<div class="panel-body">
		<form role="form" action="<?php echo base_url(); ?>konfirmasi/insert" method="POST" enctype="multipart/form-data"> 
								
			<div class="form-group">
				<label>Nama</label>
				<input class="form-control" type="text" name="nama" />
			</div>
									
			<div class="form-group">
				<label>No Tlpn</label>
				<input class="form-control"  type="text" name="no_tlpn">
			</div>
			
			<div class="form-group">
				<label>Atas Nama</label>
				<input class="form-control"  type="text" name="atas_nama">
			</div>
								  
			<div class="form-group">
				<label>Tanggal Transfer</label>
				<input class="form-control"  type="date"  name="tgl_transfer" required >
			</div>
									
			<div class="form-group">
				<label>Bank</label>
					<select class="form-control" name="bank">
						<option> Pilih Bank </option>
						<option> BRI </option>
						<option>BNI</option>
						<option>BCA</option>					
						<option>MANDIRI </option>
						<option>CIMB </option>										
																		
					</select>
			</div>
								   
			<div class="form-group">
				<label>No Rekening</label>
				<input class="form-control"  type="text"  name="no_rek">
			</div>
									
			
									
			<div class="form-group">
				<label>Nominal Transfer</label>
				<input class="form-control"  type="text"  name="nominal_tf">												
			</div>												
									
			<div class="form-group">						
                <label>Bukti Transfer</label>                       
                <input type="file" name="file_upload" />                        
             </div>                       
									
			<div class="form-group">					
								
				<button type="submit" class="btn btn-success">Simpan </button>						
				<a class="btn btn-success" href="<?php echo base_url();?>konfirmasi">Kembali</a>					
			</div class="form-group">						
									
									
		</form>
			</div>
	</div>
					
				</div>
        </div>
    </div>
            </div>
       
		</fieldset>
       
  
          
        </div> 
		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
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
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
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
