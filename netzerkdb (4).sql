-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2015 at 07:52 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tblbranches`
--

INSERT INTO `tblbranches` (`branches_id`, `branches_person`, `branches_address`, `branches_province`, `branches_telephone`, `branches_fax`, `branches_email`) VALUES
(54, 'asd', 'd', 'd', 'd', 'd', 'd'),
(55, 'd', 'd', 'd', 'd', 'd', 'd'),
(56, 'pol', 'pol', 'pol', 'pol', 'pol', 'pol'),
(57, 'pol1', 'pol1', 'pol1', 'pol1', 'pol1', 'pol1');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) DEFAULT NULL,
  `category_sub_cat` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

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
(145, 'Agriculture', 'Livestock and meat');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`company_id`, `company_registrants_name`, `company_username`, `company_password`, `company_trade_name`, `company_tin`, `company_bir_registration_no`, `company_website`, `company_history`, `is_verified`, `status`) VALUES
(57, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 'test', 'test', 'test', '1', 'Active'),
(58, 'pol', 'pol', '627a1f8f3e1f8a2a0cbb9aedc33ade8c', 'pol', 'pol', 'pol', 'pol', 'pol', '1', 'Active');

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
(58, 57);

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
(58, 145);

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
(58, 153);

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
(58, 57);

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
(58, 9);

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
(58, 89);

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
(58, 20);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=154 ;

--
-- Dumping data for table `tblcontactperson`
--

INSERT INTO `tblcontactperson` (`contact_person_id`, `contact_person_name`, `contact_person_department`, `contact_person_telephone`, `contact_person_fax`, `contact_person_email`, `contact_person_mobile1`, `contact_person_mobile2`) VALUES
(148, 'test', 'Sales', 'test', 'test', 'test', 'test', 'test'),
(149, 'test', 'Procurement', 'test', 'test', 'test', 'v', 'cj'),
(150, 'hkj', 'Account', 'h', 'kjh', 'kj', 'h', 'kjh'),
(151, 'Steven John M Añasco', 'Sales', 'asd', 'd', 'dd', 'd', 'd'),
(152, 'd', 'Procurement', 'd', 'd', 'd', 'd', 'd'),
(153, '', 'Account', 'd', '', 'd', 'd', 'd');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `tblheadoffice`
--

INSERT INTO `tblheadoffice` (`head_office_id`, `head_office_address`, `head_office_city_municipality`, `head_office_province`, `head_office_region`, `head_office_zip`, `head_office_telephone`, `head_office_fax`, `head_office_email`) VALUES
(56, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'dssdf@test.asd'),
(57, 'pol', 'pol', 'pol', 'pol', '8705', 'v', 'pol', 'nevetsjohn@live.com');

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
  PRIMARY KEY (`photos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tblphotos`
--

INSERT INTO `tblphotos` (`photos_id`, `photos_title`, `photos_description`, `photos_file_name`, `photos_full_path`) VALUES
(1, '', '', '02052010081.jpg', 'C:/xampp/htdocs/ciolproject2/photos/pol/02052010081.jpg'),
(2, '', '', '02072010325.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/02072010325.jpg'),
(3, '', '', '16072010408.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/16072010408.jpg'),
(4, 'a', 'b', '02072010325.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/02072010325.jpg'),
(5, 'aaaaa', 'bbbbb', '04062010178.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/04062010178.jpg'),
(6, 'mmmm', 'nnnnnn', '11052010082.jpg', 'C:/xampp/htdocs/ciolproject2/photos/test/11052010082.jpg'),
(7, '', '', '02072010325.jpg', 'C:/xampp/htdocs/ciolproject2/photos/pol/02072010325.jpg'),
(8, '', '', '16072010402.jpg', 'C:/xampp/htdocs/ciolproject2/photos/pol/16072010402.jpg'),
(9, '', '', '17072010423.jpg', 'C:/xampp/htdocs/ciolproject2/photos/pol/17072010423.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE IF NOT EXISTS `tblservices` (
  `services_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`services_id`, `description`) VALUES
(84, 'sfafdf'),
(85, 'sdf'),
(86, 'sdf'),
(87, 'pol2'),
(88, 'pol2'),
(89, 'pol2');

-- --------------------------------------------------------

--
-- Table structure for table `tbluploads`
--

CREATE TABLE IF NOT EXISTS `tbluploads` (
  `upload_id` int(11) NOT NULL AUTO_INCREMENT,
  `upload_file_name` varchar(100) DEFAULT NULL,
  `upload_file_location` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`upload_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbluploads`
--

INSERT INTO `tbluploads` (`upload_id`, `upload_file_name`, `upload_file_location`) VALUES
(17, 'web101.docx', 'C:/xampp/htdocs/ciolproject2/uploads/test/web101.docx'),
(18, 'SupplierProfileandSearchResults.doc', 'C:/xampp/htdocs/ciolproject2/uploads/test/SupplierProfileandSearchResults.doc'),
(19, 'Application_letter.docx', 'C:/xampp/htdocs/ciolproject2/uploads/pol/Application_letter.docx'),
(20, 'Application_SPC.docx', 'C:/xampp/htdocs/ciolproject2/uploads/pol/Application_SPC.docx');

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
-- Constraints for table `tblcompanyphotos`
--
ALTER TABLE `tblcompanyphotos`
  ADD CONSTRAINT `tblcompanyphotos_ibfk_2` FOREIGN KEY (`photos_id`) REFERENCES `tblphotos` (`photos_id`),
  ADD CONSTRAINT `tblcompanyphotos_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `tblcompany` (`company_id`);

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
