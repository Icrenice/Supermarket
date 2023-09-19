-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2018 at 04:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `allphptricks`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Casino Wit Brood', 'Brood1', 1.15, 'img/casinowit.png'),
(2, 'Tarwe Brood', 'Brood2', 1.20, 'img/tarwebrood.jpg'),
(3, 'Blue Band Brood', 'Brood3', 1.50, 'img/becelbrood.png'),
(4, 'Taksi', 'pak1', 1.15, 'img/taksi.jpg'),
(5, 'Wickey', 'pak2', 0.95, 'img/wickey.jpg'),
(6, 'Lipton', 'pak3', 1.00, 'img/lipton.jpg'),
(7, 'AA Drink', 'drink1', 0.82, 'img/aadrink.jpg'),
(8, '7UP', 'drink2', 1.70, 'img/7up.jpg'),
(9, 'Fanta', 'drink3', 1.65, 'img/fanta.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
