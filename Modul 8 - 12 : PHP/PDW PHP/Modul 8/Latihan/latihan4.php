<?php
$t = date("H"); // mendapatkan jam dengan format 1-24

echo "<b>If</b><br>";
if ($t < 16) {
    echo "Selamat siang!";
}

echo "<br><br><b>If dan Else</b><br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br><br><b>Nested If</b><br>";
if ($t < 10) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}
?>