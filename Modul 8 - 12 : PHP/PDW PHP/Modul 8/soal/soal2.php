<?php
$uangAni = 1387500;
echo "Total Uang Ani: Rp " . number_format($uangAni, 0, ',', '.') . "<br><br>";
echo "Rincian Pecahan Uang: <br>";

// Daftar pecahan uang yang tersedia
$pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 500);

foreach ($pecahan as $nilai) {
    // Hitung berapa lembar/keping uang yang didapat (dibulatkan ke bawah dengan floor)
    $jumlahLembar = floor($uangAni / $nilai);
    
    // Kurangi sisa uang Ani dengan pecahan yang sudah dihitung
    $uangAni = $uangAni % $nilai;
    
    // Tampilkan hanya jika jumlah lembarnya lebih dari 0
    if ($jumlahLembar > 0) {
        $jenis = ($nilai > 500) ? "lembar" : "keping";
        echo "- $jumlahLembar $jenis uang Rp " . number_format($nilai, 0, ',', '.') . "<br>";
    }
}
?>