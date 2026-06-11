<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$layanan = $_POST['layanan'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];

mysqli_query($conn,"INSERT INTO booking VALUES(NULL,'$nama','$hp','$alamat','$layanan','$tanggal','$jam','Pending')");

/* FORMAT PESAN SMS */
$pesan = "Booking Puffluff:%0A";
$pesan .= "Name: $nama%0A";
$pesan .= "Phone: $hp%0A";
$pesan .= "Service: $layanan%0A";
$pesan .= "Date: $tanggal%0A";
$pesan .= "Time: $jam";

/* NOMOR TUJUAN */
$no_hp = "+1(239)2316718"; // GANTI NOMOR KAMU

/* REDIRECT KE SMS */
header("Location: success.php");
?>