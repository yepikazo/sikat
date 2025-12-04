-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2025 at 05:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikat`
--

-- --------------------------------------------------------

--
-- Table structure for table `modul belajar`
--

CREATE TABLE `modul belajar` (
  `id_modul` int(11) NOT NULL,
  `judul modul` varchar(150) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `konten modul` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modul belajar`
--

INSERT INTO `modul belajar` (`id_modul`, `judul modul`, `deskripsi`, `konten modul`) VALUES
(2, 'Literasi Keuangan untuk Remaja', 'Belajar Mengelola Uang Saku Hingga Investasi Sederhana.', 'https://sman81jkt.id/literasi-keuangan-untuk-remaja-belajar-mengelola-uang-saku-hingga-investasi-sederhana/?utm_source=chatgpt.com'),
(3, 'Literasi Keuangan untuk Remaja', 'Belajar Mengelola Uang Saku Hingga Investasi Sederhana.', 'https://sman81jkt.id/literasi-keuangan-untuk-remaja-belajar-mengelola-uang-saku-hingga-investasi-sederhana/?utm_source=chatgpt.com'),
(4, 'Edukasi Finansial & Pencegahan Pinjol', 'Gerakan Cegah Pinjol dengan Menabung: Edukasi Finansial untuk Masa Depan Lebih Aman', 'https://manajemen.feb.undip.ac.id/gerakan-cegah-pinjol-dengan-menabung-edukasi-finansial-untuk-masa-depan-lebih-aman/?utm_source=chatgpt.com'),
(5, 'Media Keuangan – Kemenkeu', '6 Tips Menanamkan Keterampilan Finansial Sejak Dini', 'https://mediakeuangan.kemenkeu.go.id/article/show/6-tips-menanamkan-keterampilan-finansial-sejak-dini-untuk-masa-depan-yang-lebih-baik?utm_source=chatgpt.com'),
(6, 'Desa Pener – Edukasi Menabung Sejak Dini', 'Program literasi keuangan “Ayo Menabung” untuk anak-anak/remaja', 'https://pener.digitaldesa.id/berita/generasi-cerdas-finansial-edukasi-literasi-keuangan-ayo-menabung-?utm_source=chatgpt.com'),
(7, 'Pentingnya Menabung', 'Kenapa menabung itu penting dan bagaimana remaja bisa mulai menabung.', 'https://www.kompasiana.com/kkndesagedong5644/689b5157ed64152afc1a09d3/edukasi-literasi-keuangan-tentang-pentingnya-menabung?utm_source=chatgpt.com'),
(8, 'UNUSA – Konsep Latte Factor', 'Edukasi menabung dengan mengenali pengeluaran kecil “latte factor”', 'https://febtd.unusa.ac.id/edukasi-keuangan-dan-kebiasaan-menabung-bagi-siswa-sman-1-bangsal-mojokerto-melalui-konsep-latte-factor/?utm_source=chatgpt.com'),
(9, 'UPI – Eduhumaniora', 'Literasi keuangan dan konsep menabung', 'https://ejournal.upi.edu/index.php/eduhumaniora/article/download/70390/pdf?utm_source=chatgpt.com'),
(10, 'Transformasi – Universitas Teknologi Sumbawa', 'Menabung, investasi, dan penggunaan aplikasi keuangan.', 'https://journal.ummat.ac.id/index.php/transformasi/article/download/20488/pdf?utm_source=chatgpt.com'),
(11, 'Bantenese Jurnal Pengabdian Masyarakat', 'Menabung vs investasi, termasuk instrumen keuangan.', 'https://e-jurnal.lppmunsera.org/index.php/PS2PM/article/download/10565/3526/40642?utm_source=chatgpt.com'),
(12, 'Journal ARIMSI', 'Literasi keuangan dasar: pengelolaan uang, menabung, investasi.', 'https://journal.arimsi.or.id/index.php/Kolaborasi/article/download/623/729/3186?utm_source=chatgpt.com'),
(13, 'MENINGKATKAN BUDAYA MENABUNG REMAJA USIA SEKOLAH', 'Literasi keuangan remaja + aplikasi menabung di sekolah.', 'https://ojs.unikom.ac.id/index.php/icomse/article/view/14215?utm_source=chatgpt.com'),
(14, 'Gerakan Literasi Keuangan melalui Media Menabung', 'Pengabdian masyarakat di Universitas Pamulang tentang menabung sejak dini', 'https://openjournal.unpam.ac.id/index.php/iqtis/article/view/31713?utm_source=chatgpt.com'),
(15, 'Menabung untuk Masa Depan', 'Program tabungan remaja di SMA lewat produk Britama Junio (Bank BRI)', 'https://jurnal.itbsemarang.ac.id/index.php/JKB/article/view/2695?utm_source=chatgpt.com'),
(16, 'Sosialisasi Literasi Pengelolaan Keuangan Bagi Remaja', 'Kabar Masyarakat tentang edukasi keuangan remaja, termasuk menabung.', 'https://jurnal.itbsemarang.ac.id/index.php/JKB/article/view/2695?utm_source=chatgpt.com'),
(17, 'Peningkatan Literasi Keuangan pada Remaja di Desa Sijeruk', 'Literasi remaja di desa, menabung + pengelolaan uang.', 'https://journal-stiayappimakassar.ac.id/index.php/jppmi/article/view/1727?utm_source=chatgpt.com'),
(18, 'Literasi Keuangan Melalui Gerakan Gemar Menabung Sejak Dini', 'Gerakan menabung di sekolah dasar / anak-anak; tapi prinsip menabung yang diajarkan bisa diadaptasi untuk remaja.', 'https://ejournal.unib.ac.id/kreativasi/article/view/35345?utm_source=chatgpt.com'),
(19, 'Menanamkan Literasi Keuangan & Investasi pada Remaja melalui Game-Based Learning', 'Menggunakan “Rally Games” untuk mengajarkan menabung & investasi', 'https://journal.nurscienceinstitute.id/index.php/penamas/article/view/1354?utm_source=chatgpt.com'),
(20, 'Membangun Kesadaran Literasi Keuangan & Kebiasaan Menabung di Anak', 'Literasi keuangan dan menabung di anak-anak usia dini', 'https://journal.uinsgd.ac.id/index.php/prestise/article/view/39952?utm_source=chatgpt.com'),
(21, 'Sosialisasi Cerdas Menabung di Kalangan Remaja Sanggar Bimbingan', 'Literasi menabung melalui pelatihan + simulasi menabung di remaja', 'https://www.edumediasolution.com/society/article/view/583/0?utm_source=chatgpt.com'),
(22, 'Meningkatkan Perilaku Menabung Remaja', 'Bagaimana literasi keuangan mendorong perilaku menabung remaja.', 'https://proceedings2.upi.edu/index.php/riksabahasa/article/download/1021/926/?utm_source=chatgpt.com'),
(23, 'Peningkatan Literasi Keuangan pada Remaja di SMKN 3 Sumbawa', 'Literasi keuangan + menabung + investasi untuk remaja SMK. ', 'https://journal.ummat.ac.id/index.php/transformasi/article/download/20488/pdf?utm_source=chatgpt.com'),
(24, 'Hubungan Literasi Keuangan dan Perilaku Menabung Siswa ', 'Literasi keuangan + pengaruh teman sebaya terhadap kebiasaan menabung remaja.', 'https://digilib.uns.ac.id/dokumen/download/74411/Mzg3ODg0/Hubungan-Literasi-Keuangan-Dan-Perilaku-Teman-Sebaya-Dengan-Kebiasaan-Menabung-Siswa-Kelas-Xi-Sma-Negeri-2-Surakarta-Tahun-2017-abstrak.pdf?ut'),
(25, 'Keputusan Menabung & Investasi Gen Z', 'Pengaruh literasi keuangan syariah, kondisi perekonomian, dan digitalisasi pada Gen Z.', 'https://jurnal.uny.ac.id/index.php/jep/article/view/85699?utm_source=chatgpt.com'),
(26, 'Tabungan Bank / Konvensional Part 1', 'Menyimpan uang di bank yang aman dan bisa ditarik kapan saja.', 'https://www.btn.co.id/id/about/gallery/article/article/listing/2025/09/12/jenis-jenis-tabungan?utm_source=chatgpt.com'),
(27, 'Tabungan Bank / Konvensional Part 2', 'Bunga tabungan biasanya rendah (misalnya 0%–2%).', 'https://www.ocbc.id/id/Article/2021/03/15/pengertian-tabungan?utm_source=chatgpt.com'),
(28, 'Tabungan Berjangka', 'Setoran tetap setiap bulan, dan uang hanya bisa diambil setelah jangka waktu tertentu', 'https://www.dbs.id/digibank/id/id/articles/jenis-jenis-tabungan-keuntungan-serta-fungsi-pentingnya?utm_source=chatgpt.com'),
(29, 'Tabungan Anak / Pelajar Part 1', 'Produk khusus untuk pelajar atau anak-anak agar mulai menabung sejak dini.', 'https://www.megasyariah.co.id/id/artikel/edukasi-tips/simpanan/tabungan-adalah?utm_source=chatgpt.com'),
(30, 'Tabungan Anak / Pelajar Part 2', 'Setoran awal kecil, dan fitur yang mudah diakses oleh pelajar', 'https://biz.kompas.com/read/2024/05/21/094523628/5-hal-terkait-literasi-keuangan-yang-harus-diajarkan-pada-anak-sejak-dini-dengan?utm_source=chatgpt.com'),
(31, 'Tabungan Valuta Asing / Valas', 'Menabung dalam mata uang asing (misalnya USD, EUR) di rekening perbankan.', 'https://www.megasyariah.co.id/id/artikel/edukasi-tips/simpanan/tabungan-adalah?utm_source=chatgpt.com'),
(32, 'Tabungan Digital', 'Tabungan yang dikelola sepenuhnya melalui aplikasi digital (mobile banking).', 'https://www.dbs.id/digibank/id/id/articles/jenis-jenis-tabungan-keuntungan-serta-fungsi-pentingnya?utm_source=chatgpt.com'),
(33, 'Konsep Penting dalam Menabung Part 1', 'Target Tabungan : jumlah uang yang ingin dikumpulkan.', 'https://journal.ppmi.web.id/index.php/jpmebd/article/download/711/679?utm_source=chatgpt.com'),
(34, 'Konsep Penting dalam Menabung Part 2', 'Menyisihkan uang secara konsisten (misal: tiap bulan atau tiap minggu)', 'https://www.dbs.id/digibank/id/id/articles/jenis-jenis-tabungan-keuntungan-serta-fungsi-pentingnya?utm_source=chatgpt.com'),
(35, 'Konsep Penting dalam Menabung Part 3', 'Bunga Tabungan', 'https://www.dbs.id/digibank/id/id/articles/jenis-jenis-tabungan-keuntungan-serta-fungsi-pentingnya?utm_source=chatgpt.com'),
(36, 'Reksadana Pasar Uang', 'Investasi di deposito & surat berharga jangka pendek.', 'https://sikapiuangmu.ojk.go.id/FrontEnd/CMS/Article/20509'),
(37, 'Obligasi Pemerintah (SBR/ORI)', 'Produk investasi dari negara (aman).', 'https://www.kemenkeu.go.id/surat-berharga-negara-sbn/'),
(38, 'Emas Digital', 'Memahami lebih dalam tabungan emas', 'https://www.pegadaian.co.id/produk/tabungan-emas'),
(39, 'Return (Keuntungan)\r\n', 'Return adalah persentase kenaikan nilai investasi dalam periode tertentu.', 'https://sikapiuangmu.ojk.go.id'),
(40, 'Jangka Waktu (Time Horizon)', 'Dalam investasi, semakin lama uang “ditahan”, semakin besar potensi pertumbuhan.', 'https://www.investopedia.com/terms/t/timehorizon.asp'),
(41, 'Bunga Majemuk (Compound Interest)', 'Konsep bahwa keuntungan juga ikut menghasilkan keuntungan.', 'https://www.investopedia.com/terms/c/compoundinterest.asp'),
(42, 'Diversifikasi', 'Jangan taruh semua uang di satu jenis investasi.', 'https://www.fidelity.com/learning-center/personal-finance/teach-teens-investing');

-- --------------------------------------------------------

--
-- Table structure for table `progressbelajar`
--

CREATE TABLE `progressbelajar` (
  `id_progress` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `tgl_selesai` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progressbelajar`
--

INSERT INTO `progressbelajar` (`id_progress`, `id_user`, `id_modul`, `tgl_selesai`) VALUES
(1, 1, 11, '2025-12-02'),
(2, 1, 42, '2025-12-02'),
(4, 8, 6, '2025-12-04'),
(5, 8, 3, '2025-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `tgl_registrasi` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `email`, `password`, `tgl_registrasi`) VALUES
(1, 'yasraf', 'yasraf322@gmail.com', '9271d6eecedd55fcfa6143a33029d496', '2025-12-01'),
(4, 'babi hutan', 'yasrafch@gmail.com', '0f7aa6216bb1777dede73e2ad229ddcc', '2025-12-01'),
(5, 'monyet gunung', 'nigg@gmail.com', 'eec4be30152728e43eadcd34cd3ddc8e', '2025-12-01'),
(6, 'apalah', 'superidol@gmail.com', '9271d6eecedd55fcfa6143a33029d496', '2025-12-01'),
(7, 'yepikazo', 'yasrafch@gmail.com', 'f1c64becc7ff3b5681c8782891c9d6fd', '2025-12-02'),
(8, 'bimbim', 'bimbim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2025-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modul belajar`
--
ALTER TABLE `modul belajar`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `progressbelajar`
--
ALTER TABLE `progressbelajar`
  ADD PRIMARY KEY (`id_progress`),
  ADD UNIQUE KEY `id_user` (`id_user`,`id_modul`),
  ADD KEY `id_modul` (`id_modul`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modul belajar`
--
ALTER TABLE `modul belajar`
  MODIFY `id_modul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `progressbelajar`
--
ALTER TABLE `progressbelajar`
  MODIFY `id_progress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `progressbelajar`
--
ALTER TABLE `progressbelajar`
  ADD CONSTRAINT `progressbelajar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `progressbelajar_ibfk_2` FOREIGN KEY (`id_modul`) REFERENCES `modul belajar` (`id_modul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
