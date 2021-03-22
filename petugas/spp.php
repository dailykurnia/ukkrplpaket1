<?php
if (isset($_GET['id'])){
	include "edit.php";
}else {

?>   

   <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                  <i class="fas fa-edit"></i>
				  Data SPP</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
                
		<div class="row no-print">
                <div class="col-12"> 
				<a href="?hal=spp&act=input" class="btn btn-warning float-left">Tambah Data</a>
                  <button onclick="cetak()" class="btn btn-success float-left" style="margin-left: 5px;"><i class="fas fa-print"></i> Print
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
		<th>Opsi</th>  
	</tr>
	</thead>
	<tbody>
	<?php
	$no = 1;
	function isRowEmpty($row){
foreach($row as $a){
if(!empty($a)){
return false;
}
}
return true;
}
	foreach($db->tampil_data("spp","id_spp") as $x){
	//	if(empty($x)){
//		return false;
//		echo 'data kosong';
	//		}
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><a href="?hal=laporanmasy&id=<?php echo $x['id_spp']; ?>">SPP-<?php echo $x['id_spp']; ?></a></td>
		<td><?php echo $x['tahun']; ?></td>
		<td>Rp <?php echo number_format($x['nominal'],2,',','.'); ?></td>
		  <td>
			<a class="btn btn-info btn-sm" href="?hal=spp&id=<?php echo $x['id_spp']; ?>&act=edit">
                              <i class="fas fa-pencil-alt">
                              </i>Edit</a>
			<a class="btn btn-danger btn-sm" href="proses.php?id=<?php echo $x['id_spp']; ?>&aksi=hapus&table=spp&kolom=id_spp"><i class="fas fa-trash">
                              </i>Hapus</a>		
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
<?php
}
?>
     
<script type="text/javascript"> 
function cetak(){
  window.addEventListener("load", window.print());	
}
</script>