<?php
$con = new mysqli("localhost", "root", "root", "modul_database_php"); //

// Mengecek koneksi
if ($con->connect_error) { //
    die("Connection failed: " . $con->connect_error); //
}
?>