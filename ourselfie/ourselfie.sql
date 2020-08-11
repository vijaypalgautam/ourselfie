-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 11, 2020 at 09:26 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourselfie`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`) VALUES
(1719610006, 'image/Screenshot (7).png'),
(1719610008, 'image/akg.jpg'),
(1719610028, 'image/vijay.jpg'),
(1719610019, 'image/Screenshot (3).png'),
(12345, 'image/Screenshot (18).png'),
(123456789, 'image/IMG3.jpg'),
(12345678, 'image/WIN_20200121_15_21_24_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `article_likes`
--

DROP TABLE IF EXISTS `article_likes`;
CREATE TABLE IF NOT EXISTS `article_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `article` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_likes`
--

INSERT INTO `article_likes` (`id`, `user`, `article`) VALUES
(103, 1719610028, 123456789),
(100, 123456789, 1719610019),
(101, 123456789, 1719610028),
(102, 1719610028, 12345),
(110, 1719610028, 1719610028),
(106, 12345678, 123456789),
(105, 12345678, 12345678),
(109, 1719610028, 1719610008),
(107, 1719610028, 12345678),
(108, 1719610028, 1719610006),
(104, 12345678, 12345),
(99, 123456789, 1719610006),
(98, 123456789, 123456789),
(97, 123456789, 12345),
(96, 123456789, 1719610008);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(35) NOT NULL,
  `middle_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `college` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `id` varchar(15) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `middle_name`, `last_name`, `email`, `dob`, `gender`, `college`, `course`, `branch`, `id`, `mobile_no`, `password`) VALUES
('Vijay', 'pal', 'gautam', 'vijaypalgautam188@gmail.com', '1995-12-30', 'male', 'CEST', 'B.Tech.', 'CS', '1719610028', '7018396648', '05542115'),
('ashish', 'kumar', 'gautam', 'ashish.cest@gmial.com', '1999-08-15', 'male', 'CEST', 'B.Tech.', 'CS', '1719610007', '6306552026', 'qwerty'),
('Mantasha', '', 'Khatoon', 'mantasha@gmail.com', '1995-05-17', 'female', 'SSPEM', 'Diploma', 'CIVIL', '1719610008', '8562916393', '12345'),
('raj', 'pratap', 'yadav', 'a@gmail.com', '1997-04-26', 'male', 'CEST', 'B.Tech.', 'CS', '1719610018', '9506560751', '12345'),
('Anivesh', '', '', 'badalverma@gmail.com', '2020-02-22', 'male', 'CEST', 'Diploma', 'EC', '1719640006', '1234', '123456'),
('A', 'K', 'G', 'a@gmail.com', '1999-02-02', 'male', 'CEST', 'B.Tech.', 'CIVIL', '123456789', '123456', '123456'),
('shivi', '', '', 'shivanisinghlko98@gmail.com', '2001-10-31', 'female', 'CEST', 'B.Tech.', 'CS', '1719610024', '7355310239', '123456'),
('manisha', '', 'gautam', 'mngautam01@gmail.com', '2000-08-09', 'female', 'CEST', 'B.Tech.', 'CS', '17196100071', '1912345678', '12345'),
('kishan', 'lal', '', 'kishan@gmail.com', '2013-04-23', 'male', 'SSPEM', 'B.Tech.', 'CIVIL', '12345678', '123456789', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
