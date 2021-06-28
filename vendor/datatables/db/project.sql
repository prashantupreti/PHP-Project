-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2021 at 01:10 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `About` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

DROP TABLE IF EXISTS `blog_post`;
CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_title` varchar(500) NOT NULL,
  `post_description` varchar(3000) NOT NULL,
  `post_author` varchar(100) NOT NULL,
  `post_image_name` varchar(100) NOT NULL,
  `admin_approval` varchar(10) NOT NULL,
  `date_approv` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_index`
--

DROP TABLE IF EXISTS `dynamic_index`;
CREATE TABLE IF NOT EXISTS `dynamic_index` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `About` text NOT NULL,
  `Contact` text NOT NULL,
  `Describe` text NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dynamic_index`
--

INSERT INTO `dynamic_index` (`id`, `About`, `Contact`, `Describe`, `Phone`, `Email`) VALUES
(1, 'This website was created in fun and with no intent to copy any social networking sites on existence. The creator of this site Mr. Prashant Upreti has made this possible and in the coming days he may make more things possible.', 'Well if you already have any queries then you can drop us a call or send an email? ', 'PACIFFIC your new social networking site is offering completely free. You can publish your article, videos, or promote your business. Meet our 1.2 Million users in one platform.<br/>Social Networking has never been this fun!', '9860XXXXXX', 'fasdjkfjakldsfja@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `Frm` varchar(100) NOT NULL,
  `To` varchar(100) NOT NULL,
  `Message` text NOT NULL,
  `cc` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `St_read` tinyint(1) NOT NULL,
  `reply` varchar(100) NOT NULL,
  `prime_mail` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
