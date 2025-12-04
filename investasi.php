<?php
include 'koneksi.php';

session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simulasi Investasi</title>
    <link rel="stylesheet" href="investasi.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
    />
    <link
        rel="stylesheet"
        type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css"
    />
    <script src="js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
        <div class="container-fluid">
                <!-- Logo kiri -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="src/sikat.png" alt="Logo" width="50" height="50">
            </a>
            <!-- Toggle Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu Tengah -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            modul
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="modul.php">akses modul</a></li>
                            <?php if(!isset($_SESSION['tb_user'])) { ?>
                                <li><p class="dropdown-item">lihat progress</p></li>
                            <?php } else { ?>
                                <li><a class="dropdown-item" href="progress.php">lihat progress</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle now" href="#" data-bs-toggle="dropdown">
                            simulasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tabungan.php">simulasi tabungan</a></li>
                            <li><a class="dropdown-item now" href="investasi.php">simulasi investasi</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Tombol User kanan -->
            <div class="d-flex align-items-center gap-2">
                <?php if(!isset($_SESSION['tb_user'])) { ?>
                    <a class="btn-signup" href="regis.php">sign up</a>
                    <a class="btn-login" href="login.php">login</a>
                <?php } else { ?>
                    <div class="dropdown">
                        <a class="btn-user dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ph ph-user"></i>
                            <?php echo $_SESSION['tb_user']['username']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item text-danger" href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>

    <main>
      <div class="container">
        <div class="form-section">
          <label>Masukkan bunga</label>
          <input id="bunga" type="text" class="input-field" />
          <label>Masukkan modal</label>
          <input id="modal" type="text" class="input-field" />
          <label>Masukkan tenor(bulanan)</label>
          <input id="tenor" type="text" class="input-field" />
          <button id="simulasiInvestasi" class="simulasi-button">Lakukan simulasi</button>
        </div>
        <div class="result-section">
          <p id="hasilKata"></p>
          <p  class="profit"></p>
          <div class="grafik-placeholder">
            <canvas id="grafikInvestasi"></canvas>
          </div>
        </div>
      </div>
    </main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="investasi.js"></script>

</html>
