<?php
    session_start();
    include 'koneksi.php';

    $id = $_SESSION['tb_user']['id_user'];
    $queryid = "SELECT * FROM progressbelajar WHERE id_user = $id";
    $sqlid = mysqli_query($conn, $queryid);

    // select
    // $query =  "SELECT 'judul modul' FROM `modul belajar` WHERE id_modul='';";
    // $sql = mysqli_query($conn, $query);
    // $data = mysqli_fetch_assoc($sql);
    // $judul = $data['judul modul'];
    // echo $judul;



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="style.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
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
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            modul
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="modul.php">akses modul</a></li>
                            <li><a class="dropdown-item" href="progress.php">lihat progress</a></li>
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
                    <p class="completion-text">X/X Modul terselesaikan</p>
                </div>
                
                <div class="progress-circle">
                    <span class="percentage">XX%</span>
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
                            <td><?php echo $result['id_modul']?></td>
                            <td><?php echo $result['tgl_selesai']?></td>
                        </tr>
                    </tbody>
                        <?php
                        }
                        ?>
                </table>
            </div>

            <div class="footer-buttons">
                <button class="kembali-button">Kembali</button>
                <button class="financial-tips">tips keuangan</button>
            </div>

        </div>
    </div>
</body>
</html>