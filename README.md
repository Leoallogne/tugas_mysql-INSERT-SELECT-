# 📌 Proyek Tugas MySQL — INSERT & SELECT (Pemrograman Web 2025)

Proyek ini dibuat untuk memenuhi tugas mata kuliah **Pemrograman Web 2025-1**, dengan fokus pada operasi dasar **INSERT** dan **SELECT** menggunakan **PHP & MySQLi**.

---

## 🚀 Tujuan Proyek

* Menguasai dasar-dasar koneksi PHP ke MySQL.
* Membuat form registrasi sederhana dengan proses **INSERT**.
* Menampilkan data user menggunakan query **SELECT**.
* Memahami struktur folder yang rapi dan profesional.

---

## 📁 Struktur Folder

```
├── README.md
├── assets
│   ├── css
│   │   └── style.css
│   ├── images
│   └── js
│       └── script.js
├── config
│   └── database.php
└── public
    ├── index.php
    ├── save_user.php
    └── view_user.php
```

---

## 🗄️ Detail Fitur Utama

### 1️⃣ **Koneksi Database (MySQLi)**

Disimpan dalam file:

```
config/database.php
```

File ini digunakan untuk mengatur host, username, password, dan nama database.

---

### 2️⃣ **Form Input User (INSERT)**

File:

```
public/index.php
```

Berisi form registrasi user seperti:

* Nama
* Email
* Password

Data akan dikirim ke:

```
public/save_user.php
```

Untuk diproses menggunakan query **INSERT INTO user ...**

---

### 3️⃣ **Menampilkan Data User (SELECT)**

File:

```
public/view_user.php
```

Menampilkan seluruh data user menggunakan query:

```
SELECT * FROM user
```

Hasilnya ditampilkan dalam tabel HTML yang rapi.

---

## ⚙️ Cara Menjalankan

### **1. Import Database**

Gunakan file SQL berikut di phpMyAdmin:

```
sql/create_table.sql
```

### **2. Pindahkan Proyek ke Server PHP**

Tempatkan folder proyek di:

* `htdocs` (XAMPP)
* atau `www` (Laragon)

### **3. Jalankan di Browser**

Akses melalui URL:

```
http://localhost/tugas_mysql-INSERT-SELECT/public/
```

---

## 🔗 Repository GitHub

Proyek ini juga tersedia di GitHub:

```
https://github.com/Leoallogne/tugas_mysql-INSERT-SELECT-
```

---

## 📞 Kontak / Bantuan

Jika membutuhkan perbaikan, penambahan fitur, atau debugging, silakan hubungi pengembang proyek atau buka *issue* pada repository GitHub di atas.

---

Proyek ini disusun dengan tujuan pembelajaran dan penguatan dasar-dasar penggunaan **PHP + MySQL** secara profesional dan terstruktur.
