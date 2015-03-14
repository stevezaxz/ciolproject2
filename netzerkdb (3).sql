-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2015 at 06:41 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `netzerkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbranches`
--

CREATE TABLE IF NOT EXISTS `tblbranches` (
  `branches_id` int(11) NOT NULL AUTO_INCREMENT,
  `branches_person` varchar(100) DEFAULT NULL,
  `branches_address` varchar(100) DEFAULT NULL,
  `branches_province` varchar(100) DEFAULT NULL,
  `branches_telephone` varchar(30) DEFAULT NULL,
  `branches_fax` varchar(30) DEFAULT NULL,
  `branches_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`branches_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tblbranches`
--

INSERT INTO `tblbranches` (`branches_id`, `branches_person`, `branches_address`, `branches_province`, `branches_telephone`, `branches_fax`, `branches_email`) VALUES
(1, 'kljlk', 'lk', 'j', 'gjhb', 'yihj', 'b'),
(2, 'yhj', 'ujkh', 'u', 'uy', 'ihjkn', 'uoijk'),
(3, 'u', 'hjk', 'ijkh', 'ijhk', 'uihj', 'k'),
(7, '', '', '', '', '', ''),
(8, 'd', 'd', 'd', 'd', 'd', 'd'),
(9, '', 'd', 'd', 'dd', '', ''),
(10, 'e', 'e', 'e', 'e', 'e', 'e'),
(11, 'e', 'e', 'e', 'e', 'e', 'e'),
(12, 'j', 'nkj,m', 'n', 'm,', '', ''),
(13, 'j', 'nkj,m', 'n', 'm,', '', ''),
(14, 'j', 'nkj,m', 'n', 'm,', '', ''),
(15, 'j', 'nkj,m', 'n', 'm,', '', ''),
(16, 'j', 'nkj,m', 'n', 'm,', '', ''),
(17, 'j', 'nkj,m', 'n', 'm,', '', ''),
(18, 'j', 'nkj,m', 'n', 'm,', '', ''),
(19, 'j', 'nkj,m', 'n', 'm,', '', ''),
(20, 'j', 'nkj,m', 'n', 'm,', '', ''),
(21, 'j', 'nkj,m', 'n', 'm,', '', ''),
(22, 'j', 'nkj,m', 'n', 'm,', '', ''),
(23, 'j', 'nkj,m', 'n', 'm,', '', ''),
(24, 'j', 'nkj,m', 'n', 'm,', '', ''),
(25, '', '', '', '', '', ''),
(26, 'j', 'nkj,m', 'n', 'm,', '', ''),
(27, 'j', 'nkj,m', 'n', 'm,', '', ''),
(28, 'j', 'nkj,m', 'n', 'm,', '', ''),
(29, 'j', 'nkj,m', 'n', 'm,', '', ''),
(30, 'j', 'nkj,m', 'n', 'm,', '', ''),
(31, 'j', 'nkj,m', 'n', 'm,', '', ''),
(32, 'j', 'nkj,m', 'n', 'm,', '', ''),
(33, 'sdfsd', 'd', '', 'd', '', ''),
(34, 'sdfsd', 'd', '', 'd', '', ''),
(35, 'sdfsd', 'd', '', 'd', '', ''),
(36, 'sdfsd', 'd', '', 'd', '', ''),
(37, 'sdfsd', 'd', '', 'd', '', ''),
(38, '', 'e', 'e', 'e', '', ''),
(39, '', 'e', 'e', 'e', '', ''),
(40, '', 'e', 'e', 'e', '', ''),
(41, '', 'e', 'e', 'e', '', ''),
(42, 'ljkl', 'lk', 'j', 'lk', 'j', 'lkj');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) DEFAULT NULL,
  `category_sub_cat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`category_id`, `category_name`, `category_sub_cat`) VALUES
(1, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(2, 'Electrical', 'Circuit breakers, power supply, contactors, relays, timer, switch, transducers'),
(3, 'Instrumentation', 'Meters, Gauges, Transmitters and other measuring equipments'),
(4, 'Chemicals', 'Pesticide, Fertilizers, Herbicides, and other agrochemicals'),
(5, 'Chemicals', 'Compressed gases and specialty gases'),
(6, 'Storage and Cleaning', 'Facilities cleaning and maintenance'),
(7, 'Agriculture', 'Livestock and meat'),
(8, 'Mechanical', 'Pumps, Fans and Blowers'),
(9, 'Mechanical', 'Adhesive, Sealants, Solvents, and Removers'),
(10, 'Electrical', 'Circuit breakers, power supply, contactors, relays, timer, switch, transducers'),
(11, 'Instrumentation', 'Laboratory testing, measuring and analyzing equipments'),
(12, 'Checmicals', 'Water and waste treatment chemicals'),
(13, 'Chemicals', 'Compressed gases and specialty gases'),
(14, 'Storage and Cleaning', 'Facilities cleaning and maintenance'),
(15, 'Home', 'Towels, blankets, mattresses, textile and clothing'),
(16, 'Mechanical', 'Pumps, Fans and Blowers'),
(17, 'Mechanical', 'Automotive and heavy equipments and parts'),
(18, 'Mechanical', 'Power tools,machine shop,fabrication and welding equipments,tools and consumables'),
(19, 'Mechanical', 'Adhesive, Sealants, Solvents, and Removers'),
(20, 'Mechanical', 'Boiler and HRSG components and pressure parts'),
(21, 'Instrumentation', 'Meters, Gauges, Transmitters and other measuring equipments'),
(22, 'Construction', 'Roofing materials'),
(23, 'Safety and Security', 'First aid, emergency and rescue equipments and kits'),
(24, 'Storage and Cleaning', 'Storage racks, shelves, bin, cabinets, and baskets'),
(25, 'Storage and Cleaning', 'Pallets, skids, guard rails, labels and signages'),
(26, 'Home', 'Towels, blankets, mattresses, textile and clothing'),
(27, 'Home', 'Kitchen and dining wares'),
(28, 'Home', 'Furnitures and decors'),
(29, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(30, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(31, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(32, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(33, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(34, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(35, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(36, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(37, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(38, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(39, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(40, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(41, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(42, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(43, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(44, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(45, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(46, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(47, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(48, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(49, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(50, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(51, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(52, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(53, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(54, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(55, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(56, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(57, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(58, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(59, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(60, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(61, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(62, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(63, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(64, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(65, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(66, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(67, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(68, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(69, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(70, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(71, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(72, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(73, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(74, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(75, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(76, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(77, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(78, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(79, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(80, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(81, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(82, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(83, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(84, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(85, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(86, 'Mechanical', 'Conveyors, pulleys, conveyor belts, rollers, sheaves, belts, chain, sprockets, speed reducers, coupl'),
(87, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(88, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(89, 'Mechanical', 'Gasket, oil seal, mechanical seal, packing, bush'),
(90, 'Mechanical', 'Gasket, oil seal, mechanical seal, packing, bush'),
(91, 'Mechanical', 'Gasket, oil seal, mechanical seal, packing, bush'),
(92, 'Mechanical', 'Gasket, oil seal, mechanical seal, packing, bush'),
(93, 'Mechanical', 'Gasket, oil seal, mechanical seal, packing, bush'),
(94, 'Mechanical', 'Gasket, oil seal, mechanical seal, packing, bush'),
(95, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(96, 'Mechanical', 'Pneumatics and Hydraulics equipment and parts'),
(97, 'Mechanical', 'Pipes, Tubes, Valves and other piping components'),
(98, 'Mechanical', 'Gasket, oil seal, mechanical seal, packing, bush'),
(99, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(100, 'Mechanical', 'Pneumatics and Hydraulics equipment and parts'),
(101, 'Mechanical', 'Pipes, Tubes, Valves and other piping components'),
(102, 'Mechanical', 'Gasket, oil seal, mechanical seal, packing, bush'),
(103, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(104, 'Mechanical', 'Pneumatics and Hydraulics equipment and parts'),
(105, 'Mechanical', 'Pipes, Tubes, Valves and other piping components'),
(106, 'Mechanical', 'Gasket, oil seal, mechanical seal, packing, bush'),
(107, 'Mechanical', 'Heating, Cooling, Ventilating, Air Conditioning and Refrigeration equipment and parts'),
(108, 'Mechanical', 'Pneumatics and Hydraulics equipment and parts'),
(109, 'Mechanical', 'Pipes, Tubes, Valves and other piping components'),
(110, 'Mechanical', 'Lubricants, grease, engine oil, hydraulic oil, transmission oils'),
(111, 'Mechanical', 'Pneumatics and Hydraulics equipment and parts');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE IF NOT EXISTS `tblcompany` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_registrants_name` varchar(100) DEFAULT NULL,
  `company_username` varchar(100) DEFAULT NULL,
  `company_password` varchar(100) DEFAULT NULL,
  `company_trade_name` varchar(150) DEFAULT NULL,
  `company_tin` varchar(50) DEFAULT NULL,
  `company_bir_registration_no` varchar(150) DEFAULT NULL,
  `company_website` varchar(150) DEFAULT NULL,
  `company_history` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`company_id`, `company_registrants_name`, `company_username`, `company_password`, `company_trade_name`, `company_tin`, `company_bir_registration_no`, `company_website`, `company_history`) VALUES
(1, 'dasd', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
(2, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(3, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(4, 'h', 'jkh', '1', 'h', 'kj', 'hjk', 'h', 'jk'),
(6, 'sad', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
(7, 'sad', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
(8, 'asd', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
(10, 'klj', 'lk', '1', 'lkj', 'kjqb', 'g', 'gkh', 'bku'),
(14, 'asd', 'd', 'd', 'd', 'd', 'd', 'dfsdf', 'd'),
(15, 'dsad', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
(16, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(17, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(18, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(19, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(20, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(21, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(22, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(23, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(24, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(25, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(26, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(27, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(28, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(29, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(32, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(33, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(34, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(35, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(36, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(37, 'kljlk', 'j', 'a', 'j', 'lkj', 'lk', 'j', 'lkasdasdasd'),
(38, 'jlkjlkj', 'klj', 'lkj', 'lkj', 'lkj', 'lk', 'j', 'asdasd'),
(39, 'jlkjlkj', 'klj', 'lkj', 'lkj', 'lkj', 'lk', 'j', 'asdasd'),
(40, 'jlkjlkj', 'klj', 'lkj', 'lkj', 'lkj', 'lk', 'j', 'asdasd'),
(41, 'jlkjlkj', 'klj', 'lkj', 'lkj', 'lkj', 'lk', 'j', 'asdasd'),
(42, 'jlkjlkj', 'klj', 'lkj', 'lkj', 'lkj', 'lk', 'j', 'asdasd'),
(43, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(44, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(45, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(46, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(47, 'pol', 'pol', 'pol', 'pol', 'pol', 'pol', 'pol', 'pol');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanybranches`
--

CREATE TABLE IF NOT EXISTS `tblcompanybranches` (
  `company_id` int(11) DEFAULT NULL,
  `branches_id` int(11) DEFAULT NULL,
  KEY `company_id` (`company_id`),
  KEY `branches_id` (`branches_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanybranches`
--

INSERT INTO `tblcompanybranches` (`company_id`, `branches_id`) VALUES
(10, 1),
(10, 2),
(10, 3),
(14, 7),
(15, 8),
(15, 9),
(16, 10),
(16, 11),
(17, 12),
(18, 13),
(19, 14),
(20, 15),
(21, 16),
(22, 17),
(23, 18),
(24, 19),
(25, 20),
(26, 21),
(27, 22),
(28, 23),
(29, 24),
(30, 25),
(31, 26),
(32, 27),
(33, 28),
(34, 29),
(35, 30),
(36, 31),
(37, 32),
(38, 33),
(39, 34),
(40, 35),
(41, 36),
(42, 37),
(43, 38),
(44, 39),
(45, 40),
(46, 41),
(47, 42);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanycategory`
--

CREATE TABLE IF NOT EXISTS `tblcompanycategory` (
  `company_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  KEY `company_id` (`company_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanycategory`
--

INSERT INTO `tblcompanycategory` (`company_id`, `category_id`) VALUES
(14, 1),
(14, 2),
(14, 3),
(14, 4),
(14, 5),
(14, 6),
(14, 7),
(15, 8),
(15, 9),
(15, 10),
(15, 11),
(15, 12),
(15, 13),
(15, 14),
(15, 15),
(16, 16),
(16, 17),
(16, 18),
(16, 19),
(16, 20),
(16, 21),
(16, 22),
(16, 23),
(16, 24),
(16, 25),
(16, 26),
(16, 27),
(16, 28),
(17, 29),
(17, 30),
(17, 31),
(18, 32),
(18, 33),
(18, 34),
(19, 35),
(19, 36),
(19, 37),
(20, 38),
(20, 39),
(20, 40),
(21, 41),
(21, 42),
(21, 43),
(22, 44),
(22, 45),
(22, 46),
(23, 47),
(23, 48),
(23, 49),
(24, 50),
(24, 51),
(24, 52),
(25, 53),
(25, 54),
(25, 55),
(26, 56),
(26, 57),
(26, 58),
(27, 59),
(27, 60),
(27, 61),
(28, 62),
(28, 63),
(28, 64),
(29, 65),
(29, 66),
(29, 67),
(31, 68),
(31, 69),
(31, 70),
(32, 71),
(32, 72),
(32, 73),
(33, 74),
(33, 75),
(33, 76),
(34, 77),
(34, 78),
(34, 79),
(35, 80),
(35, 81),
(35, 82),
(36, 83),
(36, 84),
(36, 85),
(37, 86),
(37, 87),
(37, 88),
(38, 89),
(39, 90),
(40, 91),
(41, 92),
(42, 93),
(43, 94),
(43, 95),
(43, 96),
(43, 97),
(44, 98),
(44, 99),
(44, 100),
(44, 101),
(45, 102),
(45, 103),
(45, 104),
(45, 105),
(46, 106),
(46, 107),
(46, 108),
(46, 109),
(47, 110),
(47, 111);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanycontactperson`
--

CREATE TABLE IF NOT EXISTS `tblcompanycontactperson` (
  `company_id` int(11) DEFAULT NULL,
  `contact_person_id` int(11) DEFAULT NULL,
  KEY `company_id` (`company_id`),
  KEY `contact_person_id` (`contact_person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanycontactperson`
--

INSERT INTO `tblcompanycontactperson` (`company_id`, `contact_person_id`) VALUES
(8, 1),
(8, 2),
(8, 3),
(10, 7),
(10, 8),
(10, 9),
(14, 19),
(14, 20),
(14, 21),
(15, 22),
(15, 23),
(15, 24),
(16, 25),
(16, 26),
(16, 27),
(17, 28),
(17, 29),
(17, 30),
(18, 31),
(18, 32),
(18, 33),
(19, 34),
(19, 35),
(19, 36),
(20, 37),
(20, 38),
(20, 39),
(21, 40),
(21, 41),
(21, 42),
(22, 43),
(22, 44),
(22, 45),
(23, 46),
(23, 47),
(23, 48),
(24, 49),
(24, 50),
(24, 51),
(25, 52),
(25, 53),
(25, 54),
(26, 55),
(26, 56),
(26, 57),
(27, 58),
(27, 59),
(27, 60),
(28, 61),
(28, 62),
(28, 63),
(29, 64),
(29, 65),
(29, 66),
(30, 67),
(30, 68),
(30, 69),
(31, 70),
(31, 71),
(31, 72),
(32, 73),
(32, 74),
(32, 75),
(33, 76),
(33, 77),
(33, 78),
(34, 79),
(34, 80),
(34, 81),
(35, 82),
(35, 83),
(35, 84),
(36, 85),
(36, 86),
(36, 87),
(37, 88),
(37, 89),
(37, 90),
(38, 91),
(38, 92),
(38, 93),
(39, 94),
(39, 95),
(39, 96),
(40, 97),
(40, 98),
(40, 99),
(41, 100),
(41, 101),
(41, 102),
(42, 103),
(42, 104),
(42, 105),
(43, 106),
(43, 107),
(43, 108),
(44, 109),
(44, 110),
(44, 111),
(45, 112),
(45, 113),
(45, 114),
(46, 115),
(46, 116),
(46, 117),
(47, 118),
(47, 119),
(47, 120);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanyheadoffice`
--

CREATE TABLE IF NOT EXISTS `tblcompanyheadoffice` (
  `company_id` int(11) DEFAULT NULL,
  `head_office_id` int(11) DEFAULT NULL,
  KEY `head_office_id` (`head_office_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanyheadoffice`
--

INSERT INTO `tblcompanyheadoffice` (`company_id`, `head_office_id`) VALUES
(7, 6),
(8, 7),
(10, 9),
(14, 13),
(15, 14),
(16, 15),
(17, 16),
(18, 17),
(19, 18),
(20, 19),
(21, 20),
(22, 21),
(23, 22),
(24, 23),
(25, 24),
(26, 25),
(27, 26),
(28, 27),
(29, 28),
(30, 29),
(31, 30),
(32, 31),
(33, 32),
(34, 33),
(35, 34),
(36, 35),
(37, 36),
(38, 37),
(39, 38),
(40, 39),
(41, 40),
(42, 41),
(43, 42),
(44, 43),
(45, 44),
(46, 45),
(47, 46);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanyservices`
--

CREATE TABLE IF NOT EXISTS `tblcompanyservices` (
  `company_id` int(11) DEFAULT NULL,
  `services_id` int(11) DEFAULT NULL,
  KEY `company_id` (`company_id`),
  KEY `services_id` (`services_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanyservices`
--

INSERT INTO `tblcompanyservices` (`company_id`, `services_id`) VALUES
(16, 5),
(16, 6),
(16, 7),
(16, 8),
(16, 9),
(17, 10),
(17, 11),
(18, 12),
(18, 13),
(19, 14),
(19, 15),
(20, 16),
(20, 17),
(21, 18),
(21, 19),
(22, 20),
(22, 21),
(23, 22),
(23, 23),
(24, 24),
(24, 25),
(25, 26),
(25, 27),
(26, 28),
(26, 29),
(27, 30),
(27, 31),
(28, 32),
(28, 33),
(29, 34),
(29, 35),
(31, 36),
(31, 37),
(32, 38),
(32, 39),
(33, 40),
(33, 41),
(34, 42),
(34, 43),
(35, 44),
(35, 45),
(36, 46),
(36, 47),
(37, 48),
(37, 49),
(38, 50),
(39, 51),
(40, 52),
(41, 53),
(42, 54),
(43, 55),
(43, 56),
(43, 57),
(44, 58),
(44, 59),
(44, 60),
(45, 61),
(45, 62),
(45, 63),
(46, 64),
(46, 65),
(46, 66),
(47, 67),
(47, 68);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactperson`
--

CREATE TABLE IF NOT EXISTS `tblcontactperson` (
  `contact_person_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_person_name` varchar(100) DEFAULT NULL,
  `contact_person_department` varchar(50) DEFAULT NULL,
  `contact_person_telephone` varchar(30) DEFAULT NULL,
  `contact_person_fax` varchar(30) DEFAULT NULL,
  `contact_person_email` varchar(50) DEFAULT NULL,
  `contact_person_mobile1` varchar(30) DEFAULT NULL,
  `contact_person_mobile2` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`contact_person_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `tblcontactperson`
--

INSERT INTO `tblcontactperson` (`contact_person_id`, `contact_person_name`, `contact_person_department`, `contact_person_telephone`, `contact_person_fax`, `contact_person_email`, `contact_person_mobile1`, `contact_person_mobile2`) VALUES
(1, 'wd', 'Sales', 'w', 'hb', 'jhb', 'jh', 'bj'),
(2, 'hb', 'Procurement', 'jh', 'b', 'jhb', 'jh', 'b'),
(3, 'jhb', 'Account', 'sdfsd', 'fh', 'gv', 'dfsd', 'bj'),
(7, 'd', 'Sales', 'd', 'd', 'd', 'd', 'd'),
(8, 'd', 'Procurement', 'd', 'dsdf', 'kj', 'nk', 'jn'),
(9, 'kj', 'Account', 'nk', 'jn', 'hb', 'kjh', 'b,h'),
(19, 'd', 'Sales', 'd', 'd', 'd', 'd', 'd'),
(20, 'd', 'Procurement', '', '', '', '', ''),
(21, '', 'Account', '', '', '', '', ''),
(22, 'd', 'Sales', 'd', 'd', 'd', 'd', 'd'),
(23, 'd', 'Procurement', 'd', 'd', 'd', 'd', ''),
(24, 'd', 'Account', 'd', 'd', 'd', 'd', 'd'),
(25, 'e', 'Sales', 'e', 'e', 'e', 'e', 'e'),
(26, 'e', 'Procurement', '', 'e', 'e', 'e', 'e'),
(27, 'e', 'Account', 'e', '', '', '', ''),
(28, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(29, 'l', 'Procurement', 'k', '', '', '', ''),
(30, '', 'Account', '', '', '', '', ''),
(31, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(32, 'l', 'Procurement', 'k', '', '', '', ''),
(33, '', 'Account', '', '', '', '', ''),
(34, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(35, 'l', 'Procurement', 'k', '', '', '', ''),
(36, '', 'Account', '', '', '', '', ''),
(37, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(38, 'l', 'Procurement', 'k', '', '', '', ''),
(39, '', 'Account', '', '', '', '', ''),
(40, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(41, 'l', 'Procurement', 'k', '', '', '', ''),
(42, '', 'Account', '', '', '', '', ''),
(43, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(44, 'l', 'Procurement', 'k', '', '', '', ''),
(45, '', 'Account', '', '', '', '', ''),
(46, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(47, 'l', 'Procurement', 'k', '', '', '', ''),
(48, '', 'Account', '', '', '', '', ''),
(49, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(50, 'l', 'Procurement', 'k', '', '', '', ''),
(51, '', 'Account', '', '', '', '', ''),
(52, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(53, 'l', 'Procurement', 'k', '', '', '', ''),
(54, '', 'Account', '', '', '', '', ''),
(55, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(56, 'l', 'Procurement', 'k', '', '', '', ''),
(57, '', 'Account', '', '', '', '', ''),
(58, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(59, 'l', 'Procurement', 'k', '', '', '', ''),
(60, '', 'Account', '', '', '', '', ''),
(61, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(62, 'l', 'Procurement', 'k', '', '', '', ''),
(63, '', 'Account', '', '', '', '', ''),
(64, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(65, 'l', 'Procurement', 'k', '', '', '', ''),
(66, '', 'Account', '', '', '', '', ''),
(67, NULL, 'Sales', NULL, NULL, NULL, NULL, NULL),
(68, NULL, 'Procurement', NULL, NULL, NULL, NULL, NULL),
(69, NULL, 'Account', NULL, NULL, NULL, NULL, NULL),
(70, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(71, 'l', 'Procurement', 'k', '', '', '', ''),
(72, '', 'Account', '', '', '', '', ''),
(73, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(74, 'l', 'Procurement', 'k', '', '', '', ''),
(75, '', 'Account', '', '', '', '', ''),
(76, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(77, 'l', 'Procurement', 'k', '', '', '', ''),
(78, '', 'Account', '', '', '', '', ''),
(79, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(80, 'l', 'Procurement', 'k', '', '', '', ''),
(81, '', 'Account', '', '', '', '', ''),
(82, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(83, 'l', 'Procurement', 'k', '', '', '', ''),
(84, '', 'Account', '', '', '', '', ''),
(85, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(86, 'l', 'Procurement', 'k', '', '', '', ''),
(87, '', 'Account', '', '', '', '', ''),
(88, 'lk', 'Sales', 'lk', 'l', 'kl', 'k', 'lk'),
(89, 'l', 'Procurement', 'k', '', '', '', ''),
(90, '', 'Account', '', '', '', '', ''),
(91, 'Steven John M Añasco', 'Sales', 'sdfsdf', 'sdfsdf', 'sdf', 'qdsfsdf', ''),
(92, '', 'Procurement', '', '', '', '', ''),
(93, 'jn', 'Account', 'm, ', '', '', '', ''),
(94, 'Steven John M Añasco', 'Sales', 'sdfsdf', 'sdfsdf', 'sdf', 'qdsfsdf', ''),
(95, '', 'Procurement', '', '', '', '', ''),
(96, 'jn', 'Account', 'm, ', '', '', '', ''),
(97, 'Steven John M Añasco', 'Sales', 'sdfsdf', 'sdfsdf', 'sdf', 'qdsfsdf', ''),
(98, '', 'Procurement', '', '', '', '', ''),
(99, 'jn', 'Account', 'm, ', '', '', '', ''),
(100, 'Steven John M Añasco', 'Sales', 'sdfsdf', 'sdfsdf', 'sdf', 'qdsfsdf', ''),
(101, '', 'Procurement', '', '', '', '', ''),
(102, 'jn', 'Account', 'm, ', '', '', '', ''),
(103, 'Steven John M Añasco', 'Sales', 'sdfsdf', 'sdfsdf', 'sdf', 'qdsfsdf', ''),
(104, '', 'Procurement', '', '', '', '', ''),
(105, 'jn', 'Account', 'm, ', '', '', '', ''),
(106, 'e', 'Sales', 'e', 'e', 'e', 'e', 'e'),
(107, 'e', 'Procurement', 'e', 'e', 'e', '', ''),
(108, '', 'Account', '', '', '', '', ''),
(109, 'e', 'Sales', 'e', 'e', 'e', 'e', 'e'),
(110, 'e', 'Procurement', 'e', 'e', 'e', '', ''),
(111, '', 'Account', '', '', '', '', ''),
(112, 'e', 'Sales', 'e', 'e', 'e', 'e', 'e'),
(113, 'e', 'Procurement', 'e', 'e', 'e', '', ''),
(114, '', 'Account', '', '', '', '', ''),
(115, 'e', 'Sales', 'e', 'e', 'e', 'e', 'e'),
(116, 'e', 'Procurement', 'e', 'e', 'e', '', ''),
(117, '', 'Account', '', '', '', '', ''),
(118, 'kl', 'Sales', 'lk', 'lk', 'l', 'kl', 'k'),
(119, 'lk', 'Procurement', 'l', 'kl', 'k', 'l', 'kl'),
(120, 'k', 'Account', 'lk', 'l', 'kl', 'k', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `tblheadoffice`
--

CREATE TABLE IF NOT EXISTS `tblheadoffice` (
  `head_office_id` int(11) NOT NULL AUTO_INCREMENT,
  `head_office_address` varchar(500) DEFAULT NULL,
  `head_office_city_municipality` varchar(100) DEFAULT NULL,
  `head_office_province` varchar(100) DEFAULT NULL,
  `head_office_region` varchar(100) DEFAULT NULL,
  `head_office_zip` varchar(30) DEFAULT NULL,
  `head_office_telephone` varchar(30) DEFAULT NULL,
  `head_office_fax` varchar(30) DEFAULT NULL,
  `head_office_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`head_office_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tblheadoffice`
--

INSERT INTO `tblheadoffice` (`head_office_id`, `head_office_address`, `head_office_city_municipality`, `head_office_province`, `head_office_region`, `head_office_zip`, `head_office_telephone`, `head_office_fax`, `head_office_email`) VALUES
(1, 'e', 'e', 'e', NULL, 'e', 'e', 'e', 'e'),
(2, 'e', 'e', 'e', NULL, 'e', 'e', 'e', 'e'),
(3, 'h', 'kjh', 'k', 'jh', 'kj', 'h', 'kjh', 'k'),
(5, 'd', 'd', 'd', 'ddd', 'd', 'd', 'd', 'd'),
(6, 'd', 'd', 'd', 'ddd', 'd', 'd', 'd', 'd'),
(7, 'd', 'd', 'd', 'd', 'd', 'dsad', 'd', 's'),
(9, 'b', 'uyb', 'uy', 'b', 'sd', 'dsad', 'd', 'd'),
(13, 'dd', 'd', 'd', 'd', 'd', 'd', 'dqsd', 'd'),
(14, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd'),
(15, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(16, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(17, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(18, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(19, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(20, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(21, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(22, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(23, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(24, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(25, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(26, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(27, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(28, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(31, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(32, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(33, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(34, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(35, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(36, 'd', 'd', 'd', 'lk', 'l', 'kl', 'kl', 'k'),
(37, 'sdfsdf', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdfsdf', 'sdf', 'nevetsjohn@live.com'),
(38, 'sdfsdf', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdfsdf', 'sdf', 'nevetsjohn@live.com'),
(39, 'sdfsdf', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdfsdf', 'sdf', 'nevetsjohn@live.com'),
(40, 'sdfsdf', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdfsdf', 'sdf', 'nevetsjohn@live.com'),
(41, 'sdfsdf', 'sdfs', 'sdf', 'sdf', 'sdf', 'sdfsdf', 'sdf', 'nevetsjohn@live.com'),
(42, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'nevetsjohn@live.com'),
(43, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'nevetsjohn@live.com'),
(44, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'nevetsjohn@live.com'),
(45, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'nevetsjohn@live.com'),
(46, 'pol', 'pol', 'pol', 'pol', 'pol', 'pol', 'pol', 'norman.armian@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE IF NOT EXISTS `tblservices` (
  `services_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`services_id`, `description`) VALUES
(1, 'd'),
(2, 'd'),
(3, 'dd'),
(4, 'd'),
(5, 'e'),
(6, 'e'),
(7, 'e'),
(8, 'e'),
(9, 'e'),
(10, 'asd'),
(11, 'asd'),
(12, 'asd'),
(13, 'asd'),
(14, 'asd'),
(15, 'asd'),
(16, 'asd'),
(17, 'asd'),
(18, 'asd'),
(19, 'asd'),
(20, 'asd'),
(21, 'asd'),
(22, 'asd'),
(23, 'asd'),
(24, 'asd'),
(25, 'asd'),
(26, 'asd'),
(27, 'asd'),
(28, 'asd'),
(29, 'asd'),
(30, 'asd'),
(31, 'asd'),
(32, 'asd'),
(33, 'asd'),
(34, 'asd'),
(35, 'asd'),
(36, 'asd'),
(37, 'asd'),
(38, 'asd'),
(39, 'asd'),
(40, 'asd'),
(41, 'asd'),
(42, 'asd'),
(43, 'asd'),
(44, 'asd'),
(45, 'asd'),
(46, 'asd'),
(47, 'asd'),
(48, 'asd'),
(49, 'asd'),
(50, 'asd'),
(51, 'asd'),
(52, 'asd'),
(53, 'asd'),
(54, 'asd'),
(55, 'asdasd'),
(56, 'asdasd'),
(57, 'fghf'),
(58, 'asdasd'),
(59, 'asdasd'),
(60, 'fghf'),
(61, 'asdasd'),
(62, 'asdasd'),
(63, 'fghf'),
(64, 'asdasd'),
(65, 'asdasd'),
(66, 'fghf'),
(67, 'j'),
(68, 'lkj');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `is_admin` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcompanybranches`
--
ALTER TABLE `tblcompanybranches`
  ADD CONSTRAINT `tblcompanybranches_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`),
  ADD CONSTRAINT `tblcompanybranches_ibfk_2` FOREIGN KEY (`branches_id`) REFERENCES `tblbranches` (`branches_id`);

--
-- Constraints for table `tblcompanycategory`
--
ALTER TABLE `tblcompanycategory`
  ADD CONSTRAINT `tblcompanycategory_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`),
  ADD CONSTRAINT `tblcompanycategory_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tblcategory` (`category_id`);

--
-- Constraints for table `tblcompanycontactperson`
--
ALTER TABLE `tblcompanycontactperson`
  ADD CONSTRAINT `tblcompanycontactperson_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`),
  ADD CONSTRAINT `tblcompanycontactperson_ibfk_2` FOREIGN KEY (`contact_person_id`) REFERENCES `tblcontactperson` (`contact_person_id`);

--
-- Constraints for table `tblcompanyheadoffice`
--
ALTER TABLE `tblcompanyheadoffice`
  ADD CONSTRAINT `tblcompanyheadoffice_ibfk_1` FOREIGN KEY (`head_office_id`) REFERENCES `tblheadoffice` (`head_office_id`),
  ADD CONSTRAINT `tblcompanyheadoffice_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`);

--
-- Constraints for table `tblcompanyservices`
--
ALTER TABLE `tblcompanyservices`
  ADD CONSTRAINT `tblcompanyservices_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`),
  ADD CONSTRAINT `tblcompanyservices_ibfk_2` FOREIGN KEY (`services_id`) REFERENCES `tblservices` (`services_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
