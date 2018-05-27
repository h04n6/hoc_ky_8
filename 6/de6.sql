-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 10:53 AM
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
-- Database: `de6`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ten` text COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` enum('Mới','Cũ') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Mới',
  `anh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(9) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ten`, `trang_thai`, `anh`, `gia`) VALUES
(1, 'LAPTOP HP Folio 9740M mới 99%', 'Mới', 'sp1.png', '6000000'),
(2, 'LAPTOP HP Folio 9840M mới 99%', 'Mới', 'sp2.png', '6000000'),
(3, 'MACBOOK RETINA 256GB mới', 'Mới', 'sp3.png', '6000000'),
(4, 'LAPTOP HP ENVY 13 mới 99%', 'Mới', 'sp4.png', '6000000'),
(5, 'LAPTOP LENOVO TQ mới', 'Mới', 'sp5.png', '6000000'),
(6, 'LAPTOP MIBOOK 128GB mới DGW', 'Mới', 'sp6.png', '6000000');

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
