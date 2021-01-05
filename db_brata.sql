-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Jan 05, 2021 at 07:54 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_brata`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_akun`
--

CREATE TABLE `t_akun` (
  `id_akun` int(12) NOT NULL,
  `id_kantor` int(12) NOT NULL,
  `id_pegawai` int(12) NOT NULL,
  `username` varchar(31) NOT NULL,
  `password` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_akun`
--

INSERT INTO `t_akun` (`id_akun`, `id_kantor`, `id_pegawai`, `username`, `password`) VALUES
(0, 1, 1, 'irvan', 'irvan');

-- --------------------------------------------------------

--
-- Table structure for table `t_berita`
--

CREATE TABLE `t_berita` (
  `id_berita` int(12) NOT NULL,
  `id_kantor` int(12) NOT NULL,
  `id_akun` int(12) NOT NULL,
  `id_kategoriberita` int(12) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `gambar` varchar(32) NOT NULL,
  `tanggal` date NOT NULL,
  `tulisan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_berita`
--

INSERT INTO `t_berita` (`id_berita`, `id_kantor`, `id_akun`, `id_kategoriberita`, `judul`, `gambar`, `tanggal`, `tulisan`) VALUES
(5, 0, 1, 2, 'Coba', 'getring_jogja.jpeg', '2020-07-16', '<p>ttt</p>\r\n'),
(6, 0, 1, 1, 'Coba', 'pak adit list harga.jpg', '2020-07-16', '<p>s</p>\r\n'),
(7, 0, 1, 3, 'fghjk', 'Untitled.png', '2020-07-30', '<p>sdfghjk</p>\r\n'),
(8, 0, 1, 3, 'fghjk', 'Untitled.png', '2020-07-30', '<p>sdfghjk</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `t_data_lpk`
--

CREATE TABLE `t_data_lpk` (
  `id_data_lpk` int(12) NOT NULL,
  `id_lpk` int(12) NOT NULL,
  `nama_laporan` varchar(40) NOT NULL,
  `file` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_data_lpk`
--

INSERT INTO `t_data_lpk` (`id_data_lpk`, `id_lpk`, `nama_laporan`, `file`) VALUES
(1, 1, 'Neraca', 'LKPK-LKP-01-1.png'),
(2, 1, 'Neraca 2', 'LKPK-LKP-01-2.png'),
(3, 1, 'rekening administratif', 'LKPK-LKP-04-1.png'),
(4, 1, 'labarugi', 'LKPK-LKP-02-1.png'),
(5, 1, 'labarugi2', 'LKPK-LKP-02-2.png'),
(6, 1, 'rasio keuangan', 'LKPK-LKP-03-1.png'),
(7, 1, 'direksi dan komisaris', 'LKPK-LKP-05-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_deposito`
--

CREATE TABLE `t_deposito` (
  `id_deposito` int(12) NOT NULL,
  `id_produk` int(12) NOT NULL,
  `nama_pro_deposito` varchar(80) NOT NULL,
  `penjelasan_depo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_deposito`
--

INSERT INTO `t_deposito` (`id_deposito`, `id_produk`, `nama_pro_deposito`, `penjelasan_depo`) VALUES
(1, 3, 'Deposito Berjangka', 'yahhh gitu we deposito mah');

-- --------------------------------------------------------

--
-- Table structure for table `t_kantor`
--

CREATE TABLE `t_kantor` (
  `id_kantor` int(11) NOT NULL,
  `nama_kantor` varchar(50) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `no_tlp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_kategoriberita`
--

CREATE TABLE `t_kategoriberita` (
  `id_kategoriberita` int(12) NOT NULL,
  `nama_kategori` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kategoriberita`
--

INSERT INTO `t_kategoriberita` (`id_kategoriberita`, `nama_kategori`) VALUES
(1, 'Promo'),
(2, 'Kegiatan'),
(3, 'Berita');

-- --------------------------------------------------------

--
-- Table structure for table `t_kredit`
--

CREATE TABLE `t_kredit` (
  `id_kredit` int(12) NOT NULL,
  `id_produk` int(12) DEFAULT NULL,
  `nama_pro_kre` varchar(80) DEFAULT NULL,
  `min_pengajuan` int(21) NOT NULL,
  `max_pengajuan` int(21) NOT NULL,
  `min_jkw` int(2) NOT NULL,
  `max_jkw` int(2) NOT NULL,
  `perhitungan_bunga` varchar(50) NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kredit`
--

INSERT INTO `t_kredit` (`id_kredit`, `id_produk`, `nama_pro_kre`, `min_pengajuan`, `max_pengajuan`, `min_jkw`, `max_jkw`, `perhitungan_bunga`, `penjelasan`) VALUES
(1, 2, 'Umum', 10000000, 1000000000, 6, 36, 'Flat', 'nya kitu we'),
(2, 2, 'Multiguna Karyawan', 1000000, 1000000000, 6, 36, 'Anuitas', 'nya kitu we 2');

-- --------------------------------------------------------

--
-- Table structure for table `t_lpk`
--

CREATE TABLE `t_lpk` (
  `id_lpk` int(12) NOT NULL,
  `nama_laporan` varchar(40) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_lpk`
--

INSERT INTO `t_lpk` (`id_lpk`, `nama_laporan`, `tanggal`) VALUES
(1, 'Triwulan II 2020', '2020-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `t_perhitungan_bng`
--

CREATE TABLE `t_perhitungan_bng` (
  `id_perhitungan_bunga` int(12) NOT NULL,
  `metode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_perhitungan_bng`
--

INSERT INTO `t_perhitungan_bng` (`id_perhitungan_bunga`, `metode`) VALUES
(1, 'Anuitas'),
(2, 'Flat');

-- --------------------------------------------------------

--
-- Table structure for table `t_produk`
--

CREATE TABLE `t_produk` (
  `id_produk` int(12) NOT NULL,
  `id_kantor` int(12) NOT NULL,
  `nama_produk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_produk`
--

INSERT INTO `t_produk` (`id_produk`, `id_kantor`, `nama_produk`) VALUES
(1, 1, 'Tabungan'),
(2, 2, 'Kredit'),
(3, 3, 'Deposito');

-- --------------------------------------------------------

--
-- Table structure for table `t_tabungan`
--

CREATE TABLE `t_tabungan` (
  `id_tabungan` int(12) NOT NULL,
  `id_produk` int(12) NOT NULL,
  `nama_pro_tabungan` varchar(80) NOT NULL,
  `min_saldo` int(21) NOT NULL,
  `biaya_adm` int(21) NOT NULL,
  `penjelasan_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_tabungan`
--

INSERT INTO `t_tabungan` (`id_tabungan`, `id_produk`, `nama_pro_tabungan`, `min_saldo`, `biaya_adm`, `penjelasan_produk`) VALUES
(1, 1, 'Mitra', 10000, 3000, 'mantap pancing 1'),
(2, 1, 'Wajib', 10000, 3000, 'mantap pancing 2'),
(3, 1, 'Pendidikan', 10000, 3000, 'mantap pancing 3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_akun`
--
ALTER TABLE `t_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `t_berita`
--
ALTER TABLE `t_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `t_data_lpk`
--
ALTER TABLE `t_data_lpk`
  ADD PRIMARY KEY (`id_data_lpk`);

--
-- Indexes for table `t_deposito`
--
ALTER TABLE `t_deposito`
  ADD PRIMARY KEY (`id_deposito`);

--
-- Indexes for table `t_kantor`
--
ALTER TABLE `t_kantor`
  ADD PRIMARY KEY (`id_kantor`);

--
-- Indexes for table `t_kategoriberita`
--
ALTER TABLE `t_kategoriberita`
  ADD PRIMARY KEY (`id_kategoriberita`);

--
-- Indexes for table `t_kredit`
--
ALTER TABLE `t_kredit`
  ADD PRIMARY KEY (`id_kredit`);

--
-- Indexes for table `t_lpk`
--
ALTER TABLE `t_lpk`
  ADD PRIMARY KEY (`id_lpk`);

--
-- Indexes for table `t_perhitungan_bng`
--
ALTER TABLE `t_perhitungan_bng`
  ADD PRIMARY KEY (`id_perhitungan_bunga`);

--
-- Indexes for table `t_produk`
--
ALTER TABLE `t_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `t_tabungan`
--
ALTER TABLE `t_tabungan`
  ADD PRIMARY KEY (`id_tabungan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_berita`
--
ALTER TABLE `t_berita`
  MODIFY `id_berita` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `t_data_lpk`
--
ALTER TABLE `t_data_lpk`
  MODIFY `id_data_lpk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_deposito`
--
ALTER TABLE `t_deposito`
  MODIFY `id_deposito` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_kantor`
--
ALTER TABLE `t_kantor`
  MODIFY `id_kantor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_kategoriberita`
--
ALTER TABLE `t_kategoriberita`
  MODIFY `id_kategoriberita` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_kredit`
--
ALTER TABLE `t_kredit`
  MODIFY `id_kredit` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_lpk`
--
ALTER TABLE `t_lpk`
  MODIFY `id_lpk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_perhitungan_bng`
--
ALTER TABLE `t_perhitungan_bng`
  MODIFY `id_perhitungan_bunga` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_produk`
--
ALTER TABLE `t_produk`
  MODIFY `id_produk` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `t_tabungan`
--
ALTER TABLE `t_tabungan`
  MODIFY `id_tabungan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
