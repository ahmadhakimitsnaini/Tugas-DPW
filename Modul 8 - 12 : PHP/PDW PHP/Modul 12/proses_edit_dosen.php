<?php
require_once 'Database.php';
if (isset($_POST['edit'])) {
    $idDosen   = (int)$_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP      = $_POST['noHP'];

    $db   = new Database();
    $stmt = $db->con->prepare("UPDATE t_dosen SET namaDosen=?, noHP=? WHERE idDosen=?");
    $stmt->bind_param("ssi", $namaDosen, $noHP, $idDosen);
    $stmt->execute();
    $stmt->close();
    $db->closeConnection();
    header("Location: viewdosen.php");
}
?>
