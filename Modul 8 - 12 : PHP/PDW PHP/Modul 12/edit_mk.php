<?php
require_once 'Database.php';
if (!isset($_GET['kodeMK'])) { header("Location: view_mk.php"); exit; }

$kodeMK = (int)$_GET['kodeMK'];
$db     = new Database();

$stmt = $db->con->prepare("SELECT * FROM t_matakuliah WHERE kodeMK = ?");
$stmt->bind_param("i", $kodeMK);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Matakuliah - Sistem Informasi Akademik</title>
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
    <h3>Edit Data Matakuliah</h3>
    <form action="proses_edit_mk.php" method="POST">
        <input type="hidden" name="kodeMK" value="<?= $data['kodeMK'] ?>">
        <div class="form-group">
            <label>Kode MK:</label>
            <input type="number" value="<?= htmlspecialchars($data['kodeMK']) ?>" disabled>
        </div>
        <div class="form-group">
            <label>Nama Matakuliah:</label>
            <input type="text" name="namaMK" value="<?= htmlspecialchars($data['namaMK']) ?>" required>
        </div>
        <div class="form-group">
            <label>SKS:</label>
            <input type="number" name="sks" value="<?= htmlspecialchars($data['sks']) ?>" required>
        </div>
        <div class="form-group">
            <label>Jam:</label>
            <input type="number" name="jam" value="<?= htmlspecialchars($data['jam']) ?>" required>
        </div>
        <input type="submit" name="edit" value="Update Data" class="btn btn-edit">
        <a href="view_mk.php" class="btn btn-hapus">Batal</a>
    </form>
</div>
<?php $db->closeConnection(); ?>
</body>
</html>
