<?php
// Data siswa dimasukkan ke dalam Array Multidimensi
$dataSiswa = array(
    array("no" => 1, "poin" => 75, "nama" => "Adi"),
    array("no" => 2, "poin" => 80, "nama" => "Joni"),
    array("no" => 3, "poin" => 65, "nama" => "Jihan"),
    array("no" => 4, "poin" => 70, "nama" => "Aya"),
    array("no" => 5, "poin" => 85, "nama" => "Ita"),
    array("no" => 6, "poin" => 90, "nama" => "Budi"),
    array("no" => 7, "poin" => 95, "nama" => "Tini"),
    array("no" => 8, "poin" => 65, "nama" => "Sari")
);

// a) Tampilkan poin siswa dengan nomor urut 5
echo "<b>a) Poin siswa dengan nomor urut 5:</b><br>";
// Karena indeks array dimulai dari 0, nomor urut 5 ada di indeks ke-4
echo "Nama: " . $dataSiswa[4]['nama'] . " | Poin: " . $dataSiswa[4]['poin'] . "<br><br>";


// b) Tampilkan semua nama siswa yang memiliki poin 90
echo "<b>b) Siswa yang memiliki poin 90:</b><br>";
$ada90 = false;
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] == 90) {
        echo "- " . $siswa['nama'] . "<br>";
        $ada90 = true;
    }
}
if (!$ada90) { echo "- Tidak ada<br>"; }
echo "<br>";


// c) Tampilkan semua nama siswa yang memiliki poin 100
echo "<b>c) Siswa yang memiliki poin 100:</b><br>";
$ada100 = false;
foreach ($dataSiswa as $siswa) {
    if ($siswa['poin'] == 100) {
        echo "- " . $siswa['nama'] . "<br>";
        $ada100 = true;
    }
}
// Jika status masih false, berarti tidak ada yang sesuai kriteria
if (!$ada100) { 
    echo "- Tidak ada"; 
}
?>