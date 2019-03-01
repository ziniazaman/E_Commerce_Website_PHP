-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2017 at 04:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE IF NOT EXISTS `day` (
`day_id` int(11) NOT NULL,
  `day_name` varchar(11) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`day_id`, `day_name`, `package_id`) VALUES
(12, 'sunday', 6),
(13, 'friday', 6),
(28, 'sunday', 8),
(29, 'sunday', 9),
(30, 'sunday', 10),
(31, 'tuesday', 10),
(46, 'tuesday', 17),
(47, 'wednesday', 17),
(48, 'thursday', 17),
(60, 'monday', 24),
(61, 'wednesday', 24),
(62, 'saturday', 26),
(63, 'monday', 26),
(64, 'tuesday', 26),
(65, 'thursday', 26),
(67, 'tuesday', 29),
(68, 'sunday', 30),
(69, 'thursday', 30),
(76, 'friday', 37),
(78, 'saturday', 39),
(79, 'sunday', 39),
(80, 'tuesday', 39),
(81, 'thursday', 39),
(82, 'friday', 39),
(83, 'wednesday', 40),
(84, 'friday', 40);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
`item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `package_id`) VALUES
(17, 'katan silk shari', 6),
(18, 'French Fry', 5),
(32, 'egg curry', 8),
(33, 'cupcake', 9),
(34, 'cotton shari', 10),
(35, 'tangail shari', 10),
(45, 'Benaroshi shari', 17),
(46, 'Jamdani shari', 17),
(66, 'Necklace', 24),
(67, 'Necklace', 24),
(68, 'earring', 25),
(69, 'TOPS', 26),
(70, 'Tops', 26),
(74, 'Long TOPS', 29),
(75, 'party Bag', 30),
(84, 'Bags', 37),
(86, 'High Hill-shoe', 39),
(87, 'shoe', 40);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`order_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `package_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `day_name` varchar(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `username`, `cname`, `package_id`, `quantity`, `day_name`, `order_date`, `order_time`) VALUES
(33, 'user', 'aiub', 36, 5, 'sunday', '2016-05-03', '22:57:46'),
(34, 'user', 'aiub', 26, 2, 'monday', '2016-05-03', '23:04:33'),
(35, 'user', 'aiub', 26, 2, 'monday', '2016-05-03', '23:05:09'),
(36, 'elias', 'abc', 2, 4, 'tuesday', '2016-08-31', '11:57:15'),
(37, 'user', 'aiub', 17, 2, '<br /><b>No', '2017-01-21', '17:50:22'),
(38, 'user', 'aiub', 17, 5, 'friday', '2017-01-21', '17:51:40'),
(39, 'user', 'aiub', 6, 6, 'thursday', '2017-01-21', '17:53:45'),
(40, 'user', 'aiub', 6, 10, 'friday', '2017-01-21', '17:54:23'),
(41, 'user', 'aiub', 17, 44, 'thursday', '2017-01-21', '18:04:25'),
(42, 'user', 'aiub', 17, 11, 'tuesday', '2017-01-21', '18:13:27'),
(43, 'user', 'aiub', 6, 6, 'saturday', '2017-01-21', '18:42:27'),
(44, 'user', 'aiub', 10, 2, '<br /><b>No', '2017-02-03', '07:09:39'),
(45, 'user', 'aiub', 26, 3, 'tuesday', '2017-02-03', '07:16:33'),
(46, 'user', 'aiub', 10, 2, 'tuesday', '2017-02-03', '10:21:53');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
`package_id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_price` double(10,2) NOT NULL,
  `img` varchar(50) NOT NULL,
  `time` time NOT NULL DEFAULT '00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_price`, `img`, `time`) VALUES
(6, 'package 1 (katan silk shari)', 2000.00, 'ashari11.png', '10:00:00'),
(10, 'package 2 (cotton shari)', 1900.00, 'ashari14.png', '10:00:00'),
(17, 'package 3 (Benaroshi shari)', 35000.00, 'ashari27.png', '10:00:00'),
(24, 'special package (Necklace)', 900.00, 'bgohona11.png', '10:00:00'),
(25, 'package 4 (earring)', 450.00, 'bgohona24.png', '10:00:00'),
(26, 'package 5 (TOPS)', 1100.00, 'ctops25.png', '10:00:00'),
(29, 'package 6 (Long TOPS)', 1300.00, 'ctops26.png', '10:00:00'),
(30, 'package 7 (party Bag)', 650.00, 'dbag18.jpg', '10:00:00'),
(37, 'special package (Bags)', 950.00, 'dbag21.jpg', '11:00:00'),
(39, 'package 8 (High Hill-shoe)', 1250.00, 'eshoe11.png', '01:00:00'),
(40, 'package 9 (shoe)', 1000.00, 'eshoe26.png', '12:01:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `package_id`) VALUES
(0, '', 0),
(1, 'shari', 6),
(2, 'shari', 6),
(3, 'jewellery', 2),
(4, 'jewellery', 5),
(5, 'tops', 26),
(6, 'tops', 29),
(7, 'bags', 1),
(8, 'bags', 37),
(9, 'shoes', 40),
(10, 'shoes', 39);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
`id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `type` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `fname`, `lname`, `password`, `cname`, `email`, `mobile`, `type`) VALUES
(1, 'admin', 'new', 'admin', '123', 'admin company', 'admin@gmail.com', 1147483647, '1'),
(12, 'user', 'user', 'name', '123', 'aiub', 'zinia@gmail.com', 2147483647, '0'),
(13, 'elias', 'elias', 'khan', '202cb962ac59075b964b07152d234b70', 'abc', 'elias@gmail.com', 2147483647, '0'),
(14, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 0, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `day`
--
ALTER TABLE `day`
 ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
 ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
MODIFY `day_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
