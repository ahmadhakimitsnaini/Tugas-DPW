<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File Gambar</title>
</head>
<body>
    <h2>Upload Gambar</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih Gambar yang akan di upload:</label><br>
        <input type="file" name="gambar" id="gambar1"></p>
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <br>

    <?php
    // Pastikan kode ini HANYA dieksekusi jika ada form yang disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
        
        // Cek apakah user benar-benar memilih file
        if (!empty($_FILES["gambar"]["name"])) {
            $target_dir = "gambar/";
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $uploadOk = 1;
            $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // 1. Cek apakah file benar-benar gambar
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if($check !== false) {
                echo "File berupa citra/gambar - " . $check["mime"] . ".<br>";
                $uploadOk = 1;
            } else {
                echo "File bukan gambar.<br>";
                $uploadOk = 0;
            }

            // 2. Deteksi apakah file sudah ada
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.<br>";
                $uploadOk = 0;
            }

            // 3. Check ukuran file (Max 500KB)
            if ($_FILES["gambar"]["size"] > 500000) {
                echo "Sorry, file anda terlalu besar.<br>";
                $uploadOk = 0;
            }

            // 4. Filter Format
            if($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif" ) {
                echo "Sorry, hanya file JPG, JPEG, PNG & GIF.<br>";
                $uploadOk = 0;
            }

            // 5. Eksekusi Upload
            if ($uploadOk == 0) {
                echo "<b>Sorry, File anda gagal upload.</b>";
            } else {
                if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                    echo "File <b>" . htmlspecialchars(basename($_FILES["gambar"]["name"])) . "</b> berhasil diupload.";
                } else {
                    echo "Sorry, Ada error saat upload.";
                }
            }
        } else {
             echo "Anda belum memilih file untuk diupload!";
        }
    }
    ?>
</body>
</html>