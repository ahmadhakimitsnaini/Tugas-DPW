<?php
// Contoh fungsi sederhana (void)
function writeMsg($nama) {
    echo "Selamat datang " . $nama . "<br>";
}
writeMsg("Ahmad"); // Pemanggilan fungsi

// Fungsi dengan mengirim nilai balik (return)
function tambah(int $angka1, int $angka2) {
    $a = $angka1 + $angka2;
    return $a; // Mengirim nilai $a ke pemanggil
}

$hasil = tambah(5, 5); // Pemanggilan fungsi
echo "Hasil penambahan: " . $hasil;
?>