-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 25, 2015 at 10:28 AM
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
-- Table structure for table `tblads`
--

CREATE TABLE IF NOT EXISTS `tblads` (
  `ads_id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_title` varchar(100) DEFAULT NULL,
  `ads_description` varchar(300) DEFAULT NULL,
  `ads_datefrom` date DEFAULT NULL,
  `ads_dateto` date DEFAULT NULL,
  `ads_file_name` varchar(200) DEFAULT NULL,
  `ads_full_path` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tblads`
--

INSERT INTO `tblads` (`ads_id`, `ads_title`, `ads_description`, `ads_datefrom`, `ads_dateto`, `ads_file_name`, `ads_full_path`) VALUES
(5, 'aaaaa', 'test', '0000-00-00', '0000-00-00', '02052010081.jpg', 'C:/xampp/htdocs/ciolproject2/ads/02052010081.jpg'),
(6, 'test', 'tesss111', '0000-00-00', '0000-00-00', '02052010080.jpg', 'C:/xampp/htdocs/ciolproject2/ads/02052010080.jpg'),
(7, 'asda', 'aaa', '0000-00-00', '0000-00-00', '02052010078.jpg', 'C:/xampp/htdocs/ciolproject2/ads/02052010078.jpg'),
(8, 'aaa', 'aaa', '0000-00-00', '0000-00-00', '02052010079.jpg', 'C:/xampp/htdocs/ciolproject2/ads/02052010079.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tblbranches`
--

INSERT INTO `tblbranches` (`branches_id`, `branches_person`, `branches_address`, `branches_province`, `branches_telephone`, `branches_fax`, `branches_email`) VALUES
(54, 'asd', 'd', 'd', 'd', 'd', 'd'),
(55, 'd', 'd', 'd', 'd', 'd', 'd'),
(56, 'pol', 'pol', 'pol', 'pol', 'pol', 'pol'),
(57, 'pol1', 'pol1', 'pol1', 'pol1', 'pol1', 'pol1'),
(58, '', '', '', '', '', ''),
(59, '', '', '', '', '', ''),
(60, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) DEFAULT NULL,
  `category_sub_cat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=155 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`category_id`, `category_name`, `category_sub_cat`) VALUES
(132, 'Mechanical', 'Pumps, Fans and Blowers'),
(133, 'Mechanical', 'Power tools,machine shop,fabrication and welding equipments,tools and consumables'),
(134, 'Mechanical', 'Adhesive, Sealants, Solvents, and Removers'),
(135, 'Mechanical', 'Boiler and HRSG components and pressure parts'),
(136, 'Instrumentation', 'Laboratory testing, measuring and analyzing equipments'),
(137, 'Safety and Security', 'Personal Protection Equipment and kits'),
(138, 'Eletronics', 'Consumer Electronics'),
(139, 'Agriculture', 'Tractors and other agricultural equipments, machines and tools'),
(140, 'Mechanical', 'Automotive and heavy equipments and parts'),
(141, 'Mechanical', 'Internal combustion engines, parts, and accessories'),
(142, 'Instrumentation', 'Laboratory testing, measuring and analyzing equipments'),
(143, 'Safety and Security', 'Fire and smoke detection and alarm equipments and parts'),
(144, 'Eletronics', 'Electronic communication devices'),
(145, 'Agriculture', 'Livestock and meat'),
(146, 'Electrical', 'Lighting (CFL, LED, HID, incandescent), lighting controls, ballast, batteries and fixtures'),
(147, 'Electrical', 'Wires and cables, connectors, terminal lugs, fittings, fasteners, receptacle and panels'),
(148, 'Safety and Security', 'Fire and smoke detection and alarm equipments and parts'),
(149, 'Electrical', 'Lighting (CFL, LED, HID, incandescent), lighting controls, ballast, batteries and fixtures'),
(150, 'Electrical', 'Wires and cables, connectors, terminal lugs, fittings, fasteners, receptacle and panels'),
(151, 'Safety and Security', 'Fire and smoke detection and alarm equipments and parts'),
(152, 'Electrical', 'Circuit breakers, power supply, contactors, relays, timer, switch, transducers'),
(153, 'Eletrical', 'Induction motors, gearmotors, definite and general purpose motors and HVAC motors'),
(154, 'Electrical', 'Wires and cables, connectors, terminal lugs, fittings, fasteners, receptacle and panels');

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
  `is_verified` varchar(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`company_id`, `company_registrants_name`, `company_username`, `company_password`, `company_trade_name`, `company_tin`, `company_bir_registration_no`, `company_website`, `company_history`, `is_verified`, `status`) VALUES
(57, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'test', 'test', '1', 'Active'),
(58, 'pol', 'pol', '627a1f8f3e1f8a2a0cbb9aedc33ade8c', 'pol', 'pol', 'pol', 'pol', 'pol', '1', 'Inactive'),
(59, 'CX', 'cx', '0bdff8095c8bf1b38775bf35547a1317', 'cx', '12312', '232', 'asd', 'sdfsdf', '0', 'Active'),
(60, 'CX', 'cx', '0bdff8095c8bf1b38775bf35547a1317', 'cx', '12312', '232', 'asd', 'sdfsdf', '1', 'Active'),
(61, 'agri', 'agri', '02054b032812a9731d4385eebc9a39a9', 'agri', '3434', 'agri', 'agri', 'asssssssssssssssssssssssssssssssssssssssssssssssssdas dasd asda lorem upasda dasd asdad asdas asd a ds asd ad a das da ad asd a', '1', 'Active');

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
(57, 54),
(57, 55),
(58, 56),
(58, 57),
(59, 58),
(60, 59),
(61, 60);

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
(57, 132),
(57, 133),
(57, 134),
(57, 135),
(57, 136),
(57, 137),
(57, 138),
(57, 139),
(58, 140),
(58, 141),
(58, 142),
(58, 143),
(58, 144),
(58, 145),
(59, 146),
(59, 147),
(59, 148),
(60, 149),
(60, 150),
(60, 151),
(61, 152),
(61, 153),
(61, 154);

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
(57, 148),
(57, 149),
(57, 150),
(58, 151),
(58, 152),
(58, 153),
(59, 154),
(59, 155),
(59, 156),
(60, 157),
(60, 158),
(60, 159),
(61, 160),
(61, 161),
(61, 162);

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
(57, 56),
(58, 57),
(59, 58),
(60, 59),
(61, 60);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanymessages`
--

CREATE TABLE IF NOT EXISTS `tblcompanymessages` (
  `company_id` int(11) DEFAULT NULL,
  `message_id` int(11) DEFAULT NULL,
  KEY `company_id` (`company_id`),
  KEY `message_id` (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanymessages`
--

INSERT INTO `tblcompanymessages` (`company_id`, `message_id`) VALUES
(61, 8),
(61, 9),
(61, 10),
(61, 11),
(61, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanyphotos`
--

CREATE TABLE IF NOT EXISTS `tblcompanyphotos` (
  `company_id` int(11) DEFAULT NULL,
  `photos_id` int(11) DEFAULT NULL,
  KEY `company_id` (`company_id`),
  KEY `photos_id` (`photos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanyphotos`
--

INSERT INTO `tblcompanyphotos` (`company_id`, `photos_id`) VALUES
(57, 4),
(57, 5),
(57, 6),
(58, 7),
(58, 8),
(58, 9),
(57, 10),
(57, 11),
(57, 12),
(57, 13),
(57, 14),
(57, 15),
(57, 16),
(57, 17),
(57, 18),
(57, 19),
(57, 20),
(57, 21),
(57, 22),
(57, 23),
(57, 24),
(57, 25),
(57, 26),
(57, 27),
(57, 28),
(57, 29),
(57, 30),
(57, 31),
(57, 32),
(57, 33),
(57, 34),
(57, 35),
(57, 36),
(57, 37),
(57, 38),
(57, 39),
(57, 40),
(57, 41),
(57, 42),
(57, 43),
(57, 44),
(57, 45),
(57, 46),
(57, 47),
(57, 48),
(57, 49),
(57, 50),
(57, 51),
(57, 52),
(57, 53),
(57, 54),
(57, 55),
(57, 56),
(57, 57),
(57, 58),
(57, 59),
(57, 60),
(57, 61),
(57, 62),
(57, 63),
(57, 64),
(57, 65),
(57, 66),
(57, 67),
(57, 68),
(57, 69),
(57, 70),
(57, 71),
(57, 72),
(57, 73),
(57, 74),
(57, 75),
(57, 76),
(57, 77),
(57, 78),
(57, 79),
(57, 80),
(57, 81),
(57, 82),
(57, 83),
(57, 84),
(60, 86),
(60, 87),
(61, 89),
(61, 90);

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
(57, 84),
(57, 85),
(57, 86),
(58, 87),
(58, 88),
(58, 89),
(59, 90),
(60, 91),
(61, 92);

-- --------------------------------------------------------

--
-- Table structure for table `tblcompanyuploads`
--

CREATE TABLE IF NOT EXISTS `tblcompanyuploads` (
  `company_id` int(11) DEFAULT NULL,
  `upload_id` int(11) DEFAULT NULL,
  KEY `company_id` (`company_id`),
  KEY `upload_id` (`upload_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompanyuploads`
--

INSERT INTO `tblcompanyuploads` (`company_id`, `upload_id`) VALUES
(57, 17),
(57, 18),
(58, 19),
(58, 20),
(61, 21);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=163 ;

--
-- Dumping data for table `tblcontactperson`
--

INSERT INTO `tblcontactperson` (`contact_person_id`, `contact_person_name`, `contact_person_department`, `contact_person_telephone`, `contact_person_fax`, `contact_person_email`, `contact_person_mobile1`, `contact_person_mobile2`) VALUES
(148, 'test', 'Sales', 'test', 'test', 'test', 'test', 'test'),
(149, 'test', 'Procurement', 'test', 'test', 'test', 'v', 'cj'),
(150, 'hkj', 'Account', 'h', 'kjh', 'kj', 'h', 'kjh'),
(151, 'Steven John M Añasco', 'Sales', 'asd', 'd', 'dd', 'd', 'd'),
(152, 'd', 'Procurement', 'd', 'd', 'd', 'd', 'd'),
(153, '', 'Account', 'd', '', 'd', 'd', 'd'),
(154, '', 'Sales', '', '', '', '', ''),
(155, '', 'Procurement', '', '', '', '', ''),
(156, '', 'Account', '', '', '', '', ''),
(157, '', 'Sales', '', '', '', '', ''),
(158, '', 'Procurement', '', '', '', '', ''),
(159, '', 'Account', '', '', '', '', ''),
(160, 'asd', 'Sales', 'd', 'd', 'd', 'd', 'd'),
(161, 'd', 'Procurement', 'd', 'd', '', '', ''),
(162, '', 'Account', '', '', '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tblheadoffice`
--

INSERT INTO `tblheadoffice` (`head_office_id`, `head_office_address`, `head_office_city_municipality`, `head_office_province`, `head_office_region`, `head_office_zip`, `head_office_telephone`, `head_office_fax`, `head_office_email`) VALUES
(56, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'dssdf@test.asd'),
(57, 'pol', 'pol', 'pol', 'pol', '8705', 'v', 'pol', 'nevetsjohn@live.com'),
(58, 'Cagayan de oro', 'cdo', 'cdo', 'asdasd', '9000', '1321', '3rwe', 'steve_zaxzjohn@yahoo.com'),
(59, 'Cagayan de oro', 'cdo', 'cdo', 'asdasd', '9000', '1321', '3rwe', 'steve_zaxzjohn@yahoo.com'),
(60, 'Cagayan de oro', 'Cagayan de Oro', 'cdo', 'cdo', '134242', '232', '4354', 'steve_zaxzjohn@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tblmessages`
--

CREATE TABLE IF NOT EXISTS `tblmessages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message_sender_name` varchar(100) DEFAULT NULL,
  `message_sender_mobiletelno` varchar(30) DEFAULT NULL,
  `message_sender_email` varchar(100) DEFAULT NULL,
  `message_messages` varchar(520) DEFAULT NULL,
  `message_date_entered` datetime DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblmessages`
--

INSERT INTO `tblmessages` (`message_id`, `message_sender_name`, `message_sender_mobiletelno`, `message_sender_email`, `message_messages`, `message_date_entered`) VALUES
(8, 's', NULL, 'ss', 'ssss', '2015-04-24 09:21:12'),
(9, 'steve', NULL, 'steve_zaxzjohn@yahoo.com', 'test', '2015-04-24 13:15:49'),
(10, 'stve', NULL, 'pol@pol.com', 'sfsdfsdf', '2015-04-25 08:05:55'),
(11, 'mmmm', 'mmmm', 'sds@hdghfg.ghj', 'sdfsdfsdf', '2015-04-25 09:30:22'),
(12, 'kjjjkkj', '4645546', 'fdgfh@dfg.gfh', 'fdgdhfdg', '2015-04-25 09:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblphotos`
--

CREATE TABLE IF NOT EXISTS `tblphotos` (
  `photos_id` int(11) NOT NULL AUTO_INCREMENT,
  `photos_title` varchar(100) DEFAULT NULL,
  `photos_description` varchar(300) DEFAULT NULL,
  `photos_file_name` varchar(200) DEFAULT NULL,
  `photos_full_path` varchar(300) DEFAULT NULL,
  `deleted` int(3) DEFAULT NULL,
  PRIMARY KEY (`photos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `tblphotos`
--

INSERT INTO `tblphotos` (`photos_id`, `photos_title`, `photos_description`, `photos_file_name`, `photos_full_path`, `deleted`) VALUES
(1, '', '', '02052010081.jpg', 'C:/xampp/htdocs/ciolproject2/photos/pol/02052010081.jpg', 0),
(2, '', '', '02072010325.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/02072010325.jpg', 0),
(3, '', '', '16072010408.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/16072010408.jpg', 0),
(4, 'a', 'b', '02072010325.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/02072010325.jpg', 1),
(5, 'aaaaa', 'bbbbb', '04062010178.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/04062010178.jpg', 1),
(6, 'mmmm', 'nnnnnnsss', '11052010082.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/11052010082.jpg', 1),
(7, '', '', '02072010325.jpg', 'C:/xampp/htdocs/ciolproject2/photos/pol/02072010325.jpg', 0),
(8, '', '', '16072010402.jpg', 'C:/xampp/htdocs/ciolproject2/photos/pol/16072010402.jpg', 0),
(9, '', '', '17072010423.jpg', 'C:/xampp/htdocs/ciolproject2/photos/pol/17072010423.jpg', 0),
(10, 'a', 'b', 'Koala.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Koala.jpg', 1),
(11, '', '', 'Tulips.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Tulips.jpg', 0),
(12, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(13, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(14, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(15, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(16, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(17, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(18, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(19, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(20, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(21, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(22, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(23, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(24, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(25, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(26, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(27, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(28, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(29, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(30, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(31, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(32, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(33, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(34, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(35, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(36, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(37, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(38, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(39, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(40, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(41, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(42, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(43, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(44, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(45, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(46, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(47, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(48, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(49, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(50, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(51, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(52, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(53, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(54, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(55, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(56, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(57, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(58, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(59, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(60, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(61, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(62, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(63, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(64, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(65, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(66, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(67, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(68, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(69, '', '', 'Jellyfish.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Jellyfish.jpg', 0),
(70, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(71, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(72, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(73, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(74, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(75, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(76, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(77, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(78, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(79, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(80, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(81, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(82, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(83, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Chrysanthemum.jpg', 0),
(84, 'aaa', 'aasdsd', 'Hydrangeas.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/Hydrangeas.jpg', 1),
(86, '', '', 'Lighthouse.jpg', 'C:/xampp/htdocs/ciolproject2/photos/CX/Lighthouse.jpg', 0),
(87, '', '', 'Chrysanthemum.jpg', 'C:/xampp/htdocs/ciolproject2/photos/CX/Chrysanthemum.jpg', 0),
(89, 'cathy', 'cathy', 'images_(1).jpg', 'C:/xampp/htdocs/ciolproject2/photos/agri/images_(1).jpg', 0),
(90, '', '', 'resize.jpg', 'C:/xampp/htdocs/ciolproject2/photos/agri/resize.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE IF NOT EXISTS `tblservices` (
  `services_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`services_id`, `description`) VALUES
(84, 'sfafdf'),
(85, 'sdf'),
(86, 'sdf'),
(87, 'pol2'),
(88, 'pol2'),
(89, 'pol2'),
(90, ''),
(91, ''),
(92, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbluploads`
--

CREATE TABLE IF NOT EXISTS `tbluploads` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `upload_file_name` varchar(100) DEFAULT NULL,
  `upload_file_location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`upload_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbluploads`
--

INSERT INTO `tbluploads` (`upload_id`, `upload_file_name`, `upload_file_location`) VALUES
(17, 'web101.docx', 'C:/xampp/htdocs/ciolproject2/uploads/test/web101.docx'),
(18, 'SupplierProfileandSearchResults.doc', 'C:/xampp/htdocs/ciolproject2/uploads/test/SupplierProfileandSearchResults.doc'),
(19, 'Application_letter.docx', 'C:/xampp/htdocs/ciolproject2/uploads/pol/Application_letter.docx'),
(20, 'Application_SPC.docx', 'C:/xampp/htdocs/ciolproject2/uploads/pol/Application_SPC.docx'),
(21, 'application_marketics.docx', 'C:/xampp/htdocs/ciolproject2/uploads/agri/application_marketics.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`user_id`, `username`, `password`, `status`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Active');

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
-- Constraints for table `tblcompanymessages`
--
ALTER TABLE `tblcompanymessages`
  ADD CONSTRAINT `tblcompanymessages_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`),
  ADD CONSTRAINT `tblcompanymessages_ibfk_2` FOREIGN KEY (`message_id`) REFERENCES `tblmessages` (`message_id`);

--
-- Constraints for table `tblcompanyphotos`
--
ALTER TABLE `tblcompanyphotos`
  ADD CONSTRAINT `tblcompanyphotos_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`),
  ADD CONSTRAINT `tblcompanyphotos_ibfk_2` FOREIGN KEY (`photos_id`) REFERENCES `tblphotos` (`photos_id`);

--
-- Constraints for table `tblcompanyservices`
--
ALTER TABLE `tblcompanyservices`
  ADD CONSTRAINT `tblcompanyservices_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`),
  ADD CONSTRAINT `tblcompanyservices_ibfk_2` FOREIGN KEY (`services_id`) REFERENCES `tblservices` (`services_id`);

--
-- Constraints for table `tblcompanyuploads`
--
ALTER TABLE `tblcompanyuploads`
  ADD CONSTRAINT `tblcompanyuploads_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`),
  ADD CONSTRAINT `tblcompanyuploads_ibfk_2` FOREIGN KEY (`upload_id`) REFERENCES `tbluploads` (`upload_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
