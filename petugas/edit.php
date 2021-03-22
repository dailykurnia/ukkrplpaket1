<?php 
 require_once '../database.php';
 $db = new Database();
 $hal=$_GET['hal'];
 
 
switch ($hal) {
  case "spp":
  //  echo "Your favorite color is red!";
  foreach($db->detail_data($_GET['id'],"spp","id_spp") as $d){
?>
   	<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail SPP</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID SPP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="P-<?php echo $d['id_spp']; ?>" disabled>
					  
                      <input type="hidden" name="id" value="<?php echo $d['id_spp']; ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun</label>
                    <div class="col-sm-10">
                      <input type="text" name="tahun" class="form-control" id="inputPassword3" value="<?php echo $d['tahun']; ?>"  >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nominal</label>
                    <div class="col-sm-10">
                      <input type="text" name="nominal" class="form-control" value="<?php echo $d['nominal']; ?>"  >
                    </div>
                  </div>  
                
              
				   
                </div>
                <!-- /.card-body -->
                <div class="card-footer"> 
                  <button type="submit" name="aksi" value="update_spp" class="btn btn-info float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
 
<?php } ?>   
	<?php
	
	break;
  case "siswa":
   foreach($db->detail_data($_GET['id'],"siswa","nisn") as $d){
?>
   	<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail Siswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="P-<?php echo $d['nisn']; ?>" disabled>
					  
                      <input type="hidden" name="id" value="<?php echo $d['nisn']; ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama siswa</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="inputPassword3" value="<?php echo $d['nama']; ?>"  >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                      <input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat']; ?>"  >
                    </div>
                  </div>  
                
              
				   
                </div>
                <!-- /.card-body -->
                <div class="card-footer"> 
                  <button type="submit" name="aksi" value="update_siswa" class="btn btn-info float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
 
<?php } ?>   
	<?php
	  break;
  case "kelas":
   foreach($db->detail_data($_GET['id'],"kelas","id_kelas") as $d){
?>
   	<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Kelas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="P-<?php echo $d['id_kelas']; ?>" disabled>
					  
                      <input type="hidden" name="id" value="<?php echo $d['id_kelas']; ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama kelas</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" id="inputPassword3" value="<?php echo $d['nama_kelas']; ?>"  >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kompetensi keahlian</label>
                    <div class="col-sm-10">
                      <input type="text" name="jurusan" class="form-control" value="<?php echo $d['kompetensi_keahlian']; ?>"  >
                    </div>
                  </div>  
                
              
				   
                </div>
                <!-- /.card-body -->
                <div class="card-footer"> 
                  <button type="submit" name="aksi" value="update_kelas" class="btn btn-info float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
 
<?php } ?>   
	<?php
	 break;
	 
	 case"petugas":
	  foreach($db->detail_data($_GET['id'],"petugas","id_petugas") as $d){
?>
   	<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail Petugas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="P-<?php echo $d['id_petugas']; ?>" disabled>
					  
                      <input type="hidden" name="id" value="<?php echo $d['id_petugas']; ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control"  value="<?php echo $d['nama_petugas']; ?>"  >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>"  >
                    </div>
					
                  </div>  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Level</label>
                    <div class="col-sm-10">
                      <input type="text" name="level" class="form-control" value="<?php echo $d['level']; ?>"  >
                    </div>
                  </div>  
                
              
				   
                </div>
                <!-- /.card-body -->
                <div class="card-footer"> 
                  <button type="submit" name="aksi" value="update_petugas" class="btn btn-info float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
 
<?php } ?>   
	<?php
	 
	 break;
	 
	 case"pembayaran":
	  foreach($db->detail_data($_GET['id'],"pembayaran","id_pembayaran") as $d){
?>
   	<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" action="proses.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Pembayaran</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="P-<?php echo $d['id_pembayaran']; ?>" disabled>
					  
                      <input type="hidden" name="id" value="<?php echo $d['id_pembayaran']; ?>" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Petugas</label>
                    <div class="col-sm-10">
                      <input type="text" name="namapetugas" class="form-control"  value="<?php 
					  foreach($db->detail_data($d['id_petugas'],"petugas","id_petugas") as $x){echo $x['nama_petugas']." - ".$x['id_petugas']; 	 }?>" disabled  >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                      <input type="text" name="nisn" class="form-control" value="<?php echo $d['nisn']; ?> "  disabled>
                    </div>
					
                  </div>  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Siswa</label>
                    <div class="col-sm-10">
                      <input type="text" name="nama" class="form-control" value="<?php 
		  foreach($db->detail_data($d['nisn'],"siswa","nisn") as $x){
		echo $x['nama'] ;
		 
		 }   ?>" disabled >
                    </div>
                  </div>  
                
              
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tgl Bayar</label>
                    <div class="col-sm-10">
                      <input type="date" name="tgl" class="form-control" value="<?php echo $d['tgl_bayar']; ?>"  >
                    </div>
                  </div>  
				  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Bulan dibayar</label>
                    <div class="col-sm-10">
				 
                      <input type="text" name="bulan" class="form-control" value="<?php echo $d['bulan_dibayar']; ?>"  >
                    </div>
                  </div>
				  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tahun dibayar</label>
                    <div class="col-sm-10">
                      <input type="year" name="tahun" class="form-control" value="<?php echo $d['tahun_dibayar']; ?>"  >
                    </div>
                  </div>
				  
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                    <div class="col-sm-10">
                      <input type="number" name="jumlah" class="form-control" value="<?php echo $d['jumlah_bayar']; ?>"  >
                    </div>
                  </div>  
                
              
				   
                </div>
                <!-- /.card-body -->
                <div class="card-footer"> 
                  <button type="submit" name="aksi" value="update_pembayaran" class="btn btn-info float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
 
<?php } ?>   
	<?php
	 
	 break;
	 
  default:
    echo "404 Not Found";
}

 