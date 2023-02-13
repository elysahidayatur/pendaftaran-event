<?php
include ("koneksi.php");
//cek apakah tombol simpan sudah diklik atau belum
if ($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data dari form
	$id =$_POST['id'];
	$nama =$_POST['nama_event'];
	$tgl_event =$_POST['tgl_event'];
	$informasi =$_POST['informasi_event'];
	//buat query
	$sql ="INSERT INTO peserta(id,nama_event,tgl_event, informasi_event) VALUE ('$id', '$nama','$tgl_event', '$informasi')";
	 $query =mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	 //apakah query update berhasil
	 if ($query) {
	 //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
	 header ('location:pendaftaran_event.php?status=sukses');
	 }else{
	 	//kalau gagal, alihkan  ke halaman index.php dengan status=gagal
	 header ('location:pendaftaran_event.php?status=gagal');
	 }
	 }else{ 
	     die("akses dilarang...");
	}
	?>