<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

/* USER */
$valid_user = "admin";

/* PASSWORD HASH (SUDAH BENAR) */
$valid_pass = '$2y$10$8MuVLI7Ghe0kLLFBP7hwUOKjFL.FCvFZ7I.kj2ohT5TVCi0DvE7fW';

if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user === $valid_user && password_verify($pass, $valid_pass)){
        $_SESSION['login'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>