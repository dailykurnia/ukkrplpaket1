<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'database.php';
$db = new database();

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
 //$jenis = $_POST['jenis'];
 
echo $db->cek_login($username,$password );
	  
if($db->cek_login($username,$password )=="petugas"){
	
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	 
	//if($jenis=="petugas"){
	foreach($db->cek_level($username,$password) as $x){
	$_SESSION['level'] = $x['level'];
	$_SESSION['id_petugas'] = $x['id_petugas'];
	echo $_SESSION['id_petugas'];
	echo $x['nama_petugas'];
	}  
 	 header("location:petugas/?hal=beranda");
	}else if($db->cek_login($username,$password )=="siswa"){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	 	header("location:siswa/");
	//echo 'siswa';
	}else{
	  	header("location:index.php?pesan=gagal");
	}
	
	
//}else{
 //	header("location:index.php?pesan=gagal");
//}
?>