<?php
include 'koneksi.php';
$kodeMK = $_GET['kodeMK'];
$query  = "SELECT * FROM t_matakuliah WHERE kodeMK='$kodeMK'";
$result = mysqli_query($link, $query);
$data   = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Matakuliah - Sistem Informasi Akademik</title>
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
        <h3>Edit Data Matakuliah</h3>
        <form action="proses_edit_mk.php" method="post">
            <input type="hidden" name="kodeMK" value="<?php echo $data['kodeMK']; ?>">
            <p><label>Kode MK:</label><br><input type="number" value="<?php echo $data['kodeMK']; ?>" disabled></p>
            <p><label>Nama Matakuliah:</label><br><input type="text" name="namaMK" value="<?php echo $data['namaMK']; ?>"></p>
            <p><label>SKS:</label><br><input type="number" name="sks" value="<?php echo $data['sks']; ?>"></p>
            <p><label>Jam:</label><br><input type="number" name="jam" value="<?php echo $data['jam']; ?>"></p>
            <input type="submit" name="edit" value="Update Data" class="btn btn-edit">
            <a href="view_mk.php" class="btn btn-hapus">Batal</a>
        </form>
    </div>
</body>
</html>
