<?php 
require_once '../database.php';
$db = new Database();
if(!isset($_POST['aksi'])){
	$aksi = $_GET['aksi'];
	if(isset($_GET['table'])){
		$hal=$_GET['table'];	
	}
}else{
	$aksi = $_POST['aksi'];
} 

//Proses Tambah data
 if($aksi == "tambahspp"){
 	$db->input_spp($_POST['tahun'],$_POST['nominal']);
 	header("location:index.php?hal=spp");
 }else if($aksi == "tambahkelas"){
 	$db->input_kelas($_POST['namakelas'],$_POST['jurusan']);
 	header("location:index.php?hal=kelas");
 }
 else if($aksi == "tambahtransaksi"){
	 echo $_POST['id_pet'].'<br/>';
	 echo $_POST['nisn'].'<br/>';
	 echo $_POST['tgl'].'<br/>';
	 echo $_POST['bulan'].'<br/>';
	 echo $_POST['tahun'].'<br/>';
	 echo $_POST['jumlah'].'<br/>';
	  foreach($db->detail_data($_POST['tahun'],"spp","tahun") as $d){
		$id_spp= $d['id_spp'];  
		}
	  echo $id_spp;
 	$db->input_transaksi($_POST['id_pet'],$_POST['nisn'],$_POST['tgl'],$_POST['bulan'],$_POST['tahun'],$id_spp,$_POST['jumlah']);
 	 header("location:index.php?hal=pembayaran");
 }else if($aksi == "tambahpetugas"){
 	$db->input_petugas($_POST['username'],md5($_POST['pass']),$_POST['nama'],$_POST['level']);
 	header("location:index.php?hal=petugas");
 }else if($aksi == "tambahsiswa"){
 	$db->input_siswa($_POST['nisn'],$_POST['nis'],$_POST['nama'],$_POST['id_spp'],$_POST['id_kelas'],md5($_POST['nis']),$_POST['alamat'],$_POST['notelp']);
 	 header("location:index.php?hal=siswa");
 }
 
 //Proses Hapus Data
 elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id'],$_GET['table'],$_GET['kolom']);
	header("location:index.php?hal=$hal");
 }
 
 
 //Proses Update Data
 elseif($aksi == "update_spp"){
 	$db->update_spp($_POST['id'],$_POST['tahun'],$_POST['nominal']);
 	header("location:index.php?hal=spp");
 } elseif($aksi == "update_kelas"){
 	$db->update_kelas($_POST['id'],$_POST['nama'],$_POST['jurusan']);
  	header("location:index.php?hal=kelas");
 }elseif($aksi == "update_siswa"){
 	$db->update_siswa($_POST['id'],$_POST['nama'],$_POST['alamat']);
   	header("location:index.php?hal=siswa");
 }elseif($aksi == "update_petugas"){
 	$db->update_petugas($_POST['id'],$_POST['nama'],$_POST['username'],$_POST['level']);
   	header("location:index.php?hal=petugas");
 }elseif($aksi == "update_pembayaran"){
 	$db->update_pembayaran($_POST['id'],$_POST['tgl'],$_POST['bulan'],$_POST['tahun'],$_POST['jumlah']);
   	header("location:index.php?hal=pembayaran");
 }
?>