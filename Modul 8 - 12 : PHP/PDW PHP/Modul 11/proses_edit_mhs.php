<?php
// proses_edit_mhs.php
include 'koneksi.php';
if (isset($_POST['edit'])) {
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $query = "UPDATE t_mahasiswa SET namaMhs='$namaMhs', prodi='$prodi', alamat='$alamat', noHP='$noHP' WHERE npm='$npm'";
    mysqli_query($link, $query);
    header("location:view_mhs.php");
}
?>

<?php
// hapus_mhs.php
include 'koneksi.php';
if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];
    mysqli_query($link, "DELETE FROM t_mahasiswa WHERE npm='$npm'");
    header("location:view_mhs.php");
}
?>