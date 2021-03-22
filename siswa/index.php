<!DOCTYPE html>
<?php
session_start();
include '../database.php';
$db = new database();
if(!isset($_SESSION['status'])){
	header("location:../index.php?pesan=belumlogin");
}
 ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>SPP Digital UKK 2020</title>
<!-- DataTables -->
  <link rel="stylesheet" href="../themes/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
 
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../themes/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../themes/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
 <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index.php" class="navbar-brand">
        <img src="../themes/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SPP Digital</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">Beranda</a>
          </li> 
         </ul>

        <!-- SEARCH FORM -->
       </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
     
	 <li class="nav-item">
<a class="nav-link"  href="../logout.php">          <?php echo $_SESSION['username']; ?> - Logout </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">  
			<?php
		 foreach($db->detail_data($_SESSION['username'],"siswa","nis") as $x){
		echo $x['nama']." - ".$x['nisn'];
		$_SESSION['nisn']=$x['nisn'];
		 } 
			  ?></small></h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    <div class="container">
        <div class="row">
           
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
		  <!-- disini container -->
		  	<?php include 'container.php'; 
			
			?>
   <div class="card card-primary card-outline">
			<?php 
			 if (isset($_GET['hal'])){
				include "".$_GET['hal'].".php"; 
			 }else{
			 ?>

			  <div class="card-header">
                <h5 class="card-title m-0">Histori Pembayaran</h5>
              </div>
              <div class="card-body">
			  <?php
		if(isset($_GET['pesan'])){
			 if($_GET['pesan']=="logout"){
				echo '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Anda telah Log Out</h5>
                </div>';
			}else if($_GET['pesan']=="belumlogin"){
				echo '<div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-exclamation-triangle"></i> Anda harus Login!</h5>
                </div>';
			}  
		
		
		}
		
		include 'data_laporan.php'; 
		} ?>	 
		
			       <div class="card">
    
            <!-- /.card-header -->
        
            <!-- /.card-body -->
          </div>
     
			   
              </div>
            </div>
			
		
		  
     
   
   
   
	<?php 
	 //include 'container.php'; 
	//include 'data_laporan.php'; 
	
	?>
	</div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
     <a href="https://sociabuzz.com/pakguruonline/tribe">Jangan lupa sedekah..
    </a></div>
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y');?> <a href="http://www.pakguru.online">Pak Guru</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../themes/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../themes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../themes/dist/js/adminlte.min.js"></script>


<!-- DataTables -->
<script src="../themes/plugins/datatables/jquery.dataTables.js"></script>
<script src="../themes/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
