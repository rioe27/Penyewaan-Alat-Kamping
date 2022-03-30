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

    <a class="navbar-brand mr-1" href="index.html">Diaz Adventure</a>

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
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo site_url('Dasboard/index') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
	  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Stok Alat</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="<?php echo site_url('gudang/index') ?>">Data Alat</a> 
          <a class="dropdown-item" href="<?php echo site_url('gudang/add') ?>">Tambah Alat</a>
         
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Penyewaan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="<?php echo site_url('Penyewaan_gudang/index') ?>">Laporan Sewa Alat</a> 
          
        </div>
      </li>
	  
	  <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pengembalian</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="<?php //echo site_url('Pengembalian_gudang/index') ?>">Laporan Pengecekan Alat</a> 
          <a class="dropdown-item" href="<?php //echo site_url('Pengembalian_gudang/index') ?>">Pengecekan Alat</a>
         
        </div>
		
      </li>-->
    </ul>

<!-- DataTables -->
		     <div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item ">Laporan Sewa Alat</li>
        </ol>

        <!-- DataTables Example -->
   <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Laporan Sewa</div>
          <div class="card-body">
           
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
						<th>No   </th>    
						
                        <th>Nama Peminjam  </th>
						<th>no_tlpn </th>
                        <th>Alamat </th>
                        <th>Nama Alat </th>
						<th>Tanggal Sewa </th>
						<th>Tanggal Kembali</th>
							 
                        <th>Opsi</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No   </th>    
					
                    <th>Nama Peminjam  </th>
					<th>no_tlpn </th>
                    <th>Alamat </th>
                    <th>Nama Alat </th>
					<th>Tanggal Sewa </th>
					<th>Tanggal Kembali</th>
					
                    <th>Opsi</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php
                          $no = 0;  
                           foreach($penyewaan as $rak) { $no++?>
                            <tr>
                                <td><?php echo $no; ?></td>
								
                                <td><?php echo $rak['nama']; ?></td>
                                <td><?php echo $rak['no_tlpn']; ?></td>
                                <td><?php echo $rak['alamat']; ?></td>
                                <td><?php echo $rak['nama_alat']; ?></td>
								<td><?php echo $rak['tgl_penyewaan']; ?></td>
								<td><?php echo $rak['tgl_pengembalian']; ?></td>
								
								<td>                                           
                                <a class='btn btn-warning btn-sm' title='Lihat' href="<?php echo base_url() ?>Penyewaan_gudang/tampil/<?php echo $rak['ID_sewa']; ?>"><span class="glyphicon glyphicon-eye-open"> Detail</a>
                                           
                                 </td>
                            <?php }?>
                            
                            </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"><?php echo "Update " . date("Y-m-d h:i:sa") . "<br>";?></div>
        </div>

       

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
      <!-- /.container-fluid -->

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
          <a class="btn btn-primary" href="login.html">Logout</a>
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