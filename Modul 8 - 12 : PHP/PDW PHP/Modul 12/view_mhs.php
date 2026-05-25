<?php
require_once 'Database.php';
$db  = new Database();
$con = $db->con;

// Logika Pencarian
$keyword = $_GET['cari'] ?? '';

if ($keyword !== '') {
    $stmt = $con->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? ORDER BY npm ASC");
    $like = "%{$keyword}%";
    $stmt->bind_param("s", $like);
} else {
    $stmt = $con->prepare("SELECT * FROM t_mahasiswa ORDER BY npm ASC");
}
$stmt->execute();
$result = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa - Sistem Informasi Akademik</title>
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
    <h3>Tabel Data Mahasiswa</h3>
    <a href="input_mhs.php" class="btn btn-tambah">+ Tambah Data</a>

    <div class="search-box">
        <form action="view_mhs.php" method="GET">
            <input type="text" name="cari" placeholder="Cari Nama Mahasiswa..." value="<?php echo htmlspecialchars($keyword); ?>">
            <input type="submit" value="Cari">
        </form>
    </div>

    <table>
        <tr>
            <th>NPM</th><th>Nama Mahasiswa</th><th>Prodi</th><th>Alamat</th><th>No HP</th><th>Aksi</th>
        </tr>
        <?php if ($result->num_rows === 0): ?>
            <tr><td colspan="6" class="no-data">Tidak ada data yang ditemukan.</td></tr>
        <?php else: ?>
            <?php while ($data = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($data['npm']) ?></td>
                <td><?= htmlspecialchars($data['namaMhs']) ?></td>
                <td><?= htmlspecialchars($data['prodi']) ?></td>
                <td><?= htmlspecialchars($data['alamat']) ?></td>
                <td><?= htmlspecialchars($data['noHP'] ?? $data['noHp'] ?? '') ?></td>
                <td>
                    <a href="edit_mhs.php?npm=<?= $data['npm'] ?>" class="btn btn-edit">Edit</a>
                    <a href="hapus_mhs.php?npm=<?= $data['npm'] ?>" class="btn btn-hapus" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        <?php endif; ?>
    </table>
</div>
<?php $stmt->close(); $db->closeConnection(); ?>
</body>
</html>
