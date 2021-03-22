     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Siswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
            
		<div class="row no-print">
                <div class="col-12"> 
				<a href="?hal=siswa&act=input" class="btn btn-warning float-left">Tambah Data</a>
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
		<th>NIS</th>
		<th>NISN </th>
		<th>Nama</th>
		<th>almt</th>
		<th>Opsi</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$no = 1;
	foreach($db->tampil_data("siswa","nisn") as $x){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nis']; ?></td>
		<td><?php echo $x['nisn']; ?></td>
		<td><?php echo $x['nama']; ?></td> 
		<td><?php echo $x['alamat']; ?></td> 
		<td><a class="btn btn-info btn-sm" href="?hal=siswa&id=<?php echo $x['nisn']; ?>&act=edit">
         <i class="fas fa-pencil-alt">    </i>
		 Edit</a>
			<a class="btn btn-danger btn-sm" href="proses.php?id=<?php echo $x['nisn']; ?>&aksi=hapus&table=siswa&kolom=nisn"><i class="fas fa-trash"></i>
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