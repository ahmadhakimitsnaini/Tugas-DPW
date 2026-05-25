<?php
require_once 'Database.php';
if (isset($_POST['edit'])) {
    $npm     = (int)$_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $db   = new Database();
    $stmt = $db->con->prepare("UPDATE t_mahasiswa SET namaMhs=?, prodi=?, alamat=?, noHP=? WHERE npm=?");
    $stmt->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $npm);
    $stmt->execute();
    $stmt->close();
    $db->closeConnection();
    header("Location: view_mhs.php");
}
?>
