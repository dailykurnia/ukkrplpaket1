<?php 
 require_once '../database.php';
 $db = new Database();
 $id=$_GET['id'];
 foreach($db->detail_data($_GET['id'],"pembayaran","id_pembayaran") as $d){
 ?>
  <div class="card-body table-responsive">
    
	<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Detail Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal"  >
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID Pembayaran</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" value="P-<?php echo $id; ?>" disabled>
					  
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
                  <button onclick="cetak()" class="btn btn-success float-left" style="margin-left: 5px;"><i class="fas fa-print"></i> Print
                      </button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
 
  </div>
  <?php
 }
 ?>

 