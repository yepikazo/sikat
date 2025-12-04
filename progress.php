<?php
    session_start();
    include 'koneksi.php';

    $id = $_SESSION['tb_user']['id_user'];

    $query = "
    SELECT 
        pb.id_progress,
        m.`judul modul` AS judul_modul,
        pb.tgl_selesai
    FROM progressbelajar pb
    JOIN `modul belajar` m ON pb.id_modul = m.id_modul
    WHERE pb.id_user = $id";
    // $queryid = "SELECT * FROM progressbelajar WHERE id_user = $id";
    $sqlid = mysqli_query($conn, $query);

    // 1. Total modul
    $qTotal = mysqli_query($conn, "SELECT COUNT(*) AS total FROM `modul belajar`");
    $total = mysqli_fetch_assoc($qTotal)['total'];

    // 2. Modul selesai user
    $qSelesai = mysqli_query($conn, "SELECT COUNT(*) AS selesai FROM progressbelajar WHERE id_user = '$id'");
    $selesai = mysqli_fetch_assoc($qSelesai)['selesai'];

    // 3. Hitung persentase
    $persentase = ($total > 0) ? round(($selesai / $total) * 100) : 0;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
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
                        <a class="nav-link dropdown-toggle now" href="#" data-bs-toggle="dropdown">
                            modul
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="modul.php">akses modul</a></li>
                            <?php if(!isset($_SESSION['tb_user'])) { ?>
                                <li><p class="dropdown-item">lihat progress</p></li>
                            <?php } else { ?>
                                <li><a class="dropdown-item now" href="progress.php">lihat progress</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            simulasi
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="tabungan.php">simulasi tabungan</a></li>
                            <li><a class="dropdown-item" href="investasi.php">simulasi investasi</a></li>
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
    <div class="container">
        <div class="progress-card">
            <div class="header-progress">
                <div class="user-info">
                    <h1 class="username">
                        <?php
                                echo $_SESSION['tb_user']['username']; 
                        ?>
                    </h1>
                    <p class="completion-text">
                        <?php echo $selesai?>/<?php echo $total?> Modul terselesaikan</p>
                </div>
                
                <div class="progress-circle">
                    <span class="percentage"><?php echo $persentase?>%</span>
                </div>
            </div>

            <div class="module-table-container">
                <table class="module-table">
                    <thead>
                        <tr>
                            <th>modul</th>
                            <th>selesai pada</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($result = mysqli_fetch_assoc($sqlid)){
                        ?>
                        <tr>
                            <td><?php echo $result['judul_modul']?></td>
                            <td><?php echo $result['tgl_selesai']?></td>
                        </tr>
                    </tbody>
                        <?php
                        }
                        ?>
                </table>
            </div>

            <!-- <div class="footer-buttons">
                <button class="kembali-button">Kembali</button>
                <button class="financial-tips">tips keuangan</button>
            </div> -->

        </div>
    </div>
    <div class="tips">
    <a class="tipslink" href="tips.php">
        <i class="ph ph-info"></i>
        tips keuangan
        <a>
    </div>
</body>
</html>