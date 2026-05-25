<?php
// Sertakan file koneksi (agar tidak perlu menulis ulang kode koneksi)
require_once 'koneksi.php';

// Buat query yang akan dikirim ke database
$q = "CREATE TABLE t_login (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(38) NOT NULL,
    password VARCHAR(50) NOT NULL,
    email VARCHAR(50),
    tgl_registrasi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)"; // [cite: 37, 38, 39, 40, 41, 42, 43]

// Kirim kueri ke server basis data
$hasil = $con->query($q); // [cite: 44, 45]

// Periksa hasil pengiriman query
if ($hasil === TRUE) { // [cite: 46, 47]
    echo "Tabel t_login berhasil dibuat"; // [cite: 48]
} else { // [cite: 49]
    echo "Tabel gagal dibuat: " . $con->error; // [cite: 50]
}

// Menutup koneksi
$con->close(); // [cite: 52, 53]
?>