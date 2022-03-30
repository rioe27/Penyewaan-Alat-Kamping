<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Diaz Adventure</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url().'assets/sbadmin/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url().'assets/sbadmin/vendor/datatables/dataTables.bootstrap4.css'?>" rel="stylesheet" >

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'assets/sbadmin/css/sb-admin.css'?>" rel="stylesheet">
  
  <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>

	<body id="page-top">

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">Diaz Adventure</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
        <i class="fas fa-search"></i>
        </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Logout</a>
        </div>
      </li>
    </ul>
</nav>

	<div id="wrapper">

        <!-- Sidebar -->
	<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('Dasboard/admin') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
	  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pembayaran</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="<?php echo site_url('pembayaran/index') ?>">Pembayaran</a>          
         
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Penyewaan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="<?php echo site_url('Penyewaan_admin/index') ?>">Laporan Sewa Alat</a> 
          
        </div>
      </li>
	  
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pengembalian</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">  
          <a class="dropdown-item" href="<?php echo site_url('Pengembalian_admin/index') ?>">Laporan Pengembalian</a> 
          <!---<!---<a class="dropdown-item" href="<?php echo site_url('Pengembalian_admin/cek') ?>">Pengecekan Alat</a>-->         
        </div>	
      </li>
	  
	  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <i class="fas fa-fw fa-folder"></i>
			  <span>Kerusakan Alat</span>
			</a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">          
			 <a class="dropdown-item" href="<?php echo site_url('kerusakan/index') ?>">Laporan Kerusakan Alat</a> 
			 <a class="dropdown-item" href="<?php echo site_url('kerusakan/add') ?>">Tambah Data Kerusakan Alat</a>          
        </div>
		
    </ul>

<!-- DataTables -->
<div id="content-wrapper">
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Laporan Penyewaan Alat</li>
        </ol>

        <!-- Detail Laporan -->
       <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Halaman Denda</div>
        <div class="card-body">
            <div class="table-responsive">
			
           <form role="form" action="<?php echo base_url(); ?>Pengembalian_admin/simpan_status" method="POST" enctype="multipart/form-data"> 
			<?php
				
				//$tglkembali = new DateTime('tgl_pengembalian');
				//$skrg = new DateTime();
				//$skrg->modify("-1 days");
				//$difference = $skrg->diff($tglkembali);
				
			?>
			
			<div class="panel-body">
                <form action="">
                    <fieldset>
                        <div class="form-group">
                            <label>ID_sewa</label>
                            <input class="form-control" readonly name="ID_sewa" value="<?php echo $ID_sewa; ?>" />
                        </div>
						
                        <div class="form-group">
                            <label>Nama Peminjam</label>
                            <input class="form-control" name="nama" value="<?php echo $nama; ?>" />
                        </div>
						
                        <div class="form-group">
                            <label>Nama Alat</label>
                            <input class="form-control" name="nama_alat" value="<?php echo $nama_alat; ?>" />
                        </div>
						
						<div class="form-group">
                            <label>Tanggal Penyewaan</label>
                            <input class="form-control" name="tgl_penyewaan" value="<?php echo $tgl_penyewaan; ?>" />
							
                        </div>
						
						 <div class="form-group">
                            <label>Tanggal Pegembalian</label>
                            <input class="form-control" name="tgl_pengembalian" value="<?php echo $tgl_pengembalian; ?>" />
							
                        </div>
						
						<div class="form-group">
                            <label>Telat</label>
                            <input class="form-control" name="tgl_pengembalian" value="<?php echo $sandi; ?>" />
							
                        </div>
						
					<!--	<div class="form-group">
                            <label>Tanggal Sekarang</label>
                            <input class="form-control" value="<?php //echo $skrg->format('d M Y'); ?> Hari" />							
                        </div>
						
						<div class="form-group">
                            <label>Telat Pegembalian</label>
                            <input class="form-control" value="<?php //echo  $difference->days; ?> Hari" />							
                        </div>-->
						
						<div class="form-group">
                            <label>Status Pengembalian</label>
                            <select class="form-control" name="status" value="<?php echo $status; ?>">
                                <option>Belum Di Kembalikan </option>
                                <option> Di Kembalikan</option>               
                             </select>
                        </div>
						
                        <div class="form-group">
                            <label>Denda</label>
							<input class="form-control"  type="hidden"  name="denda1" value="<?php echo $denda; ?>">
							<input class="form-control" type="text" name="denda" value="Rp. <?php echo $denda; ?>">
                       <?php
					   echo @$error;
					   ?>
					   </div>
														
						<div class="form-group">
                            <label>Keterngan</label>
                            <textarea class="form-control" rows="2" name="keterangan" value="<?php echo $keterangan; ?>" ></textarea>
                        </div>	
						
                    </fieldset>
                            
                        <div>
                            <button type="submit" class="btn btn-primary">Ubah </button>
						</div>             			
                </form>
            </div>
			
			</form>
			  			  
            </div>
        </div>
          <div class="card-footer small text-muted"><?php echo "Update " . date("Y-m-d") . "<br>";?></div>
        </div>     

    </div>          

</div>


      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('login/logout'); ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url().'assets/sbadmin/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'assets/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url().'assets/sbadmin/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url().'assets/sbadmin/vendor/datatables/jquery.dataTables.js'?>"></script>
  <script src="<?php echo base_url().'assets/sbadmin/vendor/datatables/dataTables.bootstrap4.js'?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url().'assets/sbadmin/js/sb-admin.min.js'?>"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url().'assets/sbadmin/js/demo/datatables-demo.js'?>"></script>
  </body>
</html>