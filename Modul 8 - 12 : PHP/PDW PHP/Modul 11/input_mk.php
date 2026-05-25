<!DOCTYPE html>
<html>
<head>
    <title>Input Matakuliah - Sistem Informasi Akademik</title>
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
        <h3>Input Data Matakuliah</h3>
        <form action="proses_input_mk.php" method="post">
            <p><label>Kode MK:</label><br><input type="number" name="kodeMK" required></p>
            <p><label>Nama Matakuliah:</label><br><input type="text" name="namaMK" required></p>
            <p><label>SKS:</label><br><input type="number" name="sks" required></p>
            <p><label>Jam:</label><br><input type="number" name="jam" required></p>
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-tambah">
            <a href="view_mk.php" class="btn btn-hapus">Batal</a>
        </form>
    </div>
</body>
</html>
