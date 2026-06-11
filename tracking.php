<form method="GET">
    <input type="text" name="hp" placeholder="Enter your phone number">
    <button class="btn primary">Check</button>
</form>

<?php
include 'koneksi.php';

if(isset($_GET['hp'])){
    $hp = $_GET['hp'];
    $data = mysqli_query($conn, "SELECT * FROM booking WHERE hp='$hp'");

    while($d = mysqli_fetch_array($data)){
        echo "<p>{$d['layanan']} - {$d['tanggal']} - <b>{$d['status']}</b></p>";
    }
}
?>