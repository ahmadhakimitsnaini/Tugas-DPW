<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $query = "INSERT INTO t_mahasiswa VALUES ('$npm', '$namaMhs', '$prodi', '$alamat', '$noHP')";
    $result = mysqli_query($link, $query);
    
    if(!$result) { die("Gagal: " . mysqli_error($link)); }
    header("location:view_mhs.php");
}
?>