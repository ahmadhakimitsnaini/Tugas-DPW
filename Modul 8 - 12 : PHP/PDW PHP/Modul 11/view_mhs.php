<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Sistem Informasi Akademik</h2>
        <p>Dikelola oleh: Sani (253307054) - D3 Teknologi Informasi</p>
    </div>
    <div class="nav">
        <a href="view_mhs.php">Data Mahasiswa</a>
        <a href="view_mk.php">Data Matakuliah</a>
    </div>

    <div class="container">
        <h3>Tabel Data Mahasiswa</h3>
        <a href="input_mhs.php" class="btn btn-tambah">+ Tambah Data</a>

        <div class="search-box">
            <form action="view_mhs.php" method="GET">
                <input type="text" name="cari" placeholder="Cari Nama Mahasiswa..." value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
                <input type="submit" value="Cari">
            </form>
        </div>

        <table>
            <tr>
                <th>NPM</th><th>Nama Mahasiswa</th><th>Prodi</th><th>Alamat</th><th>No HP</th><th>Aksi</th>
            </tr>
            <?php
            // Logika Pencarian
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE '%$cari%' ORDER BY npm ASC";
            } else {
                $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
            }

            $result = mysqli_query($link, $query);
            if(!$result) { die("Query Error: " . mysqli_error($link)); }

            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$data['npm']}</td>";
                echo "<td>{$data['namaMhs']}</td>";
                echo "<td>{$data['prodi']}</td>";
                echo "<td>{$data['alamat']}</td>";
                $noHpValue = $data['noHP'] ?? $data['noHp'] ?? $data['no_hp'] ?? '';
                echo "<td>{$noHpValue}</td>";
                echo "<td>
                        <a href='edit_mhs.php?npm={$data['npm']}' class='btn btn-edit'>Edit</a>
                        <a href='hapus_mhs.php?npm={$data['npm']}' class='btn btn-hapus' onclick=\"return confirm('Yakin hapus data ini?')\">Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>