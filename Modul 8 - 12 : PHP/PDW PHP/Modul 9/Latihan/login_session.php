<?php
// Session HARUS dimulai pada baris paling atas sebelum ada output HTML
session_start();

$pesan_error = "";

// Fungsi verifikasi login yang melempar Exception jika terjadi kesalahan
function verifikasi_login($username, $password) {
    if (empty($username) || empty($password)) {
        throw new Exception("Username dan Password tidak boleh kosong!");
    }
    // Simulasi database sederhana
    if ($username !== "admin" || $password !== "12345") {
        throw new Exception("Username atau Password salah!");
    }
    return true;
}

// Proses logout
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: login_session.php");
    exit();
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $u = $_POST['username'];
    $p = $_POST['password'];

    try {
        // Coba jalankan fungsi verifikasi
        if(verifikasi_login($u, $p)) {
            $_SESSION['user_aktif'] = $u; // Set Session
        }
    } catch (Exception $e) {
        // Tangkap Exception jika dilempar (throw) dari fungsi di atas
        $pesan_error = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Login Session & Exception</title></head>
<body>
    <h2>Sistem Login Lanjutan</h2>

    <?php if (isset($_SESSION['user_aktif'])): ?>
        <p style="color:blue;">Selamat datang, <b><?php echo $_SESSION['user_aktif']; ?></b>!</p>
        <p>Anda berhasil login menggunakan SESSION.</p>
        <a href="login_session.php?action=logout"><button>Logout</button></a>
        
    <?php else: ?>
        <?php if($pesan_error != "") echo "<p style='color:red;'>$pesan_error</p>"; ?>
        
        <form method="POST" action="">
            Username: <input type="text" name="username"><br><br>
            Password: <input type="password" name="password"><br><br>
            <input type="submit" value="Masuk">
        </form>
        <p><i>Klu: gunakan username: admin | password: 12345</i></p>
    <?php endif; ?>
</body>
</html>