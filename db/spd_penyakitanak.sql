-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 03:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spd_penyakitanak`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
`id_hasil` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_penyakit` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_user`, `id_penyakit`, `tanggal`) VALUES
(1, '1', 'P1', '2022-11-03 10:55:29'),
(2, '2', 'P2', '2022-11-03 11:07:52'),
(5, '1', 'P3', '2022-11-03 11:32:23'),
(6, '2', 'P4', '2022-11-03 11:38:40'),
(7, '2', 'P5', '2022-11-03 11:57:13'),
(8, '2', 'P5', '2022-11-03 13:01:09'),
(9, '2', 'P5', '2022-11-03 13:01:19'),
(10, '2', 'P5', '2022-11-03 13:03:33'),
(11, '2', 'P5', '2022-11-03 13:04:24'),
(12, '2', 'P5', '2022-11-03 13:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
`id` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `bg` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `tentang` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `web` varchar(225) NOT NULL,
  `hp` varchar(200) NOT NULL,
  `dev` varchar(50) NOT NULL,
  `mode` enum('dark','light') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id`, `gambar`, `bg`, `nama`, `judul`, `tentang`, `email`, `web`, `hp`, `dev`, `mode`) VALUES
(1, 'logo.png', 'ai.gif', 'SIPADAPA', 'Sistem Pakar Diagnosa Penyakit Anak', 'adalah sebuah aplikasi yang dibuat guna mendiagnosa penyakit pada anak. Penyakit-penyakit yang dapat di diagnosa adalah Demam Berdarah Dengue (DBD), Diare, Asma, Cacingan dan Malaria sesuai dengan gejala-gejala yang dialami/ditunjukan.', 'info@sipadapa.com', 'www.sipadapa.com', '085256651656', 'CALVIN', 'dark');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE IF NOT EXISTS `jenis_kelamin` (
`id_jk` int(11) NOT NULL,
  `nama_jk` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jk`, `nama_jk`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE IF NOT EXISTS `penyakit` (
`id_penyakit` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `kd_penyakit` varchar(50) NOT NULL,
  `nm_penyakit` varchar(225) NOT NULL,
  `penyebab` text NOT NULL,
  `pencegahan` text NOT NULL,
  `penanganan` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `gambar`, `kd_penyakit`, `nm_penyakit`, `penyebab`, `pencegahan`, `penanganan`) VALUES
(1, 'dbd.jpg', 'P1', 'Demam Berdarah Dengue (DBD)', 'Demam berdarah disebabkan oleh salah satu dari empat jenis virus dengue. Kamu tidak bisa terkena penyakit ini karena berada di sekitar orang yang terinfeksi sebab penyakit ini ditularkan melalui gigitan nyamuk. Dua nyamuk yang bisa menularkan virus ini adalah Aedes aegypti dan Aedes albopictus.', '<ol style="margin-bottom: 15px; color: rgb(51, 51, 51); font-family: Nunito, sans-serif;"><li style="margin-bottom: 10px;">Gunakan AC atau kelambu yang dipasang diventilasi dan tempat tidur. Selain itu, nyamuk yang membawa virus dengue paling aktif dari fajar hingga senja, tetapi mereka juga dapat menggigit pada malam hari.</li><li style="margin-bottom: 10px;">Kenakan pakaian pelindung saat kamu pergi ke daerah yang dipenuhi nyamuk, kenakan baju lengan panjang, celana panjang, kaus kaki, dan sepatu.</li><li style="margin-bottom: 10px;">Gunakan obat nyamuk seperti permetrin karena mereka dapat diaplikasikan pada pakaian, sepatu, perlengkapan berkemah, dan kelambu. Kamu juga dapat membeli pakaian yang dibuat dengan permetrin yang sudah ada di dalamnya. Untuk kulit, gunakan repellent yang mengandung setidaknya 10 persen konsentrasi DEET.</li><li>Mengurangi habitat nyamuk dengan menutup genangan air. Nyamuk yang membawa virus dengue biasanya hidup di dalam dan di sekitar rumah, berkembang biak di genangan air yang dapat berkumpul di ban mobil bekas. Kamu dapat membantu menurunkan populasi nyamuk dengan menghilangkan habitat tempat mereka bertelur. Setidaknya seminggu sekali, wadah kosong dan bersih yang menampung genangan air, seperti wadah tanam, piring hewan, dan vas bunga. Jaga agar wadah air tetap tertutup di antara pembersihan</li></ol>', 'Ke Rumah Sakit'),
(2, 'diare.jpg', 'P2', 'Diare', 'Pada umumnya, diare terjadi akibat makanan dan minuman yang terpapar virus, bakteri, atau parasit. Pada umumnya anak yang diare itu Mengalami Gejala Mual, Muntah, Sebah Kemudian BAB yang keluar berteksture Cair/Lembek.', '<ol><li>Yang pertama Rotavirus Vital Oral / Lewat mulut , apa yang masuk lewat mulut harus di jaga kebersihannya, agar makanan tetap sehat tidak kotor, usahakan bersih, baik dan sehat. Lebih perhatikan apa saja yang masuk pada mulut pada anak.</li><li>Kemudian dengan Imunisasi / Vaksin untuk mencegah Diare , Rotavirus bisa di mulai untuk umur anak 2 Bulan" Jelasnya.&nbsp;</li></ol>', 'Ke Rumah Sakit'),
(3, 'asma.jpg', 'P3', 'Asma', '<p><span style="text-align: justify;">Penyebab utama asma pada anak biasanya karena faktor genetik yang terjadi ketika dalam keluarga ada beberapa anggota keluarga yang menderita asma. Selain faktor genetik, ada hal-hal lain yang bisa menjadi pemicu asma pada anak, yaitu:&nbsp;</span><span style="text-align: justify;">Faktor bawaan lahir,&nbsp;</span><span style="text-align: justify;">Infeksi saluran napas yang terjadi berulang dan parah, termasuk pilek, pneumonia, bronkitis, dan infeksi sinus,&nbsp;</span><span style="text-align: justify;">Anak terkena pemicu alergi tertentu (alergen), seperti tungau, debu, bulu hewan peliharaan, dan serbuk sari,&nbsp;</span><span style="text-align: justify;">Terkena paparan polusi udara, bahan kimia, udara dingin, bau, atau asap dapat mengganggu saluran udara anak dan&nbsp;</span><span style="text-align: justify;">Olahraga atau aktivitas fisik yang dijalani anak yang berat.</span></p>', '<p style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; font-size: 12pt; line-height: 1.8; overflow-wrap: break-word; word-break: break-word; color: rgb(128, 128, 128); font-family: Ubuntu; text-align: justify;">Jika anak Anda menunjukan tanda-tanda asma, maka sebaiknya menghindari faktor pemicu atau pencetus asma, seperti:&nbsp;</p><ol style="margin-top: 10px; margin-bottom: 10px; margin-left: 15px; color: rgb(128, 128, 128); font-family: Ubuntu; font-size: 14px; text-align: justify;"><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Tungau debu rumah</li><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Lumut, yang biasanya ada di dapur atau kamar mandi</li><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Binatang peliharaan terutama yang berbulu</li><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Asap, baik itu asap rokok, asap pabrik, asap kendaraan bermotor</li><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Kecoa atau serangga&nbsp;</li><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Bahan kimia semprot</li><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Tepung sari bunga</li><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Infeksi virus</li><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Makanan tertentu: coklat, es, jajanan anak dengan zat pengawet, pewarna</li><li aria-level="1" style="margin-bottom: 5px; font-size: 12pt;">Jaga selalu kondisi anak dari stres dan faktor psikologis lainnya</li></ol>', 'Ke Rumah Sakit'),
(4, 'cacingan.jpg', 'P4', 'Cacingan', 'Cacingan dapat terjadi ketika anak tidak sengaja menelan atau menghirup telur cacing. Telur cacing memiliki ukuran yang sangat kecil sehingga sulit dilihat mata secara langsung. Telur cacing dapat masuk melalui makanan, minuman, atau tangan yang menyentuh area hidung maupun mulut setelah terkontaminasi telur cacing', '<p class="ql-align-justify" style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; border: 0px; outline: 0px; font-family: Nunito, sans-serif; vertical-align: initial; color: rgb(51, 51, 51);"><span style="color: rgb(0, 0, 0);">Lakukan beberapa pencegahan cacingan pada anak, seperti:</span></p><ol><li style="overflow-wrap: break-word; margin-bottom: 10px;">Pastikan untuk membersihkan area anus setiap pagi dengan air yang mengalir dan sabun.</li><li style="overflow-wrap: break-word; margin-bottom: 10px;">Biasakan anak untuk menjaga kebersihan tangan, khususnya sebelum makan.</li><li style="overflow-wrap: break-word; margin-bottom: 10px;">Jangan lupa untuk menjaga kebersihan pakaian dalam yang digunakan anak. Pastikan ibu sering mengganti pakaian dalam anak dengan yang bersih.</li><li style="overflow-wrap: break-word; margin-bottom: 10px;">Potong kuku anak secara berkala.</li><li style="overflow-wrap: break-word; margin-bottom: 10px;">Pastikan anak menggunakan alas kaki saat bermain di luar rumah.</li><li style="overflow-wrap: break-word;">Jika anak atau salah satu keluarga dalam rumah mengalami cacingan, jangan lupa cuci sprei, handuk, pakaian, dan pakaian dalam dengan air panas. Air panas berfungsi untuk mematikan telur cacing yang menempel. Pastikan barang-barang tersebut kering dengan optimal. Ibu juga bisa menjaga kebersihan mainan anak secara berkala dengan membersihkannya dengan air hangat.</li></ol>', 'Ke Rumah Sakit'),
(5, 'malaria.jpg', 'P5', 'Malaria', 'Penyakit ini disebabkan oleh parasit yang menyebar melalui gigitan nyamuk, dan dapat mematikan jika tidak ditangani dengan benar. Malaria sangat jarang menular secara langsung dari satu orang ke orang lainnya. Penularan penyakit ini terjadi jika ada kontak dengan darah pengidap melalui gigitan nyamuk, transfusi darah, atau janin yang terinfeksi karena tertular dari darah sang ibu.', '<p style="-webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: lato, sans-serif; font-size: 18px; letter-spacing: 0.16px;"><span style="-webkit-font-smoothing: antialiased;">Utamanya, langkah pencegahan malaria dimulai dengan menjauhkan tempat berkembang biaknya nyamuk dari lingkungan rumah Mama. Usahakan untuk menjauhkan atau menutup genangan air di sekitar rumah ya, Ma! Selain itu Mama juga dapat mengikuti langkah-langkah berikut ini.</span></p><h3 style="-webkit-font-smoothing: antialiased; line-height: 1.5rem; font-size: 1.125rem; color: rgb(51, 51, 51); font-family: lato, sans-serif; letter-spacing: 0.16px; margin-bottom: 5px !important;"><span style="-webkit-font-smoothing: antialiased; font-weight: bolder;">1. Pakaikan baju berwarna terang pada bayi</span></h3><p style="-webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: lato, sans-serif; font-size: 18px; letter-spacing: 0.16px;"><span style="-webkit-font-smoothing: antialiased;">Hindari pakaian berwarna gelap pada bayi ya Ma, karena biasanya warna gelap lebih menarik perhatian nyamuk. Selain itu Mama dapat memilih baju dengan lengan atau celana panjang yang dapat melindungi permukaan kulit bayi dari gigitan nyamuk.</span></p><h3 style="-webkit-font-smoothing: antialiased; line-height: 1.5rem; font-size: 1.125rem; color: rgb(51, 51, 51); font-family: lato, sans-serif; letter-spacing: 0.16px; margin-bottom: 5px !important;"><span style="-webkit-font-smoothing: antialiased; font-weight: bolder;">2. Gunakan kelambu saat bayi tidur</span></h3><p style="-webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: lato, sans-serif; font-size: 18px; letter-spacing: 0.16px;"><span style="-webkit-font-smoothing: antialiased;">Untuk menghindari gigitan nyamuk, Mama dapat memasang kelambu pada tempat tidur bayi. Kelambu dapat digunakan pada siang dan malam hari untuk mengurangi resiko gigitan nyamuk demam berdarah dan chikungunya.</span></p><h3 style="-webkit-font-smoothing: antialiased; line-height: 1.5rem; font-size: 1.125rem; color: rgb(51, 51, 51); font-family: lato, sans-serif; letter-spacing: 0.16px; margin-bottom: 5px !important;"><span style="-webkit-font-smoothing: antialiased; font-weight: bolder;">3. Pilih tempat yang sejuk untuk bayi</span></h3><p style="-webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: lato, sans-serif; font-size: 18px; letter-spacing: 0.16px;"><span style="-webkit-font-smoothing: antialiased;">Apabila memungkinkan Mama dapat memasang AC di kamar bayi dengan temperatur yang sejuk. Hal ini disebabkan oleh udara sejuk yang tidak disukai nyamuk.</span></p><h3 style="-webkit-font-smoothing: antialiased; line-height: 1.5rem; font-size: 1.125rem; color: rgb(51, 51, 51); font-family: lato, sans-serif; letter-spacing: 0.16px; margin-bottom: 5px !important;"><span style="-webkit-font-smoothing: antialiased; font-weight: bolder;">4. Jauhkan kamar anak dari semak belukar</span></h3><p style="-webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: lato, sans-serif; font-size: 18px; letter-spacing: 0.16px;"><span style="-webkit-font-smoothing: antialiased;">Semak belukar dan pagar tanaman merupakan tempat nyamuk bersarang. Maka dari itu penting bagi Mama untuk memilih kamar yang tidak dekat dengan semak-semak atau pagar tanaman.</span></p><h3 style="-webkit-font-smoothing: antialiased; line-height: 1.5rem; font-size: 1.125rem; color: rgb(51, 51, 51); font-family: lato, sans-serif; letter-spacing: 0.16px; margin-bottom: 5px !important;"><span style="-webkit-font-smoothing: antialiased; font-weight: bolder;">5. Gunakan lotion anti nyamuk khusus bayi</span></h3><p style="-webkit-font-smoothing: antialiased; color: rgb(51, 51, 51); font-family: lato, sans-serif; font-size: 18px; letter-spacing: 0.16px;"><span style="-webkit-font-smoothing: antialiased;">Penggunaan lotion anti nyamuk untuk bayi diperbolehkan apabila kandungannya tidak mengandung toksin dan aman untuk kulit sensitif bayi.&nbsp;</span></p>', 'Ke Rumah Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE IF NOT EXISTS `tb_gejala` (
`id` int(5) NOT NULL,
  `G01` tinyint(1) DEFAULT NULL,
  `G02` tinyint(1) DEFAULT NULL,
  `G03` tinyint(1) DEFAULT NULL,
  `G04` tinyint(1) DEFAULT NULL,
  `G05` tinyint(1) DEFAULT NULL,
  `G06` tinyint(1) DEFAULT NULL,
  `G07` tinyint(1) DEFAULT NULL,
  `G08` tinyint(1) DEFAULT NULL,
  `G09` tinyint(1) DEFAULT NULL,
  `G10` tinyint(1) DEFAULT NULL,
  `G11` tinyint(1) DEFAULT NULL,
  `G12` tinyint(1) DEFAULT NULL,
  `G13` tinyint(1) DEFAULT NULL,
  `G14` tinyint(1) DEFAULT NULL,
  `G15` tinyint(1) DEFAULT NULL,
  `G16` tinyint(1) DEFAULT NULL,
  `G17` tinyint(1) DEFAULT NULL,
  `G18` tinyint(1) DEFAULT NULL,
  `G19` tinyint(1) DEFAULT NULL,
  `G20` tinyint(1) DEFAULT NULL,
  `G21` tinyint(1) DEFAULT NULL,
  `G22` tinyint(1) DEFAULT NULL,
  `G23` tinyint(1) DEFAULT NULL,
  `G24` tinyint(1) DEFAULT NULL,
  `G25` tinyint(1) DEFAULT NULL,
  `G26` tinyint(1) DEFAULT NULL,
  `G27` tinyint(1) DEFAULT NULL,
  `G28` tinyint(1) DEFAULT NULL,
  `G29` tinyint(1) DEFAULT NULL,
  `G30` tinyint(1) DEFAULT NULL,
  `G31` tinyint(1) DEFAULT NULL,
  `G32` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `G01`, `G02`, `G03`, `G04`, `G05`, `G06`, `G07`, `G08`, `G09`, `G10`, `G11`, `G12`, `G13`, `G14`, `G15`, `G16`, `G17`, `G18`, `G19`, `G20`, `G21`, `G22`, `G23`, `G24`, `G25`, `G26`, `G27`, `G28`, `G29`, `G30`, `G31`, `G32`) VALUES
(1, 1, 1, 1, 0, 1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(2, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0),
(3, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0),
(4, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala_1`
--

CREATE TABLE IF NOT EXISTS `tb_gejala_1` (
`id` int(5) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `gejala` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_gejala_1`
--

INSERT INTO `tb_gejala_1` (`id`, `kode`, `gejala`) VALUES
(1, 'G01', 'Demam'),
(2, 'G02', 'Lesu'),
(3, 'G03', 'Malas Makan'),
(4, 'G04', 'Muntah Berak'),
(5, 'G05', 'Pendarahan Pada Kulit'),
(6, 'G06', 'Mimisan'),
(7, 'G07', 'Sakit Kepala'),
(8, 'G08', 'Tubuh Menggigil'),
(9, 'G09', 'Denyut Jantung Lemah'),
(10, 'G10', 'Badan Lemah'),
(11, 'G11', 'Nyeri Otot'),
(12, 'G12', 'Tidak Nafsu Makan'),
(13, 'G13', 'Konstipasi/Sembelit'),
(14, 'G14', 'Sakit Perut'),
(15, 'G15', 'Penyebaran Flek Merah Muda'),
(16, 'G16', 'Nyeri Tenggorokan'),
(17, 'G17', 'Hidung Meler'),
(18, 'G18', 'Batuk'),
(19, 'G19', 'Bercak Koplik'),
(20, 'G20', 'Mata Merah'),
(21, 'G21', 'Buang Air Besar Terus-Menerus'),
(22, 'G22', 'Mual'),
(23, 'G23', 'Muntah-Muntah'),
(24, 'G24', 'Pegal pada Punggung\r\n'),
(25, 'G25', 'Perut Sering Berbunyi\r\n'),
(26, 'G26', 'Kekakuan Pada Rahang\r\n'),
(27, 'G27', 'Nyeri Telan'),
(28, 'G28', 'Kejang Otot\r\n'),
(29, 'G29', 'Sakit Otot\r\n'),
(30, 'G30', 'Nyeri Perut'),
(31, 'G31', 'Nyeri Punggung'),
(32, 'G32', 'Tonjolan-Tonjolan Kemerahan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tmp_lahir` varchar(225) NOT NULL,
  `tgl_lahir` varchar(225) NOT NULL,
  `jk` enum('Laki-laki','Perempuan','','') NOT NULL,
  `hp` varchar(50) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `gambar`, `nama`, `tmp_lahir`, `tgl_lahir`, `jk`, `hp`, `alamat`, `username`, `password`, `id_level`) VALUES
(1, 'avatar5.png', 'Calvin', 'Konoha', '2018-12-07', 'Laki-laki', '085256651656', 'Jalan Kenangan', 'pakar@sipadapa.com', 'aaa470f319ff82f7158e17c966c794d1', '1'),
(2, 'avatar4.png', 'Brisa Dotulong', 'San Morez', '2019-10-08', 'Perempuan', '085256651656', 'Jalan Bersamamu', 'user@sipadapa.com', '045447cf5327e2fb5557bc4ee3c5220d', '3'),
(3, 'avatar.png', 'Faide Raja', 'Buli Asal', '2015-11-03', 'Laki-laki', '123', '-', 'fr@gmail.com', '202cb962ac59075b964b07152d234b70', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
 ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
 ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
 ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_gejala_1`
--
ALTER TABLE `tb_gejala_1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `username` (`username`), ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
MODIFY `id_jk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_gejala_1`
--
ALTER TABLE `tb_gejala_1`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
