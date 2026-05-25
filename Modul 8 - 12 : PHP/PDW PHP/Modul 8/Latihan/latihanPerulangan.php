<?php
echo "<h3>Pola Bintang</h3>";
// Loop pertama untuk jumlah baris (1 sampai 10)
for ($i = 1; $i <= 10; $i++) {
    // Loop kedua untuk mencetak bintang sebanyak nomor baris saat ini
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>"; // Pindah ke baris baru setelah bintang tercetak
}
?>