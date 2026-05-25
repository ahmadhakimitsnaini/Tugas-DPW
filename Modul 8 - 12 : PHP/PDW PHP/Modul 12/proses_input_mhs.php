<?php
require_once 'Database.php';
if (isset($_POST['simpan'])) {
    $npm     = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi   = $_POST['prodi'];
    $alamat  = $_POST['alamat'];
    $noHP    = $_POST['noHP'];

    $db   = new Database();
    $stmt = $db->con->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHP);

    if (!$stmt->execute()) {
        die("Gagal menyimpan data: " . $stmt->error);
    }
    $stmt->close();
    $db->closeConnection();
    header("Location: view_mhs.php");
}
?>
