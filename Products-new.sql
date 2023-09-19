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
  `id` int(13) NOT NULL AUTO_INCREMENT,
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
(1, 'Casino Wit Brood', 'Brood1', 1.15, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/casinowit.jpg'),
(2, 'Tarwe Brood', 'Brood2', 1.20, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/tarwebrood.jpg'),
(3, 'Tijger Brood', 'Brood3', 1.50, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/tijger.jpg'),
(4, 'Taksi', 'pak1', 1.15, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/taksi.jpg'),
(5, 'Wickey', 'pak2', 0.95, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/wickey.jpg'),
(6, 'Lipton', 'pak3', 1.00, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/lipton.jpg'),
(7, 'AA Drink', 'drink1', 0.82, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/aadrink.jpg'),
(8, '7UP', 'drink2', 1.70, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/7up.jpg'),
(9, 'Fanta', 'drink3', 1.65, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/fanta.jpg'),
(10, 'Milner kaas', 'beleg1', 2.32, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/milnerkaas.jpg'),
(11, 'Boterham worst', 'beleg2', 1.99, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/boterham.jpg'),
(12, 'Gerookte kipfilet', 'beleg3', 2.69, 'https://2048656.apo-portfolio.nl/login/Bani-new/Image/kipfilet.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
