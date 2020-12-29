-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2020 at 10:41 AM
-- Server version: 8.0.18
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
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fullname` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `fullname`) VALUES
(22, 'admin', 'controller', '', ''),
(31, 'sam', 'sam', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `loginid` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `username` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adminstaff`
--

DROP TABLE IF EXISTS `adminstaff`;
CREATE TABLE IF NOT EXISTS `adminstaff` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `fullname` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `adminstaff`
--

INSERT INTO `adminstaff` (`id`, `username`, `password`, `email`, `fullname`) VALUES
(32, 'admin', 'admin', '', '');;

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

DROP TABLE IF EXISTS `asset`;
CREATE TABLE IF NOT EXISTS `asset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `types` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `descrip` longtext NOT NULL,
  `cost` float NOT NULL,
  `address` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `remark` longtext NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(200) NOT NULL,
  `last_photo_edit` varchar(200) NOT NULL,
  `last_edited` varchar(200) NOT NULL,
  `employee_code` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `middlename` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `photo_file_name` varchar(200) NOT NULL,
  `photo_path_name` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `local_govt` varchar(200) NOT NULL,
  `home_address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `phone_no` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `marital_status` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `basic` varchar(200) NOT NULL,
  `housing` varchar(200) NOT NULL,
  `productivity` varchar(200) NOT NULL,
  `lunch` varchar(200) NOT NULL,
  `utility_allowance` varchar(200) NOT NULL,
  `other_allowance` varchar(200) NOT NULL,
  `transport` varchar(200) NOT NULL,
  `paye` varchar(200) NOT NULL,
  `dressing_allowance` varchar(200) NOT NULL,
  `pension` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `date_employed` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `date`, `last_photo_edit`, `last_edited`, `employee_code`, `surname`, `middlename`, `firstname`, `title`, `photo_file_name`, `photo_path_name`, `state`, `local_govt`, `home_address`, `city`, `phone_no`, `sex`, `marital_status`, `email`, `category`, `dept`, `basic`, `housing`, `productivity`, `lunch`, `utility_allowance`, `other_allowance`, `transport`, `paye`, `dressing_allowance`, `pension`, `dob`, `date_employed`, `password`, `access`) VALUES
(5, 'Wednesday, November 23rd 2016.', '', 'Monday, January 28th 2019.', '0002', 'JOHN', 'ihsdh', 'fdfdfd', 'Mr', '', '', 'MY', 'OYSW', '5, thd', 'NYX', '88555555', 'Male', 'Married', 'ba@yahoo.com', 'AGM, TECH DEPT', 'TECHNICAL', '316381.25', '0.00', '0.00', '33165.11', '39300.94', '249151.14', '0.00', '27116.48', '0.00', '133848', '22 August 1907', '02 April 2017', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `pay_to` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `voucher_id` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `notes` longtext NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `reason` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pay` varchar(255) NOT NULL,
  `users` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--


-- --------------------------------------------------------

--
-- Table structure for table `sliprecord`
--

DROP TABLE IF EXISTS `sliprecord`;
CREATE TABLE IF NOT EXISTS `sliprecord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `employee_code` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `basic` varchar(200) NOT NULL,
  `housing` varchar(200) NOT NULL,
  `transport` varchar(200) NOT NULL,
  `lunch` varchar(200) NOT NULL,
  `utility_allowance` varchar(200) NOT NULL,
  `other_allowance` varchar(200) NOT NULL,
  `productivity` varchar(200) NOT NULL,
  `paye` varchar(200) NOT NULL,
  `pension` varchar(200) NOT NULL,
  `refund_overtime` varchar(200) NOT NULL,
  `coop_contribution` varchar(200) NOT NULL,
  `car_loan` varchar(200) NOT NULL,
  `personal_loan` varchar(200) NOT NULL,
  `coop_loan` varchar(200) NOT NULL,
  `rent_advance` varchar(200) NOT NULL,
  `car_refurbish` varchar(200) NOT NULL,
  `housing_mortgage` varchar(200) NOT NULL,
  `other_deduct` float NOT NULL DEFAULT '0',
  `grosspay` varchar(200) NOT NULL,
  `total_deduction1` varchar(200) NOT NULL,
  `total_deduction2` varchar(200) NOT NULL,
  `total_deduction` varchar(200) NOT NULL,
  `netpay` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=592 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliprecord`
--


-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

DROP TABLE IF EXISTS `tax`;
CREATE TABLE IF NOT EXISTS `tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tax` float NOT NULL,
  `years` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `tax`, `years`) VALUES
(1, 141411, '111');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

DROP TABLE IF EXISTS `vouchers`;
CREATE TABLE IF NOT EXISTS `vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `r_from` varchar(255) DEFAULT NULL,
  `voucher_id` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `notes` longtext NOT NULL,
  `date` date DEFAULT NULL,
  `reason` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pay` varchar(255) NOT NULL,
  `users` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vouchers`
--

INSERT INTO `vouchers` (`id`, `type`, `r_from`, `voucher_id`, `amount`, `notes`, `date`, `reason`, `pay`, `users`) VALUES
(1, 'Revenue', 'Gloria', 'V5f50b0d460d24', 25000, '', '2019-08-02', '2020 June ', '', 'NLIP/0026'),
(2, 'Dividend', 'Adewale', 'V5f72e815798cb', 8900, 'jjhhjjh', '2020-09-09', 'nothing', 'POS', 'NLIP/0026');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
