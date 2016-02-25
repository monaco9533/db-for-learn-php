-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2015 at 06:19 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chek1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE IF NOT EXISTS `tbl_danhmuc` (
  `danhmuc_id` int(11) NOT NULL,
  `nhomsp_id` int(11) NOT NULL,
  `danhmuc_name` varchar(1000) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`danhmuc_id`, `nhomsp_id`, `danhmuc_name`) VALUES
(1, 1, 'Giày tây nam'),
(2, 1, 'Giày Thể Thao'),
(3, 1, 'Sandal Nam'),
(4, 1, 'Giày Mọi Nam'),
(5, 1, 'Giày Tăng Chiều Cao'),
(6, 1, 'Giày Boot Nam'),
(7, 1, 'Giày Bảo Hộ Nam'),
(8, 1, 'Dép Nam'),
(9, 2, 'Guốc'),
(10, 2, 'Giày Thể Thao Nữ'),
(11, 2, 'Sandal Nữ'),
(12, 2, 'Giày Mọi Nữ'),
(13, 2, 'Giày Cao Gót'),
(14, 2, 'Giày Búp Bê'),
(15, 2, 'Giày boot Nữ'),
(16, 2, 'Dép Nữ'),
(17, 3, 'Giày Dành Cho Bé Gái'),
(18, 3, 'Giày Dành Cho Bé Nam'),
(19, 3, 'Giày Thể Thao Trẻ Em'),
(20, 4, 'Balo'),
(21, 4, 'Túi Xách Cầm Tay'),
(22, 4, 'Túi Xách Khoác Vai Công Sở'),
(23, 4, 'Túi Xách Khoác Vai Dạo Phố'),
(24, 4, 'Túi Xách Khoác Vai Dự Tiệc'),
(25, 4, 'Túi Xách laptop-tablet'),
(26, 4, 'Ví'),
(27, 5, 'Lót Giày');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`danhmuc_id`),
  ADD KEY `nhomsp_id` (`nhomsp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD CONSTRAINT `nhomsp_id` FOREIGN KEY (`nhomsp_id`) REFERENCES `tbl_nhomsp` (`nhomsp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
