-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 10:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `idhotel` int(11) NOT NULL COMMENT 'id unik hotel',
  `nm_htl` varchar(100) DEFAULT NULL COMMENT '''nama hotel''',
  `pas` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `photo_dir` varchar(100) DEFAULT NULL COMMENT '''lokasi foto home hotel''',
  `counter` int(5) DEFAULT '0' COMMENT 'Akreditas, count seberapa banyak yang booking'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`idhotel`, `nm_htl`, `pas`, `city`, `desc`, `photo_dir`, `counter`) VALUES
(22, 'Hotel One- PC', '', 'Rahim Yar Khan', 'Exelent', 'img/collectionRoom/col-7.jpg', 0),
(24, 'Pearl Continental', 'admin12345', 'Lahore', '1 star', 'img/collectionRoom/col-7.jpg', 0),
(25, 'Savari', '', 'Karachi', 'eqe', 'img/collectionRoom/col-10.jpg', 0),
(27, 'PC', '', 'Muree', '3 star', 'img/collectionRoom/col-10.jpg', 0),
(28, 'Khan Hotel', '', 'Quetta', 'adad', 'img/collectionRoom/col-10.jpg', 0),
(29, 'Khan Hotel', '', 'Peshawar', 'dfgh', 'img/collectionRoom/col-10.jpg', 0),
(30, 'Sareena', '', 'Rawalpindi', 'gvghv', 'img/collectionRoom/col-10.jpg', 0),
(31, 'Hotel One', 'adminhotel', 'Lahore', '3 star', 'img/collectionRoom/col-10.jpg', 0),
(32, 'Behria', '', 'Lahore', '3 star', 'img/collectionRoom/col-10.jpg', 0),
(33, 'PC', '', 'lahore', '3 star', 'img/collectionRoom/col-1.jpg', 0),
(34, 'sareena', 'admin', 'Lahore', '5 star', 'img/collectionRoom/col-2.jpg', 0),
(35, 'hashoo', '', 'Lahore', '5 star', 'img/collectionRoom/col-3.jpg', 0),
(36, 'desert palm', '', 'Lahore', '3 star', 'img/collectionRoom/col-4.jpg', 0),
(38, 'PC', '', 'Abbottabad', '5 star', 'img/collectionRoom/col-9.jpg', 0),
(80, 'alibabas', 'admin12345', 'Lahore', 'fhaskfasfn', 'img/collectionRoom/lcd.jpg', 0),
(82, 'hhhhkl', 'abcadmin', 'Lahore', 'qt yty isi fjisj flsjl', 'img/collectionRoom/harry3.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_desc_photo`
--

CREATE TABLE `hotel_desc_photo` (
  `id_ket_foto` int(11) NOT NULL,
  `idhotel` int(11) DEFAULT NULL,
  `photo_dir` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_order`
--

CREATE TABLE `hotel_order` (
  `idhotel_order` int(11) NOT NULL,
  `idhotel` int(11) DEFAULT NULL,
  `startdate` varchar(15) DEFAULT NULL,
  `enddate` varchar(15) DEFAULT NULL,
  `isaccept` tinyint(4) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `guest` varchar(5) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel_order`
--

INSERT INTO `hotel_order` (`idhotel_order`, `idhotel`, `startdate`, `enddate`, `isaccept`, `no_telp`, `email`, `guest`, `order_date`) VALUES
(24, 22, '2-Jun-2018', '1-Jul-2018', 1, '081586269554', 'reynaldirizki43@gmail.com', '5', '2018-06-27 21:25:04'),
(31, 24, '1-Mar-2019', '2-Mar-2019', 1, '11225', 'abc@google.com', '5', '2019-03-22 18:56:34'),
(32, 24, '1-Mar-2019', '6-Mar-2019', 1, '11225', 'abc@google.com', '1', '2019-03-23 11:07:12'),
(33, 22, '1-Mar-2019', '2-Mar-2019', 1, '11225', 'abc@google.com', '4', '2019-03-23 11:08:08'),
(34, 24, '1-Mar-2019', '2-Mar-2019', 0, '11225', 'abc@google.com', '3', '2019-03-23 12:05:54'),
(35, 22, '6-Mar-2019', '6-Mar-2019', 0, '21345678', 'qeqwer', '3', '2019-03-23 12:14:21'),
(36, 22, '6-Mar-2019', '6-Mar-2019', 0, '21345678', 'qeqwer', '3', '2019-03-23 12:14:25'),
(37, 22, '6-Mar-2019', '6-Mar-2019', 0, '21345678', 'qeqwer', '3', '2019-03-23 12:15:24'),
(38, 22, '6-Mar-2019', '6-Mar-2019', 0, '21345678', 'qeqwer', '3', '2019-03-23 12:15:26'),
(39, 22, '6-Mar-2019', '6-Mar-2019', 0, '21345678', 'qeqwer', '3', '2019-03-23 12:15:36'),
(40, 22, '6-Mar-2019', '6-Mar-2019', 1, '21345678', 'qeqwer', '3', '2019-03-23 12:15:37'),
(41, 22, '6-Mar-2019', '6-Mar-2019', 1, '21345678', 'qeqwer', '3', '2019-03-23 12:15:39'),
(42, 22, '6-Mar-2019', '6-Mar-2019', 0, '21345678', 'qeqwer', '3', '2019-03-23 12:15:41'),
(43, 32, '3-Apr-2019', '4-Apr-2019', 1, '123456789', 'abc@gmail.com', '2', '2019-04-02 11:53:27'),
(45, 32, '2-May-2019', '18-May-2019', 0, 'xsbax', 'bxjabx', '2', '2019-05-24 19:58:57'),
(46, 32, '2-May-2019', '18-May-2019', 1, 'xsbax', 'bxjabx', '2', '2019-05-24 19:59:01'),
(51, 80, 'casc', 'dasd', 1, 'cav27828', 'jaaacac', '1', '2019-05-25 07:24:04'),
(52, 80, '2343', '34234', 0, '123456789', 'ali@baba.com', '2', '2019-05-25 16:51:09'),
(53, 80, '', '', 0, '', '', '1', '2019-05-25 16:54:37'),
(54, 30, '29-jul-2019', '01-aug-2019', 0, '03043371194', 'wasif123@gmail.com', '4', '2019-07-30 06:23:01'),
(55, 24, '29-jul-2019', '01-aug-2019', 0, '03043371194', 'wasif123@gmail.com', '1', '2019-07-30 06:26:29'),
(56, 24, '29-jul-2019', '01-aug-2019', 0, '03043371194', 'wasif123@gmail.com', '2', '2019-07-30 06:28:34'),
(57, 24, '29-jul-2019', '01-aug-2019', 0, '03043371194', 'wasif123@gmail.com', '2', '2019-07-30 06:28:55'),
(58, 24, '29-jul-2019', '01-aug-2019', 0, '03043371194', 'wasif123@gmail.com', '3', '2019-07-30 06:29:08'),
(59, 34, '29-jul-2019', '01-aug-2019', 0, '03043371194', 'wasif123@gmail.com', '3', '2019-07-30 06:30:27'),
(60, 33, '29-jul-2019', '01-aug-2019', 0, '03043371194', 'wasif123@gmail.com', '1', '2019-07-30 06:32:55'),
(61, 24, 'w kjqkld', ' wkqje', 0, 'klqwd qlkwd', 'email@jhajd.com', '1', '2019-07-30 06:42:34'),
(62, 25, 'w kjqkld', ' wkqje', 0, 'klqwd qlkwd', 'email@jhajd.com', '1', '2019-07-30 06:43:18');

-- --------------------------------------------------------

--
-- Table structure for table `uas`
--

CREATE TABLE `uas` (
  `idUAS` int(11) NOT NULL,
  `tgl` varchar(45) DEFAULT NULL,
  `sekolah` varchar(45) DEFAULT NULL,
  `no_kom` int(11) DEFAULT NULL,
  `kerusakan` varchar(45) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  `pelapor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uas`
--

INSERT INTO `uas` (`idUAS`, `tgl`, `sekolah`, `no_kom`, `kerusakan`, `other`, `pelapor`) VALUES
(1, '27 Juni 2019', 'smk 18', 18, 'cpu mati', 'bodi rusak', 'rizki'),
(2, 'y7y3', 'ijhi', 8, 'kji', '8u', ''),
(3, '28 Juni 2019', 'smk 19', 19, 'Kerusakan Parah', 'Other', ''),
(4, '90 juni', 'sekolah 90', 90, 'rusak', 'iotger', 'pelapor'),
(5, '18 juni', 'sekolah 80', 80, 'rusak ajah', 'other ', 'pelapor');

-- --------------------------------------------------------

--
-- Table structure for table `web_dua`
--

CREATE TABLE `web_dua` (
  `idweb_dua` int(11) NOT NULL,
  `nim` int(3) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `web_dua`
--

INSERT INTO `web_dua` (`idweb_dua`, `nim`, `nama`) VALUES
(2, 102, 'kiki'),
(3, 103, 'glen'),
(4, 104, 'lili'),
(5, 101, 'aldy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`idhotel`),
  ADD UNIQUE KEY `idhotel_UNIQUE` (`idhotel`);

--
-- Indexes for table `hotel_desc_photo`
--
ALTER TABLE `hotel_desc_photo`
  ADD PRIMARY KEY (`id_ket_foto`),
  ADD KEY `idhotel_idx` (`idhotel`);

--
-- Indexes for table `hotel_order`
--
ALTER TABLE `hotel_order`
  ADD PRIMARY KEY (`idhotel_order`),
  ADD UNIQUE KEY `idhotel_order_UNIQUE` (`idhotel_order`),
  ADD KEY `idhotel_idx` (`idhotel`);

--
-- Indexes for table `uas`
--
ALTER TABLE `uas`
  ADD PRIMARY KEY (`idUAS`);

--
-- Indexes for table `web_dua`
--
ALTER TABLE `web_dua`
  ADD PRIMARY KEY (`idweb_dua`),
  ADD UNIQUE KEY `idweb_dua_UNIQUE` (`idweb_dua`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `idhotel` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id unik hotel', AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `hotel_desc_photo`
--
ALTER TABLE `hotel_desc_photo`
  MODIFY `id_ket_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_order`
--
ALTER TABLE `hotel_order`
  MODIFY `idhotel_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `uas`
--
ALTER TABLE `uas`
  MODIFY `idUAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `web_dua`
--
ALTER TABLE `web_dua`
  MODIFY `idweb_dua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotel_order`
--
ALTER TABLE `hotel_order`
  ADD CONSTRAINT `idhotel` FOREIGN KEY (`idhotel`) REFERENCES `hotel` (`idhotel`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
