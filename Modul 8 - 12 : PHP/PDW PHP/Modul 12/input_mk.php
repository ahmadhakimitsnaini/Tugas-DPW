<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Matakuliah - Sistem Informasi Akademik</title>
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
    <h3>Tambah Data Matakuliah</h3>
    <form action="proses_input_mk.php" method="POST">
        <div class="form-group">
            <label>Kode MK:</label>
            <input type="number" name="kodeMK" required>
        </div>
        <div class="form-group">
            <label>Nama Matakuliah:</label>
            <input type="text" name="namaMK" required>
        </div>
        <div class="form-group">
            <label>SKS:</label>
            <input type="number" name="sks" required>
        </div>
        <div class="form-group">
            <label>Jam:</label>
            <input type="number" name="jam" required>
        </div>
        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-tambah">
        <a href="view_mk.php" class="btn btn-hapus">Batal</a>
    </form>
</div>
</body>
</html>
