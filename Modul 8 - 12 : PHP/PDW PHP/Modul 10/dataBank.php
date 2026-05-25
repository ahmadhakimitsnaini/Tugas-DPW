<?php
require_once('kelas/akunBank.php');

$data1 = new akunBank("801", 10000);
$data1->setNama("Ahmad Hakim");

$data2 = new akunBank("802", 18000);
$data2->setNama("Budi");

echo "<b>Informasi Akun 1:</b><br>";
echo "Nama: " . $data1->getNama() . "<br>";
echo $data1->cekSaldo() . "<br>";
echo $data1->tambahUang(50000) . "<br>";
echo $data1->cekSaldo() . "<br>";
echo $data1->kurangiUang(15000) . "<br>";
echo $data1->cekSaldo() . "<br>";
echo $data1->hitungPajak() . "<br>";
?>