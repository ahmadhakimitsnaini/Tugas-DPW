<?php
$x = 5;
$y = 10;

// Arithmetic operators
echo "Penambahan : " . ($x + $y) . "<br>";
echo "Pengurangan : " . ($x - $y) . "<br>";
echo "Perkalian : " . ($x * $y) . "<br>";
echo "Pembagian : " . ($x / $y) . "<br>";
echo "Modulus : " . ($x % $y) . "<br>";
echo "Exponensial : " . ($x ** $y) . "<br>";
echo("<br>");

// Assignment operators
$x += 2; // $x = $x + 2 -> 7
$y *= 2; // $y = $y * 2 -> 20
echo "Penambahan x : " . $x . "<br>";
echo "Perkalian y : " . $y . "<br>";
echo("<br>");

// Increment/Decrement operators
echo "Isi ++x = " . ++$x . "<br>"; // Pre-increment
echo "Isi x++ = " . $x++ . "<br>"; // Post-increment
echo "Isi x = " . $x . "<br>";
echo("<br>");

echo "Isi --y = " . --$y . "<br>"; // Pre-decrement
echo "Isi y-- = " . $y-- . "<br>"; // Post-decrement
echo "Isi y = " . $y . "<br>";
echo("<br>");

// Conditional assignment operators
$user = "Andi darmawan";
// <kondisi> ? <nilai_jika_kondisi_true> : <nilai_jika_kondisi_false>
$status = (empty($user)) ? "Kosong" : "Ada isi";
echo $status . "<br>";

// Variable $color diisi dengan "red" jika $color tidak ada atau null
$color = $color ?? "red";
echo $color;
?>

<!-- 
$x++ (Post-increment): Nilai $x akan digunakan atau ditampilkan terlebih dahulu pada baris tersebut, 
baru kemudian nilainya ditambah 1 di belakang layar.

++$x (Pre-increment): Nilai $x akan langsung ditambah 1 terlebih dahulu, 
kemudian nilai baru tersebut langsung digunakan atau ditampilkan pada baris tersebut.
-->
