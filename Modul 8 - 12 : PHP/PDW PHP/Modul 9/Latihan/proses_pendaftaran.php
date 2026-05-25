<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
</head>
<body>
    <?php
    // Pastikan data dikirim via POST sebelum menampilkannya untuk menghindari error
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Selamat datang <b>" . $_POST["nama"] . "</b><br>";
        echo "NIM : " . $_POST["nim"] . "<br>";
        echo "Email : " . $_POST["email"] . "<br>";
        echo "Tempat, Tanggal Lahir : " . $_POST["tempat"] . "<br>";
        echo "Alamat : " . $_POST["alamat"] . "<br>";
        
        // Cek apakah gender diisi agar tidak error undefined array key
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : "Belum dipilih";
        echo "Jenis Kelamin : " . $gender . "<br>";
    } else {
        echo "Akses tidak sah.";
    }
    ?>
</body>
</html>

<!-- 
Simpulan Eksperimen GET vs POST:

Jika Anda mengubah method="POST" menjadi method="GET" pada file HTML, maka saat tombol "Kirim" ditekan, 
seluruh data isian Anda (nama, email, dll) akan terlihat jelas di URL browser (misal: proses_pendaftaran.php?nim=123&nama=Budi...). 
Metode GET tidak aman untuk data sensitif, sedangkan POST menyembunyikan data di latar belakang (HTTP Body).
-->