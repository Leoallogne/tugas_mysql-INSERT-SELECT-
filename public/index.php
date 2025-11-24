<?php include "../config/database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Registrasi User</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<h2>Form Registrasi User</h2>

<div class="container">

    <!-- FORM REGISTRASI -->
    <form action="save_user.php" method="POST">
        <label>ID</label>
        <input type="number" name="Id" required>

        <label>Username</label>
        <input type="text" name="Username" required>

        <label>Email</label>
        <input type="email" name="Email" required>

        <label>Password</label>
        <input type="password" name="Password" required>

        <button type="submit">Simpan</button>
    </form>

    <!-- BOX PANDUAN -->
    <div class="guide-box">
        <h3>Panduan Penggunaan</h3>
        <p>Ikuti langkah-langkah berikut untuk menggunakan aplikasi registrasi user:</p>

        <ul>
            <li>Isi semua field pada form registrasi di sisi kiri.</li>
            <li>Pastikan ID tidak sama dengan user lain.</li>
            <li>Gunakan email yang valid agar data tersimpan dengan benar.</li>
            <li>Klik tombol <b>Simpan</b> untuk memasukkan data ke database.</li>
            <li>Setelah menyimpan, kamu akan diarahkan ke halaman daftar user.</li>
            <li>Jika ingin menambah data lagi, kembali ke halaman form.</li>
        </ul>

        <p>Jika terjadi error atau data tidak muncul, pastikan database & koneksi sudah benar.</p>
    </div>

</div>

</body>
</html>
