-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 12:11 PM
-- Server version: 5.5.16
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcicilancustomer`
--

CREATE TABLE `tblcicilancustomer` (
  `id` int(11) NOT NULL,
  `idpesanan` int(11) NOT NULL,
  `cicilanke` int(11) NOT NULL,
  `totalcicilan` varchar(100) NOT NULL,
  `norefpembayaran` varchar(100) NOT NULL,
  `tanggalpembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblkontak`
--

CREATE TABLE `tblkontak` (
  `id` int(11) NOT NULL,
  `alamatkantor` varchar(100) NOT NULL,
  `kontakperson` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkontak`
--

INSERT INTO `tblkontak` (`id`, `alamatkantor`, `kontakperson`) VALUES
(2, 'Jl. Desa Puncak Kampung Karang Anyar, Kuningan Jawabarat', '085761665862');

-- --------------------------------------------------------

--
-- Table structure for table `tblpesanan`
--

CREATE TABLE `tblpesanan` (
  `idpesanan` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jenisproduk` varchar(100) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `metodepembayaran` varchar(100) NOT NULL,
  `cicilan` varchar(11) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `statuspesanan` varchar(100) NOT NULL,
  `tanggalpesan` date NOT NULL,
  `tanggalkirim` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpesanan`
--

INSERT INTO `tblpesanan` (`idpesanan`, `id`, `jenisproduk`, `namaproduk`, `nama`, `gambar`, `metodepembayaran`, `cicilan`, `harga`, `statuspesanan`, `tanggalpesan`, `tanggalkirim`) VALUES
(1, 9, 'Roll Banner', 'photo card baekhyun exo', 'bukan session', 'Photocard_-_Baekhyun_Exo_1.jpg', '', '2', 90000, 'Pesanan Selesai', '2021-08-24', '0000-00-00'),
(4, 19, 'order', 'Id Card Resonance Part 2 - Ten _ Jungwoo NCT', 'ica', 'Id_Card_Resonance_Part_2_-_Ten___Jungwoo_NCT1.jpg', 'paylater', '3', 80000, 'Barang Dikirim', '2022-10-01', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduk`
--

CREATE TABLE `tblproduk` (
  `id` int(11) NOT NULL,
  `jenisproduk` varchar(100) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduk`
--

INSERT INTO `tblproduk` (`id`, `jenisproduk`, `namaproduk`, `harga`, `gambar`, `deskripsi`) VALUES
(18, 'preorder', 'Blackpink Official Lightstick', 30000, 'Blackpink_Official_Lightstick_-_(Pre-Order)1.jpg', 'Blackpink Official Lightstick - (Pre-Order)'),
(19, 'order', 'Id Card Resonance Part 2 - Ten _ Jungwoo NCT', 80000, 'Id_Card_Resonance_Part_2_-_Ten___Jungwoo_NCT1.jpg', 'Id Card Resonance Part 2 - Ten _ Jungwoo NCT');

-- --------------------------------------------------------

--
-- Table structure for table `tblregistrasionline`
--

CREATE TABLE `tblregistrasionline` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregistrasionline`
--

INSERT INTO `tblregistrasionline` (`id`, `username`, `alamat`, `notelp`, `email`, `password`) VALUES
(1, 'amelia', 'jakarta', '08909990', 'ameia@gmail.com', 'amelia'),
(2, 'rafka', 'bekasi', '08900099', 'rafka@gmail.com', 'rafka'),
(3, 'ica', 'bekasi', '09999', 'yusup@gmail.com', 'ica');

-- --------------------------------------------------------

--
-- Table structure for table `tbltentang`
--

CREATE TABLE `tbltentang` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltentang`
--

INSERT INTO `tbltentang` (`id`, `kategori`, `deskripsi`) VALUES
(4, 'Visi', 'Visi Perusahaan adalah agar menjadi perushaan yang berkualitas'),
(5, 'Misi', 'Misi Perusahaan adalah agar menjadi perushaan yang terdepan');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `email`, `password`) VALUES
(3, 'saya', 'saya@gmail.com', 'saya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcicilancustomer`
--
ALTER TABLE `tblcicilancustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblkontak`
--
ALTER TABLE `tblkontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpesanan`
--
ALTER TABLE `tblpesanan`
  ADD PRIMARY KEY (`idpesanan`);

--
-- Indexes for table `tblproduk`
--
ALTER TABLE `tblproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblregistrasionline`
--
ALTER TABLE `tblregistrasionline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltentang`
--
ALTER TABLE `tbltentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcicilancustomer`
--
ALTER TABLE `tblcicilancustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblkontak`
--
ALTER TABLE `tblkontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblpesanan`
--
ALTER TABLE `tblpesanan`
  MODIFY `idpesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblproduk`
--
ALTER TABLE `tblproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblregistrasionline`
--
ALTER TABLE `tblregistrasionline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbltentang`
--
ALTER TABLE `tbltentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
