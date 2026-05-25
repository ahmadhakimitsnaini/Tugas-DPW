<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->con;

$keyword = $_GET['cari'] ?? '';

if ($keyword !== '') {
    $stmt = $con->prepare("SELECT * FROM t_matakuliah WHERE namaMK LIKE ? ORDER BY kodeMK ASC");
    $like = "%{$keyword}%";
    $stmt->bind_param("s", $like);
} else {
    $stmt = $con->prepare("SELECT * FROM t_matakuliah ORDER BY kodeMK ASC");
}
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Matakuliah - Sistem Informasi Akademik</title>
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
    <h3>Tabel Data Matakuliah</h3>
    <a href="input_mk.php" class="btn btn-tambah">+ Tambah Matakuliah</a>

    <div class="search-box">
        <form action="view_mk.php" method="GET">
            <input type="text" name="cari" placeholder="Cari Nama Matakuliah..." value="<?php echo htmlspecialchars($keyword); ?>">
            <input type="submit" value="Cari">
        </form>
    </div>

    <table>
        <tr>
            <th>Kode MK</th><th>Nama Matakuliah</th><th>SKS</th><th>Jam</th><th>Aksi</th>
        </tr>
        <?php if ($result->num_rows === 0): ?>
            <tr><td colspan="5" class="no-data">Tidak ada data yang ditemukan.</td></tr>
        <?php else: ?>
            <?php while ($data = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($data['kodeMK']) ?></td>
                <td><?= htmlspecialchars($data['namaMK']) ?></td>
                <td><?= htmlspecialchars($data['sks']) ?></td>
                <td><?= htmlspecialchars($data['jam']) ?></td>
                <td>
                    <a href="edit_mk.php?kodeMK=<?= $data['kodeMK'] ?>" class="btn btn-edit">Edit</a>
                    <a href="hapus_mk.php?kodeMK=<?= $data['kodeMK'] ?>" class="btn btn-hapus" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php endif; ?>
    </table>
</div>
<?php $stmt->close(); $db->closeConnection(); ?>
</body>
</html>
