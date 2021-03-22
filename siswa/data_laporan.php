    <div class="card-body table-responsive">
         <table id="example1" class="table table-bordered table-striped">
	<thead>
	<tr>
		<th align="center">No</th>
		<th>ID Pembayaran</th>
		<th>Tgl Pembayaran</th>
		<th>Bulan Bayar</th>
		<th>Tahun Bayar</th>
		<th>Jumlah Bayar</th>
		<th>Petugas</th>
	</tr>
	</thead>
	<tbody>
	<?php 
	$no = 1;
	foreach($db->detail_data($_SESSION['nisn'],"pembayaran","nisn") as $x){
		 
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><a href="?hal=detail&id=<?php echo $x['id_pembayaran']; ?>">P<?php echo $x['id_pembayaran']; ?></a></td>
		<td><?php echo date('d F Y', strtotime($x['tgl_bayar'])); ?></td>
		<td><?php echo $x['bulan_dibayar']; ?></td>
		<td><?php echo $x['tahun_dibayar']; ?></td>
		<td>Rp  <?php echo number_format($x['jumlah_bayar'],2,',','.'); ?></td>
		<td><?php  
			foreach($db->detail_data($x['id_petugas'],"petugas","id_petugas") as $d){
			echo $d['nama_petugas'];
			}
	 
		?></td> 
	</tr>
	<?php 
	}
	?>
	</tbody>
</table> 
		       </div>