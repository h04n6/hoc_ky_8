-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 04:58 AM
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
-- Database: `de8`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `ten` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `khuyen_mai` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `gia` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_anh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ten`, `mo_ta`, `khuyen_mai`, `gia`, `hinh_anh`) VALUES
(1, 'Đầm công sở', 'Có 3 màu / 3 mẫu', 'Tặng thêm vòng cổ gỗ', '250.000đ', '8.jpg'),
(2, 'Đầm công sở', 'Có 3 màu / 3 mẫu', 'Tặng thêm vòng cổ gỗ', '250.000đ', '8.jpg'),
(3, 'Đầm công sở', 'Có 3 màu / 3 mẫu', 'Tặng thêm vòng cổ gỗ', '250.000đ', '8.jpg'),
(4, 'Đầm công sở', 'Có 3 màu / 3 mẫu', 'Tặng thêm vòng cổ gỗ', '250.000đ', '8.jpg'),
(5, 'Đầm công sở', 'Có 3 màu / 3 mẫu', 'Tặng thêm vòng cổ gỗ', '250.000đ', '8.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
