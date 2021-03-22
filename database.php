<?php 
class Database{
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_spp";
	var $koneksi = "";
	
	function __construct(){
		$this->koneksi=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
	
	/**
	Fungsi Cek Login
	**/
	function cek_login($username,$pass){
		$return=false;
		
		// $data = mysqli_query($this->koneksi,"call cekLoginSiswa('$username','$pass')");
      	$data = mysqli_query($this->koneksi,"select * from siswa where nis='$username' and password='$pass'");   
		if(mysqli_num_rows($data)>0){
			$jenis="siswa"; 
			 
				}else{
		 	//$data2 = mysqli_query($this->koneksi,"call cekLoginPetugas('$username','$pass')"); 
 			 $data2 = mysqli_query($this->koneksi,"select * from petugas where username='$username' and password='$pass'");  
		$cek2 = mysqli_num_rows($data2);
		if(mysqli_num_rows($data2)>0){
		$jenis="petugas";	 
		 
		}
		}
		return $jenis;
		 
	}


	/**
	Fungsi Cek Level Petugas
	**/
	function cek_level($username,$pass){
	 	
	$data = mysqli_query($this->koneksi,"call levelPetugas('$username','$pass')");
	while($d = mysqli_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
	}
	
	
	/**
	Fungsi Status Login
	**/
	function status($x){
	switch ($x) {
    case "0":
        echo '<button type="button" class="btn btn-block btn-danger btn-sm">Baru</button>';
        break;
    case "Proses":
        echo '<button type="button" class="btn btn-block btn-warning btn-sm">Proses</button>';
        break;
    case "Selesai":
        echo '<button type="button" class="btn btn-block btn-success btn-sm">Selesai</button>';
        break;
    default:
        echo "tidak ada status";
	}	
	}
	
	
	/**
	Fungsi Menampilkan Data
	**/
	function tampil_data($x,$y){
		//$data = mysqli_query($this->koneksi,"call tampilData('spp','id_spp')");
		$data = mysqli_query($this->koneksi,"select * from $x order by $y desc ");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		
		return $hasil;
	} 
	
	function detail_data($id,$table,$pk){
	$data = mysqli_query($this->koneksi,"select * from $table where $pk='$id'");
	while($d = mysqli_fetch_array($data)){
		$hasil[] = $d;
	}
	return $hasil;
	}
	
  
	/**
	Fungsi Input Data
	**/
	function input_petugas($username,$password,$nama,$level){
	 mysqli_query($this->koneksi,"insert into petugas values('','$username','$password','$nama','$level')");
 	}
	
	function input_spp($tahun,$nominal){
	 mysqli_query($this->koneksi,"insert into spp values('','$tahun','$nominal')");
 	}
	
	function input_kelas($namakelas,$jurusan){
	 mysqli_query($this->koneksi,"insert into kelas values('','$namakelas','$jurusan')");
	 }
	
	function input_siswa($nisn,$nis, $nama, $id_spp, $id_kelas,$password, $alamat, $notelp){
	 mysqli_query($this->koneksi,"insert into siswa values('$nisn','$nis','$nama','$id_spp','$id_kelas','$password','$alamat','$notelp')");
	 }
	 
	function input_transaksi($idpet,$nisn, $tgl, $bulan, $tahun, $id_spp,$jumlah){
	 mysqli_query($this->koneksi,"insert into pembayaran values('','$idpet','$nisn','$tgl','$bulan','$tahun', '$id_spp','$jumlah')");
	 }
	
	
	/**
	Fungsi hapus data
	**/	 
	function hapus($id, $table, $kolom){
		mysqli_query($this->koneksi,"delete from $table where $kolom='$id'");
	}
	
	
	/**
	Fungsi Update Data 
	**/
	function update_spp($id, $tahun, $nominal){
		mysqli_query($this->koneksi,"update spp set tahun='$tahun', nominal='$nominal' where id_spp='$id'");
	}
	
	function update_kelas($id, $nama, $jurusan){
		mysqli_query($this->koneksi,"update kelas set nama_kelas='$nama', kompetensi_keahlian='$jurusan' where id_kelas='$id'");
	}
	function update_siswa($id, $nama, $alamat){
		mysqli_query($this->koneksi,"update siswa set nama='$nama', alamat='$alamat' where nisn='$id'");
	}
	
	function update_petugas($id, $nama, $username,$level){
		mysqli_query($this->koneksi,"update petugas set nama_petugas='$nama', username='$username', level='$level' where id_petugas='$id'");
	}
	
	function update_pembayaran($id, $tgl, $bulan,$tahun,$jumlah){
		mysqli_query($this->koneksi,"update pembayaran set tgl_bayar='$tgl', bulan_dibayar='$bulan', tahun_dibayar='$tahun', jumlah_bayar='$jumlah' where id_pembayaran='$id'");
	}
	 
	/**
	Fungsi Container
	**/
	function hitung_total($x){
	$data = mysqli_query($this->koneksi,"select * from $x");	 
	$hasil=mysqli_num_rows($data);
 	return $hasil;
	}  
	

}