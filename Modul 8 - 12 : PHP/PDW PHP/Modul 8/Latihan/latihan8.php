<?php
// Data kelas dengan array 2 dimensi
$array = array(
    "1C" => array("Udin", "Ismail", "Adi"),
    "1D" => array("Lukman", "Fajri", "Mahmud")
);

// Menampilkan kerangka data array penuh
print_r($array);
echo "<br><br>";

// Menampilkan data khusus kelas 1D
print_r($array['1D']);
echo "<br><br>";

// Menampilkan siswa kelas 1D dengan indeks ke-0 (Lukman)
echo $array['1D'][0];
echo "<br>";

// Tampilkan Fajri (Kelas 1D, Indeks 1)
echo $array['1D'][1];
echo "<br>";

// Tampilkan Adi (Kelas 1C, Indeks 2)
echo $array['1C'][2];
echo "<br><br>";

// Cara penulisan array yang lebih modern dan simpel
$array_simple = [
    "1C" => ["Udin", "Ismail", "Adi"],
    "1D" => ["Lukman", "Fajri", "Mahmud"]
];
print_r($array_simple);
?>