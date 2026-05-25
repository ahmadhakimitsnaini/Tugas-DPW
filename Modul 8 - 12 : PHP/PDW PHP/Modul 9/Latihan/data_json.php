<?php
// Membuat array dengan index 'nama' dan 'umur' (15 data)
$dataSiswa = array(
    array("nama" => "Andi", "umur" => 15),
    array("nama" => "Budi", "umur" => 16),
    array("nama" => "Citra", "umur" => 15),
    array("nama" => "Deni", "umur" => 17),
    array("nama" => "Eka", "umur" => 16),
    array("nama" => "Fajar", "umur" => 15),
    array("nama" => "Gita", "umur" => 17),
    array("nama" => "Hadi", "umur" => 16),
    array("nama" => "Indah", "umur" => 15),
    array("nama" => "Joko", "umur" => 16),
    array("nama" => "Kiki", "umur" => 17),
    array("nama" => "Lia", "umur" => 15),
    array("nama" => "Maman", "umur" => 16),
    array("nama" => "Nina", "umur" => 17),
    array("nama" => "Oscar", "umur" => 15)
);

// Memberitahu browser bahwa ini adalah halaman JSON
header('Content-Type: application/json');

// Mengkonversi array PHP menjadi JSON dan mencetaknya
echo json_encode($dataSiswa, JSON_PRETTY_PRINT);
?>