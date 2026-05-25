<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Matakuliah</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Sistem Informasi Akademik</h2>
    </div>
    <div class="nav">
        <a href="view_mhs.php">Data Mahasiswa</a>
        <a href="view_mk.php">Data Matakuliah</a>
    </div>

    <div class="container">
        <h3>Tabel Data Matakuliah</h3>
        <a href="input_mk.php" class="btn btn-tambah">+ Tambah Matakuliah</a>

        <div class="search-box">
            <form action="view_mk.php" method="GET">
                <input type="text" name="cari" placeholder="Cari Nama MK..." value="<?php echo isset($_GET['cari']) ? $_GET['cari'] : ''; ?>">
                <input type="submit" value="Cari">
            </form>
        </div>

        <table>
            <tr>
                <th>Kode MK</th><th>Nama Matakuliah</th><th>SKS</th><th>Jam</th><th>Aksi</th>
            </tr>
            <?php
            // Logika Pencarian
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                $query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$cari%' ORDER BY kodeMK ASC";
            } else {
                $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
            }

            $result = mysqli_query($link, $query);
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$data['kodeMK']}</td>";
                echo "<td>{$data['namaMK']}</td>";
                echo "<td>{$data['sks']}</td>";
                echo "<td>{$data['jam']}</td>";
                echo "<td>
                        <a href='edit_mk.php?kodeMK={$data['kodeMK']}' class='btn btn-edit'>Edit</a>
                        <a href='hapus_mk.php?kodeMK={$data['kodeMK']}' class='btn btn-hapus'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>