-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2015 at 03:51 AM
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
  `ten_danh_muc` varchar(50) NOT NULL,
  `ten_danh_muc_tieng_nhat` varchar(100) DEFAULT NULL,
  `mo_ta_danh_muc` varchar(200) DEFAULT NULL,
  `ghi_chu_danh_muc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`ma_danh_muc_tai_lieu`, `ten_danh_muc`, `ten_danh_muc_tieng_nhat`, `mo_ta_danh_muc`, `ghi_chu_danh_muc`) VALUES
(1, 'MINNA NO NIHONGO', 'みんなの日本語', 'sach minna', 'adfasdfsadf'),
(2, 'SHIN NIHONGO KISO', 'みんな', 'cuon sach kiso', 'asdfasdf'),
(3, 'NGHE ONLINE', 'みんなの日本語', 'nghe lan 2', 'fasdfdsafdsa'),
(4, 'NGỮ PHÁP', 'みんなの日本語', 'huong dan hoc ngu phap', 'adsfdsafasdf'),
(5, 'ĐỌC HIỂU', 'みんなの日本語', 'how to doc hieu japan ;v', 'dasfasdfsdafasdfsadf'),
(6, 'KANJI', 'みんなの日本語', 'wtf', 'adsfasdfasdf'),
(7, 'TỪ VỰNG', 'みんなの日本語', 'tv123', 'adsfasdfasdf'),
(8, 'TỰ HỌC', 'みんなの日本語', 'lazycat', 'adsfasdfasdf'),
(9, 'JLPT', 'みんなの日本語', 'clgt', 'adsfasdfasdf'),
(10, 'GIÁO TRÌNH ĐIỆN TỬ', 'みんなの日本語', 'tu dien trinh giao', 'adsfasdfasdf'),
(11, 'GIÁO TRÌNH VIDEO', 'みんなの日本語', 'bideo', 'adsfasdfasdf'),
(12, 'GIÁO TRÌNH NGHE', 'みんなの日本語', 'giao trinh nghe', 'adsfasdfasdf'),
(13, 'tét thêm danh mục', '日朝政府間合', 'đây là record thử nghiệm', 'ko có ghi chú nào'),
(14, 'tét url danh mục', '北朝鮮', 'kkk', 'hhh');

-- --------------------------------------------------------

--
-- Table structure for table `tai_lieu1`
--

CREATE TABLE IF NOT EXISTS `tai_lieu1` (
`ma_tai_lieu` int(11) NOT NULL,
  `ten_tai_lieu` varchar(50) NOT NULL,
  `ten_tai_lieu_tieng_nhat` varchar(100) DEFAULT NULL,
  `hinh_anh_tai_lieu` varchar(100) DEFAULT NULL,
  `mo_ta_tai_lieu` varchar(1000) DEFAULT NULL,
  `ma_danh_muc_tai_lieu` int(11) NOT NULL,
  `chi_tiet_bai_viet` varchar(2000) DEFAULT NULL,
  `ghi_chu_tai_lieu` varchar(200) DEFAULT NULL,
  `luot_view` int(11) DEFAULT NULL,
  `ngay_dang` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tai_lieu1`
--

INSERT INTO `tai_lieu1` (`ma_tai_lieu`, `ten_tai_lieu`, `ten_tai_lieu_tieng_nhat`, `hinh_anh_tai_lieu`, `mo_ta_tai_lieu`, `ma_danh_muc_tai_lieu`, `chi_tiet_bai_viet`, `ghi_chu_tai_lieu`, `luot_view`, `ngay_dang`) VALUES
(1, 'cuon sach so 1', 'みんなの日本語', 'new-articles-1.jpg', 'aaaaaaaaaaaaaaaaaaaaa', 1, 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 100, '2015-05-08 00:00:00'),
(2, 'quyen 2', 'みんなの日本語', 'new-articles-2.jpg', 'bbbbbbbbbbb', 1, 'bbbbbbbbbb', 'bbbbbbbbbbbbb', 12, '1111-11-11 00:00:00'),
(3, 'oh my god', 'みんなの日本語', 'new-articles-3.jpg', 'ccccccccccccc', 1, 'ccccccccccccccc', 'cccccccccccccc', 12, '2015-05-27 00:00:00'),
(4, 'thank god', 'みんなの日本語', 'new-articles-4.jpg', 'ddddddddddddddddddddddd', 1, 'ddddddddddddddddddddddddd', 'ddddddddddddddddddd', 2, '2015-05-27 00:00:00'),
(5, 'you are here', 'みんなの日本語', 'new-articles-5.jpg', 'eeeeeeeeeeeeeee', 1, 'eeeeeeeeeeeeeee', 'eeeeeeeeeeeeeee', 1, '2015-05-29 00:00:00'),
(6, 'beep', 'みんなの日本語', 'new-articles-6.jpg', 'ffffffffffffffff', 1, 'ffffffffffffffff', 'ffffffffffffffff', 23, '2015-05-27 00:00:00'),
(7, 'good job', 'みんなの日本語', 'new-articles-7.jpg', 'ggggggggggggggggg', 2, 'ggggggggggggggggg', 'ggggggggggggggggg', 223, '2015-05-27 00:00:00'),
(8, 'lam sao', 'みんなの日本語', 'new-articles-7.jpg', 'hhhhhhhhhhhhhhhhhhhh', 2, 'hhhhhhhhhhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhhh', 23, '2015-05-27 00:00:00'),
(9, 'dinh menh', 'みんなの日本語', 'new-articles-7.jpg', 'ttttttttttttttttttttttt', 2, 'ttttttttttttttttttttttt', 'ttttttttttttttttttttttt', 12, '2015-05-27 00:00:00'),
(10, 'so phan an bai', 'みんなの日本語', 'new-articles-7.jpg', 'mmmmmmmmmmmmmmmmmmm', 2, 'ttttttttttttttttttttttt', 'mmmmmmmmmmmmmmmmmmm', 14, '2015-05-27 00:00:00'),
(11, 'sach day tieng nhat', 'みんなの日本語', 'new-articles-7.jpg', 'nnnnnnnnnnnnnnnnnnnn', 2, 'nnnnnnnnnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnnnn', 114, '2015-05-27 00:00:00'),
(12, 'thanh cong', 'みんなの日本語', 'new-articles-7.jpg', 'rrrrrrrr', 2, 'rrrrrrrr', 'rrrrrrrr', 0, '2015-05-27 00:00:00'),
(13, 'tai lieu hom nay', 'nihongo kyo', NULL, 'khong co gi quy hon doc lap tu do', 3, 'nothing impossible', '', NULL, '2015-05-25 00:00:00'),
(14, 'asd', 'asdasd', NULL, 'haha', 3, 'fuck', 'kekeke', NULL, '2015-05-25 00:00:00'),
(15, 'ah', '', '', 'tai <span style="background-color: rgb(51, 255, 51);">sao</span> <font color="#990066">phai</font> lai la <b>anh</b> mai <font face="courier new">dung</font> sau <font size="5">mot</font> tinh yeu', 0, 'tai <span style="background-color: rgb(51, 255, 51);">sao</span> <font color="#990066">phai</font> lai la <b>anh</b> mai <font face="courier new">dung</font> sau <font size="5">mot</font> tinh yeu', '<br>', NULL, '2015-05-25 00:00:00'),
(16, 'dau phong', '', '', 'dinh menh', 0, 'ai bit', '', NULL, '0000-00-00 00:00:00'),
(17, 'Thôi đừng nói làm chi', 'doidun', '', '<br>', 0, '<br>', '<br>', NULL, '0000-00-00 00:00:00'),
(18, 'Thôi em hãy đi về', 'haheki', '', '<br>', 0, '<br>', '<br>', NULL, '2015-05-26 00:00:00'),
(19, 'đậu xanh', '', '', 'thử nghiệm up hình', 0, 'hy vọng là sẽ thành công', '<br>', NULL, '2015-05-26 00:00:00'),
(20, '', '', NULL, '<br>', 0, '<br>', '<br>', NULL, '2015-05-26 00:00:00'),
(21, 'tét up ảnh swa ten', '', 'Da-nhap-ma2.jpg', '<br>', 1, '<br>', '<br>', NULL, '2015-05-27 05:02:00'),
(22, 'wtf', 'fff', 'Chua-nhap-ma.jpg', '<br>', 4, '<br>', '<br>', NULL, '2015-05-28 00:00:00'),
(23, '  A Dictionary of Advanced Japanese Grammar - Từ đ', 'A Dictionary of Advanced Japanese Grammar', 'a-dictionary-of-advanced-japanese.jpg', '<p class="MsoListParagraphCxSpFirst" style="margin-top:3.0pt;margin-right:0in;\r\nmargin-bottom:0in;margin-left:.5in;margin-bottom:.0001pt;mso-add-space:auto;\r\ntext-indent:-.25in;line-height:16.8pt;mso-outline-level:3;mso-list:l0 level1 lfo1;\r\nbackground:white"><span style="font-size: 13pt; line-height: 115%; font-family: Cambria, serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">A Dictionary of\r\nAdvanced Japanese Grammar</span><span style="font-size: 13pt; line-height: 115%; font-family: Cambria, serif;">&nbsp;</span><span style="font-size: 13pt; line-height: 115%; font-family: Cambria, serif; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">được xuất bản năm 2008\r\nbở The Japan Times gồm ', 4, '<h1 style="text-align: left; margin: 3pt 0in 0.0001pt 0.5in; text-indent: -0.25in; background: white;"><span style="line-height: 19.9333343505859px;"><b><font face="times new roman" size="3">Sơ lược về sản phẩm</font></b></span></h1><p class="MsoListParagraphCxSpFirst" style="text-align: left; margin: 3pt 0in 0.0001pt 0.5in; text-indent: -0.25in; line-height: 16.8pt; background: white;"><font face="times new roman"><b><span style="line-height: 19.9333343505859px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">A Dictionary of Advanced Japanese Grammar</span><span style="line-height: 19.9333343505859px;">&nbsp;</span><span style="line-height: 19.9333343505859px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">được xuất bản năm 2008 bở The Japan Times gồm 795 trang và là tập sách cuối cùng trong bộ 3 cuốn từ điển ngữ pháp của Seiichi Makino và Michio Tsutsui.</span></b><br></font></p><p class="MsoListParagraphCxSpFirst" style="text-align: left; margin: 3pt 0in 0.0001pt 0.5in; text-indent: -0.25in; line-height: 16.8pt; background: white;"><img src="C:\\Users\\CDC\\Desktop\\hình post\\image02.png" alt="abc" align="right"><font face="times new roman"><b><span style="line-height: 19.9333343505859px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;"><br></span></b></font></p><h2 style="text-align: left; margin: 3pt 0in 0.0001pt 0.5in; text-indent: -0.25in; line-height: 16.8pt; background: white;"><b><span style="line-height: 19.9333343505859px; background-image: initial; background-attachment: initial; background-size: initial; background', 'ghi chu xuat hien nhu the nao ngoai trang web day???', NULL, '2015-05-28 00:00:00');

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
MODIFY `ma_danh_muc_tai_lieu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tai_lieu1`
--
ALTER TABLE `tai_lieu1`
MODIFY `ma_tai_lieu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
