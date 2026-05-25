<?php
$namaBuah = array("Nanas", "Mangga", "Jeruk", "Apel", "Melon", "Manggis");

echo "Saya suka " . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".<br>";

// Tampilkan secara spesifik berdasarkan nomor indeks array (dimulai dari 0)
echo "Saya suka " . $namaBuah[1] . " (Mangga) <br>";
echo "Saya suka " . $namaBuah[2] . " (Jeruk) <br>";
echo "Saya suka " . $namaBuah[3] . " (Apel) <br>";
echo "Saya suka " . $namaBuah[4] . " (Melon) <br><br>";

// Array dengan spesifik Index (Array Asosiatif)
$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "43 Tahun");
$umur['Ahmad'] = "50 Tahun"; // Menambahkan data baru

echo "Umur Andi adalah " . $umur['Andi'] . "<br>";

// Tampilkan semua umur menggunakan foreach
echo "<b>Daftar Semua Umur:</b><br>";
foreach ($umur as $nama => $usia) {
    echo "Umur $nama adalah $usia <br>";
}
?>