<?php
require_once 'Database.php';
if (isset($_GET['idDosen'])) {
    $idDosen = (int)$_GET['idDosen'];

    $db   = new Database();
    $stmt = $db->con->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $idDosen);
    $stmt->execute();
    $stmt->close();
    $db->closeConnection();
}
header("Location: viewdosen.php");
?>
