-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 08:24 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brownies`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblkontak`
--

CREATE TABLE `tblkontak` (
  `idkontak` int(11) NOT NULL,
  `alamatkantor` varchar(100) NOT NULL,
  `kontakperson` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblkontak`
--

INSERT INTO `tblkontak` (`idkontak`, `alamatkantor`, `kontakperson`) VALUES
(2, 'Jl. Desa Puncak Kampung Karang Anyar, Kuningan Jawabarat', '085761665862');

-- --------------------------------------------------------

--
-- Table structure for table `tblmasterproduk`
--

CREATE TABLE `tblmasterproduk` (
  `idmasterproduk` int(11) NOT NULL,
  `namaproduk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmasterproduk`
--

INSERT INTO `tblmasterproduk` (`idmasterproduk`, `namaproduk`, `deskripsi`, `gambar`) VALUES
(1, 'Brownies Susu', 'brownies ini terbuat dari bahan-bahan yang berkualitas dan higienis untuk pembuatan nya', 'kue.jpg'),
(2, 'Brownies Kacang Mede', 'Brownies ini dibuat dengan campuran kacang mede yang di import dari luar negri', 'kue1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblpesanan`
--

CREATE TABLE `tblpesanan` (
  `idpesanan` int(11) NOT NULL,
  `idpostingproduk` int(11) NOT NULL,
  `namacustomer` varchar(100) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `pesancs` text NOT NULL,
  `alamat` text NOT NULL,
  `totalpesanan` int(11) NOT NULL,
  `totalharga` varchar(100) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `statuspesanan` varchar(100) NOT NULL,
  `tanggalpesan` date NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `notransaksipembayaran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpesanan`
--

INSERT INTO `tblpesanan` (`idpesanan`, `idpostingproduk`, `namacustomer`, `nohp`, `pesancs`, `alamat`, `totalpesanan`, `totalharga`, `harga`, `statuspesanan`, `tanggalpesan`, `pembayaran`, `notransaksipembayaran`) VALUES
(1, 10, 'Allex', '085761665862', 'ditungggu yah pesanan nya kak', 'jln swadaya 1 no 11b', 1, '100000', 100000, 'Belum Di Proses', '2023-05-19', 'COD', ''),
(2, 1, 'vivi ', '09800009878', 'ditunggu ya kue nya', 'jatiwaringin bekasi', 0, '', 10000, 'Pesanan Selesai', '2023-05-29', 'COD', '2222'),
(3, 1, 'fadia', '09839440596', 'Ditunggu pesanan nya ', 'jatimakmur bekasi', 0, '', 10000, 'Pesanan Selesai', '2023-05-30', 'COD', '222222'),
(4, 0, 'arya', '08965423554', 'pesan', 'jatiwaringin', 0, '', 123000, 'Belum di Konfirmasi', '2023-05-31', 'COD', ''),
(5, 0, 'arya', '08965423554', 'pesan', 'jatiwaringin', 0, '', 123000, 'Belum di Konfirmasi', '2023-05-31', 'COD', ''),
(6, 1, 'Arif', '086728773838', 'Tes', 'Bekasi', 0, '', 10000, 'Belum di Konfirmasi', '2023-05-31', 'COD', ''),
(7, 1, 'arya', '08963258963', 'pesan', 'jtw', 0, '', 10000, 'Belum di Konfirmasi', '2023-05-31', 'COD', ''),
(8, 1, 'arya', '08963258963', 'pesan', 'jtm', 0, '', 10000, 'Belum di Konfirmasi', '2023-05-31', 'COD', ''),
(9, 1, 'raka', '0812737373737', '', 'jatiwaringin pondok gede', 0, '', 10000, 'Belum di Konfirmasi', '2023-05-31', 'TRANSFER', ''),
(10, 1, 'raka', '0812737373737', '', 'jatiwaringin pondok gede', 0, '', 10000, 'Belum di Konfirmasi', '2023-05-31', 'COD', ''),
(11, 1, 'Rama Rahmadani', '087882545016', 'Jangan pake Coklat', 'Jalan Setia 1 Gg Mutaqin 3 RT 004/012 No.11 Jatiwaringin, Pondok Gede Bekasi', 0, '', 20, 'Belum di Konfirmasi', '2023-05-31', 'COD', ''),
(12, 1, 'Johan', '0868288271', 'Ditunggu kuenya', 'Jakarta barat', 0, '', 10000, 'Belum di Konfirmasi', '2023-05-31', 'COD', ''),
(13, 1, 'raka', '0812737373737', '', 'jatiwaringin pondok gede', 0, '', 10000, 'Belum di Konfirmasi', '2023-05-31', 'COD', ''),
(14, 1, 'raka', '0812737373737', '', 'jatiwaringin pondok gede', 0, '', 10000, 'Belum di Konfirmasi', '2023-05-31', 'TRANSFER', ''),
(15, 1, 'arya', '08965423554', 'pesan', 'jtw', 0, '', 10000, 'Belum di Konfirmasi', '2023-06-22', 'TRANSFER', ''),
(17, 1, 'taufik', '00000009000', 'mas taufik', 'jakarta', 0, '', 10000, 'Belum di Konfirmasi', '2023-07-13', 'COD', ''),
(18, 1, 'taufik', '00000009000', 'mas taufik', 'ddd', 0, '', 10000, 'Pesanan Di Buat', '2023-07-13', 'COD', '555');

-- --------------------------------------------------------

--
-- Table structure for table `tblposting`
--

CREATE TABLE `tblposting` (
  `idposting` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `deskripsiproduk` text NOT NULL,
  `harga` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblposting`
--

INSERT INTO `tblposting` (`idposting`, `idproduk`, `deskripsiproduk`, `harga`, `tanggal`, `flag`) VALUES
(1, 10, 'produk baru', '10000', '2023-05-17', 'promo');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduk`
--

CREATE TABLE `tblproduk` (
  `idproduk` int(11) NOT NULL,
  `kodeproduk` varchar(100) NOT NULL,
  `namaproduk` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduk`
--

INSERT INTO `tblproduk` (`idproduk`, `kodeproduk`, `namaproduk`, `deskripsi`, `gambar`) VALUES
(10, '', 'Brownis Coklat Maca premium', 'Brownis Coklat Maca premium', 'sebelum_erpr_db.png'),
(12, '', 'Brownis Kacang Ketan', 'kacang ketan', 'kue3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblregistrasionline`
--

CREATE TABLE `tblregistrasionline` (
  `idregistrasionline` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregistrasionline`
--

INSERT INTO `tblregistrasionline` (`idregistrasionline`, `username`, `alamat`, `notelp`, `email`, `password`) VALUES
(1, 'amelia', 'jakarta', '08909990', 'ameia@gmail.com', 'amelia'),
(2, 'rafka', 'bekasi', '08900099', 'rafka@gmail.com', 'rafka'),
(3, 'ica', 'bekasi', '09999', 'yusup@gmail.com', 'ica');

-- --------------------------------------------------------

--
-- Table structure for table `tblstock`
--

CREATE TABLE `tblstock` (
  `idstock` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstock`
--

INSERT INTO `tblstock` (`idstock`, `idproduk`, `stock`) VALUES
(1, 10, 21),
(2, 0, 100),
(3, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbltentang`
--

CREATE TABLE `tbltentang` (
  `idtentang` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltentang`
--

INSERT INTO `tbltentang` (`idtentang`, `kategori`, `deskripsi`) VALUES
(4, 'Visi', 'Visi Perusahaan adalah agar menjadi perushaan yang berkualitas'),
(5, 'Misi', 'Misi Perusahaan adalah agar menjadi perushaan yang terdepan');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `iduser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`iduser`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'adit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblkontak`
--
ALTER TABLE `tblkontak`
  ADD PRIMARY KEY (`idkontak`);

--
-- Indexes for table `tblmasterproduk`
--
ALTER TABLE `tblmasterproduk`
  ADD PRIMARY KEY (`idmasterproduk`);

--
-- Indexes for table `tblpesanan`
--
ALTER TABLE `tblpesanan`
  ADD PRIMARY KEY (`idpesanan`);

--
-- Indexes for table `tblposting`
--
ALTER TABLE `tblposting`
  ADD PRIMARY KEY (`idposting`);

--
-- Indexes for table `tblproduk`
--
ALTER TABLE `tblproduk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indexes for table `tblregistrasionline`
--
ALTER TABLE `tblregistrasionline`
  ADD PRIMARY KEY (`idregistrasionline`);

--
-- Indexes for table `tblstock`
--
ALTER TABLE `tblstock`
  ADD PRIMARY KEY (`idstock`);

--
-- Indexes for table `tbltentang`
--
ALTER TABLE `tbltentang`
  ADD PRIMARY KEY (`idtentang`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblkontak`
--
ALTER TABLE `tblkontak`
  MODIFY `idkontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblmasterproduk`
--
ALTER TABLE `tblmasterproduk`
  MODIFY `idmasterproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpesanan`
--
ALTER TABLE `tblpesanan`
  MODIFY `idpesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tblposting`
--
ALTER TABLE `tblposting`
  MODIFY `idposting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblproduk`
--
ALTER TABLE `tblproduk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tblregistrasionline`
--
ALTER TABLE `tblregistrasionline`
  MODIFY `idregistrasionline` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblstock`
--
ALTER TABLE `tblstock`
  MODIFY `idstock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbltentang`
--
ALTER TABLE `tbltentang`
  MODIFY `idtentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
