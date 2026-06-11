<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT COUNT(*) as total FROM booking");
$row = mysqli_fetch_assoc($result);
echo $row['total'];
?>