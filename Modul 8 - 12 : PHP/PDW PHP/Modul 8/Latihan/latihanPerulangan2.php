<?php
$angka = array(12, 13, 15, 16, 67, 189, 346, 876, 54232, 3256);

foreach ($angka as $nilai) {
    // Jika dibagi 2 sisanya 0, maka genap. Jika tidak, ganjil.
    if ($nilai % 2 == 0) {
        echo "Nomor: $nilai Genap <br>";
    } else {
        echo "Nomor: $nilai Ganjil <br>";
    }
}
?>