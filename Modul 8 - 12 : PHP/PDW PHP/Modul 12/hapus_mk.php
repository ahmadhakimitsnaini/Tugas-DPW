<?php
require_once 'Database.php';
if (isset($_GET['kodeMK'])) {
    $kodeMK = (int)$_GET['kodeMK'];

    $db   = new Database();
    $stmt = $db->con->prepare("DELETE FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("i", $kodeMK);
    $stmt->execute();
    $stmt->close();
    $db->closeConnection();
}
header("Location: view_mk.php");
?>
