<?php
// While Loop
$x = 1;
while ($x <= 5) {
    echo "Nomor (While): $x <br>";
    $x++;
}
echo "<br>";

// Do While
$x = 1;
do {
    echo "Nomor (Do While): $x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";

// Foreach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "Warna: $value <br>";
}
echo "<br>";

// For
for ($x = 1; $x <= 5; $x++) {
    echo "Nomor (For): $x <br>";
}
echo "<br>";

// For dengan break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break; // Loop akan berhenti total saat x = 4
    }
    echo "Nomor dengan Break: $x <br>";
}
?>