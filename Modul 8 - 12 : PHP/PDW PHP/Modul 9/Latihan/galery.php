<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>
    <style>
        .galeri {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }
        .galeri img {
            width: 250px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <h2>Galeri Gambar Saya</h2>
    <div class="galeri">
        <?php
        $fileList = glob('gambar/*'); // Membaca semua file di dalam folder gambar
        
        if (count($fileList) > 0) {
            foreach ($fileList as $filename) {
                if (is_file($filename)) {
                    // Menyisipkan nama file ke dalam tag img HTML
                    echo '<img src="' . $filename . '" alt="Gambar Galeri">';
                }
            }
        } else {
            echo "<p>Belum ada gambar di galeri. Silakan upload terlebih dahulu.</p>";
        }
        ?>
    </div>
</body>
</html>