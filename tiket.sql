-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 04:35 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `diskonpesawat`
--

CREATE TABLE `diskonpesawat` (
  `iddiskon` int(5) NOT NULL,
  `kodediskon` varchar(50) NOT NULL,
  `persendiskon` int(5) NOT NULL,
  `mulai` date NOT NULL,
  `akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskonpesawat`
--

INSERT INTO `diskonpesawat` (`iddiskon`, `kodediskon`, `persendiskon`, `mulai`, `akhir`) VALUES
(1, 'TERBANG25', 25, '2020-01-25', '2020-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `idlevel` int(5) NOT NULL,
  `namalevel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`idlevel`, `namalevel`) VALUES
(1, 'admin'),
(2, 'kasir');

-- --------------------------------------------------------

--
-- Table structure for table `pembayarankereta`
--

CREATE TABLE `pembayarankereta` (
  `idpembayaranker` int(5) NOT NULL,
  `nopembayaran` varchar(20) NOT NULL,
  `nomortiket` varchar(20) NOT NULL,
  `totalharga` int(10) NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayarankereta`
--

INSERT INTO `pembayarankereta` (`idpembayaranker`, `nopembayaran`, `nomortiket`, `totalharga`, `bukti`, `status`) VALUES
(1, 'KER02202031', 'KR001', 200000, NULL, 2),
(2, 'KER02202012', 'KR002', 500000, NULL, 0),
(3, 'KER02202013', 'KR003', 500000, NULL, 0),
(4, 'KER02202014', 'KR004', 500000, NULL, 0),
(5, 'KER02202015', 'KR004', 500000, 'transfer1.jpg', 2),
(6, 'KER02202026', 'KR005', 500000, NULL, 2),
(7, 'KER02202037', 'KR006', 1500000, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaranpesawat`
--

CREATE TABLE `pembayaranpesawat` (
  `idpembayaranpes` int(5) NOT NULL,
  `nopembayaran` varchar(20) NOT NULL,
  `nomortiket` varchar(20) NOT NULL,
  `totalharga` int(10) NOT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaranpesawat`
--

INSERT INTO `pembayaranpesawat` (`idpembayaranpes`, `nopembayaran`, `nomortiket`, `totalharga`, `bukti`, `status`) VALUES
(1, 'PES02202011', 'PS001', 840000, 'trans.jpg', 2),
(2, 'PES02202022', 'PS002', 840000, 'transfer.jpg', 2),
(3, 'PES02202013', 'PS003', 300000, 'transfer1.jpg', 2),
(4, 'PES02202014', 'PS004', 200000, 'transfer2.jpg', 1),
(5, 'PES02202015', 'PS005', 1000000, 'transfer11.jpg', 1),
(6, 'PES02202016', 'PS006', 840000, 'transfer3.jpg', 1),
(7, 'PES02202017', 'PS007', 840000, 'transfer21.jpg', 1),
(8, 'PES02202028', 'PS008', 500000, 'transfer111.jpg', 1),
(9, 'PES02202019', 'PS009', 840000, 'transfer4.jpg', 1),
(10, 'PES022020210', 'PS0010', 300000, 'transfer112.jpg', 1),
(11, 'PES022020111', 'PS0011', 840000, 'transfer5.jpg', 1),
(12, 'PES022020112', 'PS0012', 840000, 'transfer12.jpg', 1),
(13, 'PES022020113', 'PS0013', 900000, NULL, 0),
(14, 'PES022020314', 'PS0014', 2520000, NULL, 0),
(15, 'PES022020115', 'PS0015', 840000, 'transfer8.jpg', 1),
(16, 'PES022020116', 'PS0016', 900000, 'transfer9.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanankereta`
--

CREATE TABLE `pemesanankereta` (
  `idpemesananker` int(5) NOT NULL,
  `nomortiket` varchar(20) NOT NULL,
  `idrutekereta` int(5) NOT NULL,
  `namapemesan` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanankereta`
--

INSERT INTO `pemesanankereta` (`idpemesananker`, `nomortiket`, `idrutekereta`, `namapemesan`, `email`, `alamat`) VALUES
(1, 'KR001', 2, 'Dodi Wijaya', 'dodi@gmail.com', 'Serpong, Tangerang Selatan, Banten'),
(2, 'KR002', 1, 'Wijaya', 'wijaya@gmail.com', 'Jakarta Barat'),
(3, 'KR003', 1, 'Woke', 'woke@gmail.com', 'Pamulang'),
(4, 'KR004', 1, 'Kertosono', 'kertosono@gmail.com', 'Jakarta Pusat'),
(5, 'KR005', 1, 'Wijanto', 'wijanto@gmail.com', 'Serpong'),
(6, 'KR006', 1, 'Uno', 'uno@gmail.com', 'uno@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pemesananpesawat`
--

CREATE TABLE `pemesananpesawat` (
  `idpemesananpes` int(5) NOT NULL,
  `nomortiket` varchar(20) NOT NULL,
  `idrutepesawat` int(5) NOT NULL,
  `namapemesan` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesananpesawat`
--

INSERT INTO `pemesananpesawat` (`idpemesananpes`, `nomortiket`, `idrutepesawat`, `namapemesan`, `email`, `alamat`) VALUES
(1, 'PS001', 1, 'Dodi Wijaya', 'dodi@gmail.com', 'Serpong, Tangerang Selatan, Banten'),
(2, 'PS002', 1, 'Yuyun', 'yuyun@gmail.com', 'Serpong, Tangerang Selatan, Banten'),
(3, 'PS003', 3, 'Dido', 'dido@gmail.com', 'BSD, Tangerang Selatan, Banten'),
(4, 'PS004', 5, 'Cici', 'cici@gmail.com', 'Serpong'),
(5, 'PS005', 7, 'Tutun', 'tutun@gmail.com', 'Serpong'),
(6, 'PS006', 1, 'Tito', 'tito@gmail.com', 'Rempoa'),
(7, 'PS007', 1, 'Rener', 'rener@gmail.com', 'Cipondoh'),
(8, 'PS008', 4, 'Antoni', 'antoni@gmail.com', 'Ciputat'),
(9, 'PS009', 1, 'nisa', 'nisa@aaa.com', 'jauhdeh'),
(10, 'PS0010', 3, 'Meizha', 'meizha@gmail.com', 'Serpong'),
(11, 'PS0011', 1, 'Wawan', 'wawan@gmail.com', 'Jl.Panji'),
(12, 'PS0012', 1, 'Nani', 'nani@gmail.com', 'Serpong'),
(13, 'PS0013', 2, 'Anton', 'anton@gmail.com', 'Cipondoh'),
(14, 'PS0014', 1, 'Yoyo', 'yoyo@gmail.com', 'Cipondoh'),
(15, 'PS0015', 1, 'Opaq', 'opaq@gmail.com', 'Serpong'),
(16, 'PS0016', 2, 'Maman', 'maman@gmail.com', 'Cipocok');

-- --------------------------------------------------------

--
-- Table structure for table `penumpangkereta`
--

CREATE TABLE `penumpangkereta` (
  `idpenumpangker` int(5) NOT NULL,
  `nomortiket` varchar(20) NOT NULL,
  `noidentitas` varchar(20) NOT NULL,
  `namapenumpang` varchar(100) NOT NULL,
  `gerbong` int(2) NOT NULL,
  `kursi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpangkereta`
--

INSERT INTO `penumpangkereta` (`idpenumpangker`, `nomortiket`, `noidentitas`, `namapenumpang`, `gerbong`, `kursi`) VALUES
(1, 'KR001', '9875875', 'Dodi Wijaya', 1, '1A'),
(2, 'KR001', '9875876', 'Wijayanto', 3, '2B'),
(3, 'KR001', '9875877', 'Ciyuy', 2, '2C'),
(4, 'KR002', '8794923', 'Wijaya', 1, '2D'),
(5, 'KR003', '76386884', 'Woke', 3, '2A'),
(6, 'KR004', '54654654', 'Kertosono', 2, '1A'),
(7, 'KR005', '87497494', 'Wijanto', 3, '1A'),
(8, 'KR005', '87497495', 'Onta', 2, '2B'),
(9, 'KR006', '86489732', 'Uno', 2, '2F'),
(10, 'KR006', '98734987', 'Ino', 2, '4A'),
(11, 'KR006', '98743732', 'Ano', 3, '8A');

-- --------------------------------------------------------

--
-- Table structure for table `penumpangpesawat`
--

CREATE TABLE `penumpangpesawat` (
  `idpenumpangpes` int(5) NOT NULL,
  `nomortiket` varchar(20) NOT NULL,
  `noidentitas` varchar(20) NOT NULL,
  `namapenumpang` varchar(100) NOT NULL,
  `kursi` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpangpesawat`
--

INSERT INTO `penumpangpesawat` (`idpenumpangpes`, `nomortiket`, `noidentitas`, `namapenumpang`, `kursi`) VALUES
(1, 'PS001', '9847585', 'Dodi Wijaya', '1A'),
(2, 'PS002', '7646436', 'Lina', '2A'),
(3, 'PS002', '7646437', 'Lala', '3A'),
(4, 'PS003', '7634764', 'Dodi', '3D'),
(5, 'PS004', '8763763', 'Cici', '3D'),
(6, 'PS005', '8748742', 'Tutun', '16F'),
(7, 'PS006', '7647653', 'Tito', '11A'),
(8, 'PS007', '8762842', 'Rener', '7A'),
(9, 'PS008', '9749379', 'Antoni', '8A'),
(10, 'PS008', '9749380', 'Maroni', '10A'),
(11, 'PS009', '233345678', 'nisaw', '2B'),
(12, 'PS0010', '9732578', 'Meizha', '20F'),
(13, 'PS0010', '9732579', 'Aswangga', '20E'),
(14, 'PS0011', '8789378', 'Wawan', '8A'),
(15, 'PS0012', '98794279', 'Nani', '37F'),
(16, 'PS0013', '76386753', 'Anton', '37C'),
(17, 'PS0014', '76436653', 'Yoyo', '20F'),
(18, 'PS0014', '76436654', 'Yaya', '20A'),
(19, 'PS0014', '76436655', 'Yiyi', '20E'),
(20, 'PS0015', '97394323', 'Opaq', '8C'),
(21, 'PS0016', '87587387', 'Maman', '21A');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idpetugas` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL,
  `namapetugas` varchar(60) NOT NULL,
  `idlevel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `username`, `password`, `namapetugas`, `idlevel`) VALUES
(6, 'admin', '$2y$10$EhoguORQ2F2VjlJU.Ux4LeJTteX4zrvsBhVe2vAypycexa93YcnvG', 'Admin', 1),
(10, 'maman', '$2y$10$i.V8jUhYEMQxLnWkpO3yguESMG1qRaG6bQ/YcnySRfI1/HECUUYPS', 'Maman Ahay', 1),
(11, 'kikit', '$2y$10$/PJBYoaa3EsTzX3b7lVSb.bTC0UX/pwYvSwIB0IGBU6bSpDsdaLOi', 'Kikit', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rutekereta`
--

CREATE TABLE `rutekereta` (
  `idrutekereta` int(5) NOT NULL,
  `ruteawal` varchar(100) NOT NULL,
  `ruteakhir` varchar(100) NOT NULL,
  `jamberangkat` varchar(10) NOT NULL,
  `jamtiba` varchar(10) NOT NULL,
  `kereta` varchar(30) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rutekereta`
--

INSERT INTO `rutekereta` (`idrutekereta`, `ruteawal`, `ruteakhir`, `jamberangkat`, `jamtiba`, `kereta`, `harga`) VALUES
(1, 'GMR-Gambir Station, Jakarta', 'KPN-Kepanjen Station, Malang', '08:30', '10:30', 'Gajayana', 500000),
(2, 'GMR-Gambir Station, Jakarta', 'BD-Bandung Station, Bandung', '10:00', '12:00', 'Argo Parahyangan', 200000),
(3, 'KPN-Kepanjen Station, Malang', 'BD-Bandung Station, Bandung', '10:00', '14:00', 'Malabar', 200000),
(4, 'KPN-Kepanjen Station, Malang', 'GMR-Gambir Station, Jakarta', '07:00', '09:00', 'Gajayana', 800000);

-- --------------------------------------------------------

--
-- Table structure for table `rutepesawat`
--

CREATE TABLE `rutepesawat` (
  `idrutepesawat` int(5) NOT NULL,
  `ruteawal` varchar(100) NOT NULL,
  `ruteakhir` varchar(100) NOT NULL,
  `jamberangkat` varchar(10) NOT NULL,
  `jamtiba` varchar(10) NOT NULL,
  `maskapai` varchar(30) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rutepesawat`
--

INSERT INTO `rutepesawat` (`idrutepesawat`, `ruteawal`, `ruteakhir`, `jamberangkat`, `jamtiba`, `maskapai`, `harga`) VALUES
(1, 'CGK-Soekarno Hatta Internasional Airport, Jakarta', 'DPS-Ngurah Rai Internasional Airport, Bali', '04:30', '07:20', 'Batik Air', 840000),
(2, 'CGK-Soekarno Hatta Internasional Airport, Jakarta', 'SUB-Juanda Internasional Airport, Surabaya', '08:30', '10:30', 'Garuda Indonesia', 900000),
(3, 'DPS-Ngurah Rai Internasional Airport, Bali', 'SUB-Juanda Internasional Airport, Surabaya', '07:00', '07:46', 'Citilink', 300000),
(4, 'DPS-Ngurah Rai Internasional Airport, Bali', 'CGK-Soekarno Hatta Internasional Airport, Jakarta', '01:02', '02:03', 'Lion Air', 500000),
(5, 'YKG-Adi Sucipto Internasional Airport, Yogyakarta', 'DPS-Ngurah Rai Internasional Airport, Bali', '15:00', '15:30', 'Citilink', 200000),
(6, 'DPS-Ngurah Rai Internasional Airport, Bali', 'YKG-Adi Sucipto Internasional Airport, Yogyakarta', '09:00', '09:30', 'Lion Air', 200000),
(7, 'CGK-Soekarno Hatta Internasional Airport, Jakarta', 'YKG-Adi Sucipto Internasional Airport, Yogyakarta', '09:00', '11:00', 'Garuda Indonesia', 1000000),
(8, 'YKG-Adi Sucipto Internasional Airport, Yogyakarta', 'CGK-Soekarno Hatta Internasional Airport, Jakarta', '12:00', '14:00', 'Garuda Indonesia', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL,
  `namauser` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `namauser`, `username`, `password`, `alamat`, `tanggallahir`, `jk`, `telp`) VALUES
(3, 'Dodi Wijaya', 'dodi', '$2y$10$lb7Gxwj9jwZimRfr7OBjM..5/aYIvRDaVfMXjeiey6yjMg231Gl6q', 'tangerang selatan', '1993-08-15', 'l', '082625372537'),
(4, 'Didik Kusuma', 'didik', '$2y$10$2AFbv8pYxKNu451X.b.JM.ijzaZymVG.KO9S8ZfrcIMw/3EpWJRoS', 'tangerang', '1992-08-14', 'l', '082625372532'),
(5, 'Wiwin Uno', 'wiwin', '$2y$10$Lm0W3UIWncY3mzJmK6gDl.33SOq.ZTApG7JQp4Zv5w37Aib4h3uGS', 'tangerang', '1992-08-31', 'p', '082625372598'),
(6, 'Arief Wicaskono', 'arief123', '$2y$10$zHEqYL/ESgOzZOl0hFbDdeQJ/7GABJngPqcqU52pPaButbEshHjMO', 'pamulang', '2019-09-20', 'l', '082625372932'),
(7, 'Mamang Didi', 'didi', '$2y$10$oMqrE7ftL3jqyGvYDIPcbuJEd5e3izyhCoV5eqeGXt.SxvB.t9Uqu', 'Jakarta Barat', '1976-09-18', 'l', '082625372539'),
(8, 'Dadang', 'dadang', '$2y$10$Bz.LWGGWzK5kkS.Rv9eVJ.hU4tB4CJJDCoiQO.pXG2GHcCf0eg/h6', 'tangerang selatan', '1987-11-14', 'l', '082735273522'),
(9, 'Jajay', 'jajay', '$2y$10$QzUd6xOVaFslziPkd2NYzuEB3GsJpcuy8wraSyMT.ksjqkMJDEvty', 'Papua', '1978-11-22', 'l', '0872736527'),
(11, 'Hermansyah', 'hermansyah', '$2y$10$mFb4Z1w6sZiQJaLZQmaTs.hSva8fEWWie3tJpVKfJnkJ8ZP89AIBi', 'tangerang selatan', '1987-05-10', 'l', '087644323234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diskonpesawat`
--
ALTER TABLE `diskonpesawat`
  ADD PRIMARY KEY (`iddiskon`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idlevel`);

--
-- Indexes for table `pembayarankereta`
--
ALTER TABLE `pembayarankereta`
  ADD PRIMARY KEY (`idpembayaranker`);

--
-- Indexes for table `pembayaranpesawat`
--
ALTER TABLE `pembayaranpesawat`
  ADD PRIMARY KEY (`idpembayaranpes`);

--
-- Indexes for table `pemesanankereta`
--
ALTER TABLE `pemesanankereta`
  ADD PRIMARY KEY (`idpemesananker`),
  ADD KEY `idrutekereta` (`idrutekereta`);

--
-- Indexes for table `pemesananpesawat`
--
ALTER TABLE `pemesananpesawat`
  ADD PRIMARY KEY (`idpemesananpes`),
  ADD KEY `idrutepesawat` (`idrutepesawat`);

--
-- Indexes for table `penumpangkereta`
--
ALTER TABLE `penumpangkereta`
  ADD PRIMARY KEY (`idpenumpangker`);

--
-- Indexes for table `penumpangpesawat`
--
ALTER TABLE `penumpangpesawat`
  ADD PRIMARY KEY (`idpenumpangpes`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpetugas`),
  ADD KEY `idlevel` (`idlevel`);

--
-- Indexes for table `rutekereta`
--
ALTER TABLE `rutekereta`
  ADD PRIMARY KEY (`idrutekereta`);

--
-- Indexes for table `rutepesawat`
--
ALTER TABLE `rutepesawat`
  ADD PRIMARY KEY (`idrutepesawat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diskonpesawat`
--
ALTER TABLE `diskonpesawat`
  MODIFY `iddiskon` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `idlevel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembayarankereta`
--
ALTER TABLE `pembayarankereta`
  MODIFY `idpembayaranker` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pembayaranpesawat`
--
ALTER TABLE `pembayaranpesawat`
  MODIFY `idpembayaranpes` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pemesanankereta`
--
ALTER TABLE `pemesanankereta`
  MODIFY `idpemesananker` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pemesananpesawat`
--
ALTER TABLE `pemesananpesawat`
  MODIFY `idpemesananpes` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `penumpangkereta`
--
ALTER TABLE `penumpangkereta`
  MODIFY `idpenumpangker` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `penumpangpesawat`
--
ALTER TABLE `penumpangpesawat`
  MODIFY `idpenumpangpes` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `idpetugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rutekereta`
--
ALTER TABLE `rutekereta`
  MODIFY `idrutekereta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rutepesawat`
--
ALTER TABLE `rutepesawat`
  MODIFY `idrutepesawat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanankereta`
--
ALTER TABLE `pemesanankereta`
  ADD CONSTRAINT `pemesanankereta_ibfk_1` FOREIGN KEY (`idrutekereta`) REFERENCES `rutekereta` (`idrutekereta`);

--
-- Constraints for table `pemesananpesawat`
--
ALTER TABLE `pemesananpesawat`
  ADD CONSTRAINT `pemesananpesawat_ibfk_1` FOREIGN KEY (`idrutepesawat`) REFERENCES `rutepesawat` (`idrutepesawat`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`idlevel`) REFERENCES `level` (`idlevel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
