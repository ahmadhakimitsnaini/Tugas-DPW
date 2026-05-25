<?php
include 'koneksi.php';
$npm = $_GET['npm'];
$query = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="style.css"></head>
<body>
    <div class="container">
        <h3>Edit Data Mahasiswa</h3>
        <form action="proses_edit_mhs.php" method="post">
            <input type="hidden" name="npm" value="<?php echo $data['npm']; ?>">
            <p><label>NPM:</label><br><input type="number" value="<?php echo $data['npm']; ?>" disabled></p>
            <p><label>Nama Mahasiswa:</label><br><input type="text" name="namaMhs" value="<?php echo $data['namaMhs']; ?>"></p>
            <p><label>Prodi:</label><br><input type="text" name="prodi" value="<?php echo $data['prodi']; ?>"></p>
            <p><label>Alamat:</label><br><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></p>
            <p><label>No HP:</label><br><input type="text" name="noHP" value="<?php echo $data['noHP'] ?? $data['noHp'] ?? $data['no_hp'] ?? ''; ?>"></p>
            <input type="submit" name="edit" value="Update Data" class="btn btn-edit">
        </form>
    </div>
</body>
</html>