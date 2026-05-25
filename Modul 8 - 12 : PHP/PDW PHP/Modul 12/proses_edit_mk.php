<?php
require_once 'Database.php';
if (isset($_POST['edit'])) {
    $kodeMK = (int)$_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks    = (int)$_POST['sks'];
    $jam    = (int)$_POST['jam'];

    $db   = new Database();
    $stmt = $db->con->prepare("UPDATE t_matakuliah SET namaMK=?, sks=?, jam=? WHERE kodeMK=?");
    $stmt->bind_param("siii", $namaMK, $sks, $jam, $kodeMK);
    $stmt->execute();
    $stmt->close();
    $db->closeConnection();
    header("Location: view_mk.php");
}
?>
