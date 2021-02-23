-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2020 at 06:20 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expedays`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `email` text,
  `accepted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `accepted`) VALUES
(1, 'Livia', 'solovastrulivia@yahoo.com', 1),
(19, 'Livia', 'solovastrulivia@yahoo.com', 1),
(18, 'Livia', 'solovastrulivia@yahoo.com', 1),
(17, 'Livia', 'solovastrulivia@yahoo.com', 1),
(16, 'Livia', 'solovastrulivia@yahoo.com', 1),
(15, 'Livia', 'solovastrulivia@yahoo.com', 1),
(14, 'Livia', 'solovastrulivia@yahoo.com', 1),
(13, 'Livia', 'solovastrulivia@yahoo.com', 1),
(12, 'Livia', 'solovastrulivia@gmail.com', 1),
(11, 'Livia', 'solovastrulivia@gmail.com', 1),
(20, 'Livia', 'solovastrulivia@yahoo.com', 1),
(21, 'Livia', 'solovastrulivia@gmail.com', 1),
(22, 'Livia', 'solovastrulivia@gmail.com', 1),
(23, 'Livia', 'solovastrulivia@gmail.com', 1),
(24, '', '', 1),
(25, '', '', 1),
(26, '', '', 1),
(27, 'Livia', 'solovastrulivia@yahoo.com', 1),
(28, 'Livia', 'solovastrulivia@gmail.com', 1),
(29, '', '', 1),
(30, '', '', 1),
(31, 'Livia', 'livia@delsoft.ro', 1),
(32, 'Livia', 'livia@delsoft.ro', 1),
(33, 'Livia', 'livia@delsoft.ro', 1),
(34, 'Livia', 'livia@delsoft.ro', 1),
(35, 'Livia', 'solovastrulivia@gmail.com', 1),
(36, 'Livia', 'liviutza09@yahoo.com', 1),
(37, 'Livia', 'demo.example10@gmail.com', 1),
(38, 'Livia', 'solovastrulivia@yahoo.com', 1),
(39, 'Livia', 'solovastrulivia@yahoo.com', 1),
(40, 'Livia', 'livia@delsoft.ro', 1),
(41, 'Livia', 'livia@delsoft.ro', 1),
(42, 'Livia', 'livia@delsoft.ro', 1),
(43, 'Livia', 'livia@delsoft.ro', 1),
(44, 'Livia', 'livia@delsoft.ro', 1),
(45, 'Demo', 'demo.example10@gmail.com', 1),
(46, 'Demo', 'livia@delsoft.ro', 1),
(47, 'Livia', 'solovastrulivia@yahoo.com', 1),
(48, 'Livia', 'solovastrulivia@gmail.com', 1),
(49, 'Livia', 'solovastrulivia@gmail.com', 1),
(50, 'Livia', 'solovastrulivia@yahoo.com', 1),
(51, 'Livia', 'solovastrulivia@yahoo.com', 1),
(52, 'Livia', 'solovastrulivia@yahoo.com', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
