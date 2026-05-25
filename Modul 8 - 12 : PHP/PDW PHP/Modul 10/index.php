<?php
require_once('kelas/Manusia.php');

$andi = new Manusia();
$andi->setNama("Andi Pratama");

$budi = new Manusia();
$budi->setNama("Budi Santoso");

// Menambahkan identitas sendiri
$sani = new Manusia();
$sani->setNama("Ahmad Hakim Itsnaini");
$sani->setUmur(18);

echo "Nama: " . $budi->getNama() . "<br>";
echo "Nama Saya: " . $sani->getNama() . "<br>";
echo "Umur Saya: " . $sani->getUmur() . "<br>";

// Menampilkan NIK (akan berhasil jika getNIK() diset public)
echo $sani->getNIK() . "<br>";

/* KESIMPULAN UJI COBA:
1. Jika fungsi getNIK() pada class Manusia.php dibiarkan dengan access modifier 'private', 
   maka akan terjadi "Fatal error: Uncaught Error: Call to private method Manusia::getNIK()" 
   saat dipanggil di index.php. Access modifier private mengunci fungsi tersebut agar hanya 
   bisa diakses dari dalam kelas itu sendiri.
2. Untuk menampilkannya, modifier getNIK() harus diubah menjadi 'public', ATAU kita harus 
   membuat satu fungsi public baru di dalam class Manusia yang me-return fungsi getNIK() tersebut.
3. Fungsi Getter dan Setter sangat penting untuk menerapkan prinsip Enkapsulasi, di mana 
   variabel dilindungi (protected/private) dan hanya bisa diubah/diambil melalui fungsi yang sah.
*/
?>