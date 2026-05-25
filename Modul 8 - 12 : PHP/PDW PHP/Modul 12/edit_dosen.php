<?php
require_once 'Database.php';
if (!isset($_GET['idDosen'])) { header("Location: viewdosen.php"); exit; }

$idDosen = (int)$_GET['idDosen'];
$db      = new Database();

$stmt = $db->con->prepare("SELECT * FROM t_dosen WHERE idDosen = ?");
$stmt->bind_param("i", $idDosen);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Dosen - Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header"><h2>Sistem Informasi Akademik</h2></div>
<div class="nav">
    <a href="viewdosen.php">Data Dosen</a>
    <a href="view_mhs.php">Data Mahasiswa</a>
    <a href="view_mk.php">Data Matakuliah</a>
</div>
<div class="container">
    <h3>Edit Data Dosen</h3>
    <form action="proses_edit_dosen.php" method="POST">
        <input type="hidden" name="idDosen" value="<?= $data['idDosen'] ?>">
        <div class="form-group">
            <label>ID Dosen:</label>
            <input type="number" value="<?= htmlspecialchars($data['idDosen']) ?>" disabled>
        </div>
        <div class="form-group">
            <label>Nama Dosen:</label>
            <input type="text" name="namaDosen" value="<?= htmlspecialchars($data['namaDosen']) ?>" required>
        </div>
        <div class="form-group">
            <label>No HP:</label>
            <input type="text" name="noHP" value="<?= htmlspecialchars($data['noHP'] ?? $data['noHp'] ?? '') ?>">
        </div>
        <input type="submit" name="edit" value="Update Data" class="btn btn-edit">
        <a href="viewdosen.php" class="btn btn-hapus">Batal</a>
    </form>
</div>
<?php $db->closeConnection(); ?>
</body>
</html>
