<?php
include("koneksi.php");
if(isset($_GET['id'])){
	//ambil nis dari query string
	$id = $_GET['id'];
	//buat query hapus
	$sql = "DELETE FROM peserta WHERE id=$id";
	$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
	//apakah query update berhasil?
	if($query){
		//kalau berhasil, alihkan ke halaman index.php dengan status=sukses
		header('location:data_pendaftaran.php?status=sukses');	
	}else{
		//kalau gagal, alihkan ke halaman index.php dengan status=gagal
		header('location:data_pendaftaran.php?status=gagal');
	  }
	}else{
		die("Akses dilarang...");
	}
?>