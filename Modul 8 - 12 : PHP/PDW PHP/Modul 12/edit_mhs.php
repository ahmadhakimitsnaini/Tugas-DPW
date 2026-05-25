<?php
require_once 'Database.php';
if (!isset($_GET['npm'])) { header("Location: view_mhs.php"); exit; }

$npm = (int)$_GET['npm'];
$db  = new Database();

$stmt = $db->con->prepare("SELECT * FROM t_mahasiswa WHERE npm = ?");
$stmt->bind_param("i", $npm);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa - Sistem Informasi Akademik</title>
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
    <h3>Edit Data Mahasiswa</h3>
    <form action="proses_edit_mhs.php" method="POST">
        <input type="hidden" name="npm" value="<?= $data['npm'] ?>">
        <div class="form-group">
            <label>NPM:</label>
            <input type="number" value="<?= htmlspecialchars($data['npm']) ?>" disabled>
        </div>
        <div class="form-group">
            <label>Nama Mahasiswa:</label>
            <input type="text" name="namaMhs" value="<?= htmlspecialchars($data['namaMhs']) ?>" required>
        </div>
        <div class="form-group">
            <label>Prodi:</label>
            <input type="text" name="prodi" value="<?= htmlspecialchars($data['prodi']) ?>">
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat"><?= htmlspecialchars($data['alamat']) ?></textarea>
        </div>
        <div class="form-group">
            <label>No HP:</label>
            <input type="text" name="noHP" value="<?= htmlspecialchars($data['noHP'] ?? $data['noHp'] ?? '') ?>">
        </div>
        <input type="submit" name="edit" value="Update Data" class="btn btn-edit">
        <a href="view_mhs.php" class="btn btn-hapus">Batal</a>
    </form>
</div>
<?php $db->closeConnection(); ?>
</body>
</html>
