<?php
if(isset($_GET['act'])){
	$act=$_GET['act'];
	include $act.".php";
}else{
	
?>     
	 
	 <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Petugas</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              
		<div class="row no-print">
                <div class="col-12"> 
				<a href="?hal=petugas&act=input" class="btn btn-warning float-left">Tambah Data</a>
                  <button onclick="cetak()" class="btn btn-success float-left" style="margin-left: 5px;"><i class="fas fa-print"></i> Print
                      </button>
                  <button type="button" class="btn btn-primary float-left" style="margin-left: 5px;">
                    <i class="fas fa-download"></i> PDF
                  </button>
                </div>
              </div><br> 
<table id="example1" class="table table-bordered table-striped">
	<thead>
	<tr>
		<th>No</th>
		<th>ID Petugas</th>
		<th>Nama </th>
		<th>Username</th> 
		<th>Level</th>
		<th>Opsi</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no = 1;
	foreach($db->tampil_data("petugas","id_petugas") as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['id_petugas']; ?></td>
		<td><?php echo $x['nama_petugas']; ?></td>
		<td><?php echo $x['username']; ?></td> 
		<td><?php echo $x['level']; ?></td> 
		<td>
		 <a class="btn btn-info btn-sm" href="?hal=petugas&id=<?php echo $x['id_petugas']; ?>&act=edit">
         <i class="fas fa-pencil-alt">    </i>
		 Edit</a>
			<a class="btn btn-danger btn-sm" href="proses.php?id=<?php echo $x['id_petugas']; ?>&aksi=hapus&table=petugas&kolom=id_petugas"><i class="fas fa-trash"></i>
			Hapus</a>	
			 			
		</td>
	</tr>
	<?php 
	}
	?>
	</tbody>
</table>
			
		       </div>
            <!-- /.card-body -->
          </div>
		 
          
<script type="text/javascript"> 
function cetak(){
  window.addEventListener("load", window.print());	
}
</script>
<?php }
?>