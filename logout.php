<?php
session_start();
session_destroy();
header("Location: login.php");
?>body {
    font-family: Arial;
    background: #fffafc;
}

header {
    background: #ff8fab;
    color: white;
    padding: 15px;
    text-align: center;
}

nav a {
    margin: 10px;
    color: white;
    text-decoration: none;
}

.hero {
    padding: 80px;
    text-align: center;
    background: #ffe5ec;
}

.btn {
    background: #ff4d6d;
    padding: 10px 20px;
    color: white;
    text-decoration: none;
    border-radius: 10px;
}