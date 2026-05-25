<?php
require_once 'koneksi.php';

// Query untuk insert data
$sql = "INSERT INTO t_dosen (idDosen, namaDosen, noHp) VALUES (11, 'Rahmat Dwi Prasetya', 'rahmat@example.com')"; // [cite: 55]

try {
    if ($con->query($sql) === TRUE) {
        echo "Data dosen berhasil ditambahkan.";
    }
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $sql . "<br>" . $e->getMessage();
}

$con->close();
?>