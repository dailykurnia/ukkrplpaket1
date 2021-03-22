   <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			     
          <li class="nav-item has-treeview">
            <a href="?hal=beranda" <?php
echo ($_GET['hal'] == "beranda") ? 'class="nav-link active"' : 'class="nav-link"';  
	 ?>>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda 
              </p>
            </a>
           </li>
          <?php 
   if($level=='admin'){   
   ?>
   <li class="nav-item">
            <a href="?hal=spp" <?php
echo ($_GET['hal'] == "spp") ? 'class="nav-link active"' : 'class="nav-link"';  
	 ?> >
              <i class="nav-icon fas fa-copy"></i>
              <p>
				 Data SPP
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="?hal=kelas" <?php
echo ($_GET['hal'] == "kelas") ? 'class="nav-link active"' : 'class="nav-link"';  
	 ?>>
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Data Kelas
              </p>
            </a>
           </li>
          <li class="nav-item has-treeview">
            <a href="?hal=siswa" <?php
echo ($_GET['hal'] == "siswa") ? 'class="nav-link active"' : 'class="nav-link"';  
	 ?>>
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Data Siswa
              </p>
            </a>
           </li>
          <li class="nav-item has-treeview">
            <a href="?hal=petugas" <?php
echo ($_GET['hal'] == "petugas") ? 'class="nav-link active"' : 'class="nav-link"';  
	 ?>>
              <i class="nav-icon fas fa-copy"></i>
              <p>
				 Data Petugas
              </p>
            </a>
           </li>
          <li class="nav-item has-treeview">
            <a href="?hal=pembayaran" <?php
echo ($_GET['hal'] == "pembayaran") ? 'class="nav-link active"' : 'class="nav-link"';  
	 ?>>
              <i class="nav-icon fas fa-copy"></i>
              <p>
			Transaksi pembayaran
              </p>
            </a>
           </li>
          <li class="nav-item has-treeview">
            <a href="?hal=pembayaran" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
				History pembayaran
              </p>
            </a>
           </li>
			<li class="nav-item has-treeview">
            <a href="?hal=laporan" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                 Laporan
              </p>
            </a>
           </li>
		   <?php	   
			} else if ($level=='petugas'){
				
			$class='class="nav-link"';
			if(isset($_GET['hal'])){
		 $aktif=$_GET['hal'];		 
		 switch ($aktif) {
		 case "tanggapan":
         $class='class="nav-link active"';
		 break;
		 case "laporanmasy":
         $class='class="nav-link active"';
		 break;
		   default:
         $class='class="nav-link"';
		 }
		}
			?>			
         <li class="nav-item">
            <a href="?hal=pembayaran" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Entri transaksi pembayaran
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="?hal=pembayaran" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Lihat history pembayaran
              </p>
            </a>
           </li>
				
				<?php
			}  ?> 
          <li class="nav-header">Tentang Aplikasi</li>
      
          <li class="nav-item has-treeview">
            <a href="https://sociabuzz.com/pakguruonline/tribe" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>Klik Disini
              </p>
            </a>
           </li>
          <li class="nav-item has-treeview">
            <a href="https://sociabuzz.com/pakguruonline/tribe" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>WA Saya!
              </p>
            </a>
           </li> 
          
        </ul>
      </nav>
   