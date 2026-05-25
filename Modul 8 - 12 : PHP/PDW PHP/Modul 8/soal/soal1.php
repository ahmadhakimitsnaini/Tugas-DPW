<?php
$gajiPokok = 3250000;
$tunjangan = 1200000;

// Gaji Kotor = Gaji Pokok + Tunjangan
$gajiKotor = $gajiPokok + $tunjangan;

// Pajak 10% dari Gaji Kotor
$pajak = 0.10 * $gajiKotor;

// Gaji Bersih yang diterima
$gajiBersih = $gajiKotor - $pajak;

// Number_format digunakan agar tampilan mata uang rapi
echo "Gaji Pokok: Rp " . number_format($gajiPokok, 0, ',', '.') . "<br>";
echo "Tunjangan: Rp " . number_format($tunjangan, 0, ',', '.') . "<br>";
echo "Gaji Kotor: Rp " . number_format($gajiKotor, 0, ',', '.') . "<br>";
echo "Pajak (10%): Rp " . number_format($pajak, 0, ',', '.') . "<br>";
echo "<b>Gaji Bersih Diterima Obi: Rp " . number_format($gajiBersih, 0, ',', '.') . "</b>";
?>