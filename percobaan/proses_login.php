<?php
//pangil koneksi database
include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$level = mysqli_escape_string($koneksi, $_POST['level']);

//cek username,terdaftar ato tidak
$cek_user = mysqli_query($koneksi,"SELECT * FROM user WHERE username = 
'$username' and level='$level'");
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if($user_valid);
    //jika username terdaftar
    //cek password sesuai atau tidak
    if($password == $user_valid['password']);
        //jika password sesuai 
        //bauat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['level'] = $user_valid['level'];

        //uji level user
        if($level == "admin"){
            header('location:home.php');
        } elseif ($level == "user") {
            header('location:v_form.php');
		} else {
        echo"<script>alert('maaf,login gagal,username anda tidak terdaftar!');
        document.location='login.php'</script>";
}
?>