<?php
include 'koneksi.php';
session_start();
// $query = "SELECT * FROM `tb_user`;";

?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIKAT</title>
    <link rel="stylesheet" href="login.css"> 
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>

    <div class="container">

        <div class="logo">
            <h1><span class="sik">SIK</span><span class="at">AT</span></h1> 
            <p class="subtitle">Sistem Keuangan & Akuntansi Terpadu</p>
        </div>

        <div class="login-box">
            <h2>LOGIN</h2>

            <?php
                if(isset($_POST['username'])){
                    $username = $_POST['username'];
                    $password = md5($_POST['password']);

                    $query = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
                    $result = mysqli_query($conn, $query);

                    if(!$result){
                        die("Query error: " . mysqli_error($koneksi));
                    }

                    if(mysqli_num_rows($result) > 0){
                        $data = mysqli_fetch_array($result);
                        $_SESSION['tb_user'] = $data;
                        echo '<script>alert("selamat datang, ' . $data['username'] . '");
                        location.href="index.php";</script>';
                    } else {
                        echo '<script>alert("error username atau password salah");</script>';
                    }

                }
            ?>

            <form method="POST">
                <label for="username">Masukkan Username</label>
                <input type="text" id="username" name="username" placeholder="Username" required>

                <label for="password">Masukkan Password</label>
                <input type="password" id="password" name="password" placeholder="Password" required>

                <button type="submit" class="btn-orange">Masuk</button>

                <div class="divider">
                    <span>Atau</span>
                </div>

                <a href="daftar.php" class="btn-black">Daftar</a>
            </form>
        </div>
    </div>

</body>
</html>