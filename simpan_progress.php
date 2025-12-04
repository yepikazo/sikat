<?php
session_start();
include 'koneksi.php';

$id_user = $_SESSION['tb_user']['id_user'];
$id_modul = intval($_GET['id_modul']);

// Ambil link konten modul
$q = mysqli_query($conn, "
    SELECT `konten modul` 
    FROM `modul belajar`
    WHERE id_modul = $id_modul
");

$data = mysqli_fetch_assoc($q);
$link_modul = $data['konten modul'];

// Validasi: apakah progress sudah ada?
$cek = mysqli_query($conn, "
    SELECT id_progress 
    FROM progressbelajar 
    WHERE id_user = $id_user AND id_modul = $id_modul
");

if (mysqli_num_rows($cek) == 0) {
    mysqli_query($conn, "
        INSERT INTO progressbelajar (id_user, id_modul, tgl_selesai)
        VALUES ($id_user, $id_modul, CURDATE())
    ");
}

// Redirect ke link tujuan (konten modul)
header("Location: $link_modul");
exit;
?>
