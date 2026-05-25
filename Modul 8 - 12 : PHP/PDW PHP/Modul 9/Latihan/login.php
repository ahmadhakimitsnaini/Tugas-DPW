<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login System</title>
    <style>
        /* CSS untuk memperkecil ukuran dan memberi warna merah pada error */
        .error { color: #ff0000; font-size: 0.8em; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Halaman Login</h2>
    <?php
    $name = $email = "";
    $nameErr = $emailErr = "";

    function bersihkan_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["u"])) {
            $nameErr = "* Masukkan username!";
        } else {
            $name = bersihkan_input($_POST["u"]);
        }

        if (empty($_POST["p"])) {
            $emailErr = "* Masukkan password!";
        } else {
            // Walaupun variabel di form 'emailErr', aslinya ini untuk password
            $email = bersihkan_input($_POST["p"]); 
        }

        if(!empty($name) && !empty($email)){
            echo "<p style='color:green;'>Berhasil login dengan username: $name</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Username: <input type="text" name="u">
        <span class="error"> <?php echo $nameErr; ?></span>
        <br><br>
        Password: <input type="password" name="p">
        <span class="error"> <?php echo $emailErr; ?></span>
        <br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>