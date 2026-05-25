<?php
include 'koneksi.php';
if (isset($_GET['kodeMK'])) {
    $kodeMK = $_GET['kodeMK'];
    mysqli_query($link, "DELETE FROM t_matakuliah WHERE kodeMK='$kodeMK'");
    header("location:view_mk.php");
}
?>
