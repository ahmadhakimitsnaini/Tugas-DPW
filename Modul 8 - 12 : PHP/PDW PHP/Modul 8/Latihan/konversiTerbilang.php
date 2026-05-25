<?php
$angka = 7; // Ubah angka ini untuk mencoba hasilnya

echo "Angka: $angka <br>";
echo "Terbilang: ";

switch ($angka) {
    case 1: echo "Satu"; break;
    case 2: echo "Dua"; break;
    case 3: echo "Tiga"; break;
    case 4: echo "Empat"; break;
    case 5: echo "Lima"; break;
    case 6: echo "Enam"; break;
    case 7: echo "Tujuh"; break;
    case 8: echo "Delapan"; break;
    case 9: echo "Sembilan"; break;
    default: echo "Angka di luar batas (1-9)";
}
?>