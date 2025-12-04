<?php
include 'koneksi.php';

session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="src/sikat.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
            </a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav position-absolute top-50  start-50 translate-middle">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            modul
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="modul.php">akses modul</a></li>
                            <?php
                                if(!isset($_SESSION['tb_user'])){
                            ?>
                                <li><p class="dropdown-item">lihat progress</p></li>
                            <?php
                            } else{
                            ?>
                                <li><a class="dropdown-item" href="progress.php">lihat progress</a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            simulasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tabungan.html">simulasi tabungan</a></li>
                            <li><a class="dropdown-item" href="investasi.html">simulasi investasi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <li class="nav-item ms-auto">
                <a class="nav-link active ms-auto" href="regis.php">sign up</a>
                <a class="nav-link active ms-auto" href="login.php">login</a>
            </li>
            <li class="nav-item ms-auto">
            </li>
        </div>
    </nav>
    <main>
        <div class="konten">
            <div class="judul">
                <p class="si">SI</p>
                <p class="kat">KAT</p>
            </div>
            <p class="kepanjangan">Sistem Keuangan & Aplikasi Terpadu</p>
            <p class="deskripsi">pahami manajemen keuangan dan lakukan simulasi dengan cara yang menyenangkan</p>
            <a class="tombol" href="modul.php" role="button">pelajari modul login</a>
            <a class="tombol" href="logout.php" role="button">pelajari modul login</a>
            <p>
                selamat datang
                <?php 
                if(!isset($_SESSION['tb_user'])){
                    echo "belum login";
                } else{
                    echo $_SESSION['tb_user']['username']; 
                }
                ?>
            </p>
        </div>
        <div class="gambar">
            <img src="src/Gambar.png" alt="gambar" width="500px" height="500px">
        </div>
    </main>
</body>

</html>