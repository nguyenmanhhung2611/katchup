-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2015 at 11:33 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
-- Table structure for table `danh_muc`
--

CREATE TABLE IF NOT EXISTS `danh_muc` (
`ma_danh_muc_tai_lieu` int(11) NOT NULL,
  `ten_danh_muc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_danh_muc_tieng_nhat` varchar(100) CHARACTER SET eucjpms DEFAULT NULL,
  `duong_dan_danh_muc` varchar(100) NOT NULL,
  `mo_ta_danh_muc` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu_danh_muc` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`ma_danh_muc_tai_lieu`, `ten_danh_muc`, `ten_danh_muc_tieng_nhat`, `duong_dan_danh_muc`, `mo_ta_danh_muc`, `ghi_chu_danh_muc`) VALUES
(1, 'MINNA NO NIHONGO', 'みんなの日本語', 'home/documents/', 'sach minna', 'adfasdfsadf'),
(2, 'SHIN NIHONGO KISO', 'みんな', 'home/documents/', 'cuon sach kiso', 'asdfasdf'),
(3, 'NGHE ONLINE', 'みんなの日本語', 'home/documents/', 'nghe lan 2', 'fasdfdsafdsa'),
(4, 'NGỮ PHÁP', 'みんなの日本語', 'home/documents/', 'huong dan hoc ngu phap', 'adsfdsafasdf'),
(5, 'ĐỌC HIỂU', 'みんなの日本語', 'home/documents/', 'how to doc hieu japan ;v', 'dasfasdfsdafasdfsadf'),
(6, 'KANJI', 'みんなの日本語', 'home/documents/', 'wtf', 'adsfasdfasdf'),
(7, 'TỪ VỰNG', 'みんなの日本語', 'home/documents/', 'tv123', 'adsfasdfasdf'),
(8, 'TỰ HỌC', 'みんなの日本語', 'home/documents/', 'lazycat', 'adsfasdfasdf'),
(9, 'JLPT', 'みんなの日本語', 'home/documents/', 'clgt', 'adsfasdfasdf'),
(10, 'GIÁO TRÌNH ĐIỆN TỬ', 'みんなの日本語', 'home/documents/', 'tu dien trinh giao', 'adsfasdfasdf'),
(11, 'GIÁO TRÌNH VIDEO', 'みんなの日本語', 'home/documents/', 'bideo', 'adsfasdfasdf'),
(12, 'GIÁO TRÌNH NGHE', 'みんなの日本語', 'home/documents/', 'giao trinh nghe', 'adsfasdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `tai_lieu1`
--

CREATE TABLE IF NOT EXISTS `tai_lieu1` (
`ma_tai_lieu` int(11) NOT NULL,
  `ten_tai_lieu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_tai_lieu_tieng_nhat` varchar(100) CHARACTER SET eucjpms DEFAULT NULL,
  `hinh_anh_tai_lieu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duong_dan_tai_lieu` varchar(100) NOT NULL,
  `mo_ta_tai_lieu` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_danh_muc_tai_lieu` int(11) NOT NULL,
  `chi_tiet_bai_viet` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu_tai_lieu` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luot_view` int(11) DEFAULT NULL,
  `ngay_dang` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tai_lieu1`
--

INSERT INTO `tai_lieu1` (`ma_tai_lieu`, `ten_tai_lieu`, `ten_tai_lieu_tieng_nhat`, `hinh_anh_tai_lieu`, `duong_dan_tai_lieu`, `mo_ta_tai_lieu`, `ma_danh_muc_tai_lieu`, `chi_tiet_bai_viet`, `ghi_chu_tai_lieu`, `luot_view`, `ngay_dang`) VALUES
(1, 'cuon sach so 1', 'みんなの日本語', 'resources/images/new-articles/new-articles-1.jpg', 'home/detailDocument/', 'aaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 100, '2015-05-08 00:00:00'),
(2, 'quyen 2', 'みんなの日本語', 'resources/images/new-articles/new-articles-2.jpg', 'home/detailDocument/', 'bbbbbbbbbbb', 1, 'bbbbbbbbbb', 'bbbbbbbbbbbbb', 12, '1111-11-11 00:00:00'),
(3, 'oh my god', 'みんなの日本語', 'resources/images/new-articles/new-articles-3.jpg', 'home/detailDocument/', 'ccccccccccccc', 1, 'ccccccccccccccc', 'cccccccccccccc', 12, '2015-05-27 00:00:00'),
(4, 'thank god', 'みんなの日本語', 'resources/images/new-articles/new-articles-4.jpg', 'home/detailDocument/', 'ddddddddddddddddddddddd', 1, 'ddddddddddddddddddddddddd', 'ddddddddddddddddddd', 2, '2015-05-27 00:00:00'),
(5, 'you are here', 'みんなの日本語', 'resources/images/new-articles/new-articles-5.jpg', 'home/detailDocument/', 'eeeeeeeeeeeeeee', 1, 'eeeeeeeeeeeeeee', 'eeeeeeeeeeeeeee', 1, '2015-05-29 00:00:00'),
(6, 'beep', 'みんなの日本語', 'resources/images/new-articles/new-articles-6.jpg', 'home/detailDocument/', 'ffffffffffffffff', 1, 'ffffffffffffffff', 'ffffffffffffffff', 23, '2015-05-27 00:00:00'),
(7, 'good job', 'みんなの日本語', 'resources/images/new-articles/new-articles-7.jpg', 'home/detailDocument/', 'ggggggggggggggggg', 2, 'ggggggggggggggggg', 'ggggggggggggggggg', 223, '2015-05-27 00:00:00'),
(8, 'lam sao', 'みんなの日本語', 'resources/images/new-articles/new-articles-7.jpg', 'home/detailDocument/', 'hhhhhhhhhhhhhhhhhhhh', 2, 'hhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhh', 23, '2015-05-27 00:00:00'),
(9, 'dinh menh', 'みんなの日本語', 'resources/images/new-articles/new-articles-7.jpg', 'home/detailDocument/', 'ttttttttttttttttttttttt', 2, 'ttttttttttttttttttttttt', 'ttttttttttttttttttttttt', 12, '2015-05-27 00:00:00'),
(10, 'so phan an bai', 'みんなの日本語', 'resources/images/new-articles/new-articles-7.jpg', 'home/detailDocument/', 'mmmmmmmmmmmmmmmmmmm', 2, 'ttttttttttttttttttttttt', 'mmmmmmmmmmmmmmmmmmm', 14, '2015-05-27 00:00:00'),
(11, 'sach day tieng nhat', 'みんなの日本語', 'resources/images/new-articles/new-articles-7.jpg', 'home/detailDocument/', 'nnnnnnnnnnnnnnnnnnnn', 2, 'nnnnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnn', 114, '2015-05-27 00:00:00'),
(12, 'thanh cong', 'みんなの日本語', 'resources/images/new-articles/new-articles-7.jpg', 'home/detailDocument/', 'rrrrrrrr', 2, 'rrrrrrrr', 'rrrrrrrr', 0, '2015-05-27 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
 ADD PRIMARY KEY (`ma_danh_muc_tai_lieu`);

--
-- Indexes for table `tai_lieu1`
--
ALTER TABLE `tai_lieu1`
 ADD PRIMARY KEY (`ma_tai_lieu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
MODIFY `ma_danh_muc_tai_lieu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tai_lieu1`
--
ALTER TABLE `tai_lieu1`
MODIFY `ma_tai_lieu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
