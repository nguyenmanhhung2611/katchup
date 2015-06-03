-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2015 at 06:51 AM
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
  `TenHinhHD` varchar(255) NOT NULL,
  `TrangThai` varchar(255) NOT NULL,
  PRIMARY KEY (`MaSP`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MoTa`, `GiaCu`, `GiaMoi`, `TenHinh`, `TenHinhHD`, `TrangThai`) VALUES
(1, 'Kanji N5,4', 'Thẻ học kanji N5,4 (300 chữ hán đơn - 1200 chữ hán ghép) giúp bạn học hán tự nhanh bằng hình ảnh được chăm chút, đặt vào ngữ cảnh và thể hiện sát nghĩa của từ kèm theo cách nhớ ...', 120000, 108000, 'item-products-1.jpg', 'item-products-hd-1.jpg', 'sale'),
(2, 'Kanji N3', 'Thẻ học kanji N3 (360 chữ hán đơn - 1500 chữ hán ghép) giúp bạn học hán tự nhanh bằng hình ảnh được chăm chút, đặt vào ngữ cảnh và thể hiện sát nghĩa của từ kèm theo cách nhớ ...', 150000, 144000, 'item-products-2.jpg', 'item-products-hd-2.jpg', 'top'),
(3, 'Kanji N2', 'Thẻ học kanji N2 gồm 4 cuốn (360 chữ hán đơn - 1500 chữ hán ghép) giúp bạn học hán tự nhanh bằng hình ảnh được chăm chút, đặt vào ngữ cảnh và thể hiện sát nghĩa của từ kèm theo cách nhớ ...', 150000, 144000, 'item-products-3.jpg', 'item-products-hd-3.jpg', 'new'),
(4, 'Bảng chữ cái', 'Thẻ học Hiragana và Katakana gồm 2 cuốn (kèm theo 100 từ vựng bằng hình ảnh) có thứ tự cách viết và sử dụng những hình ảnh kèm theo từ vựng phổ biến để bạn bắt đầu học tiếng Nhật dễ dàng và thú vị hơn ...', 82000, 72000, 'item-products-4.jpg', 'item-products-hd-4.jpg', ''),
(5, 'Ngữ pháp sơ cấp N5,4', 'Thẻ học Ngữ pháp sơ cấp N5,4 giúp bạn học ngữ pháp nhanh bằng những mẫu câu ví dụ, ý nghĩa và những lưu ý của mẫu câu đó giúp bạn nắm chắc ngữ pháp ...', 120000, 108000, 'item-products-5.jpg', 'item-products-hd-5.jpg', ''),
(6, 'Ngữ pháp trung cấp N3,2', 'Thẻ học Ngữ pháp trung cấp N3 - N2 giúp bạn học ngữ pháp nhanh bằng những mẫu câu ví dụ, ý nghĩa và những lưu ý của mẫu câu đó giúp bạn nắm chắc ngữ pháp ...', 42000, 36000, 'item-products-6.jpg', 'item-products-hd-6.jpg', ''),
(7, 'Từ vựng Minna', 'Thẻ học Từ vựng Minna (gồm 3000 từ vựng và mẫu câu) giúp bạn học hán tự nhanh từ vựng mỗi ngày bằng phương pháp học bằng cách hỏi - trả lời rất là dễ nhớ và khó quên ...', 120000, 108000, 'item-products-7.jpg', 'item-products-hd-7.jpg', 'sale'),
(8, 'Mẫu câu giao tiếp', 'Thẻ học Mẫu câu giao tiếp giúp bạn học tiếng Nhật với nhưng mẫu câu giao tiếp thường sử dụng và sẽ dễ dàng hơn trong việc giao tiếp tiếng Nhật ...', 0, 0, 'item-products-8.jpg', 'item-products-hd-8.jpg', 'new');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
