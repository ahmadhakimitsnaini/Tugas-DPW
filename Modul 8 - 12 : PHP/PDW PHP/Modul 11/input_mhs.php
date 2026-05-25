<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="style.css"></head>
<body>
    <div class="container">
        <h3>Input Data Mahasiswa</h3>
        <form action="proses_input_mhs.php" method="post">
            <p><label>NPM:</label><br><input type="number" name="npm" required></p>
            <p><label>Nama Mahasiswa:</label><br><input type="text" name="namaMhs" required></p>
            <p><label>Prodi:</label><br><input type="text" name="prodi"></p>
            <p><label>Alamat:</label><br><textarea name="alamat"></textarea></p>
            <p><label>No HP:</label><br><input type="text" name="noHP"></p>
            <input type="submit" name="simpan" value="Simpan Data" class="btn btn-tambah">
            <a href="view_mhs.php" class="btn btn-hapus">Batal</a>
        </form>
    </div>
</body>
</html>