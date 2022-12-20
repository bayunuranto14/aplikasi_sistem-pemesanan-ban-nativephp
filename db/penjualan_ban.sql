-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 06:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan_ban`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `alamat`) VALUES
(1, 'Administrator', 'admin', 'admin', 'Jakarta'),
(2, 'Bayu Afif Nuranto', 'bayunuranto', '123456', 'Jl. Rawa Jaya, Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(15) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `email_pemesan` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `merk` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pemesanan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(15) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `jumlah_stok` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `deskripsi`, `merk`, `jumlah_stok`, `gambar`) VALUES
(1, 'MICHELIN CITY GRIP PRO 80/90-14', 310000, 'Berkat MICHELIN OVERLAP TECHNOLOGY (MOT), ban lebih kuat terhadap kebocoran.', 'MICHELIN', 100, 'michelin-1.jpg'),
(2, 'CORSA PLATINUM CROSS-S 90/80 R14', 288000, 'Ban Cross dengan teknologi yang mampu menaklukan medan pasir hingga lumpur', 'CORSA', 100, 'corsa-1.jpg'),
(3, 'IRC SS 530 80/90-14', 188000, 'Ban dengan tampilan sporty didesain dengan kemampuan jelajah yang tinggi, cocok untuk sport touring', 'IRC', 100, 'irc-1.jpg'),
(4, 'MAXXIS EXTRAMAXX 100/80-17', 475000, 'Maxxis Extramaxx merupakan ban tubeless yang didesain dengan bentuk pola 3D yang mampu menghilangkan kekakuan pada tampilan ban', 'MAXXIS', 100, 'maxxis-1.jpg'),
(5, 'PIRELLI DIABLO ROSSO SPORT 90/80-17 F', 495000, 'Diablo™ Rosso Sport adalah ban cross-ply yang didedikasikan untuk underbones dan small displacement sport dan touring bikes', 'PIRELLI', 100, 'pirelli-1.jpg'),
(6, 'FDR SPORT XR EVO 130/70-17', 595500, 'Didesain dengan kemampuan jelajah tinggi, cocok untuk sport touring', 'FDR', 100, 'fdr-1.jpg'),
(7, 'ASPIRA PREMIO SPORTIVO 90/80-14 FR', 297000, 'Aspira Sportivo dengan teknologi PRO DG yang mendesain alur dan tapak ban yang berbeda', 'ASPIRA', 100, 'aspira-1.jpg'),
(8, 'METZELLER SPORTEC M5 INTERACT 110/70-17', 789000, 'Teknologi Berinteraksi™. Ketegangan lima zona: tata letak tegangan baru memastikan keseimbangan terbaik antara jarak tempuh', 'METZELLER', 100, 'metzeller-1.jpg'),
(9, 'SWALLOW SB115 SEAHAWK 70/90-17', 174000, 'Tubeless / Tidak membutuhkan ban dalam', 'SWALLOW', 100, 'swallow-1.jpg'),
(10, 'MICHELIN M45 110/80-14', 391000, 'MICHELIN M45 adalah ban kota untuk sepeda bermesin kecil, memberikan daya tahan dan cengkeraman.', 'MICHELIN', 100, 'michelin-2.jpg'),
(11, 'CORSA R99 80/80-14', 211000, 'Ban Touring premium yang terinpirasi kekuatan luar biasa tokoh Bima dalam pewayangan', 'CORSA', 100, 'corsa-2.jpg'),
(12, 'IRC NR72 80/90-17', 233000, 'Desain kembangan yang menarik & cocok untuk semua kondisi jalan raya dan tahan lama', 'IRC', 100, 'irc-2.jpg'),
(13, 'MAXXIS C922 110/70-12', 373000, 'Dengan pola design tapak Ban yang simpel, dan alur tapak yang dalam, dapat meningkatkan keamanan dan daya cengkram yang bagus pada saat kondisi hujan', 'MAXXIS', 100, 'maxxis-2.jpg'),
(14, 'PIRELLI DIABLO ROSSO SPORT 130/70-17 F', 845000, 'Daya cengkeram maksimal di segala kondisi,pola tapak berasal dari desain DIABLO™ SUPERCORSA.', 'PIRELLI', 100, 'pirelli-2.jpg'),
(15, 'FDR FLEMMO 80/90-17', 223000, 'Siap “membakar” jalanan dengan Flemmo. Menemani aktivitas harian di jalan basah dan kering.', 'FDR', 100, 'fdr-2.jpg'),
(16, 'ASPIRA MAXIO RAVE 70/80-14', 126000, 'Tubeless / tidak membutuhkan ban dalam', 'ASPIRA', 100, 'aspira-2.jpg'),
(17, 'METZELLER SPORTEC M5 INTERACT 140/70-17', 1082000, 'Genggaman dengan presisi ramping dan menikung', 'METZELLER', 100, 'metzeller-2.jpg'),
(18, 'SWALLOW SB115 SEAHAWK 80/90-14', 180000, 'Didesain untuk memberikan stabilitas, handling, corning, serta grip yang mantap saat berkendar', 'SWALLOW', 100, 'swallow-2.jpg'),
(19, 'MICHELIN PILOT STREET 2 140/70-17', 950000, 'Kedalaman tapak yang disesuaikan dan kompon tapak baru memberi ban MICHELIN Pilot Street keseimbangan sempurna antara cengkeraman dan keausan.', 'MICHELIN', 100, 'michelin-3.jpg'),
(20, 'CORSA R99 130/70-17', 615000, 'Teknologi kompon yang diracik khusus untuk ban premium yang memiliki Extra Grip, Extra Life', 'CORSA', 100, 'corsa-3.jpg'),
(21, 'IRC MB 86 100/90-12', 260000, 'Memberikan daya cengkram (grip) yang optimal dengan rolling resistance yang rendah, sehingga irit bahan bakar', 'IRC', 100, 'irc-3.jpg'),
(22, 'MAXXIS VICTRA S98 ST 140/70-14', 656000, 'Berkendara dengan nyaman di trotoar atau medan berlumpur dengan ban serbaguna dengan penanganan dan keausan tapak yang sangat baik.', 'MAXXIS', 100, 'maxxis-3.jpg'),
(23, 'PIRELLI DIABLO SUPERBIKE RAD 120/70-17 F', 2480000, 'Ban balap paling sporty dari PIRELLI untuk melepaskan hasrat Anda di trek balap.', 'PIRELLI', 100, 'pirelli-3.jpg'),
(24, 'FDR CITY GO TUBELESS 110/90-12', 285000, 'Ban ukuran rim 12 inchi dengan gaya retro modern yang cocok untuk motor matic', 'FDR', 100, 'fdr-3.jpg'),
(25, 'ASPIRA PREMIO TERRENO 140/70-17 RR', 672000, 'Terreno adalah perpaduan ban commuting, touring dan off road dalam satu ban', 'ASPIRA', 100, 'aspira-3.jpg'),
(26, 'METZELLER SPORTEC M5 INTERACT 150/60-17', 1183000, 'Genggaman dengan presisi ramping dan menikung', 'METZELLER', 100, 'metzeller-3.jpg'),
(27, 'SWALLOW SB115 SEAHAWK 90/90-14', 216000, ' Ban Motor yang cocok digunakan saat kondisi kering maupun basah', 'SWALLOW', 100, 'swallow-3.jpg'),
(28, 'MICHELIN PILOT POWER 5 160/60-17 RADIAL', 2708000, 'Ban MICHELIN Pilot Power 5 memiliki daya cengkeram yang luar biasa di permukaan basah dan lembap untuk kepercayaan diri yang luar biasa.', 'MICHELIN', 100, 'michelin-4.jpg'),
(29, 'CORSA R93 160/60-17', 1077000, 'Teknologi kompon medium soft yang mencengkram jalan tanpa kompromi', 'CORSA', 100, 'corsa-4.jpg'),
(30, 'IRC MB 67 110/90-12', 315000, 'Memberikan kenyamanan dan kestabilan berkendara dengan respon yang bagus', 'IRC', 100, 'irc-4.jpg'),
(31, 'MAXXIS EXTRAMAXX 140/70-17', 830000, 'Ban Maxxis dirancang untuk membantu Anda bertahan dalam perjalanan panjang.', 'MAXXIS', 100, 'maxxis-4.jpg'),
(32, 'PIRELLI DIABLO SUPER CORSA RADIAL 160/60-17 R', 3630000, 'Memastikan cengkeraman tinggi dan dorongan lateral pada kemiringan penuh', 'PIRELLI', 100, 'pirelli-4.jpg'),
(33, 'FDR GENZI PRO 100/80-17', 388000, 'Indikator keausan ban progresif yang  memberi peringatan dini', 'FDR', 100, 'fdr-4.jpg'),
(34, 'ASPIRA PREMIO SPORTIVO 150/60-17 R', 781000, 'Memberikan pengalaman berkendara yang luar biasa dengan ban yang sporty ketika melakukan manuver dan perjalanan jarak jauh di segala cuaca.', 'ASPIRA', 100, 'aspira-4.jpg'),
(35, 'METZELLER SPORTEC M5 INTERACT 120/60-17', 1294000, 'Performa tinggi dan keamanan saat basah', 'METZELLER', 100, '	metzeller-4.jpg'),
(36, 'SWALLOW SB115 SEAHAWK 80/90-17', 221000, 'Memiliki daya cengkeram yang baik sehingga tetap stabil saat terjadi pengereman mendadak', 'SWALLOW', 100, 'swallow-4.jpg'),
(37, 'test', 898908908, 'bslbklsgkbsgkbeksbgklesb', 'gbklbgelw', 9379739, 'IMG-20191105-WA0010.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id_vendor` int(15) NOT NULL,
  `nama_vendor` varchar(255) NOT NULL,
  `alamat_vendor` varchar(255) NOT NULL,
  `no_telp` text NOT NULL,
  `jumlah_stok` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
