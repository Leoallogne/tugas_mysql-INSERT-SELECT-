<?php
include "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Id       = $_POST["Id"];
    $Username = $_POST["Username"];
    $Email    = $_POST["Email"];
    $Password = $_POST["Password"];

    $query = "INSERT INTO user (Id, Username, Email, Password) 
              VALUES ('$Id', '$Username', '$Email', '$Password')";

    if (mysqli_query($conn, $query)) {
        header("Location: view_user.php");
    } else {
        echo "Gagal menyimpan, Silahkan Coba Lagi !!!: " . mysqli_error($conn);
    }
}
?>
