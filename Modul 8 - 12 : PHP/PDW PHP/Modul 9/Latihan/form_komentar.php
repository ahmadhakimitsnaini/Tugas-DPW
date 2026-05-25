<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
</head>
<body>
    <h2>Form Komentar</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="name"><br><br>
        E-mail: <input type="text" name="email"><br><br>
        Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        <input type="submit" value="Simpan">
        <input type="reset" value="Bersihkan">
    </form>

    <?php
    $name = $email = $comment = "";

    // Fungsi untuk membersihkan inputan
    function bersihkan_input($data) {
        $data = trim($data);            // Menghapus spasi berlebih di awal/akhir
        $data = stripslashes($data);    // Menghapus backslash (\)
        $data = htmlspecialchars($data);// Mengubah tag HTML menjadi entitas teks aman
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Menggunakan fungsi filter untuk mengamankan data
        $name = bersihkan_input($_POST["name"]);
        $email = bersihkan_input($_POST["email"]);
        $comment = bersihkan_input($_POST["comment"]);

        echo "<h3>Hasil Input:</h3>";
        echo "Nama: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Komentar: " . $comment . "<br>";
        echo "<hr>";
    }
    ?>
</body>
</html>

<!-- 
Simpulan XSS:

Jika kita tidak menggunakan htmlspecialchars() dan memasukkan <img src="http://url.to.file./tidak.ada" onerror=alert('hacked');>
ke dalam kolom komentar, browser akan menganggap itu adalah kode HTML nyata dan mengeksekusi peringatan (alert) "hacked". 
Dengan menggunakan bersihkan_input(), kode berbahaya tersebut diubah menjadi teks biasa sehingga aman ditampilkan.
-->