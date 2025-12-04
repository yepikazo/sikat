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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="tips.css" rel="stylesheet">
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
    <div class="container my-4">

    <div class="tips-container p-4">

        <h4 class="text-center fw-bold mb-4">Tips Keuangan</h4>

        <ol class="fs-5">
            <li>
                <b>Pisahkan uang kebutuhan, tabungan, dan dana darurat</b><br><br>

                Selalu pisahkan uang bulanan ke tiga kategori ini:
                <ul>
                    <li>kebutuhan hidup</li>
                    <li>tabungan atau investasi</li>
                    <li>dana darurat</li>
                </ul>

                Dana darurat idealnya:
                <ul>
                    <li>3x pengeluaran bulanan → bagi yang belum menikah</li>
                    <li>6x pengeluaran bulanan → untuk keluarga</li>
                </ul>

                Memisahkan pos sejak awal membantu kamu tidak “terpakai tanpa sadar”.
            </li>
            <br><br>
            <li>
                <b>Hindari berutang untuk hal konsumtif</b><br><br>

                Utang konsumtif itu:
                <ul>
                    <li>kredit HP</li>
                    <li>Paylater Belanja</li>
                    <li>cicilan barang gaya hidup</li>
                </ul>

                Ini hanya menguras penghasilan masa depan.
                Utang hanya sehat kalau dipakai untuk aset produktif seperti pendidikan, usaha, atau kendaraan kerja.
            </li>
            <br><br>
            <li>
                <b>Catat pemasukan dan pengeluaran</b><br><br>
                percaya atau tidak, banyak orang bocor finansial karena tidak mencatat.
                Pakai aplikasi, spreadsheet, atau buku catatan kecil. Yang penting <b> rutinitasnya.</b><br><br>

                Dengan mencatat:
                <ul>
                    <li>kamu tahu kebiasaan boros</li>
                    <li>bisa membuat anggaran</li>
                    <li>bisa memperbaiki keputusan bulan berikutnya</li>
                </ul>
            </li>
            <br><br>
            <li>
                <b>Sisihkan dulu, baru gunakan</b><br><br>

                Gunakan prinsip <i>“pay yourself first”.</i><br>
                Begitu gajian → langsung sisihkan tabungan sebelum dipakai untuk yang lain.
                <br><br>
                Kalau sisakan di akhir?<br>
                Biasanya nihil...

                
            </li>
            <br><br>
            <li>
                <b>Bedakan kebutuhan vs keinginan</b><br><br>

                Sebelum membeli sesuatu, tanya diri sendiri:
                <ul>
                    |  <i>“Ini aku butuh, atau cuma pengin?”</i>
                </ul><br>
                
                Kebutuhan = wajib.<br>
                Keinginan = boleh... asal tidak mengganggu tabungan.
                
            </li>
            <br><br>
            <li>
                <b>Belajar investasi yang legal & sesuai profil risiko</b><br><br>
                Investasi aman itu:
                <ul>
                    <li>diawasi OJK</li>
                    <li>mudah dipahami</li>
                    <li>tidak menjanjikan cuan instan</li>
                </ul>

                Contoh yang aman bagi pemula:
                <ul>
                    <li><b>Reksa Dana Pasar Uang</b></li>
                    <li><b>Deposito</b></li>
                    <li><b>Obligasi negara (ORI/SBR)</b></li>
                </ul>

                Jangan sentuh <b>“investasi”</b> yang menjanjikan cuan cepat. Itu biasanya scam.
            </li>
            <br><br>
            <li>
                <b>Gunakan 10-20% penghasilan untuk pengembangan diri</b><br><br>

                Investasi terbaik adalah ilmu:
                <ul>
                    <li>kursus</li>
                    <li>buku</li>
                    <li>pelatihan</li>
                    <li>skill baru</li>
                </ul>

                Keuntungan jangka panjang jauh lebih besar dibanding beli barang konsumtif.
            </li>
            <br>
            <li>
                <b>Jangan tergoda lifestyle yang tidak sesuai penghasilan</b><br><br>

                Media sosial sering bikin orang ingin terlihat kaya.<br>
                Tapi hidup menyesuaikan standar orang lain bikin keuanganmu rapuh.<br><br>
                    
                Pilih hidup realistis.<br>
                Kalau mau naik kelas, biar penghasilanmu dulu yang naik.
            </li>
            
        </ol>


    </div>

</div>

</body>

</html>