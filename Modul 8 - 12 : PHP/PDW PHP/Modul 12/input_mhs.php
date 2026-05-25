<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Mahasiswa - Sistem Informasi Akademik</title>
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
    <h3>Tambah Data Mahasiswa</h3>
    <form action="proses_input_mhs.php" method="POST">
        <div class="form-group">
            <label>NPM:</label>
            <input type="number" name="npm" required>
        </div>
        <div class="form-group">
            <label>Nama Mahasiswa:</label>
            <input type="text" name="namaMhs" required>
        </div>
        <div class="form-group">
            <label>Prodi:</label>
            <input type="text" name="prodi">
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat"></textarea>
        </div>
        <div class="form-group">
            <label>No HP:</label>
            <input type="text" name="noHP">
        </div>
        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-tambah">
        <a href="view_mhs.php" class="btn btn-hapus">Batal</a>
    </form>
</div>
</body>
</html>
