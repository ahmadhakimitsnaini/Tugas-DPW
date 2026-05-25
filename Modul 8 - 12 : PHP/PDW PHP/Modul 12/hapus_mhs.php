<?php
require_once 'Database.php';
if (isset($_GET['npm'])) {
    $npm = (int)$_GET['npm'];

    $db   = new Database();
    $stmt = $db->con->prepare("DELETE FROM t_mahasiswa WHERE npm = ?");
    $stmt->bind_param("i", $npm);
    $stmt->execute();
    $stmt->close();
    $db->closeConnection();
}
header("Location: view_mhs.php");
?>
