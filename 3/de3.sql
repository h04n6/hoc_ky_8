-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 10:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `de3`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `bao_hanh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` enum('Còn hàng','Hết hàng') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Còn hàng',
  `gia` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ten`, `bao_hanh`, `trang_thai`, `gia`, `anh`) VALUES
(1, 'Iphone 7 Plus', '12 tháng', 'Còn hàng', '16000000', 'sp1.png'),
(2, 'IPHONE X', '12 tháng', 'Còn hàng', '23000000', 'sp2.png'),
(3, 'OPPO F7', '12 tháng', 'Còn hàng', '23000000', 'sp3.png'),
(4, 'SAMSUNG GALAXY J7 PRO', '12 tháng', 'Còn hàng', '23000000', 'sp4.png'),
(5, 'SONY XPERIA X', '12 tháng', 'Còn hàng', '23000000', 'sp5.png'),
(6, 'SAMSUNG GALAXY NOTE 8', '12 tháng', 'Còn hàng', '23000000', 'sp6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
