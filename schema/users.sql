-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2012 at 01:32 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karn0010`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES(1, 0x756e69636f726e40686f746d61696c2e636f6d, 0x31323334353637);
INSERT INTO `users` VALUES(2, 0x63616b656c6f766572406d652e636f6d, 0x3536373839);
INSERT INTO `users` VALUES(3, 0x627261646c657440616c676f6e7175696e636f6c6c6567652e636f6d, 0x2432612431322475424c41536a2e53444d4b39567a6e7973372f5963656e506a6b674277634f5549506f48525a43616e32572e515a39334939703261);
INSERT INTO `users` VALUES(4, 0x627261646c657440616c676f6e7175696e636f6c6c6567652e636f6d, 0x243261243132243552687747746666456443654935633148304e2f6f65774d3551565a394651315955684464795449517076793137444e5355787247);
INSERT INTO `users` VALUES(5, 0x627261646c657440616c676f6e7175696e636f6c6c6567652e636f6d, 0x243261243132247a5948326f3865635477666e715a54523454464a364f622e73336d34476e744948764b6f7864727758426f4d447241706275393661);
