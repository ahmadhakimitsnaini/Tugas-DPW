<?php
$nilai = 85; // Ubah angka ini untuk mencoba hasil yang berbeda

echo "Nilai Angka: $nilai <br>";
echo "Nilai Huruf: ";

if ($nilai >= 90 && $nilai <= 100) {
    echo "A";
} elseif ($nilai >= 80 && $nilai <= 89) {
    echo "AB";
} elseif ($nilai >= 70 && $nilai <= 79) {
    echo "B";
} elseif ($nilai >= 60 && $nilai <= 69) {
    echo "BC";
} elseif ($nilai >= 0 && $nilai <= 59) {
    echo "C";
} else {
    echo "Nilai di luar jangkauan (0-100)";
}
?>