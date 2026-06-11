<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($conn,"UPDATE booking SET status='Done' WHERE id='$id'");

header("Location: admin.php");
?>