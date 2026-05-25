<?php
require_once 'Database.php';
if (isset($_POST['simpan'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = $_POST['sks'];
    $jam    = $_POST['jam'];

    $db   = new Database();
    $stmt = $db->con->prepare("INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isii", $kodeMK, $namaMK, $sks, $jam);

    if (!$stmt->execute()) {
        die("Gagal menyimpan data: " . $stmt->error);
    }
    $stmt->close();
    $db->closeConnection();
    header("Location: view_mk.php");
}
?>
