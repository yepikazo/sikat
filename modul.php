<?php
    session_start();
    include 'koneksi.php';
    $query =  "SELECT * FROM `modul belajar`;";
    $sql = mysqli_query($conn, $query);
    // echo $_SESSION['tb_user']['username'];
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
    <main>
        <div class="konten">
        <?php
        while($result = mysqli_fetch_assoc($sql)){
        ?>
        <form method="POST" class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">
                    <?php
                    echo $result['judul modul'];
                    ?>
                </h5>
                <p class="card-text">
                    <?php
                    echo $result['deskripsi'];
                    ?>
                </p>
                <a href="
                <?php
                    echo $result['konten modul'];
                ?>
                " class="card-link" name="pelajari" >Pelajari</a>
            </div>
        </form>
        <?php
        }
        ?>
    </main>
</body>

</html>