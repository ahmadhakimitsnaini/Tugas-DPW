<?php
require_once 'Database.php';
if (isset($_POST['simpan'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    $db   = new Database();
    $stmt = $db->con->prepare("INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)");
    $stmt->bind_param("ss", $namaDosen, $noHP);

    if (!$stmt->execute()) {
        die("Gagal menyimpan data: " . $stmt->error);
    }
    $stmt->close();
    $db->closeConnection();
    header("Location: viewdosen.php");
}
?>
