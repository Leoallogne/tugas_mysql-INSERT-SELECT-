<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db   = "IF_MuhammadSyafiq"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal, coba lagi: " . mysqli_connect_error());
}
?>


