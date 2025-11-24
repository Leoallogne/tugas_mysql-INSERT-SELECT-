<?php include "../config/database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data User</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h2>Data User</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
    </tr>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM user");

    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
            <td>{$row['Id']}</td>
            <td>{$row['Username']}</td>
            <td>{$row['Email']}</td>
            <td>{$row['Password']}</td>
        </tr>";
    }
    ?>
</table>

</body>
</html>
