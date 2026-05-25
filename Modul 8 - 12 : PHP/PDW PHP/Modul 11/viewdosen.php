<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen - Sistem Informasi Akademik</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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

        <div class="search-box">
            <form action="viewdosen.php" method="GET">
                <input type="text" name="cari" placeholder="Cari Nama Dosen..." value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
                <input type="submit" value="Cari">
            </form>
        </div>

        <table>
            <tr>
                <th>ID Dosen</th>
                <th>Nama Dosen</th>
                <th>No HP</th>
            </tr>
            <?php
            // Logika Pencarian
            if (isset($_GET['cari']) && $_GET['cari'] !== '') {
                $cari  = mysqli_real_escape_string($link, $_GET['cari']);
                $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$cari%' ORDER BY idDosen ASC";
            } else {
                $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
            }

            $result = mysqli_query($link, $query);
            if (!$result) { die("Query Error: " . mysqli_error($link)); }

            $rowCount = mysqli_num_rows($result);
            if ($rowCount == 0) {
                echo "<tr><td colspan='3' style='text-align:center; color:#888;'>Tidak ada data yang ditemukan.</td></tr>";
            }

            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$data['idDosen']}</td>";
                echo "<td>{$data['namaDosen']}</td>";
                $noHpValue = $data['noHP'] ?? $data['noHp'] ?? $data['no_hp'] ?? '';
                echo "<td>{$noHpValue}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>