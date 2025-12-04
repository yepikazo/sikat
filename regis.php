<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun SIKAT</title>
    <!-- IMPOR FONT KANIT -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="regis.css"> <!-- Menghubungkan ke file CSS -->
</head>
<body>
    <div class="registration-container">
        <header class="header">
            <!-- Teks Header -->
            <h2 class="title">Daftar akun <span class="logo-sikat">SIK<span class="logo-accent">AT</span></span></h2>
        </header>
        <?php
        if(isset($_POST['username'])){
                $email = $_POST['email'];
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                $query = "INSERT INTO tb_user(email,username,password) values('$email','$username','$password');";
                $result = mysqli_query($conn, $query);
                if($result){
                    echo '<script>alert("akun anda berhasil didaftarkan");
                    location.href="login.php"</script>';
                } else{
                    echo '<script>alert("gagal daftar akun");</script>';
                }
            }
        ?>
        <form method="POST" class="registration-form">
            <div class="form-group">
                <label for="email">Masukkan Email Anda</label>
                <input type="email" name="email" placeholder="Example@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="username">Buat Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Buat Password</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit" class="register-button">REGISTER</button>
        </form>
    </div>

</body>
</html>