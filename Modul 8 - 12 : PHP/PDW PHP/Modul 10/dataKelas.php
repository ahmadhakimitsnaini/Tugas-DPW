<?php
require_once('kelas/Mahasiswa.php');

$mhs1 = new mahasiswa("Sani");
$mhs1->setNIM("253307054");
$mhs1->setJurusan("Teknologi Informasi");
$mhs1->setKelas("1B");

echo "<b>Data Mahasiswa:</b><br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "NIM: " . $mhs1->getNIM() . "<br>";
echo "Jurusan: " . $mhs1->getJurusan() . "<br>";
echo "Kelas: " . $mhs1->getKelas() . "<br>";
?>