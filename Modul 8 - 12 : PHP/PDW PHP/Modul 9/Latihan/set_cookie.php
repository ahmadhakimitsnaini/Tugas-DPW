<?php
// Set cookie dengan nama 'user_identitas', nilai 'Mahasiswa IT', berlaku 1 hari (86400 detik)
setcookie("user_identitas", "Ahmad Hakim Itsnaini", time() + (86400 * 1), "/"); 

echo "<h2>Implementasi Cookies</h2>";
if(!isset($_COOKIE["user_identitas"])) {
    echo "Cookie bernama 'user_identitas' belum diset atau baru saja dibuat (silakan refresh halaman).";
} else {
    echo "Cookie 'user_identitas' sudah diset!<br>";
    echo "Nilainya adalah: <b>" . $_COOKIE["user_identitas"] . "</b>";
}
?>