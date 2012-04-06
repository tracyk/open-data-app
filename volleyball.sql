-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2012 at 08:35 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

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
-- Table structure for table `ottawamapped`
--

CREATE TABLE IF NOT EXISTS `ottawamapped` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=65 ;

--
-- Dumping data for table `ottawamapped`
--

INSERT INTO `ottawamapped` (`id`, `name`, `latitude`, `longitude`, `address`) VALUES
(1, 'Andy Shields Park', 45.26129913330078, -75.5565, '1448 MEADOW DR Osgoode'),
(2, 'Arnott Park', 45.361698150634766, -75.6808, '691 Hartman cres'),
(3, 'Barrington Park', 45.459999084472656, -75.524, '1705 Orleans Blvd'),
(4, 'Billings Park', 45.39580154418945, -75.6484, '495 Billings Ave'),
(5, 'Corkstown Park', 45.346099853515625, -75.827, '61 Corkstown RD'),
(6, 'Greely West Park', 45.346099853515625, -75.8271, '6485 Greely West DR '),
(7, 'Meadowbrook Park', 45.42319869995117, -75.6116, '1485 Meadowbrook RD '),
(8, 'Queenswood Ridge Park', 45.47909927368164, -75.5043, '346 Kennedy Lane '),
(9, 'St. Francois Park', 45.50910186767578, -75.6043, '1855 Simard DR '),
(10, 'Windsor Park Gloucester', 45.347599029541016, -75.6574, '3560 Wyman PL Gloucester'),
(11, 'volleyball', -75.648199999964, 45.4367833357445, ''),
(12, 'volleyball', -75.6479406013148, 45.4367981821702, ''),
(13, 'volleyball', -75.5356333332924, 45.4626333357508, ''),
(14, 'volleyball', -75.522007710975, 45.4572835444893, ''),
(15, 'volleyball', -75.5193153063159, 45.4515369450298, ''),
(16, 'volleyball', -75.5300244093633, 45.450464857702, ''),
(17, 'volleyball', -75.5391354243527, 45.4438055124633, ''),
(18, 'volleyball', -75.5254922181204, 45.4744005955349, ''),
(19, 'volleyball', -75.5475927055186, 45.4778879938672, ''),
(20, 'volleyball', -75.5235962794789, 45.4812980944269, ''),
(21, 'volleyball', -75.5079942274336, 45.4865664164719, ''),
(22, 'volleyball', -75.9022901954519, 45.2946210562277, ''),
(23, 'volleyball', -75.7425833333015, 45.3926833357337, ''),
(24, 'volleyball', -75.5649833332948, 45.2576000023672, ''),
(25, 'volleyball', -75.6119413700711, 45.4491499080561, ''),
(26, 'volleyball', -75.5902303614595, 45.4580613080247, ''),
(27, 'volleyball', -75.5900875092612, 45.4580956000202, ''),
(28, 'volleyball', -75.5899544356667, 45.4581294526377, ''),
(29, 'volleyball', -75.5898273898177, 45.4581672326348, ''),
(30, 'volleyball', -75.58970238458, 45.4582011243459, ''),
(31, 'volleyball', -75.5895790989204, 45.4582388014503, ''),
(32, 'volleyball', -75.5894663161695, 45.4580358978438, ''),
(33, 'volleyball', -75.5893551066281, 45.4578268966074, ''),
(34, 'volleyball', -75.6596761324039, 45.3449996552195, ''),
(35, 'volleyball', -75.6498166666309, 45.3960000024011, ''),
(36, 'volleyball', -75.6119166666292, 45.421516669074, ''),
(37, 'volleyball', -75.6247124543803, 45.4183650770137, ''),
(38, 'volleyball', -75.8270870406666, 45.3464745187933, ''),
(39, 'volleyball', -75.7197114055066, 45.3517061681257, ''),
(40, 'volleyball', -75.5043885999317, 45.4782869402066, ''),
(41, 'volleyball', -76.0926200233134, 45.4992711253748, ''),
(42, 'volleyball', -75.9400684500234, 45.1634671595551, ''),
(43, 'volleyball', -75.4171448234174, 45.2340383574008, ''),
(44, 'volleyball', -75.5188032221675, 45.3464306287795, ''),
(45, 'volleyball', -75.6814129102608, 45.3619541222269, ''),
(46, 'volleyball', -75.6039785381547, 45.4198539963485, ''),
(47, 'volleyball', -75.7003619886145, 45.3680687472916, ''),
(48, 'volleyball', -75.5895934845821, 45.4579970501788, ''),
(49, 'volleyball', -75.5897182139346, 45.4579648686805, ''),
(50, 'volleyball', -75.5898438155299, 45.4579300907719, ''),
(51, 'volleyball', -75.5899804807528, 45.4578949760861, ''),
(52, 'volleyball', -75.5901087408816, 45.4578615206796, ''),
(53, 'volleyball', -75.5899885302543, 45.4576503520337, ''),
(54, 'volleyball', -75.589863463239, 45.4576894639874, ''),
(55, 'volleyball', -75.5897317155617, 45.4577239006626, ''),
(56, 'volleyball', -75.5896071074821, 45.4577602802551, ''),
(57, 'volleyball', -75.5894870680552, 45.4577942254201, ''),
(58, 'volleyball', -76.2057573077846, 45.4694709575494, ''),
(59, 'volleyball', -75.5999658530234, 45.1487693763861, ''),
(60, 'volleyball', -75.5986819462179, 45.2496714726548, ''),
(61, 'volleyball', -75.7147923296933, 45.4073427843801, ''),
(62, 'volleyball', -75.6535269072461, 45.3788872790948, ''),
(63, 'volleyball', -75.5540805416894, 45.4331414837693, ''),
(64, 'volleyball', -75.816657882411, 45.3266369316762, '');
