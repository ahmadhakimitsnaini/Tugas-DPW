<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->con;

$keyword = $_GET['cari'] ?? '';

if ($keyword !== '') {
    $stmt = $con->prepare("SELECT * FROM t_dosen WHERE namaDosen LIKE ? ORDER BY idDosen ASC");
    $like = "%{$keyword}%";
    $stmt->bind_param("s", $like);
} else {
    $stmt = $con->prepare("SELECT * FROM t_dosen ORDER BY idDosen ASC");
}
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Dosen - Sistem Informasi Akademik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <h2>Sistem Informasi Akademik</h2>
    <p>Dikelola oleh: Sani (253307054) - D3 Teknologi Informasi</p>
</div>
<div class="nav">
    <a href="viewdosen.php">Data Dosen</a>
    <a href="view_mhs.php">Data Mahasiswa</a>
    <a href="view_mk.php">Data Matakuliah</a>
</div>
<div class="container">
    <h3>Tabel Data Dosen</h3>
    <a href="input_dosen.php" class="btn btn-tambah">+ Tambah Dosen</a>

    <div class="search-box">
        <form action="viewdosen.php" method="GET">
            <input type="text" name="cari" placeholder="Cari Nama Dosen..." value="<?php echo htmlspecialchars($keyword); ?>">
            <input type="submit" value="Cari">
        </form>
    </div>

    <table>
        <tr>
            <th>ID Dosen</th><th>Nama Dosen</th><th>No HP</th><th>Aksi</th>
        </tr>
        <?php if ($result->num_rows === 0): ?>
            <tr><td colspan="4" class="no-data">Tidak ada data yang ditemukan.</td></tr>
        <?php else: ?>
            <?php while ($data = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($data['idDosen']) ?></td>
                <td><?= htmlspecialchars($data['namaDosen']) ?></td>
                <td><?= htmlspecialchars($data['noHP'] ?? $data['noHp'] ?? '') ?></td>
                <td>
                    <a href="edit_dosen.php?idDosen=<?= $data['idDosen'] ?>" class="btn btn-edit">Edit</a>
                    <a href="hapus_dosen.php?idDosen=<?= $data['idDosen'] ?>" class="btn btn-hapus" onclick="return confirm('Yakin hapus dosen ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php endif; ?>
    </table>
</div>
<?php $stmt->close(); $db->closeConnection(); ?>
</body>
</html>