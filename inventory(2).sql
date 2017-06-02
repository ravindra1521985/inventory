-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 02, 2017 at 10:10 AM
-- Server version: 5.7.18-0ubuntu0.17.04.1
-- PHP Version: 7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` enum('0','1') DEFAULT '1',
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `type` varchar(255) DEFAULT 'admin',
  `grouptype` int(10) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `password`, `status`, `first_name`, `last_name`, `email`, `mobile`, `type`, `grouptype`, `created_date`, `created_by`) VALUES
(1, 'singh85.ravindra@gmail.com', '$2y$10$CbQuDUq1.PHAWtNQYucaL.V0oFlwkUsWgpuHtSrXiJJ2GMY6q58ae', '1', 'Ravindra', 'singh', 'singh85.ravindra@gmail.com', 9818319425, 'admin', 1, '2017-05-30 11:25:35', 1),
(2, 'ravindras@itcombine.com', '$2y$10$FQspg5cCBP27Dwm/qJIiMOjj5r3e.N07pdKTFtBrgElXDj2GGbFpG', '1', 'subuser', 'singh', 'ravindras@itcombine.com', 9818319423, 'admin', 2, '2017-05-30 11:25:35', 1),
(7, 'raj', '$2y$10$Y00qoAAlA5wbtvzDmSB7x.Kpn/rd5Mv1YvDN/xUBZ4qVZNmrTzpmG', '0', 'singh', 'test', 'singh85.ravindra@gmail.com', 9999999999, 'admin', 2, '2017-05-30 07:47:19', NULL),
(8, 'ravindra', '$2y$10$UP1PbEeq20StJSW3wLvuFe38TDrsHgAouC6M6ssuIQydHYOUicsJS', '1', 'singh', 'singh', 'singh@itc.cim', 9999999999, 'admin', 2, '2017-05-30 07:48:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` bigint(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `dr_amount` double(10,2) DEFAULT NULL,
  `cr_amount` double(10,2) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modify_date` datetime DEFAULT NULL,
  `modify_by` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `email`, `detail`, `dr_amount`, `cr_amount`, `status`, `created_date`, `created_by`, `modify_date`, `modify_by`) VALUES
(1, 'ravindra', 0, 'singh85.ravindra@gmail.com', NULL, NULL, NULL, '0', '2017-05-18 14:11:17', 1, NULL, NULL),
(3, 'ravindra', 3454564645, 'nk@itcombine.com', 'efergtre', 22.00, 22.00, '1', '2017-05-18 14:13:53', 1, '2017-05-30 16:15:24', 1),
(5, 'sdfsdf', 4567890345, 'stitc@ff.com', 'referter', NULL, NULL, '1', '2017-05-18 14:34:30', 1, NULL, NULL),
(6, 'ravi', 9818319425, 'test@itc.com', 'test', 22.00, 12.00, '1', '2017-05-18 15:13:13', 1, NULL, NULL),
(7, 'raj1', 1111111111, 'st@itc.com', 'esfreger', 22.00, 222.00, '1', NULL, NULL, NULL, NULL),
(8, 'raj2', 1111111111, 'adsa@itc.com', 'dfgrdd', 22.00, 22.00, '1', NULL, NULL, NULL, NULL),
(9, 'raj1233', 8888888888, 'si@itc.com', 'wsefewtfew', 63.20, 9.20, '1', '2017-05-18 15:34:25', 1, '2017-05-25 12:03:44', 1),
(12, 'rast', 9818319425, 'singh85.ravindra@gmail.com1', 'sdfgdsg', 0.00, 5640.00, '1', '2017-05-18 16:51:23', 1, '2017-05-29 18:16:45', 1),
(13, 'singh', 4444444444, 'singh85.ravindra@gmail.com2', 'sdgfdgdf', 0.00, 22.00, '1', '2017-05-18 16:57:04', 1, '2017-05-29 14:19:00', 1),
(14, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL),
(16, 'Aristo Electronic', NULL, 'singh85.ravindrra@gmail49', NULL, 68.00, 81.00, '1', '2017-05-18 18:07:55', 1, '2017-05-18 18:11:00', 1),
(17, 'Primal Kunto', 3454546546, 'singh85.ravindrra@gmail1', 'swefe', 22.00, 33.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:11:13', 1),
(18, 'Max Industries', NULL, 'singh85.ravindrra@gmail2', NULL, 22.00, 34.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(19, 'J.P.Electrical', NULL, 'singh85.ravindrra@gmail3', NULL, 22.00, 35.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(20, 'SANTARAM BEDDI', NULL, 'singh85.ravindrra@gmail4', NULL, 23.00, 36.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(21, 'Jain Electrical', NULL, 'singh85.ravindrra@gmail5', NULL, 24.00, 37.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(22, 'Kishor Patwari', NULL, 'singh85.ravindrra@gmail6', NULL, 25.00, 38.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(23, 'Amit Electricals ', NULL, 'singh85.ravindrra@gmail7', NULL, 26.00, 39.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(24, 'Nimesh Maniar', NULL, 'singh85.ravindrra@gmail8', NULL, 27.00, 40.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(25, 'T.S Electrical', NULL, 'singh85.ravindrra@gmail9', NULL, 28.00, 41.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(26, 'Narendra Jain', NULL, 'singh85.ravindrra@gmail10', NULL, 29.00, 42.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(27, 'Yuvraj Electrical', NULL, 'singh85.ravindrra@gmail11', NULL, 30.00, 43.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(28, 'Sanjay Jain', NULL, 'singh85.ravindrra@gmail12', NULL, 31.00, 44.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(29, 'Sai Enterprises', NULL, 'singh85.ravindrra@gmail13', NULL, 32.00, 45.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:56', 1),
(30, 'Sandeep', NULL, 'singh85.ravindrra@gmail14', NULL, 33.00, 46.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:57', 1),
(31, 'SANTARAM BEDDI', NULL, 'singh85.ravindrra@gmail15', NULL, 34.00, 47.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:57', 1),
(32, 'J.P.Electrical', NULL, 'singh85.ravindrra@gmail16', NULL, 35.00, 48.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:57', 1),
(33, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail17', NULL, 36.00, 49.00, '1', '2017-05-18 18:07:53', 1, '2017-05-18 18:10:57', 1),
(34, 'Deepak Electronics', NULL, 'singh85.ravindrra@gmail18', NULL, 37.00, 50.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:57', 1),
(35, 'Sai Enterprises', NULL, 'singh85.ravindrra@gmail19', NULL, 38.00, 51.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:57', 1),
(36, 'Manoj A. Deore', NULL, 'singh85.ravindrra@gmail20', NULL, 39.00, 52.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:57', 1),
(37, 'Bravia Technologies', NULL, 'singh85.ravindrra@gmail21', NULL, 40.00, 53.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:57', 1),
(38, 'Sai Enterprises', NULL, 'singh85.ravindrra@gmail22', NULL, 41.00, 54.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:57', 1),
(39, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail23', NULL, 42.00, 55.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:57', 1),
(40, 'T.S Electrical', NULL, 'singh85.ravindrra@gmail24', NULL, 43.00, 56.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:57', 1),
(41, 'Viraz Industries', NULL, 'singh85.ravindrra@gmail25', NULL, 44.00, 57.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(42, 'Primal Kunto', NULL, 'singh85.ravindrra@gmail26', NULL, 45.00, 58.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(43, 'Yuvraj Electrical', NULL, 'singh85.ravindrra@gmail27', NULL, 46.00, 59.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(44, 'Manoj A. Deore', NULL, 'singh85.ravindrra@gmail28', NULL, 47.00, 60.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(45, 'Baldev Singh', NULL, 'singh85.ravindrra@gmail29', NULL, 48.00, 61.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(46, 'Viraz Industries', NULL, 'singh85.ravindrra@gmail30', NULL, 49.00, 62.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(47, 'Shilpa Traders', NULL, 'singh85.ravindrra@gmail31', NULL, 50.00, 63.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(48, 'P.N. Kale', NULL, 'singh85.ravindrra@gmail32', NULL, 51.00, 64.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(49, 'Ranjeet Singh', NULL, 'singh85.ravindrra@gmail33', NULL, 52.00, 65.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(50, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail34', NULL, 53.00, 66.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(51, 'SANTARAM BEDDI', NULL, 'singh85.ravindrra@gmail35', NULL, 54.00, 67.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(52, 'P.N. Kale', NULL, 'singh85.ravindrra@gmail36', NULL, 55.00, 68.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:58', 1),
(53, 'Sai Baba Electronics', NULL, 'singh85.ravindrra@gmail37', NULL, 56.00, 69.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:59', 1),
(54, 'J.P.Electrical', NULL, 'singh85.ravindrra@gmail38', NULL, 57.00, 70.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:59', 1),
(55, 'Primal Kunto', NULL, 'singh85.ravindrra@gmail39', NULL, 58.00, 71.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:59', 1),
(56, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail40', NULL, 59.00, 72.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:59', 1),
(57, 'Babloo Electrocontrol', NULL, 'singh85.ravindrra@gmail41', NULL, 60.00, 73.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:59', 1),
(58, 'Dilip D Khalate', NULL, 'singh85.ravindrra@gmail42', NULL, 61.00, 74.00, '1', '2017-05-18 18:07:54', 1, '2017-05-18 18:10:59', 1),
(59, 'Nimesh Maniar', NULL, 'singh85.ravindrra@gmail43', NULL, 62.00, 75.00, '1', '2017-05-18 18:07:55', 1, '2017-05-18 18:10:59', 1),
(60, 'Aristo Electronic', NULL, 'singh85.ravindrra@gmail44', NULL, 63.00, 76.00, '1', '2017-05-18 18:07:55', 1, '2017-05-18 18:10:59', 1),
(61, 'Kishor Patwari', NULL, 'singh85.ravindrra@gmail45', NULL, 64.00, 77.00, '1', '2017-05-18 18:07:55', 1, '2017-05-18 18:10:59', 1),
(62, 'Babloo Electrocontrol', NULL, 'singh85.ravindrra@gmail46', NULL, 65.00, 78.00, '1', '2017-05-18 18:07:55', 1, '2017-05-18 18:10:59', 1),
(63, 'Dilip D Khalate', NULL, 'singh85.ravindrra@gmail47', NULL, 66.00, 79.00, '1', '2017-05-18 18:07:55', 1, '2017-05-18 18:10:59', 1),
(64, 'Nimesh Maniar', NULL, 'singh85.ravindrra@gmail48', NULL, 67.00, 80.00, '1', '2017-05-18 18:07:55', 1, '2017-05-18 18:10:59', 1),
(65, 'singhrst@', 9818319425, 'singh33@gmail.com', '', 126.00, 9875.00, '1', NULL, NULL, '2017-05-20 16:57:33', 1),
(66, 'ravindra', 9818319425, 'singh85.ravindra11@gmail.com1', 'noida', 0.00, 1800.00, '1', '2017-05-22 15:15:25', 1, '2017-05-22 17:02:09', 1),
(67, 'ravi', 9818319425, 'raj11@gmail', 'noida', 0.00, 4925.00, '1', NULL, NULL, '2017-05-22 18:00:27', 1),
(68, 'ravi1', 9818319425, 'singh85.ravindra11@gmail.com2', 'test', 0.00, 2000.00, '1', '2017-05-23 12:14:56', 1, '2017-05-24 13:11:49', 1),
(69, 'CASH', 1111111111, 'cash@itcombine.com', 'cash', 17.98, 0.00, '1', '2017-05-29 15:30:14', 1, '2017-06-01 15:23:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_log`
--

CREATE TABLE `customer_log` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` bigint(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `dr_amount` double(10,2) DEFAULT NULL,
  `cr_amount` double(10,2) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modify_date` datetime DEFAULT NULL,
  `modify_by` int(10) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_log`
--

INSERT INTO `customer_log` (`id`, `customer_id`, `name`, `phone`, `email`, `detail`, `dr_amount`, `cr_amount`, `status`, `created_date`, `created_by`, `modify_date`, `modify_by`, `type`) VALUES
(1, 12, 'rast', NULL, 'singh85.ravindra@gmail.com1', 'sdfgdsg', 23.00, 23.00, '1', '2017-05-18 16:51:23', 1, NULL, NULL, 'manual'),
(2, 13, 'singh', 4444444444, 'singh85.ravindra@gmail.com2', 'sdgfdgdf', 22.00, 22.00, '1', '2017-05-18 16:57:04', 1, NULL, NULL, 'manual'),
(3, 17, 'Primal Kunto', NULL, 'singh85.ravindrra@gmail1', NULL, 22.00, 33.00, '1', NULL, NULL, '2017-05-18 18:10:12', 1, 'excel'),
(4, 18, 'Max Industries', NULL, 'singh85.ravindrra@gmail2', NULL, 22.00, 34.00, '1', NULL, NULL, '2017-05-18 18:10:12', 1, 'excel'),
(5, 19, 'J.P.Electrical', NULL, 'singh85.ravindrra@gmail3', NULL, 22.00, 35.00, '1', NULL, NULL, '2017-05-18 18:10:12', 1, 'excel'),
(6, 20, 'SANTARAM BEDDI', NULL, 'singh85.ravindrra@gmail4', NULL, 23.00, 36.00, '1', NULL, NULL, '2017-05-18 18:10:12', 1, 'excel'),
(7, 21, 'Jain Electrical', NULL, 'singh85.ravindrra@gmail5', NULL, 24.00, 37.00, '1', NULL, NULL, '2017-05-18 18:10:12', 1, 'excel'),
(8, 22, 'Kishor Patwari', NULL, 'singh85.ravindrra@gmail6', NULL, 25.00, 38.00, '1', NULL, NULL, '2017-05-18 18:10:12', 1, 'excel'),
(9, 23, 'Amit Electricals ', NULL, 'singh85.ravindrra@gmail7', NULL, 26.00, 39.00, '1', NULL, NULL, '2017-05-18 18:10:12', 1, 'excel'),
(10, 24, 'Nimesh Maniar', NULL, 'singh85.ravindrra@gmail8', NULL, 27.00, 40.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(11, 25, 'T.S Electrical', NULL, 'singh85.ravindrra@gmail9', NULL, 28.00, 41.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(12, 26, 'Narendra Jain', NULL, 'singh85.ravindrra@gmail10', NULL, 29.00, 42.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(13, 27, 'Yuvraj Electrical', NULL, 'singh85.ravindrra@gmail11', NULL, 30.00, 43.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(14, 28, 'Sanjay Jain', NULL, 'singh85.ravindrra@gmail12', NULL, 31.00, 44.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(15, 29, 'Sai Enterprises', NULL, 'singh85.ravindrra@gmail13', NULL, 32.00, 45.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(16, 30, 'Sandeep', NULL, 'singh85.ravindrra@gmail14', NULL, 33.00, 46.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(17, 31, 'SANTARAM BEDDI', NULL, 'singh85.ravindrra@gmail15', NULL, 34.00, 47.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(18, 32, 'J.P.Electrical', NULL, 'singh85.ravindrra@gmail16', NULL, 35.00, 48.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(19, 33, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail17', NULL, 36.00, 49.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(20, 34, 'Deepak Electronics', NULL, 'singh85.ravindrra@gmail18', NULL, 37.00, 50.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(21, 35, 'Sai Enterprises', NULL, 'singh85.ravindrra@gmail19', NULL, 38.00, 51.00, '1', NULL, NULL, '2017-05-18 18:10:13', 1, 'excel'),
(22, 36, 'Manoj A. Deore', NULL, 'singh85.ravindrra@gmail20', NULL, 39.00, 52.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(23, 37, 'Bravia Technologies', NULL, 'singh85.ravindrra@gmail21', NULL, 40.00, 53.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(24, 38, 'Sai Enterprises', NULL, 'singh85.ravindrra@gmail22', NULL, 41.00, 54.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(25, 39, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail23', NULL, 42.00, 55.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(26, 40, 'T.S Electrical', NULL, 'singh85.ravindrra@gmail24', NULL, 43.00, 56.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(27, 41, 'Viraz Industries', NULL, 'singh85.ravindrra@gmail25', NULL, 44.00, 57.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(28, 42, 'Primal Kunto', NULL, 'singh85.ravindrra@gmail26', NULL, 45.00, 58.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(29, 43, 'Yuvraj Electrical', NULL, 'singh85.ravindrra@gmail27', NULL, 46.00, 59.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(30, 44, 'Manoj A. Deore', NULL, 'singh85.ravindrra@gmail28', NULL, 47.00, 60.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(31, 45, 'Baldev Singh', NULL, 'singh85.ravindrra@gmail29', NULL, 48.00, 61.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(32, 46, 'Viraz Industries', NULL, 'singh85.ravindrra@gmail30', NULL, 49.00, 62.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(33, 47, 'Shilpa Traders', NULL, 'singh85.ravindrra@gmail31', NULL, 50.00, 63.00, '1', NULL, NULL, '2017-05-18 18:10:14', 1, 'excel'),
(34, 48, 'P.N. Kale', NULL, 'singh85.ravindrra@gmail32', NULL, 51.00, 64.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(35, 49, 'Ranjeet Singh', NULL, 'singh85.ravindrra@gmail33', NULL, 52.00, 65.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(36, 50, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail34', NULL, 53.00, 66.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(37, 51, 'SANTARAM BEDDI', NULL, 'singh85.ravindrra@gmail35', NULL, 54.00, 67.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(38, 52, 'P.N. Kale', NULL, 'singh85.ravindrra@gmail36', NULL, 55.00, 68.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(39, 53, 'Sai Baba Electronics', NULL, 'singh85.ravindrra@gmail37', NULL, 56.00, 69.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(40, 54, 'J.P.Electrical', NULL, 'singh85.ravindrra@gmail38', NULL, 57.00, 70.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(41, 55, 'Primal Kunto', NULL, 'singh85.ravindrra@gmail39', NULL, 58.00, 71.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(42, 56, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail40', NULL, 59.00, 72.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(43, 57, 'Babloo Electrocontrol', NULL, 'singh85.ravindrra@gmail41', NULL, 60.00, 73.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(44, 58, 'Dilip D Khalate', NULL, 'singh85.ravindrra@gmail42', NULL, 61.00, 74.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(45, 59, 'Nimesh Maniar', NULL, 'singh85.ravindrra@gmail43', NULL, 62.00, 75.00, '1', NULL, NULL, '2017-05-18 18:10:15', 1, 'excel'),
(46, 60, 'Aristo Electronic', NULL, 'singh85.ravindrra@gmail44', NULL, 63.00, 76.00, '1', NULL, NULL, '2017-05-18 18:10:16', 1, 'excel'),
(47, 61, 'Kishor Patwari', NULL, 'singh85.ravindrra@gmail45', NULL, 64.00, 77.00, '1', NULL, NULL, '2017-05-18 18:10:16', 1, 'excel'),
(48, 62, 'Babloo Electrocontrol', NULL, 'singh85.ravindrra@gmail46', NULL, 65.00, 78.00, '1', NULL, NULL, '2017-05-18 18:10:16', 1, 'excel'),
(49, 63, 'Dilip D Khalate', NULL, 'singh85.ravindrra@gmail47', NULL, 66.00, 79.00, '1', NULL, NULL, '2017-05-18 18:10:16', 1, 'excel'),
(50, 64, 'Nimesh Maniar', NULL, 'singh85.ravindrra@gmail48', NULL, 67.00, 80.00, '1', NULL, NULL, '2017-05-18 18:10:16', 1, 'excel'),
(51, 16, 'Aristo Electronic', NULL, 'singh85.ravindrra@gmail49', NULL, 68.00, 81.00, '1', NULL, NULL, '2017-05-18 18:10:16', 1, 'excel'),
(52, 17, 'Primal Kunto', NULL, 'singh85.ravindrra@gmail1', NULL, 22.00, 33.00, '1', NULL, NULL, '2017-05-18 18:10:55', 1, 'excel'),
(53, 18, 'Max Industries', NULL, 'singh85.ravindrra@gmail2', NULL, 22.00, 34.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(54, 19, 'J.P.Electrical', NULL, 'singh85.ravindrra@gmail3', NULL, 22.00, 35.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(55, 20, 'SANTARAM BEDDI', NULL, 'singh85.ravindrra@gmail4', NULL, 23.00, 36.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(56, 21, 'Jain Electrical', NULL, 'singh85.ravindrra@gmail5', NULL, 24.00, 37.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(57, 22, 'Kishor Patwari', NULL, 'singh85.ravindrra@gmail6', NULL, 25.00, 38.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(58, 23, 'Amit Electricals ', NULL, 'singh85.ravindrra@gmail7', NULL, 26.00, 39.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(59, 24, 'Nimesh Maniar', NULL, 'singh85.ravindrra@gmail8', NULL, 27.00, 40.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(60, 25, 'T.S Electrical', NULL, 'singh85.ravindrra@gmail9', NULL, 28.00, 41.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(61, 26, 'Narendra Jain', NULL, 'singh85.ravindrra@gmail10', NULL, 29.00, 42.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(62, 27, 'Yuvraj Electrical', NULL, 'singh85.ravindrra@gmail11', NULL, 30.00, 43.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(63, 28, 'Sanjay Jain', NULL, 'singh85.ravindrra@gmail12', NULL, 31.00, 44.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(64, 29, 'Sai Enterprises', NULL, 'singh85.ravindrra@gmail13', NULL, 32.00, 45.00, '1', NULL, NULL, '2017-05-18 18:10:56', 1, 'excel'),
(65, 30, 'Sandeep', NULL, 'singh85.ravindrra@gmail14', NULL, 33.00, 46.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(66, 31, 'SANTARAM BEDDI', NULL, 'singh85.ravindrra@gmail15', NULL, 34.00, 47.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(67, 32, 'J.P.Electrical', NULL, 'singh85.ravindrra@gmail16', NULL, 35.00, 48.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(68, 33, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail17', NULL, 36.00, 49.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(69, 34, 'Deepak Electronics', NULL, 'singh85.ravindrra@gmail18', NULL, 37.00, 50.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(70, 35, 'Sai Enterprises', NULL, 'singh85.ravindrra@gmail19', NULL, 38.00, 51.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(71, 36, 'Manoj A. Deore', NULL, 'singh85.ravindrra@gmail20', NULL, 39.00, 52.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(72, 37, 'Bravia Technologies', NULL, 'singh85.ravindrra@gmail21', NULL, 40.00, 53.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(73, 38, 'Sai Enterprises', NULL, 'singh85.ravindrra@gmail22', NULL, 41.00, 54.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(74, 39, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail23', NULL, 42.00, 55.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(75, 40, 'T.S Electrical', NULL, 'singh85.ravindrra@gmail24', NULL, 43.00, 56.00, '1', NULL, NULL, '2017-05-18 18:10:57', 1, 'excel'),
(76, 41, 'Viraz Industries', NULL, 'singh85.ravindrra@gmail25', NULL, 44.00, 57.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(77, 42, 'Primal Kunto', NULL, 'singh85.ravindrra@gmail26', NULL, 45.00, 58.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(78, 43, 'Yuvraj Electrical', NULL, 'singh85.ravindrra@gmail27', NULL, 46.00, 59.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(79, 44, 'Manoj A. Deore', NULL, 'singh85.ravindrra@gmail28', NULL, 47.00, 60.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(80, 45, 'Baldev Singh', NULL, 'singh85.ravindrra@gmail29', NULL, 48.00, 61.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(81, 46, 'Viraz Industries', NULL, 'singh85.ravindrra@gmail30', NULL, 49.00, 62.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(82, 47, 'Shilpa Traders', NULL, 'singh85.ravindrra@gmail31', NULL, 50.00, 63.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(83, 48, 'P.N. Kale', NULL, 'singh85.ravindrra@gmail32', NULL, 51.00, 64.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(84, 49, 'Ranjeet Singh', NULL, 'singh85.ravindrra@gmail33', NULL, 52.00, 65.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(85, 50, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail34', NULL, 53.00, 66.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(86, 51, 'SANTARAM BEDDI', NULL, 'singh85.ravindrra@gmail35', NULL, 54.00, 67.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(87, 52, 'P.N. Kale', NULL, 'singh85.ravindrra@gmail36', NULL, 55.00, 68.00, '1', NULL, NULL, '2017-05-18 18:10:58', 1, 'excel'),
(88, 53, 'Sai Baba Electronics', NULL, 'singh85.ravindrra@gmail37', NULL, 56.00, 69.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(89, 54, 'J.P.Electrical', NULL, 'singh85.ravindrra@gmail38', NULL, 57.00, 70.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(90, 55, 'Primal Kunto', NULL, 'singh85.ravindrra@gmail39', NULL, 58.00, 71.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(91, 56, 'Nutan Electronics', NULL, 'singh85.ravindrra@gmail40', NULL, 59.00, 72.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(92, 57, 'Babloo Electrocontrol', NULL, 'singh85.ravindrra@gmail41', NULL, 60.00, 73.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(93, 58, 'Dilip D Khalate', NULL, 'singh85.ravindrra@gmail42', NULL, 61.00, 74.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(94, 59, 'Nimesh Maniar', NULL, 'singh85.ravindrra@gmail43', NULL, 62.00, 75.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(95, 60, 'Aristo Electronic', NULL, 'singh85.ravindrra@gmail44', NULL, 63.00, 76.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(96, 61, 'Kishor Patwari', NULL, 'singh85.ravindrra@gmail45', NULL, 64.00, 77.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(97, 62, 'Babloo Electrocontrol', NULL, 'singh85.ravindrra@gmail46', NULL, 65.00, 78.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(98, 63, 'Dilip D Khalate', NULL, 'singh85.ravindrra@gmail47', NULL, 66.00, 79.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(99, 64, 'Nimesh Maniar', NULL, 'singh85.ravindrra@gmail48', NULL, 67.00, 80.00, '1', NULL, NULL, '2017-05-18 18:10:59', 1, 'excel'),
(100, 16, 'Aristo Electronic', NULL, 'singh85.ravindrra@gmail49', NULL, 68.00, 81.00, '1', NULL, NULL, '2017-05-18 18:11:00', 1, 'excel'),
(101, 17, 'Primal Kunto', 3454546546, 'singh85.ravindrra@gmail1', 'swefe', 22.00, 33.00, '1', NULL, NULL, '2017-05-18 18:11:13', 1, 'manual'),
(102, 3, 'ravindra', 3454564645, 'nk@itcombine.com', 'efergtre', 22.00, 22.00, '1', NULL, NULL, '2017-05-18 18:11:28', 1, 'manual'),
(103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, 'invoice'),
(104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, 'invoice'),
(105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, 'invoice'),
(106, 12, 'rast', 9818319425, 'singh85.ravindra@gmail.com1', 'sdfgdsg', 46.00, 6000.00, '1', NULL, NULL, '2017-05-20 15:37:17', 1, 'manual'),
(107, 12, NULL, NULL, NULL, NULL, 92.00, 5954.00, '1', NULL, NULL, NULL, 1, 'invoice'),
(108, 12, NULL, NULL, NULL, NULL, 203.00, 5843.00, '1', NULL, NULL, '2017-05-20 16:18:03', 1, 'invoice'),
(109, 65, NULL, NULL, NULL, NULL, 126.00, 9875.00, '1', NULL, NULL, '2017-05-20 16:57:33', 1, 'invoice'),
(110, 66, 'ravindra', 9818319425, 'singh85.ravindra11@gmail.com1', 'noida', 0.00, 2000.00, '1', '2017-05-22 15:15:25', 1, NULL, NULL, 'manual'),
(111, 66, NULL, NULL, NULL, NULL, 0.00, 1800.00, '1', NULL, NULL, '2017-05-22 17:02:09', 1, 'invoice'),
(112, 67, NULL, NULL, NULL, NULL, 0.00, 4925.00, '1', NULL, NULL, '2017-05-22 18:00:27', 1, 'invoice'),
(113, 68, 'ravi1', 9818319425, 'singh85.ravindra11@gmail.com2', 'test', 0.00, 2000.00, '1', '2017-05-23 12:14:56', 1, NULL, NULL, 'manual'),
(114, 12, NULL, NULL, NULL, NULL, 0.00, 5640.00, '1', NULL, NULL, '2017-05-23 12:19:33', 1, 'invoice'),
(115, 12, NULL, NULL, NULL, NULL, 110.00, 5640.00, '1', NULL, NULL, '2017-05-23 13:04:23', 1, 'invoice'),
(116, 68, 'ravi1', 9818319425, 'singh85.ravindra11@gmail.com2', 'test', 0.00, 2000.00, '1', NULL, NULL, '2017-05-24 13:11:49', 1, 'manual'),
(117, 12, NULL, NULL, NULL, NULL, 219.00, 5640.00, '1', NULL, NULL, '2017-05-24 13:17:12', 1, 'invoice'),
(151, 9, NULL, NULL, NULL, NULL, 63.20, 9.20, '1', NULL, NULL, '2017-05-25 12:03:44', 1, 'invoice'),
(152, 12, NULL, NULL, NULL, NULL, NULL, 5640.00, '1', NULL, NULL, '2017-05-25 17:31:53', 1, 'invoice'),
(153, 12, NULL, NULL, NULL, NULL, NULL, 5640.00, '1', NULL, NULL, '2017-05-25 17:38:58', 1, 'invoice'),
(154, 3, NULL, NULL, NULL, NULL, NULL, 22.00, '1', NULL, NULL, '2017-05-25 18:04:31', 1, 'invoice'),
(155, 3, NULL, NULL, NULL, NULL, NULL, 22.00, '1', NULL, NULL, '2017-05-25 18:06:59', 1, 'invoice'),
(156, 12, NULL, NULL, NULL, NULL, NULL, 5640.00, '1', NULL, NULL, '2017-05-25 18:15:55', 1, 'invoice'),
(157, 12, NULL, NULL, NULL, NULL, NULL, 5640.00, '1', NULL, NULL, '2017-05-25 18:22:07', 1, 'invoice'),
(158, 12, NULL, NULL, NULL, NULL, NULL, 5640.00, '1', NULL, NULL, '2017-05-25 18:47:22', 1, 'invoice'),
(159, 12, NULL, NULL, NULL, NULL, 330.00, 5640.00, '1', NULL, NULL, '2017-05-25 18:53:40', 1, 'invoice'),
(160, 12, NULL, NULL, NULL, NULL, 385.00, 5640.00, '1', NULL, NULL, '2017-05-25 18:55:14', 1, 'invoice'),
(161, 12, NULL, NULL, NULL, NULL, 398.00, 5640.00, '1', NULL, NULL, '2017-05-26 14:18:05', 1, 'invoice'),
(163, 12, NULL, NULL, NULL, NULL, 0.42, 5640.00, '1', NULL, NULL, '2017-05-29 13:56:25', 1, 'invoice'),
(164, 13, NULL, NULL, NULL, NULL, 0.00, 22.00, '1', NULL, NULL, '2017-05-29 14:19:00', 1, 'invoice'),
(165, 12, NULL, NULL, NULL, NULL, 0.00, 5640.00, '1', NULL, NULL, '2017-05-29 15:26:17', 2, 'invoice'),
(166, 69, 'CASH', 1111111111, 'cash@itcombine.com', 'cash', 0.00, 0.00, '1', '2017-05-29 15:30:14', 1, NULL, NULL, 'manual'),
(167, 69, NULL, NULL, NULL, NULL, 0.00, 0.00, '1', NULL, NULL, '2017-05-29 15:31:22', 1, 'invoice'),
(168, 69, NULL, NULL, NULL, NULL, 9.00, 0.00, '1', NULL, NULL, '2017-05-29 15:40:12', 1, 'invoice'),
(169, 69, NULL, NULL, NULL, NULL, 9.00, 0.00, '1', NULL, NULL, '2017-05-29 15:44:02', 1, 'invoice'),
(170, 69, NULL, NULL, NULL, NULL, 9.08, 0.00, '1', NULL, NULL, '2017-05-29 15:47:46', 1, 'invoice'),
(171, 69, NULL, NULL, NULL, NULL, 0.02, 0.00, '1', NULL, NULL, '2017-05-29 15:57:57', 1, 'invoice'),
(172, 69, NULL, NULL, NULL, NULL, 0.10, 0.00, '1', NULL, NULL, '2017-05-29 16:02:38', 1, 'invoice'),
(173, 69, NULL, NULL, NULL, NULL, 10.00, 0.00, '1', NULL, NULL, '2017-05-29 16:04:12', 1, 'invoice'),
(174, 69, NULL, NULL, NULL, NULL, 10.00, 0.00, '1', NULL, NULL, '2017-05-29 18:08:43', 1, 'invoice'),
(175, 12, NULL, NULL, NULL, NULL, 0.00, 5640.00, '1', NULL, NULL, '2017-05-29 18:16:45', 1, 'invoice'),
(177, 3, NULL, NULL, NULL, NULL, 22.00, 22.00, '1', NULL, NULL, '2017-05-30 16:15:24', 1, 'invoice'),
(178, 69, NULL, NULL, NULL, NULL, 17.98, 0.00, '1', NULL, NULL, '2017-06-01 15:23:07', 1, 'invoice');

-- --------------------------------------------------------

--
-- Table structure for table `customer_temp`
--

CREATE TABLE `customer_temp` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` bigint(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `dr_amount` double(10,2) DEFAULT NULL,
  `cr_amount` double(10,2) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modify_date` datetime DEFAULT NULL,
  `modify_by` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `invoice_code` varchar(255) DEFAULT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `sub_total` double(10,2) NOT NULL,
  `total_amount` double(10,2) DEFAULT NULL,
  `paid_amount` double(10,2) DEFAULT NULL,
  `dr_amount` double(10,2) DEFAULT NULL,
  `cr_amount` double(10,2) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `status` enum('1','0') DEFAULT '1',
  `tax_amount` double(10,2) NOT NULL,
  `tax` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoice_code`, `customer_id`, `sub_total`, `total_amount`, `paid_amount`, `dr_amount`, `cr_amount`, `created_date`, `created_by`, `status`, `tax_amount`, `tax`) VALUES
(1, '000001', 12, 0.00, 111.00, NULL, 92.00, 5954.00, '2017-05-20 16:18:02', 1, '0', 0.00, ''),
(2, '000002', 65, 0.00, 125.00, NULL, 1.00, 10000.00, '2017-05-20 16:57:32', 1, '1', 0.00, ''),
(3, '000003', 66, 0.00, 222.00, 22.00, 0.00, 200.00, '2017-05-22 17:02:08', 1, '1', 0.00, ''),
(4, '000004', 67, 0.00, 125.00, 100.00, 0.00, 75.00, '2017-05-22 18:00:26', 1, '1', 0.00, ''),
(5, '000005', 12, 0.00, 375.00, 375.00, 0.00, 203.00, '2017-05-23 12:19:32', 1, '1', 0.00, ''),
(6, '000006', 12, 0.00, 110.00, 0.00, 110.00, 0.00, '2017-05-23 13:04:23', 1, '1', 0.00, ''),
(7, '000007', 12, 0.00, 110.00, 1.00, 219.00, 0.00, '2017-05-24 13:17:12', 1, '1', 0.00, ''),
(41, '000008', 9, 0.00, 55.00, 1.00, 63.20, 1.00, '2017-05-25 12:03:44', 1, '1', 0.00, ''),
(42, '000042', 12, 0.00, NULL, 0.00, NULL, 0.00, '2017-05-25 17:31:53', 1, '1', 0.00, ''),
(43, '000043', 12, 0.00, 0.00, 0.00, NULL, 0.00, '2017-05-25 17:38:58', 1, '1', 0.00, ''),
(44, '000044', 3, 0.00, NULL, 0.00, NULL, 0.00, '2017-05-25 18:04:31', 1, '1', 0.00, ''),
(45, '000045', 3, 0.00, NULL, 0.00, NULL, 0.00, '2017-05-25 18:06:59', 1, '1', 0.00, ''),
(46, '000046', 12, 0.00, NULL, 0.00, NULL, 0.00, '2017-05-25 18:15:55', 1, '1', 0.00, ''),
(47, '000047', 12, 0.00, NULL, 0.00, NULL, 0.00, '2017-05-25 18:22:07', 1, '1', 0.00, ''),
(48, '000048', 12, 0.00, 111.00, 0.00, NULL, 0.00, '2017-05-25 18:47:22', 1, '1', 0.00, ''),
(49, '000049', 12, 0.00, 111.00, 0.00, 330.00, 0.00, '2017-05-25 18:53:39', 1, '1', 0.00, ''),
(50, '000050', 12, 0.00, 55.00, NULL, 385.00, 0.00, '2017-05-25 18:55:14', 1, '1', 0.00, ''),
(51, '000051', 12, 0.00, 124.00, 111.00, 398.00, 0.00, '2017-05-26 14:18:05', 1, '1', 0.00, ''),
(53, '000052', 12, 19.00, 22.42, 420.00, 0.42, 0.00, '2017-05-29 13:56:25', 1, '1', 3.42, '18%'),
(54, '000054', 13, 55.00, 64.90, 86.90, 0.00, 0.00, '2017-05-29 14:19:00', 1, '1', 9.90, '18%'),
(55, '000055', 12, 55.00, 64.90, 65.32, 0.00, 0.00, '2017-05-29 15:26:16', 2, '1', 9.90, '18%'),
(56, '000056', 69, 55.00, 64.90, 64.90, 0.00, 0.00, '2017-05-29 15:31:22', 1, '1', 9.90, '18%'),
(57, '000057', 69, 50.00, 59.00, 50.00, 9.00, 0.00, '2017-05-29 15:40:12', 1, '1', 9.00, '18%'),
(58, '000058', 69, 60.00, 70.80, 70.80, 9.00, 0.00, '2017-05-29 15:44:02', 1, '1', 10.80, '18%'),
(59, '000059', 69, 56.00, 66.08, 66.00, 9.08, 0.00, '2017-05-29 15:47:46', 1, '1', 10.08, '18%'),
(60, '000060', 69, 33.00, 38.94, 48.00, 0.02, 0.00, '2017-05-29 15:57:57', 1, '1', 5.94, '18%'),
(61, '000061', 69, 56.00, 66.08, 66.00, 0.10, 0.00, '2017-05-29 16:02:38', 1, '1', 10.08, '18%'),
(62, '000062', 69, 55.00, 64.90, 55.00, 10.00, 0.00, '2017-05-29 16:04:12', 1, '1', 9.90, '18%'),
(63, '000063', 69, 50.00, 59.00, 59.00, 10.00, 0.00, '2017-05-29 18:08:43', 1, '1', 9.00, '18%'),
(64, '000064', 12, 100.00, 118.00, 118.00, 0.00, 0.00, '2017-05-29 18:16:45', 1, '1', 18.00, '18%'),
(66, '000065', 3, 55.00, 64.90, 64.90, 22.00, 0.00, '2017-05-30 16:15:24', 1, '1', 9.90, '18%'),
(67, '000067', 69, 111.00, 130.98, 123.00, 17.98, 0.00, '2017-06-01 15:23:07', 1, '1', 19.98, '18%');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `id` int(10) NOT NULL,
  `invoice_id` int(10) DEFAULT NULL,
  `item_id` int(10) DEFAULT NULL,
  `quantity` double(10,2) DEFAULT NULL,
  `item_amount` double(10,2) DEFAULT NULL,
  `item_price` double(10,2) DEFAULT NULL,
  `bill_rate` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_detail`
--

INSERT INTO `invoice_detail` (`id`, `invoice_id`, `item_id`, `quantity`, `item_amount`, `item_price`, `bill_rate`) VALUES
(1, 1, 97, 1.00, 55.00, 55.00, 0.00),
(2, 1, 98, 1.00, 56.00, 56.00, 0.00),
(3, 2, 97, 1.00, 55.00, 55.00, 0.00),
(4, 2, 98, 1.00, 56.00, 56.00, 0.00),
(5, 2, 56, 1.00, 14.00, 14.00, 0.00),
(6, 3, 97, 2.00, 110.00, 55.00, 0.00),
(7, 3, 98, 2.00, 112.00, 56.00, 0.00),
(8, 4, 98, 1.00, 56.00, 56.00, 0.00),
(9, 4, 56, 1.00, 14.00, 14.00, 0.00),
(10, 4, 97, 1.00, 55.00, 55.00, 0.00),
(11, 5, 97, 3.00, 165.00, 55.00, 0.00),
(12, 5, 98, 3.00, 168.00, 56.00, 0.00),
(13, 5, 56, 3.00, 42.00, 14.00, 0.00),
(14, 6, 97, 2.00, 110.00, 55.00, 0.00),
(15, 7, 97, 2.00, 110.00, 55.00, 0.00),
(49, 41, 97, 1.00, 55.00, 55.00, 0.00),
(50, 48, 97, 1.00, 55.00, 55.00, 0.00),
(51, 48, 98, 1.00, 56.00, 56.00, 0.00),
(52, 49, 97, 1.00, 55.00, 55.00, 0.00),
(53, 49, 98, 1.00, 56.00, 56.00, 0.00),
(54, 50, 97, 1.00, 55.00, 55.00, 0.00),
(55, 51, 97, 1.00, 55.00, 55.00, 0.00),
(56, 51, 98, 1.00, 56.00, 56.00, 0.00),
(57, 51, 55, 1.00, 13.00, 13.00, 0.00),
(59, 53, 61, 1.00, 19.00, 19.00, 19.00),
(60, 54, 97, 1.00, 55.00, 55.00, 55.00),
(61, 55, 97, 1.00, 55.00, 55.00, 55.00),
(62, 56, 97, 1.00, 55.00, 55.00, 55.00),
(63, 57, 97, 1.00, 50.00, 55.00, 50.00),
(64, 58, 75, 1.00, 20.00, 33.00, 20.00),
(65, 58, 76, 2.00, 40.00, 34.00, 20.00),
(66, 59, 98, 1.00, 56.00, 56.00, 56.00),
(67, 60, 75, 1.00, 33.00, 33.00, 33.00),
(68, 61, 98, 1.00, 56.00, 56.00, 56.00),
(69, 62, 97, 1.00, 55.00, 55.00, 55.00),
(70, 63, 97, 1.00, 50.00, 55.00, 50.00),
(71, 64, 103, 1.00, 100.00, 111.00, 100.00),
(73, 66, 97, 1.00, 55.00, 55.00, 55.00),
(74, 67, 97, 1.00, 55.00, 55.00, 55.00),
(75, 67, 98, 1.00, 56.00, 56.00, 56.00);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `item_code` varchar(20) NOT NULL,
  `item_price` double(10,2) DEFAULT NULL,
  `item_quantity` double(10,2) DEFAULT NULL,
  `description` text,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modify_date` datetime DEFAULT NULL,
  `modify_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `item_code`, `item_price`, `item_quantity`, `description`, `status`, `created_date`, `created_by`, `modify_date`, `modify_id`) VALUES
(1, 'Tamil -18x1 -(A-75)', '001A75', 10.00, 451.00, NULL, '0', '2017-05-18 12:01:06', 1, '2017-05-18 12:22:10', NULL),
(51, 'Tamil -18x1 - (RM-18)', '001RM18', 12.00, 5.00, NULL, '1', '2017-05-18 12:07:58', 1, '2017-05-18 12:20:57', NULL),
(52, 'Marathi - 22x1 - (A-75)', '002A75', 11.00, 5.00, NULL, '1', '2017-05-18 12:07:58', 1, '2017-05-18 12:20:57', NULL),
(53, 'Marathi - 22x1 - (RM-18)', '002RM18', 11.00, 5.00, NULL, '1', '2017-05-18 12:07:58', 1, '2017-05-18 12:20:57', NULL),
(54, 'Swami Samarth (S) - (A-77)', '002A77', 12.00, 5.00, NULL, '1', '2017-05-18 12:07:58', 1, '2017-05-18 12:20:57', NULL),
(55, '25- Tune D.D. -(A-22)', '003A22', 13.00, 4.00, NULL, '1', '2017-05-18 12:07:58', 1, '2017-05-18 12:20:57', NULL),
(56, '25 Tune D.D.(A-31)', '003A31', 14.00, 0.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(57, 'Tamil -25x1 -(JPE)', '004JPE', 15.00, 5.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(58, 'Tamil -30x1 - (Rm-18)', '004RM18', 16.00, 45.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(59, 'Tamil -30x1 - (A-75)', '004A75', 17.00, 5.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(60, '30 Tune (H) -(A-22)', '005A22', 18.00, 4.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(61, '30 Tune(H) - (A-74)', '005A74', 19.00, 4.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(62, 'Ding Dong -(S) -(B-2)', '005B2', 20.00, 6.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(63, '9- Tamil - (VR -2)', '006VR2', 21.00, 7.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(64, 'Tamil - 9x1 - (JPE)', '006JPE', 22.00, 8.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(65, 'Tamil -9x1 -(Rm-9)', '006RM9', 23.00, 9.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(66, 'Aarti - (A-22)', '007A22', 24.00, 10.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(67, 'Aarti - (A-31)', '007A31', 25.00, 11.00, NULL, '1', '2017-05-18 12:07:59', 1, '2017-05-18 12:20:58', NULL),
(68, 'Aarti -(B-2)', '007B2', 26.00, 12.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(69, 'Asalam -(A-22)', '008A22', 27.00, 13.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(70, 'Asalam & Koyal-(A-31)', '008A31', 28.00, 14.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(71, 'T.T. Asalam- (B-2)', '008B2', 29.00, 15.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(72, 'Azan - 8x1 - (A-31)', '009A31', 30.00, 16.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(73, 'Azan -8x1 -(A-22)', '009A22', 31.00, 17.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(74, 'Bird- 8x1 - (A-22)', '010A22', 32.00, 18.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(75, 'Bird -8x1 - (A-31)', '010A31', 33.00, 17.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(76, 'Bird -8x1 -(B-2)', '010B2', 34.00, 18.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(77, 'C.Bell - (A-22)', '011A22', 35.00, 21.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(78, 'C.Bell - (A-31)', '011A31', 36.00, 22.00, NULL, '1', '2017-05-18 12:08:00', 1, '2017-05-18 12:20:59', NULL),
(79, 'C.Bell - (A-42)', '011A42', 37.00, 23.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:20:59', NULL),
(80, 'C.Bell - (B-2)', '011B2', 38.00, 24.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:20:59', NULL),
(81, 'Ganesh -6x1 -(B-4)', '012B4', 39.00, 25.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(82, 'Hind - 20x1 - (A-19)', '013A19', 40.00, 26.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(83, 'Hind- 46x1 - (A-75)', '014A75', 41.00, 27.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(84, 'Hind- 46x1 - (PB1 & PB2)', '014PB1PB2', 42.00, 28.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(85, 'J.Bell-4x1 -(A-31)', '015A31', 43.00, 29.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(86, 'J.Bell-4x1-(A-79)', '015A79', 44.00, 30.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(87, 'J.Bell - 4x1 -(A-99)', '015A99', 45.00, 31.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(88, 'J.Bell-6x1 -(A-22)', '015A22', 46.00, 32.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(89, 'J.Bell-6x1 - (A-93)-Aarti', '015A93', 47.00, 33.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(90, 'JMD - (A-22)', '016A22', 48.00, 34.00, NULL, '1', '2017-05-18 12:08:01', 1, '2017-05-18 12:21:00', NULL),
(91, 'JMD - (A-31)', '016A31', 49.00, 35.00, NULL, '1', '2017-05-18 12:08:02', 1, '2017-05-18 12:21:00', NULL),
(92, 'IPL & KDK - (A-22)', '017A22', 50.00, 36.00, NULL, '1', '2017-05-18 12:08:02', 1, '2017-05-18 12:21:01', NULL),
(93, 'IPL & KDK - (A-31) ', '017A31', 51.00, 37.00, NULL, '1', '2017-05-18 12:08:02', 1, '2017-05-18 12:21:01', NULL),
(94, 'M-10x1 - (A22)', '018A22', 52.00, 38.00, NULL, '1', '2017-05-18 12:08:02', 1, '2017-05-18 12:21:01', NULL),
(95, 'M-10x1 - (A-31)', '018A31', 53.00, 39.00, NULL, '1', '2017-05-18 12:08:02', 1, '2017-05-18 12:21:01', NULL),
(96, 'M - 27x1 - (A-75)', '019A75', 54.00, 40.00, NULL, '1', '2017-05-18 12:08:02', 1, '2017-05-18 12:21:01', NULL),
(97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 16.00, NULL, '1', '2017-05-18 12:08:02', 1, '2017-05-20 15:53:13', NULL),
(98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 28.00, NULL, '1', '2017-05-18 12:08:02', 1, '2017-05-18 12:21:01', NULL),
(99, 'item-test', '00123', 13.00, 35.00, NULL, '1', '2017-05-27 13:02:38', 1, '2017-05-27 13:03:49', NULL),
(103, 'ravin', 'testqq', 111.00, 110.00, NULL, '1', '2017-05-27 13:24:11', 1, NULL, NULL);

--
-- Triggers `items`
--
DELIMITER $$
CREATE TRIGGER `itm` AFTER INSERT ON `items` FOR EACH ROW INSERT INTO items_log

    SET type  = 'tiger',

   item_id   =  new.id,
   name      =  new.name,
   item_code      =  new.item_code,
   created_date      =  new.created_date
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `items_log`
--

CREATE TABLE `items_log` (
  `id` int(10) NOT NULL,
  `item_id` int(10) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `item_code` varchar(20) NOT NULL,
  `item_price` double(10,2) DEFAULT NULL,
  `item_quantity` double(10,2) DEFAULT NULL,
  `description` text,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  `created_by` int(10) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items_log`
--

INSERT INTO `items_log` (`id`, `item_id`, `name`, `item_code`, `item_price`, `item_quantity`, `description`, `status`, `created_date`, `created_by`, `type`) VALUES
(23, 0, 'A11', 'A123', 0.00, 0.00, NULL, '1', '2017-05-17 15:26:17', 1, ''),
(24, 0, 'A12', 'A12', 0.00, 0.00, NULL, '1', '2017-05-17 15:29:50', 1, ''),
(25, 25, 'ravindra', 'singh', 20.00, 34.00, NULL, '0', '2017-05-17 17:31:46', 1, ''),
(26, 26, 'sfsdgf', 'dfgdf', 455.00, 55.00, NULL, '0', '2017-05-17 17:32:45', 1, ''),
(27, 27, 'A12', 'awdew', 33.00, 33.00, NULL, '0', '2017-05-17 17:38:01', 1, ''),
(28, 27, 'A12', 'awdew', 33.00, 33.00, NULL, '0', '2017-05-18 10:19:03', 1, 'manual'),
(29, 27, 'A12', 'awdew', 33.00, 333.00, NULL, '0', '2017-05-18 10:19:09', 1, 'manual'),
(30, 28, 'Tamil -18x1 -(A-75)', '001A75', NULL, NULL, NULL, '0', '2017-05-18 11:42:01', 1, 'excel'),
(31, 29, 'Tamil -18x1 - (RM-18)', '001RM18', NULL, NULL, NULL, '0', '2017-05-18 11:42:01', 1, 'excel'),
(32, 30, 'Marathi - 22x1 - (A-75)', '002A75', NULL, NULL, NULL, '0', '2017-05-18 11:42:01', 1, 'excel'),
(33, 31, 'Marathi - 22x1 - (RM-18)', '002RM18', NULL, NULL, NULL, '0', '2017-05-18 11:42:01', 1, 'excel'),
(34, 32, 'Swami Samarth (S) - (A-77)', '002A77', NULL, NULL, NULL, '0', '2017-05-18 11:42:01', 1, 'excel'),
(35, 33, '25- Tune D.D. -(A-22)', '003A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:01', 1, 'excel'),
(36, 34, '25 Tune D.D.(A-31)', '003A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:01', 1, 'excel'),
(37, 35, 'Tamil -25x1 -(JPE)', '004JPE', NULL, NULL, NULL, '0', '2017-05-18 11:42:01', 1, 'excel'),
(38, 36, 'Tamil -30x1 - (Rm-18)', '004RM18', NULL, NULL, NULL, '0', '2017-05-18 11:42:01', 1, 'excel'),
(39, 37, 'Tamil -30x1 - (A-75)', '004A75', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(40, 38, '30 Tune (H) -(A-22)', '005A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(41, 39, '30 Tune(H) - (A-74)', '005A74', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(42, 40, 'Ding Dong -(S) -(B-2)', '005B2', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(43, 41, '9- Tamil - (VR -2)', '006VR2', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(44, 42, 'Tamil - 9x1 - (JPE)', '006JPE', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(45, 43, 'Tamil -9x1 -(Rm-9)', '006RM9', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(46, 44, 'Aarti - (A-22)', '007A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(47, 45, 'Aarti - (A-31)', '007A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(48, 46, 'Aarti -(B-2)', '007B2', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(49, 47, 'Asalam -(A-22)', '008A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(50, 48, 'Asalam & Koyal-(A-31)', '008A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:02', 1, 'excel'),
(51, 49, 'T.T. Asalam- (B-2)', '008B2', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(52, 50, 'Azan - 8x1 - (A-31)', '009A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(53, 51, 'Azan -8x1 -(A-22)', '009A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(54, 52, 'Bird- 8x1 - (A-22)', '010A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(55, 53, 'Bird -8x1 - (A-31)', '010A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(56, 54, 'Bird -8x1 -(B-2)', '010B2', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(57, 55, 'C.Bell - (A-22)', '011A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(58, 56, 'C.Bell - (A-31)', '011A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(59, 57, 'C.Bell - (A-42)', '011A42', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(60, 58, 'C.Bell - (B-2)', '011B2', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(61, 59, 'Ganesh -6x1 -(B-4)', '012B4', NULL, NULL, NULL, '0', '2017-05-18 11:42:03', 1, 'excel'),
(62, 60, 'Hind - 20x1 - (A-19)', '013A19', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(63, 61, 'Hind- 46x1 - (A-75)', '014A75', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(64, 62, 'Hind- 46x1 - (PB1 & PB2)', '014PB1PB2', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(65, 63, 'J.Bell-4x1 -(A-31)', '015A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(66, 64, 'J.Bell-4x1-(A-79)', '015A79', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(67, 65, 'J.Bell - 4x1 -(A-99)', '015A99', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(68, 66, 'J.Bell-6x1 -(A-22)', '015A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(69, 67, 'J.Bell-6x1 - (A-93)-Aarti', '015A93', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(70, 68, 'JMD - (A-22)', '016A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(71, 69, 'JMD - (A-31)', '016A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(72, 70, 'IPL & KDK - (A-22)', '017A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(73, 71, 'IPL & KDK - (A-31) ', '017A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(74, 72, 'M-10x1 - (A22)', '018A22', NULL, NULL, NULL, '0', '2017-05-18 11:42:04', 1, 'excel'),
(75, 73, 'M-10x1 - (A-31)', '018A31', NULL, NULL, NULL, '0', '2017-05-18 11:42:05', 1, 'excel'),
(76, 74, 'M - 27x1 - (A-75)', '019A75', NULL, NULL, NULL, '0', '2017-05-18 11:42:05', 1, 'excel'),
(77, 75, '25 Tune (E) (H) Pod - (A-73)', '020A73', NULL, NULL, NULL, '0', '2017-05-18 11:42:05', 1, 'excel'),
(78, 76, '25 Tune -(H) Pod -(B-4)', '020B4', NULL, NULL, NULL, '0', '2017-05-18 11:42:05', 1, 'excel'),
(79, 79, 'Tamil -18x1 -(A-75)', '001A75', NULL, NULL, NULL, '0', '2017-05-18 11:59:50', 1, 'excel'),
(80, 80, 'Tamil -18x1 - (RM-18)', '001RM18', NULL, NULL, NULL, '0', '2017-05-18 11:59:50', 1, 'excel'),
(81, 81, 'Marathi - 22x1 - (A-75)', '002A75', NULL, NULL, NULL, '0', '2017-05-18 11:59:50', 1, 'excel'),
(82, 82, 'Marathi - 22x1 - (RM-18)', '002RM18', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(83, 83, 'Swami Samarth (S) - (A-77)', '002A77', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(84, 84, '25- Tune D.D. -(A-22)', '003A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(85, 85, '25 Tune D.D.(A-31)', '003A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(86, 86, 'Tamil -25x1 -(JPE)', '004JPE', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(87, 87, 'Tamil -30x1 - (Rm-18)', '004RM18', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(88, 88, 'Tamil -30x1 - (A-75)', '004A75', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(89, 89, '30 Tune (H) -(A-22)', '005A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(90, 90, '30 Tune(H) - (A-74)', '005A74', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(91, 91, 'Ding Dong -(S) -(B-2)', '005B2', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(92, 92, '9- Tamil - (VR -2)', '006VR2', NULL, NULL, NULL, '0', '2017-05-18 11:59:51', 1, 'excel'),
(93, 93, 'Tamil - 9x1 - (JPE)', '006JPE', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(94, 94, 'Tamil -9x1 -(Rm-9)', '006RM9', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(95, 95, 'Aarti - (A-22)', '007A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(96, 96, 'Aarti - (A-31)', '007A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(97, 97, 'Aarti -(B-2)', '007B2', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(98, 98, 'Asalam -(A-22)', '008A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(99, 99, 'Asalam & Koyal-(A-31)', '008A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(100, 100, 'T.T. Asalam- (B-2)', '008B2', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(101, 101, 'Azan - 8x1 - (A-31)', '009A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(102, 102, 'Azan -8x1 -(A-22)', '009A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(103, 103, 'Bird- 8x1 - (A-22)', '010A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(104, 104, 'Bird -8x1 - (A-31)', '010A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:52', 1, 'excel'),
(105, 105, 'Bird -8x1 -(B-2)', '010B2', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(106, 106, 'C.Bell - (A-22)', '011A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(107, 107, 'C.Bell - (A-31)', '011A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(108, 108, 'C.Bell - (A-42)', '011A42', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(109, 109, 'C.Bell - (B-2)', '011B2', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(110, 110, 'Ganesh -6x1 -(B-4)', '012B4', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(111, 111, 'Hind - 20x1 - (A-19)', '013A19', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(112, 112, 'Hind- 46x1 - (A-75)', '014A75', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(113, 113, 'Hind- 46x1 - (PB1 & PB2)', '014PB1PB2', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(114, 114, 'J.Bell-4x1 -(A-31)', '015A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(115, 115, 'J.Bell-4x1-(A-79)', '015A79', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(116, 116, 'J.Bell - 4x1 -(A-99)', '015A99', NULL, NULL, NULL, '0', '2017-05-18 11:59:53', 1, 'excel'),
(117, 117, 'J.Bell-6x1 -(A-22)', '015A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(118, 118, 'J.Bell-6x1 - (A-93)-Aarti', '015A93', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(119, 119, 'JMD - (A-22)', '016A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(120, 120, 'JMD - (A-31)', '016A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(121, 121, 'IPL & KDK - (A-22)', '017A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(122, 122, 'IPL & KDK - (A-31) ', '017A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(123, 123, 'M-10x1 - (A22)', '018A22', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(124, 124, 'M-10x1 - (A-31)', '018A31', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(125, 125, 'M - 27x1 - (A-75)', '019A75', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(126, 126, '25 Tune (E) (H) Pod - (A-73)', '020A73', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(127, 127, '25 Tune -(H) Pod -(B-4)', '020B4', NULL, NULL, NULL, '0', '2017-05-18 11:59:54', 1, 'excel'),
(128, 1, 'Tamil -18x1 -(A-75)', '001A75', NULL, NULL, NULL, '0', '2017-05-18 12:01:06', 1, 'excel'),
(129, 2, 'Tamil -18x1 - (RM-18)', '001RM18', NULL, NULL, NULL, '0', '2017-05-18 12:01:06', 1, 'excel'),
(130, 3, 'Marathi - 22x1 - (A-75)', '002A75', NULL, NULL, NULL, '0', '2017-05-18 12:01:06', 1, 'excel'),
(131, 4, 'Marathi - 22x1 - (RM-18)', '002RM18', NULL, NULL, NULL, '0', '2017-05-18 12:01:06', 1, 'excel'),
(132, 5, 'Swami Samarth (S) - (A-77)', '002A77', NULL, NULL, NULL, '0', '2017-05-18 12:01:06', 1, 'excel'),
(133, 6, '25- Tune D.D. -(A-22)', '003A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:06', 1, 'excel'),
(134, 7, '25 Tune D.D.(A-31)', '003A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(135, 8, 'Tamil -25x1 -(JPE)', '004JPE', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(136, 9, 'Tamil -30x1 - (Rm-18)', '004RM18', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(137, 10, 'Tamil -30x1 - (A-75)', '004A75', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(138, 11, '30 Tune (H) -(A-22)', '005A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(139, 12, '30 Tune(H) - (A-74)', '005A74', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(140, 13, 'Ding Dong -(S) -(B-2)', '005B2', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(141, 14, '9- Tamil - (VR -2)', '006VR2', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(142, 15, 'Tamil - 9x1 - (JPE)', '006JPE', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(143, 16, 'Tamil -9x1 -(Rm-9)', '006RM9', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(144, 17, 'Aarti - (A-22)', '007A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:07', 1, 'excel'),
(145, 18, 'Aarti - (A-31)', '007A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(146, 19, 'Aarti -(B-2)', '007B2', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(147, 20, 'Asalam -(A-22)', '008A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(148, 21, 'Asalam & Koyal-(A-31)', '008A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(149, 22, 'T.T. Asalam- (B-2)', '008B2', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(150, 23, 'Azan - 8x1 - (A-31)', '009A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(151, 24, 'Azan -8x1 -(A-22)', '009A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(152, 25, 'Bird- 8x1 - (A-22)', '010A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(153, 26, 'Bird -8x1 - (A-31)', '010A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(154, 27, 'Bird -8x1 -(B-2)', '010B2', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(155, 28, 'C.Bell - (A-22)', '011A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:08', 1, 'excel'),
(156, 29, 'C.Bell - (A-31)', '011A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(157, 30, 'C.Bell - (A-42)', '011A42', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(158, 31, 'C.Bell - (B-2)', '011B2', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(159, 32, 'Ganesh -6x1 -(B-4)', '012B4', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(160, 33, 'Hind - 20x1 - (A-19)', '013A19', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(161, 34, 'Hind- 46x1 - (A-75)', '014A75', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(162, 35, 'Hind- 46x1 - (PB1 & PB2)', '014PB1PB2', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(163, 36, 'J.Bell-4x1 -(A-31)', '015A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(164, 37, 'J.Bell-4x1-(A-79)', '015A79', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(165, 38, 'J.Bell - 4x1 -(A-99)', '015A99', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(166, 39, 'J.Bell-6x1 -(A-22)', '015A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(167, 40, 'J.Bell-6x1 - (A-93)-Aarti', '015A93', NULL, NULL, NULL, '0', '2017-05-18 12:01:09', 1, 'excel'),
(168, 41, 'JMD - (A-22)', '016A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:10', 1, 'excel'),
(169, 42, 'JMD - (A-31)', '016A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:10', 1, 'excel'),
(170, 43, 'IPL & KDK - (A-22)', '017A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:10', 1, 'excel'),
(171, 44, 'IPL & KDK - (A-31) ', '017A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:10', 1, 'excel'),
(172, 45, 'M-10x1 - (A22)', '018A22', NULL, NULL, NULL, '0', '2017-05-18 12:01:10', 1, 'excel'),
(173, 46, 'M-10x1 - (A-31)', '018A31', NULL, NULL, NULL, '0', '2017-05-18 12:01:10', 1, 'excel'),
(174, 47, 'M - 27x1 - (A-75)', '019A75', NULL, NULL, NULL, '0', '2017-05-18 12:01:10', 1, 'excel'),
(175, 48, '25 Tune (E) (H) Pod - (A-73)', '020A73', NULL, NULL, NULL, '0', '2017-05-18 12:01:10', 1, 'excel'),
(176, 49, '25 Tune -(H) Pod -(B-4)', '020B4', NULL, NULL, NULL, '0', '2017-05-18 12:01:10', 1, 'excel'),
(177, 1, 'Tamil -18x1 -(A-75)', '001A75', NULL, NULL, NULL, '0', '2017-05-18 12:06:33', 1, 'excel'),
(178, 2, 'Tamil -18x1 - (RM-18)', '001RM18', NULL, NULL, NULL, '0', '2017-05-18 12:06:33', 1, 'excel'),
(179, 3, 'Marathi - 22x1 - (A-75)', '002A75', NULL, NULL, NULL, '0', '2017-05-18 12:06:33', 1, 'excel'),
(180, 4, 'Marathi - 22x1 - (RM-18)', '002RM18', NULL, NULL, NULL, '0', '2017-05-18 12:06:33', 1, 'excel'),
(181, 5, 'Swami Samarth (S) - (A-77)', '002A77', NULL, NULL, NULL, '0', '2017-05-18 12:06:33', 1, 'excel'),
(182, 6, '25- Tune D.D. -(A-22)', '003A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:33', 1, 'excel'),
(183, 7, '25 Tune D.D.(A-31)', '003A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:33', 1, 'excel'),
(184, 8, 'Tamil -25x1 -(JPE)', '004JPE', NULL, NULL, NULL, '0', '2017-05-18 12:06:33', 1, 'excel'),
(185, 9, 'Tamil -30x1 - (Rm-18)', '004RM18', NULL, NULL, NULL, '0', '2017-05-18 12:06:33', 1, 'excel'),
(186, 10, 'Tamil -30x1 - (A-75)', '004A75', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(187, 11, '30 Tune (H) -(A-22)', '005A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(188, 12, '30 Tune(H) - (A-74)', '005A74', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(189, 13, 'Ding Dong -(S) -(B-2)', '005B2', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(190, 14, '9- Tamil - (VR -2)', '006VR2', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(191, 15, 'Tamil - 9x1 - (JPE)', '006JPE', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(192, 16, 'Tamil -9x1 -(Rm-9)', '006RM9', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(193, 17, 'Aarti - (A-22)', '007A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(194, 18, 'Aarti - (A-31)', '007A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(195, 19, 'Aarti -(B-2)', '007B2', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(196, 20, 'Asalam -(A-22)', '008A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(197, 21, 'Asalam & Koyal-(A-31)', '008A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:34', 1, 'excel'),
(198, 22, 'T.T. Asalam- (B-2)', '008B2', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(199, 23, 'Azan - 8x1 - (A-31)', '009A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(200, 24, 'Azan -8x1 -(A-22)', '009A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(201, 25, 'Bird- 8x1 - (A-22)', '010A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(202, 26, 'Bird -8x1 - (A-31)', '010A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(203, 27, 'Bird -8x1 -(B-2)', '010B2', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(204, 28, 'C.Bell - (A-22)', '011A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(205, 29, 'C.Bell - (A-31)', '011A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(206, 30, 'C.Bell - (A-42)', '011A42', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(207, 31, 'C.Bell - (B-2)', '011B2', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(208, 32, 'Ganesh -6x1 -(B-4)', '012B4', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(209, 33, 'Hind - 20x1 - (A-19)', '013A19', NULL, NULL, NULL, '0', '2017-05-18 12:06:35', 1, 'excel'),
(210, 34, 'Hind- 46x1 - (A-75)', '014A75', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(211, 35, 'Hind- 46x1 - (PB1 & PB2)', '014PB1PB2', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(212, 36, 'J.Bell-4x1 -(A-31)', '015A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(213, 37, 'J.Bell-4x1-(A-79)', '015A79', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(214, 38, 'J.Bell - 4x1 -(A-99)', '015A99', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(215, 39, 'J.Bell-6x1 -(A-22)', '015A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(216, 40, 'J.Bell-6x1 - (A-93)-Aarti', '015A93', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(217, 41, 'JMD - (A-22)', '016A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(218, 42, 'JMD - (A-31)', '016A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(219, 43, 'IPL & KDK - (A-22)', '017A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(220, 44, 'IPL & KDK - (A-31) ', '017A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(221, 45, 'M-10x1 - (A22)', '018A22', NULL, NULL, NULL, '0', '2017-05-18 12:06:36', 1, 'excel'),
(222, 46, 'M-10x1 - (A-31)', '018A31', NULL, NULL, NULL, '0', '2017-05-18 12:06:37', 1, 'excel'),
(223, 47, 'M - 27x1 - (A-75)', '019A75', NULL, NULL, NULL, '0', '2017-05-18 12:06:37', 1, 'excel'),
(224, 48, '25 Tune (E) (H) Pod - (A-73)', '020A73', NULL, NULL, NULL, '0', '2017-05-18 12:06:37', 1, 'excel'),
(225, 49, '25 Tune -(H) Pod -(B-4)', '020B4', NULL, NULL, NULL, '0', '2017-05-18 12:06:37', 1, 'excel'),
(226, 1, 'Tamil -18x1 -(A-75)', '001A75', NULL, NULL, NULL, '0', '2017-05-18 12:07:58', 1, 'excel'),
(227, 51, 'Tamil -18x1 - (RM-18)', '001RM18', NULL, NULL, NULL, '0', '2017-05-18 12:07:58', 1, 'excel'),
(228, 52, 'Marathi - 22x1 - (A-75)', '002A75', NULL, NULL, NULL, '0', '2017-05-18 12:07:58', 1, 'excel'),
(229, 53, 'Marathi - 22x1 - (RM-18)', '002RM18', NULL, NULL, NULL, '0', '2017-05-18 12:07:58', 1, 'excel'),
(230, 54, 'Swami Samarth (S) - (A-77)', '002A77', NULL, NULL, NULL, '0', '2017-05-18 12:07:58', 1, 'excel'),
(231, 55, '25- Tune D.D. -(A-22)', '003A22', NULL, NULL, NULL, '0', '2017-05-18 12:07:58', 1, 'excel'),
(232, 56, '25 Tune D.D.(A-31)', '003A31', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(233, 57, 'Tamil -25x1 -(JPE)', '004JPE', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(234, 58, 'Tamil -30x1 - (Rm-18)', '004RM18', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(235, 59, 'Tamil -30x1 - (A-75)', '004A75', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(236, 60, '30 Tune (H) -(A-22)', '005A22', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(237, 61, '30 Tune(H) - (A-74)', '005A74', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(238, 62, 'Ding Dong -(S) -(B-2)', '005B2', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(239, 63, '9- Tamil - (VR -2)', '006VR2', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(240, 64, 'Tamil - 9x1 - (JPE)', '006JPE', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(241, 65, 'Tamil -9x1 -(Rm-9)', '006RM9', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(242, 66, 'Aarti - (A-22)', '007A22', NULL, NULL, NULL, '0', '2017-05-18 12:07:59', 1, 'excel'),
(243, 67, 'Aarti - (A-31)', '007A31', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(244, 68, 'Aarti -(B-2)', '007B2', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(245, 69, 'Asalam -(A-22)', '008A22', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(246, 70, 'Asalam & Koyal-(A-31)', '008A31', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(247, 71, 'T.T. Asalam- (B-2)', '008B2', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(248, 72, 'Azan - 8x1 - (A-31)', '009A31', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(249, 73, 'Azan -8x1 -(A-22)', '009A22', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(250, 74, 'Bird- 8x1 - (A-22)', '010A22', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(251, 75, 'Bird -8x1 - (A-31)', '010A31', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(252, 76, 'Bird -8x1 -(B-2)', '010B2', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(253, 77, 'C.Bell - (A-22)', '011A22', NULL, NULL, NULL, '0', '2017-05-18 12:08:00', 1, 'excel'),
(254, 78, 'C.Bell - (A-31)', '011A31', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(255, 79, 'C.Bell - (A-42)', '011A42', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(256, 80, 'C.Bell - (B-2)', '011B2', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(257, 81, 'Ganesh -6x1 -(B-4)', '012B4', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(258, 82, 'Hind - 20x1 - (A-19)', '013A19', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(259, 83, 'Hind- 46x1 - (A-75)', '014A75', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(260, 84, 'Hind- 46x1 - (PB1 & PB2)', '014PB1PB2', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(261, 85, 'J.Bell-4x1 -(A-31)', '015A31', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(262, 86, 'J.Bell-4x1-(A-79)', '015A79', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(263, 87, 'J.Bell - 4x1 -(A-99)', '015A99', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(264, 88, 'J.Bell-6x1 -(A-22)', '015A22', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(265, 89, 'J.Bell-6x1 - (A-93)-Aarti', '015A93', NULL, NULL, NULL, '0', '2017-05-18 12:08:01', 1, 'excel'),
(266, 90, 'JMD - (A-22)', '016A22', NULL, NULL, NULL, '0', '2017-05-18 12:08:02', 1, 'excel'),
(267, 91, 'JMD - (A-31)', '016A31', NULL, NULL, NULL, '0', '2017-05-18 12:08:02', 1, 'excel'),
(268, 92, 'IPL & KDK - (A-22)', '017A22', NULL, NULL, NULL, '0', '2017-05-18 12:08:02', 1, 'excel'),
(269, 93, 'IPL & KDK - (A-31) ', '017A31', NULL, NULL, NULL, '0', '2017-05-18 12:08:02', 1, 'excel'),
(270, 94, 'M-10x1 - (A22)', '018A22', NULL, NULL, NULL, '0', '2017-05-18 12:08:02', 1, 'excel'),
(271, 95, 'M-10x1 - (A-31)', '018A31', NULL, NULL, NULL, '0', '2017-05-18 12:08:02', 1, 'excel'),
(272, 96, 'M - 27x1 - (A-75)', '019A75', NULL, NULL, NULL, '0', '2017-05-18 12:08:02', 1, 'excel'),
(273, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', NULL, NULL, NULL, '0', '2017-05-18 12:08:02', 1, 'excel'),
(274, 98, '25 Tune -(H) Pod -(B-4)', '020B4', NULL, NULL, NULL, '0', '2017-05-18 12:08:02', 1, 'excel'),
(275, 1, 'Tamil -18x1 -(A-75)', '001A75', 10.00, NULL, NULL, '0', '2017-05-18 12:17:32', 1, 'excel'),
(276, 51, 'Tamil -18x1 - (RM-18)', '001RM18', 12.00, NULL, NULL, '0', '2017-05-18 12:17:32', 1, 'excel'),
(277, 52, 'Marathi - 22x1 - (A-75)', '002A75', 11.00, NULL, NULL, '0', '2017-05-18 12:17:32', 1, 'excel'),
(278, 53, 'Marathi - 22x1 - (RM-18)', '002RM18', 11.00, NULL, NULL, '0', '2017-05-18 12:17:32', 1, 'excel'),
(279, 54, 'Swami Samarth (S) - (A-77)', '002A77', 12.00, NULL, NULL, '0', '2017-05-18 12:17:32', 1, 'excel'),
(280, 55, '25- Tune D.D. -(A-22)', '003A22', 13.00, NULL, NULL, '0', '2017-05-18 12:17:32', 1, 'excel'),
(281, 56, '25 Tune D.D.(A-31)', '003A31', 14.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(282, 57, 'Tamil -25x1 -(JPE)', '004JPE', 15.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(283, 58, 'Tamil -30x1 - (Rm-18)', '004RM18', 16.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(284, 59, 'Tamil -30x1 - (A-75)', '004A75', 17.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(285, 60, '30 Tune (H) -(A-22)', '005A22', 18.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(286, 61, '30 Tune(H) - (A-74)', '005A74', 19.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(287, 62, 'Ding Dong -(S) -(B-2)', '005B2', 20.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(288, 63, '9- Tamil - (VR -2)', '006VR2', 21.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(289, 64, 'Tamil - 9x1 - (JPE)', '006JPE', 22.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(290, 65, 'Tamil -9x1 -(Rm-9)', '006RM9', 23.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(291, 66, 'Aarti - (A-22)', '007A22', 24.00, NULL, NULL, '0', '2017-05-18 12:17:33', 1, 'excel'),
(292, 67, 'Aarti - (A-31)', '007A31', 25.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(293, 68, 'Aarti -(B-2)', '007B2', 26.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(294, 69, 'Asalam -(A-22)', '008A22', 27.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(295, 70, 'Asalam & Koyal-(A-31)', '008A31', 28.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(296, 71, 'T.T. Asalam- (B-2)', '008B2', 29.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(297, 72, 'Azan - 8x1 - (A-31)', '009A31', 30.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(298, 73, 'Azan -8x1 -(A-22)', '009A22', 31.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(299, 74, 'Bird- 8x1 - (A-22)', '010A22', 32.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(300, 75, 'Bird -8x1 - (A-31)', '010A31', 33.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(301, 76, 'Bird -8x1 -(B-2)', '010B2', 34.00, NULL, NULL, '0', '2017-05-18 12:17:34', 1, 'excel'),
(302, 77, 'C.Bell - (A-22)', '011A22', 35.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(303, 78, 'C.Bell - (A-31)', '011A31', 36.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(304, 79, 'C.Bell - (A-42)', '011A42', 37.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(305, 80, 'C.Bell - (B-2)', '011B2', 38.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(306, 81, 'Ganesh -6x1 -(B-4)', '012B4', 39.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(307, 82, 'Hind - 20x1 - (A-19)', '013A19', 40.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(308, 83, 'Hind- 46x1 - (A-75)', '014A75', 41.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(309, 84, 'Hind- 46x1 - (PB1 & PB2)', '014PB1PB2', 42.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(310, 85, 'J.Bell-4x1 -(A-31)', '015A31', 43.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(311, 86, 'J.Bell-4x1-(A-79)', '015A79', 44.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(312, 87, 'J.Bell - 4x1 -(A-99)', '015A99', 45.00, NULL, NULL, '0', '2017-05-18 12:17:35', 1, 'excel'),
(313, 88, 'J.Bell-6x1 -(A-22)', '015A22', 46.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(314, 89, 'J.Bell-6x1 - (A-93)-Aarti', '015A93', 47.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(315, 90, 'JMD - (A-22)', '016A22', 48.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(316, 91, 'JMD - (A-31)', '016A31', 49.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(317, 92, 'IPL & KDK - (A-22)', '017A22', 50.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(318, 93, 'IPL & KDK - (A-31) ', '017A31', 51.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(319, 94, 'M-10x1 - (A22)', '018A22', 52.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(320, 95, 'M-10x1 - (A-31)', '018A31', 53.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(321, 96, 'M - 27x1 - (A-75)', '019A75', 54.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(322, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(323, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, NULL, NULL, '0', '2017-05-18 12:17:36', 1, 'excel'),
(324, 1, 'Tamil -18x1 -(A-75)', '001A75', 10.00, 45.00, NULL, '0', '2017-05-18 12:20:57', 1, 'excel'),
(325, 51, 'Tamil -18x1 - (RM-18)', '001RM18', 12.00, 5.00, NULL, '0', '2017-05-18 12:20:57', 1, 'excel'),
(326, 52, 'Marathi - 22x1 - (A-75)', '002A75', 11.00, 5.00, NULL, '0', '2017-05-18 12:20:57', 1, 'excel'),
(327, 53, 'Marathi - 22x1 - (RM-18)', '002RM18', 11.00, 5.00, NULL, '0', '2017-05-18 12:20:57', 1, 'excel'),
(328, 54, 'Swami Samarth (S) - (A-77)', '002A77', 12.00, 5.00, NULL, '0', '2017-05-18 12:20:57', 1, 'excel'),
(329, 55, '25- Tune D.D. -(A-22)', '003A22', 13.00, 5.00, NULL, '0', '2017-05-18 12:20:57', 1, 'excel'),
(330, 56, '25 Tune D.D.(A-31)', '003A31', 14.00, 5.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(331, 57, 'Tamil -25x1 -(JPE)', '004JPE', 15.00, 5.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(332, 58, 'Tamil -30x1 - (Rm-18)', '004RM18', 16.00, 45.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(333, 59, 'Tamil -30x1 - (A-75)', '004A75', 17.00, 5.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(334, 60, '30 Tune (H) -(A-22)', '005A22', 18.00, 4.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(335, 61, '30 Tune(H) - (A-74)', '005A74', 19.00, 5.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(336, 62, 'Ding Dong -(S) -(B-2)', '005B2', 20.00, 6.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(337, 63, '9- Tamil - (VR -2)', '006VR2', 21.00, 7.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(338, 64, 'Tamil - 9x1 - (JPE)', '006JPE', 22.00, 8.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(339, 65, 'Tamil -9x1 -(Rm-9)', '006RM9', 23.00, 9.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(340, 66, 'Aarti - (A-22)', '007A22', 24.00, 10.00, NULL, '0', '2017-05-18 12:20:58', 1, 'excel'),
(341, 67, 'Aarti - (A-31)', '007A31', 25.00, 11.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(342, 68, 'Aarti -(B-2)', '007B2', 26.00, 12.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(343, 69, 'Asalam -(A-22)', '008A22', 27.00, 13.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(344, 70, 'Asalam & Koyal-(A-31)', '008A31', 28.00, 14.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(345, 71, 'T.T. Asalam- (B-2)', '008B2', 29.00, 15.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(346, 72, 'Azan - 8x1 - (A-31)', '009A31', 30.00, 16.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(347, 73, 'Azan -8x1 -(A-22)', '009A22', 31.00, 17.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(348, 74, 'Bird- 8x1 - (A-22)', '010A22', 32.00, 18.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(349, 75, 'Bird -8x1 - (A-31)', '010A31', 33.00, 19.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(350, 76, 'Bird -8x1 -(B-2)', '010B2', 34.00, 20.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(351, 77, 'C.Bell - (A-22)', '011A22', 35.00, 21.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(352, 78, 'C.Bell - (A-31)', '011A31', 36.00, 22.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(353, 79, 'C.Bell - (A-42)', '011A42', 37.00, 23.00, NULL, '0', '2017-05-18 12:20:59', 1, 'excel'),
(354, 80, 'C.Bell - (B-2)', '011B2', 38.00, 24.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(355, 81, 'Ganesh -6x1 -(B-4)', '012B4', 39.00, 25.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(356, 82, 'Hind - 20x1 - (A-19)', '013A19', 40.00, 26.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(357, 83, 'Hind- 46x1 - (A-75)', '014A75', 41.00, 27.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(358, 84, 'Hind- 46x1 - (PB1 & PB2)', '014PB1PB2', 42.00, 28.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(359, 85, 'J.Bell-4x1 -(A-31)', '015A31', 43.00, 29.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(360, 86, 'J.Bell-4x1-(A-79)', '015A79', 44.00, 30.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(361, 87, 'J.Bell - 4x1 -(A-99)', '015A99', 45.00, 31.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(362, 88, 'J.Bell-6x1 -(A-22)', '015A22', 46.00, 32.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(363, 89, 'J.Bell-6x1 - (A-93)-Aarti', '015A93', 47.00, 33.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(364, 90, 'JMD - (A-22)', '016A22', 48.00, 34.00, NULL, '0', '2017-05-18 12:21:00', 1, 'excel'),
(365, 91, 'JMD - (A-31)', '016A31', 49.00, 35.00, NULL, '0', '2017-05-18 12:21:01', 1, 'excel'),
(366, 92, 'IPL & KDK - (A-22)', '017A22', 50.00, 36.00, NULL, '0', '2017-05-18 12:21:01', 1, 'excel'),
(367, 93, 'IPL & KDK - (A-31) ', '017A31', 51.00, 37.00, NULL, '0', '2017-05-18 12:21:01', 1, 'excel'),
(368, 94, 'M-10x1 - (A22)', '018A22', 52.00, 38.00, NULL, '0', '2017-05-18 12:21:01', 1, 'excel'),
(369, 95, 'M-10x1 - (A-31)', '018A31', 53.00, 39.00, NULL, '0', '2017-05-18 12:21:01', 1, 'excel'),
(370, 96, 'M - 27x1 - (A-75)', '019A75', 54.00, 40.00, NULL, '0', '2017-05-18 12:21:01', 1, 'excel'),
(371, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 41.00, NULL, '0', '2017-05-18 12:21:01', 1, 'excel'),
(372, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 42.00, NULL, '0', '2017-05-18 12:21:01', 1, 'excel'),
(373, 1, 'Tamil -18x1 -(A-75)', '001A75', 10.00, 451.00, NULL, '0', '2017-05-18 12:22:10', 1, 'manual'),
(374, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 41.00, NULL, '0', '2017-05-19 13:27:13', 1, 'manual'),
(375, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 41.00, NULL, '0', '2017-05-20 15:53:13', 1, 'manual'),
(376, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 40.00, NULL, '0', '2017-05-20 16:18:03', 1, 'invoice'),
(377, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 41.00, NULL, '0', '2017-05-20 16:18:03', 1, 'invoice'),
(378, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 39.00, NULL, '0', '2017-05-20 16:57:33', 1, 'invoice'),
(379, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 40.00, NULL, '0', '2017-05-20 16:57:33', 1, 'invoice'),
(380, 56, '25 Tune D.D.(A-31)', '003A31', 14.00, 4.00, NULL, '0', '2017-05-20 16:57:33', 1, 'invoice'),
(381, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 37.00, NULL, '0', '2017-05-22 17:02:08', 1, 'invoice'),
(382, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 38.00, NULL, '0', '2017-05-22 17:02:09', 1, 'invoice'),
(383, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 37.00, NULL, '0', '2017-05-22 18:00:27', 1, 'invoice'),
(384, 56, '25 Tune D.D.(A-31)', '003A31', 14.00, 3.00, NULL, '0', '2017-05-22 18:00:27', 1, 'invoice'),
(385, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 36.00, NULL, '0', '2017-05-22 18:00:27', 1, 'invoice'),
(386, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 33.00, NULL, '0', '2017-05-23 12:19:33', 1, 'invoice'),
(387, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 34.00, NULL, '0', '2017-05-23 12:19:33', 1, 'invoice'),
(388, 56, '25 Tune D.D.(A-31)', '003A31', 14.00, 0.00, NULL, '0', '2017-05-23 12:19:33', 1, 'invoice'),
(389, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 31.00, NULL, '0', '2017-05-23 13:04:23', 1, 'invoice'),
(390, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 29.00, NULL, '0', '2017-05-24 13:17:12', 1, 'invoice'),
(424, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 28.00, NULL, '0', '2017-05-25 12:03:44', 1, 'invoice'),
(425, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 27.00, NULL, '0', '2017-05-25 18:47:22', 1, 'invoice'),
(426, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 33.00, NULL, '0', '2017-05-25 18:47:22', 1, 'invoice'),
(427, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 26.00, NULL, '0', '2017-05-25 18:53:40', 1, 'invoice'),
(428, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 32.00, NULL, '0', '2017-05-25 18:53:40', 1, 'invoice'),
(429, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 25.00, NULL, '0', '2017-05-25 18:55:14', 1, 'invoice'),
(430, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 24.00, NULL, '0', '2017-05-26 14:18:05', 1, 'invoice'),
(431, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 31.00, NULL, '0', '2017-05-26 14:18:05', 1, 'invoice'),
(432, 55, '25- Tune D.D. -(A-22)', '003A22', 13.00, 4.00, NULL, '0', '2017-05-26 14:18:05', 1, 'invoice'),
(433, 99, 'item-test', '00123', 13.00, 30.00, NULL, '0', '2017-05-27 13:02:38', 1, 'manual'),
(434, 99, 'item-test', '00123', 13.00, 35.00, NULL, '0', '2017-05-27 13:03:49', 1, 'manual'),
(435, 103, 'ravin', 'testqq', NULL, NULL, NULL, '0', '2017-05-27 13:24:11', NULL, 'testr'),
(436, 103, 'ravin', 'testqq', 111.00, 111.00, NULL, '0', '2017-05-27 13:24:11', 1, 'manual'),
(438, 61, '30 Tune(H) - (A-74)', '005A74', 19.00, 4.00, NULL, '0', '2017-05-29 13:56:25', 1, 'invoice'),
(439, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 23.00, NULL, '0', '2017-05-29 14:19:00', 1, 'invoice'),
(440, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 22.00, NULL, '0', '2017-05-29 15:26:17', 2, 'invoice'),
(441, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 21.00, NULL, '0', '2017-05-29 15:31:22', 1, 'invoice'),
(442, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 20.00, NULL, '0', '2017-05-29 15:40:12', 1, 'invoice'),
(443, 75, 'Bird -8x1 - (A-31)', '010A31', 33.00, 18.00, NULL, '0', '2017-05-29 15:44:02', 1, 'invoice'),
(444, 76, 'Bird -8x1 -(B-2)', '010B2', 34.00, 18.00, NULL, '0', '2017-05-29 15:44:02', 1, 'invoice'),
(445, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 30.00, NULL, '0', '2017-05-29 15:47:46', 1, 'invoice'),
(446, 75, 'Bird -8x1 - (A-31)', '010A31', 33.00, 17.00, NULL, '0', '2017-05-29 15:57:57', 1, 'invoice'),
(447, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 29.00, NULL, '0', '2017-05-29 16:02:38', 1, 'invoice'),
(448, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 19.00, NULL, '0', '2017-05-29 16:04:12', 1, 'invoice'),
(449, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 18.00, NULL, '0', '2017-05-29 18:08:43', 1, 'invoice'),
(450, 103, 'ravin', 'testqq', 111.00, 110.00, NULL, '0', '2017-05-29 18:16:45', 1, 'invoice'),
(452, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 17.00, NULL, '0', '2017-05-30 16:15:24', 1, 'invoice'),
(453, 97, '25 Tune (E) (H) Pod - (A-73)', '020A73', 55.00, 16.00, NULL, '0', '2017-06-01 15:23:07', 1, 'invoice'),
(454, 98, '25 Tune -(H) Pod -(B-4)', '020B4', 56.00, 28.00, NULL, '0', '2017-06-01 15:23:07', 1, 'invoice');

-- --------------------------------------------------------

--
-- Table structure for table `items_temp`
--

CREATE TABLE `items_temp` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `item_code` varchar(20) NOT NULL,
  `item_price` double(10,2) DEFAULT NULL,
  `item_quantity` double(10,2) DEFAULT NULL,
  `description` text,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modify_date` datetime DEFAULT NULL,
  `modify_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pettylist`
--

CREATE TABLE `pettylist` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(10) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pettylist`
--

INSERT INTO `pettylist` (`id`, `name`, `reason`, `amount`, `created_date`, `created_by`, `status`) VALUES
(1, 'ravi', 'test', 100.00, '2017-05-24 16:52:16', 1, '0'),
(2, 'ravi1', 'test', 123.00, '2017-05-29 16:57:21', 1, '1'),
(3, 'rast(singh85.ravindra@gmail.com1)', 'qwdwq', 3223.00, '2017-05-29 17:01:01', 1, '1'),
(4, 'ravindra', 'singh', 100.00, '2017-05-29 17:41:15', 1, '1'),
(5, 'ravindra', 'test', 8000.00, '2017-05-30 11:05:36', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users_log`
--

CREATE TABLE `users_log` (
  `id` int(11) NOT NULL,
  `login_user_id` int(11) DEFAULT NULL,
  `login_date` datetime DEFAULT NULL,
  `logout_date` datetime DEFAULT NULL,
  `user_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_log`
--

INSERT INTO `users_log` (`id`, `login_user_id`, `login_date`, `logout_date`, `user_type`) VALUES
(1, 1, '2017-05-15 12:48:08', NULL, 'admin'),
(2, 1, '2017-05-15 12:56:28', NULL, 'admin'),
(3, 1, '2017-05-15 13:00:17', NULL, 'admin'),
(4, 1, '2017-05-15 13:39:41', NULL, 'admin'),
(5, 1, '2017-05-15 13:43:39', NULL, 'admin'),
(6, 1, '2017-05-15 16:16:45', NULL, 'admin'),
(7, 1, '2017-05-15 16:51:21', NULL, 'admin'),
(8, 1, '2017-05-15 17:01:30', NULL, 'admin'),
(9, 1, '2017-05-15 17:05:17', NULL, 'admin'),
(10, 1, '2017-05-15 17:07:33', NULL, 'admin'),
(11, 1, '2017-05-15 17:08:07', NULL, 'admin'),
(12, 1, '2017-05-15 17:46:05', NULL, 'admin'),
(13, 1, '2017-05-16 10:23:07', NULL, 'admin'),
(14, 1, '2017-05-16 10:25:54', NULL, 'admin'),
(15, 1, '2017-05-16 10:27:06', NULL, 'admin'),
(16, 1, '2017-05-16 10:27:24', NULL, 'admin'),
(17, 1, '2017-05-16 10:29:55', NULL, 'admin'),
(18, 1, '2017-05-16 11:33:56', NULL, 'admin'),
(19, 1, '2017-05-16 11:36:35', NULL, 'admin'),
(20, 1, '2017-05-16 12:17:09', NULL, 'admin'),
(21, 1, '2017-05-16 13:02:10', NULL, 'admin'),
(22, 1, '2017-05-16 13:53:50', NULL, 'admin'),
(23, 1, '2017-05-17 13:31:53', NULL, 'admin'),
(24, 1, '2017-05-17 14:33:06', NULL, 'admin'),
(25, 1, '2017-05-17 15:23:44', NULL, 'admin'),
(26, 1, '2017-05-17 18:20:21', NULL, 'admin'),
(27, 1, '2017-05-18 10:18:46', NULL, 'admin'),
(28, 1, '2017-05-18 12:48:46', NULL, 'admin'),
(29, 1, '2017-05-18 13:32:19', NULL, 'admin'),
(30, 1, '2017-05-18 15:05:51', NULL, 'admin'),
(31, 1, '2017-05-19 09:37:12', NULL, 'admin'),
(32, 1, '2017-05-19 11:20:33', NULL, 'admin'),
(33, 1, '2017-05-19 14:36:49', NULL, 'admin'),
(34, 1, '2017-05-20 10:03:06', NULL, 'admin'),
(35, 1, '2017-05-20 14:07:20', NULL, 'admin'),
(36, 1, '2017-05-22 10:18:07', NULL, 'admin'),
(37, 1, '2017-05-22 10:30:24', NULL, 'admin'),
(38, 1, '2017-05-22 13:33:59', NULL, 'admin'),
(39, 1, '2017-05-22 17:51:38', NULL, 'admin'),
(40, 1, '2017-05-22 17:52:05', NULL, 'admin'),
(41, 1, '2017-05-22 17:53:35', NULL, 'admin'),
(42, 1, '2017-05-23 10:19:30', NULL, 'admin'),
(43, 1, '2017-05-23 13:02:37', NULL, 'admin'),
(44, 1, '2017-05-23 13:56:13', NULL, 'admin'),
(45, 1, '2017-05-23 15:14:24', NULL, 'admin'),
(46, 1, '2017-05-23 17:08:47', NULL, 'admin'),
(47, 1, '2017-05-24 10:19:55', NULL, 'admin'),
(48, 1, '2017-05-24 13:10:28', NULL, 'admin'),
(49, 1, '2017-05-24 14:28:15', NULL, 'admin'),
(50, 1, '2017-05-24 14:28:31', NULL, 'admin'),
(51, 1, '2017-05-24 14:43:39', NULL, 'admin'),
(52, 1, '2017-05-24 16:19:36', NULL, 'admin'),
(53, 1, '2017-05-25 10:08:07', NULL, 'admin'),
(54, 1, '2017-05-25 12:58:12', NULL, 'admin'),
(55, 1, '2017-05-25 17:08:26', NULL, 'admin'),
(56, 1, '2017-05-26 10:19:38', NULL, 'admin'),
(57, 1, '2017-05-26 13:51:14', NULL, 'admin'),
(58, 1, '2017-05-26 15:09:26', NULL, 'admin'),
(59, 1, '2017-05-26 15:09:30', NULL, 'admin'),
(60, 1, '2017-05-26 15:09:36', NULL, 'admin'),
(61, 1, '2017-05-26 17:19:56', NULL, 'admin'),
(62, 1, '2017-05-27 10:18:49', NULL, 'admin'),
(63, 1, '2017-05-27 13:02:11', NULL, 'admin'),
(64, 1, '2017-05-27 14:15:04', NULL, 'admin'),
(65, 1, '2017-05-27 15:39:41', NULL, 'admin'),
(66, 1, '2017-05-27 18:42:03', NULL, 'admin'),
(67, 1, '2017-05-27 18:53:45', NULL, 'admin'),
(68, 1, '2017-05-29 10:10:07', NULL, 'admin'),
(69, 1, '2017-05-29 10:45:22', NULL, 'admin'),
(70, 1, '2017-05-29 13:52:01', NULL, 'admin'),
(71, 2, '2017-05-29 14:58:37', NULL, 'admin'),
(72, 1, '2017-05-29 15:29:26', NULL, 'admin'),
(73, 1, '2017-05-29 16:09:22', NULL, 'admin'),
(74, 2, '2017-05-29 16:13:43', NULL, 'admin'),
(75, 1, '2017-05-29 16:14:04', NULL, 'admin'),
(76, 2, '2017-05-29 17:01:13', NULL, 'admin'),
(77, 1, '2017-05-29 17:01:24', NULL, 'admin'),
(78, 2, '2017-05-29 18:06:35', NULL, 'admin'),
(79, 1, '2017-05-29 18:06:49', NULL, 'admin'),
(80, 1, '2017-05-30 10:10:46', NULL, 'admin'),
(81, 1, '2017-05-30 13:21:05', NULL, 'admin'),
(82, 2, '2017-05-30 13:22:19', NULL, 'admin'),
(83, 1, '2017-05-30 13:22:38', NULL, 'admin'),
(84, 1, '2017-05-30 14:16:09', NULL, 'admin'),
(85, 2, '2017-05-30 14:49:59', NULL, 'admin'),
(86, 1, '2017-05-30 14:50:09', NULL, 'admin'),
(87, 1, '2017-05-30 15:12:20', NULL, 'admin'),
(88, 1, '2017-05-30 16:19:23', NULL, 'admin'),
(89, 1, '2017-05-30 16:33:48', NULL, 'admin'),
(90, 1, '2017-05-30 16:34:14', NULL, 'admin'),
(91, 1, '2017-05-30 18:48:32', NULL, 'admin'),
(92, 1, '2017-05-31 10:15:44', NULL, 'admin'),
(93, 1, '2017-05-31 10:31:26', NULL, 'admin'),
(94, 1, '2017-05-31 10:32:13', NULL, 'admin'),
(95, 1, '2017-05-31 10:32:18', NULL, 'admin'),
(96, 1, '2017-05-31 10:53:13', NULL, 'admin'),
(97, 1, '2017-05-31 11:39:38', NULL, 'admin'),
(98, 1, '2017-05-31 11:39:50', NULL, 'admin'),
(99, 1, '2017-05-31 12:04:16', NULL, 'admin'),
(100, 1, '2017-05-31 12:23:11', NULL, 'admin'),
(101, 1, '2017-05-31 13:00:08', NULL, 'admin'),
(102, 1, '2017-05-31 14:06:04', NULL, 'admin'),
(103, 1, '2017-05-31 14:07:52', NULL, 'admin'),
(104, 1, '2017-05-31 14:09:55', NULL, 'admin'),
(105, 1, '2017-05-31 14:11:22', NULL, 'admin'),
(106, 1, '2017-05-31 14:19:30', NULL, 'admin'),
(107, 1, '2017-05-31 14:19:58', NULL, 'admin'),
(108, 1, '2017-05-31 14:20:36', NULL, 'admin'),
(109, 1, '2017-05-31 14:20:49', NULL, 'admin'),
(110, 1, '2017-05-31 14:21:49', NULL, 'admin'),
(111, 1, '2017-05-31 15:08:10', NULL, 'admin'),
(112, 1, '2017-05-31 17:00:28', NULL, 'admin'),
(113, 1, '2017-06-01 10:38:09', NULL, 'admin'),
(114, 1, '2017-06-01 14:43:04', NULL, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customer_log`
--
ALTER TABLE `customer_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_temp`
--
ALTER TABLE `customer_temp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_code` (`item_code`),
  ADD KEY `name` (`name`,`item_code`);

--
-- Indexes for table `items_log`
--
ALTER TABLE `items_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items_temp`
--
ALTER TABLE `items_temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pettylist`
--
ALTER TABLE `pettylist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_log`
--
ALTER TABLE `users_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `customer_log`
--
ALTER TABLE `customer_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
--
-- AUTO_INCREMENT for table `customer_temp`
--
ALTER TABLE `customer_temp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `items_log`
--
ALTER TABLE `items_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;
--
-- AUTO_INCREMENT for table `items_temp`
--
ALTER TABLE `items_temp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pettylist`
--
ALTER TABLE `pettylist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users_log`
--
ALTER TABLE `users_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
