<?php
if (isset($_GET['id'])){
	include "edit.php";
}else {

?>   

   <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                  <i class="fas fa-edit"></i>
				  Laporan SPP Sekolah Digital</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                
		<div class="row no-print">
                <div class="col-12">  
                  <button onclick="cetak()" class="btn btn-success float-left" style="margin-left: 5px;"><i class="fas fa-print"></i> Cetak Laporan
                      </button>
                  <button type="button" class="btn btn-primary float-left" style="margin-left: 5px;">
                    <i class="fas fa-download"></i> PDF
                  </button>
                </div>
              </div>
			  <br> 
<table id="example1" class="table table-bordered table-striped">
	<thead>
	<tr>
		<th>No</th>
		<th>ID SPP</th>
		<th>Tahun</th>
		<th>Nominal</th>   
	</tr>
	</thead>
	<tbody>
	<?php
	$no = 1;
	foreach($db->tampil_data("spp","id_spp") as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><a href="?hal=laporanmasy&id=<?php echo $x['id_spp']; ?>">SPP-<?php echo $x['id_spp']; ?></a></td>
		<td><?php echo $x['tahun']; ?></td>
		<td>Rp <?php echo number_format($x['nominal'],2,',','.'); ?></td>
		 
	</tr>
	<?php 
	}
	?>
	</tbody>
</table>
			
		       </div>
            <!-- /.card-body -->
          </div>
<?php
}
?>
     
<script type="text/javascript"> 
function cetak(){
  window.addEventListener("load", window.print());	
}
</script>