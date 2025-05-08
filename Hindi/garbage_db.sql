-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2022 at 05:58 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garbage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `junk_man`
--

DROP TABLE IF EXISTS `junk_man`;
CREATE TABLE IF NOT EXISTS `junk_man` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `number` bigint(15) DEFAULT NULL,
  `carton` int(5) DEFAULT NULL,
  `paper` int(5) DEFAULT NULL,
  `plastic` int(5) DEFAULT NULL,
  `hiron` int(5) DEFAULT NULL,
  `liron` int(5) DEFAULT NULL,
  `glass` int(5) DEFAULT NULL,
  `Photo` varchar(99) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `junk_man`
--

INSERT INTO `junk_man` (`id`, `name`, `number`, `carton`, `paper`, `plastic`, `hiron`, `liron`, `glass`, `Photo`) VALUES
(20, 'junk', 9411651918, 10, 20, 30, 40, 50, 60, NULL),
(21, 'junk1', 847754994, 21, 30, 10, 50, 50, 10, 'img/6251f73a60d9d.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) NOT NULL,
  `seller_id` int(10) NOT NULL,
  `ordered_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `rate` int(10) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0 - Not Completed\r\n1 - Completed',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `seller_id`, `ordered_on`, `product`, `quantity`, `rate`, `status`) VALUES
(10, 19, 21, '2022-04-07 05:44:06', 'paper', 5, 30, 1),
(9, 19, 21, '2022-04-07 05:44:06', 'carton', 3, 20, 1),
(11, 19, 20, '2022-04-07 05:44:06', 'plastic', 3, 30, 1),
(12, 19, 21, '2022-04-07 05:44:06', 'HeavyIron', 3, 50, 1),
(13, 19, 20, '2022-04-07 05:44:06', 'LightIron', 5, 50, 1),
(14, 19, 20, '2022-04-07 05:44:06', 'Glass', 4, 60, 1),
(15, 19, 21, '2022-04-08 13:27:32', 'HeavyIron', 4, 50, 1),
(16, 25, 21, '2022-04-08 15:12:52', 'carton', 4, 20, 1),
(17, 25, 21, '2022-04-08 15:12:52', 'paper', 1, 30, 1),
(18, 25, 20, '2022-04-08 15:12:52', 'plastic', 3, 30, 1),
(19, 25, 21, '2022-04-08 15:12:52', 'HeavyIron', 4, 50, 1),
(20, 25, 20, '2022-04-08 15:12:52', 'LightIron', 1, 50, 1),
(21, 25, 20, '2022-04-08 15:12:52', 'Glass', 1, 60, 1),
(22, 25, 20, '2022-04-09 07:19:20', 'Glass', 3, 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` int(2) NOT NULL COMMENT '0 = User\r\n1 = Junk-Man',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `type`) VALUES
(19, 'akash', '94754d0abb89e4cf0a7f1c494dbb9d2c', 0),
(20, 'junk', '0c821f675f132d790b3f25e79da739a7', 1),
(21, 'junk1', '36688b111218d271e60e6037bd4d43bf', 1),
(22, 'harsh', 'd4e3730e8cba214f85cddae5f9331d74', 0),
(23, 'akash2', '0b5f5469b18e6b6ccf5e10a1035a451d', 0),
(24, 'shruti', '1952a01898073d1e561b9b4f2e42cbd7', 0),
(25, 'HARSH SAINI', 'd6b8294df3871e4689e0f4964b4a1219', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usettings`
--

DROP TABLE IF EXISTS `usettings`;
CREATE TABLE IF NOT EXISTS `usettings` (
  `id` int(6) DEFAULT NULL,
  `contact` bigint(12) DEFAULT NULL,
  `address` varchar(75) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usettings`
--

INSERT INTO `usettings` (`id`, `contact`, `address`) VALUES
(19, 9411, 'asldkfkasjdjf'),
(22, NULL, NULL),
(23, NULL, NULL),
(24, NULL, NULL),
(25, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
