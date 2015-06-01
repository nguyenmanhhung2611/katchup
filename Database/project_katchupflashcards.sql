-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2015 at 03:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_katchupflashcards`
--

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSP` int(11) NOT NULL AUTO_INCREMENT,
  `TenSP` varchar(255) NOT NULL,
  `MoTa` text NOT NULL,
  `GiaCu` int(11) NOT NULL,
  `GiaMoi` int(11) NOT NULL,
  `TenHinh` varchar(255) NOT NULL,
  PRIMARY KEY (`MaSP`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MoTa`, `GiaCu`, `GiaMoi`, `TenHinh`) VALUES
(1, 'Kanji N5,4', 'Thẻ học kanji N5,4 (300 chữ hán đơn - 1200 chữ hán ghép) giúp bạn học hán tự nhanh bằng hình ảnh được chăm chút, đặt vào ngữ cảnh và thể hiện sát nghĩa của từ kèm theo cách nhớ ...', 120000, 108000, 'item-products-1.jpg'),
(2, 'Kanji N3', 'Thẻ học kanji N3 (360 chữ hán đơn - 1500 chữ hán ghép) giúp bạn học hán tự nhanh bằng hình ảnh được chăm chút, đặt vào ngữ cảnh và thể hiện sát nghĩa của từ kèm theo cách nhớ ...', 150000, 144000, 'item-products-2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
