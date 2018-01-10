-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2016 at 08:45 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbcop`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `area_id` int(3) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(150) NOT NULL,
  PRIMARY KEY (`area_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `area`
--


-- --------------------------------------------------------

--
-- Table structure for table `arrestform`
--

CREATE TABLE IF NOT EXISTS `arrestform` (
  `arrest_id` int(20) NOT NULL AUTO_INCREMENT,
  `fir_id` int(20) NOT NULL COMMENT 'refers to FIR table',
  `courtname` varchar(100) DEFAULT NULL,
  `acts` int(20) NOT NULL COMMENT 'refers to rules table',
  `ps_id` int(20) NOT NULL COMMENT 'refers to policestation',
  `arrested_by` int(20) NOT NULL COMMENT 'refers to officer table',
  `action` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `voter_id` varchar(30) NOT NULL,
  `fingerprint_status` varchar(3) NOT NULL DEFAULT 'no',
  `nationality` varchar(15) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `witness` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`arrest_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='contains arrest or surrender details' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `arrestform`
--


-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `attachment_id` int(20) NOT NULL AUTO_INCREMENT,
  `fir_id` int(20) NOT NULL COMMENT 'refers to FIR table',
  `filename` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `filelocation` varchar(200) NOT NULL,
  PRIMARY KEY (`attachment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='contains attachment details' AUTO_INCREMENT=9 ;

--
-- Dumping data for table `attachments`
--


-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `complaint_id` int(6) NOT NULL AUTO_INCREMENT,
  `complaint` text NOT NULL,
  `complained_by` int(4) NOT NULL COMMENT '0 implies complained by unregistered user',
  `complained_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `emergency` int(1) NOT NULL DEFAULT '0' COMMENT '1 indicates emergency; 2 implies non-emergency',
  `type` int(3) NOT NULL COMMENT 'references table ''crimetype''',
  `area` int(3) NOT NULL COMMENT 'references table ''area''',
  `policestation` int(6) NOT NULL,
  `ip` varchar(16) NOT NULL,
  `complaint_no` varchar(25) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 implies unapproved; 1 implies approved; 2 implies rejected; 3 implies FIR is filed',
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `complaint`, `complained_by`, `complained_on`, `emergency`, `type`, `area`, `policestation`, `ip`, `complaint_no`, `status`) VALUES
(11, 'robbed of money', 0, '2011-03-27 16:25:29', 1, 2, 4, 51, '127.0.0.1', 'EM20110D0CFD949E', 3),
(10, 'Neighbour threatening', 0, '2011-03-27 16:33:00', 1, 5, 5, 2, '127.0.0.1', 'EM2011173376CDC3', 1),
(9, 'important thing stolen', 0, '2011-03-27 14:52:49', 1, 1, 6, 3, '127.0.0.1', 'EM20112C08D49D7A', 0),
(12, 'theft of car', 0, '2011-03-27 16:31:54', 1, 1, 5, 2, '127.0.0.1', 'EM201100F0938F9F', 1),
(13, 'Friend murdered', 0, '2011-03-27 16:31:38', 1, 3, 5, 2, '127.0.0.1', 'EM2011452E3A9C69', 2),
(16, 'who is complainin', 0, '2011-03-27 15:19:20', 1, 2, 2, 30, '127.0.0.1', 'EM201101780F0C3D', 0),
(17, 'i am complaining', 3, '2011-03-27 16:50:52', 1, 3, 5, 2, '127.0.0.1', 'EM201179F2C20347', 3),
(18, 'i  am soooo scared', 3, '2011-03-27 16:51:55', 2, 5, 5, 2, '127.0.0.1', 'NE20114490725725', 3);

-- --------------------------------------------------------

--
-- Table structure for table `crimedetails`
--

CREATE TABLE IF NOT EXISTS `crimedetails` (
  `crime_id` int(10) NOT NULL AUTO_INCREMENT,
  `fir_id` int(10) NOT NULL COMMENT 'refers to FIR table',
  `name` varchar(90) NOT NULL,
  `father_name` varchar(90) NOT NULL,
  `address` text NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `typeofcrime` int(8) NOT NULL COMMENT 'fetch from crimetype table',
  `laws` int(8) NOT NULL COMMENT 'fetch from rules table',
  `majorhead` varchar(50) DEFAULT NULL,
  `minorhead` varchar(50) DEFAULT NULL,
  `conveyance` varchar(50) NOT NULL,
  `propertytype` varchar(50) NOT NULL,
  `propertydetails` varchar(100) NOT NULL,
  `dateofvisit` datetime NOT NULL,
  `placeofoccurence` varchar(20) NOT NULL,
  `witness` varchar(100) NOT NULL,
  PRIMARY KEY (`crime_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Contains details of crime' AUTO_INCREMENT=6 ;

--
-- Dumping data for table `crimedetails`
--


-- --------------------------------------------------------

--
-- Table structure for table `crimetype`
--

CREATE TABLE IF NOT EXISTS `crimetype` (
  `crime_id` int(3) NOT NULL AUTO_INCREMENT,
  `crime_name` varchar(170) NOT NULL,
  PRIMARY KEY (`crime_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `crimetype`
--

INSERT INTO `crimetype` (`crime_id`, `crime_name`) VALUES
(1, 'Theft'),
(2, 'Robbery'),
(3, 'Murder'),
(4, 'Verbal Abuse'),
(5, 'Threat'),
(6, 'crime type 5');

-- --------------------------------------------------------

--
-- Table structure for table `criminals`
--

CREATE TABLE IF NOT EXISTS `criminals` (
  `criminal_id` int(10) NOT NULL AUTO_INCREMENT,
  `criminal_name` varchar(255) NOT NULL,
  `criminal_alias_names` varchar(255) NOT NULL,
  `criminal_father_name` varchar(255) NOT NULL,
  `criminal_birth_place` varchar(100) NOT NULL,
  `criminal_dob` varchar(12) NOT NULL,
  `height` float NOT NULL,
  `weight` float NOT NULL,
  `body_color` varchar(8) NOT NULL,
  `hair_color` varchar(8) NOT NULL,
  `identity_mark` varchar(200) NOT NULL,
  `last_seen_location` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `most_wanted` varchar(3) NOT NULL COMMENT '1 implies most wanted, 2 otherwise',
  PRIMARY KEY (`criminal_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `criminals`
--

INSERT INTO `criminals` (`criminal_id`, `criminal_name`, `criminal_alias_names`, `criminal_father_name`, `criminal_birth_place`, `criminal_dob`, `height`, `weight`, `body_color`, `hair_color`, `identity_mark`, `last_seen_location`, `photo`, `most_wanted`) VALUES
(1, 'Abhishek Marik', 'Chiku', 'Bishnu Charan Marik', 'Kolkata', '1987-09-14', 174, 54, 'Brown', 'Black', 'None', 'DumDum', 'criminalimg/not_available.jpg', '1'),
(3, 'Honu', 'Monu', 'donu', 'oajs', '1985-09-08', 125, 54, 'Black', 'Brown', 'afvfbvnbnm', ';oy;jkjbwkljbngbnwnnbnlnbllnblknbklnlbnnblk', 'criminalimg/not_available.jpg', '2'),
(4, 'Rayden', 'Bonku', 'N/A', 'N/A', '1977-03-16', 123, 56, 'Black', 'Black', 'cross scar on left cheek', 'ballygaunge', 'criminalimg/criminal.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE IF NOT EXISTS `designation` (
  `desig_id` int(3) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(120) NOT NULL,
  `priority` int(4) DEFAULT NULL COMMENT 'The priority and permission of each designation',
  PRIMARY KEY (`desig_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`desig_id`, `designation_name`, `priority`) VALUES
(1, 'Collector', 12),
(2, 'Deputy-Thasildar', 12),
(3, 'Constable(Sepoy)', 14),
(4, 'Assistant Sub-Inspector(JCO)', 10),
(5, 'Thasildar', 13),
(6, 'Commissioner of Police', 1),
(7, 'Deputy Commissioner of Police', 5),
(8, 'Assistant Commissioner of Police', 6),
(9, 'Inspector', 7),
(10, 'Sub-Inspector(Sergeant)', 8),
(11, 'Wireless Sup.(Tech.)(Subedar)', 9),
(12, 'Head Constable', 11),
(13, 'Special Commissioner of Police', 2),
(14, 'Additional Commissioner of Police', 3),
(15, 'Joint Commissioner of Police', 4);

-- --------------------------------------------------------

--
-- Table structure for table `finalform`
--

CREATE TABLE IF NOT EXISTS `finalform` (
  `finalform_id` int(20) NOT NULL AUTO_INCREMENT,
  `fir_id` int(20) NOT NULL COMMENT 'refers to FIR table',
  `court` varchar(30) NOT NULL,
  `casedate` datetime NOT NULL COMMENT 'contains the case opening date',
  `acts` int(20) NOT NULL COMMENT 'refers to rules table',
  `typeof_fr` varchar(40) NOT NULL,
  `fr_unoccured` varchar(40) NOT NULL,
  `complainant_name` varchar(50) NOT NULL COMMENT 'from fir table',
  `complainant_fathername` varchar(50) NOT NULL COMMENT 'from fir tablr',
  `accused_name` varchar(50) NOT NULL,
  `accused_fathername` varchar(50) NOT NULL,
  `accused_occupation` varchar(50) NOT NULL,
  `accused_address` varchar(50) NOT NULL,
  `bailersdetails` varchar(100) NOT NULL,
  `analysisresult` varchar(100) NOT NULL,
  `casebrief` varchar(200) NOT NULL,
  `dispatched` date NOT NULL,
  PRIMARY KEY (`finalform_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='contains final form information' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `finalform`
--


-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

CREATE TABLE IF NOT EXISTS `fir` (
  `fir_id` int(5) NOT NULL AUTO_INCREMENT,
  `fir_no` text NOT NULL,
  `occurrence_date` datetime DEFAULT NULL,
  `report_date` datetime NOT NULL COMMENT 'date of reporting',
  `place` varchar(20) DEFAULT NULL COMMENT 'place of occurence',
  `stolen_properties` varchar(40) DEFAULT NULL COMMENT 'particulars of  properties stolen',
  `total_value` varchar(20) DEFAULT NULL COMMENT 'total value of properties stolen',
  `policestation` varchar(20) NOT NULL COMMENT 'references table ''policestation''',
  `complaint_no` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `occupation` varchar(25) NOT NULL,
  `complaint` text NOT NULL,
  `first_suspect` varchar(50) DEFAULT NULL,
  `second_suspect` varchar(50) DEFAULT NULL,
  `summary` varchar(200) NOT NULL,
  `fir_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fir_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`fir_id`, `fir_no`, `occurrence_date`, `report_date`, `place`, `stolen_properties`, `total_value`, `policestation`, `complaint_no`, `name`, `fathername`, `occupation`, `complaint`, `first_suspect`, `second_suspect`, `summary`, `fir_on`) VALUES
(14, 'FIR/2011/3/DJPNN/23314', '2011-03-10 15:33:00', '2011-03-27 15:34:30', 'Sinthi', 'car', '650000000', '2', 'MIS/V201141805', 'anubhab mukhs', 'daddy mukhs', 'Software Professional', 'biswa niyeche', 'N/A', 'N/A', 'done i think', '2011-03-27 17:09:23'),
(12, 'FIR/2011/3/NBFAD/45735', '2011-03-11 15:26:00', '2011-03-27 15:30:54', 'office', 'N/A', 'N/A', '2', 'MIS/P201198765', 'anubhab mukhs', 'daddy mukhs', 'Software Professional', 'Name:	oooooo baba\r\nGender:	Male\r\nColour:	Black\r\nHeight:	202\r\nWeight:	45\r\nDressing:	bhebe dekhecho ki\r\nGone Willingly:	No\r\nReason:	N/A\r\nKidnapped?:	Yes\r\nKnown Kiddnapper?:	Yes\r\nKidnapper Details:	marik er haat ache\r\nReward:	Yes\r\nReward Details:	hmmm debo na \r\n', 'N/A', 'N/A', 'tried', '2011-03-27 16:57:39'),
(11, 'FIR/2011/3/GOOPN/70010', '0000-00-00 00:00:00', '2011-03-27 16:32:41', 'N/A', 'N/A', 'N/A', '2', 'NE20114490725725', 'anubhab mukhs', 'daddy mukhs', 'Software Professional', 'i  am soooo scared', 'N/A', 'N/A', 'found', '2011-03-27 16:51:55'),
(10, 'FIR/2011/3/DPKCL/39627', '0000-00-00 00:00:00', '2011-03-27 16:46:32', 'N/A', 'N/A', 'N/A', '2', 'EM201179F2C20347', 'anubhab mukhs', 'daddy mukhs', 'Software Professional', 'i am complaining', 'Noni', 'Madan', 'under action', '2011-03-27 16:50:52'),
(9, 'FIR/2011/3/FLBPO/57671', '0000-00-00 00:00:00', '2011-03-27 16:08:10', 'N/A', 'N/A', 'N/A', '51', 'EM20110D0CFD949E', 'N/A', 'N/A', 'N/A', 'robbed of money', 'N/A', 'N/A', 'Fir is filed', '2011-03-27 16:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE IF NOT EXISTS `help` (
  `help_id` int(3) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`help_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`help_id`, `question`, `answer`, `time`) VALUES
(1, 'question1', 'answer1', '2011-02-18 09:14:49'),
(2, 'question2', 'answer2', '2011-02-18 09:15:30'),
(3, 'question3', 'answer3', '2011-02-18 09:57:13'),
(4, 'question 4', 'changing the answer and walla!', '2011-02-18 19:59:25');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(75) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usertype` int(2) NOT NULL DEFAULT '0' COMMENT '0 implies admin; 1 implies citizen; 2 implies officers',
  `confirmation` int(1) NOT NULL DEFAULT '0' COMMENT '1 implies confirmed state',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`, `confirmation`) VALUES
(1, 'admin@ecop.in', 'admin', 0, 1),
(9, 'rlkhoma@gmail.com', '123456', 2, 1),
(3, 'anubhab.mukherjee.official@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 1, 1),
(8, 'ashd@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 2, 1),
(10, 'argchat@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 2, 1),
(11, 'kamal@sify.com', '098f6bcd4621d373cade4e832627b4f6', 2, 1),
(12, 'suplab@suplab.in', 'cc03e747a6afbbcbf8be7668acfebee5', 1, 0),
(15, 'tawte.sumit65@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loudspeaker`
--

CREATE TABLE IF NOT EXISTS `loudspeaker` (
  `loudspeaker_id` int(6) NOT NULL AUTO_INCREMENT,
  `petitioner_name` varchar(130) NOT NULL,
  `reason` varchar(180) NOT NULL,
  `from_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `to_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `location` varchar(140) NOT NULL,
  `area` int(6) NOT NULL,
  `policestation` int(6) NOT NULL,
  `applied_by` varchar(12) NOT NULL,
  `applied_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL DEFAULT '0',
  `license_no` varchar(25) NOT NULL,
  `approved_by` varchar(10) DEFAULT NULL,
  `approved_on` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `rejection_reason` text,
  PRIMARY KEY (`loudspeaker_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `loudspeaker`
--

INSERT INTO `loudspeaker` (`loudspeaker_id`, `petitioner_name`, `reason`, `from_time`, `to_time`, `location`, `area`, `policestation`, `applied_by`, `applied_on`, `status`, `license_no`, `approved_by`, `approved_on`, `rejection_reason`) VALUES
(3, 'anubhab mukhu', 'amar biye legeche', '2011-04-03 15:38:00', '2011-04-15 15:38:00', 'barite pagla', 5, 2, '3', '2011-03-27 15:39:01', 0, 'LI/MIC201100907', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE IF NOT EXISTS `meeting` (
  `meeting_id` int(6) NOT NULL AUTO_INCREMENT,
  `reason` varchar(150) NOT NULL,
  `place` text NOT NULL,
  `area` int(6) NOT NULL,
  `policestation` int(6) NOT NULL,
  `from_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `to_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `participant` varchar(50) NOT NULL,
  `applied_by` int(6) NOT NULL,
  `applied_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '0',
  `license_no` varchar(25) NOT NULL,
  `approved_by` varchar(20) DEFAULT NULL,
  `approved_on` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `rejection_reason` text,
  PRIMARY KEY (`meeting_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeting_id`, `reason`, `place`, `area`, `policestation`, `from_time`, `to_time`, `participant`, `applied_by`, `applied_on`, `status`, `license_no`, `approved_by`, `approved_on`, `rejection_reason`) VALUES
(6, 'vote', 'kolkata', 5, 2, '2011-04-18 15:46:00', '2011-05-03 15:46:00', '123088', 3, '2011-03-27 15:47:00', 0, 'LI/MASS201148934', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `missingperson`
--

CREATE TABLE IF NOT EXISTS `missingperson` (
  `missingper_id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `colour` varchar(14) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `lost_place` varchar(100) NOT NULL,
  `area` int(4) NOT NULL,
  `policestation` int(6) NOT NULL,
  `lost_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `dressing` text NOT NULL,
  `photo` varchar(170) NOT NULL,
  `willing` varchar(5) NOT NULL,
  `reason` text NOT NULL,
  `kidnapped` varchar(5) NOT NULL,
  `know_kidnapper` varchar(5) NOT NULL,
  `kidnapper_details` text NOT NULL,
  `reward` varchar(5) NOT NULL,
  `reward_details` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 implies unapproved; 1 implies approved; 2 implies rejected; 3 implies FIR is filed',
  `reported_by` int(6) NOT NULL,
  `reported_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `report_no` varchar(25) NOT NULL,
  PRIMARY KEY (`missingper_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `missingperson`
--

INSERT INTO `missingperson` (`missingper_id`, `name`, `gender`, `colour`, `height`, `weight`, `lost_place`, `area`, `policestation`, `lost_time`, `dressing`, `photo`, `willing`, `reason`, `kidnapped`, `know_kidnapper`, `kidnapper_details`, `reward`, `reward_details`, `status`, `reported_by`, `reported_on`, `report_no`) VALUES
(5, 'oooooo baba', 'male', 'Black', '202', '45', 'office', 5, 2, '2011-03-11 15:26:00', 'bhebe dekhecho ki', 'uploads/MIS/P201198765.jpg', 'No', 'N/A', 'Yes', 'Yes', 'marik er haat ache', 'Yes', 'hmmm debo na ', 3, 3, '2011-03-27 15:30:54', 'MIS/P201198765'),
(4, 'ooo ma', 'female', 'White', '145', '87', 'home', 5, 2, '2011-03-26 09:22:00', 'hmmm mone  nei', 'uploads/MIS/P201116774.jpg', 'Yes', 'u find out', 'No', 'No', 'N/A', 'No', 'N/A', 1, 3, '2011-03-27 15:24:27', 'MIS/P201116774');

-- --------------------------------------------------------

--
-- Table structure for table `missingvaluable`
--

CREATE TABLE IF NOT EXISTS `missingvaluable` (
  `missingval_id` int(6) NOT NULL AUTO_INCREMENT,
  `property` varchar(30) NOT NULL,
  `worth` varchar(20) NOT NULL,
  `lostplace` varchar(180) NOT NULL,
  `area` int(3) NOT NULL,
  `policestation` int(6) NOT NULL,
  `lost_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `details` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0 implies unapproved; 1 implies approved; 2 implies rejected; 3 implies FIR is filed',
  `reported_by` int(6) NOT NULL,
  `reported_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `report_no` varchar(25) NOT NULL,
  PRIMARY KEY (`missingval_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `missingvaluable`
--

INSERT INTO `missingvaluable` (`missingval_id`, `property`, `worth`, `lostplace`, `area`, `policestation`, `lost_time`, `details`, `status`, `reported_by`, `reported_on`, `report_no`) VALUES
(3, 'car', '650000000', 'Sinthi', 5, 2, '2011-03-10 15:33:00', 'biswa niyeche', 3, 3, '2011-03-27 15:34:30', 'MIS/V201141805');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `officer_id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(85) NOT NULL,
  `ps` int(3) NOT NULL,
  `designation` int(3) NOT NULL,
  PRIMARY KEY (`officer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`officer_id`, `name`, `ps`, `designation`) VALUES
(8, 'Ashish Das', 2, 9),
(9, 'Ram Lal Khoma', 6, 9),
(10, 'Arghya Chatterjee', 3, 9),
(11, 'Kamal kumar', 51, 9);

-- --------------------------------------------------------

--
-- Table structure for table `policestation`
--

CREATE TABLE IF NOT EXISTS `policestation` (
  `ps_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `area` int(3) NOT NULL,
  PRIMARY KEY (`ps_id`),
  KEY `area` (`area`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `policestation`
--

INSERT INTO `policestation` (`ps_id`, `name`, `area`) VALUES
(2, 'Amherst Street', 5),
(1, 'Alipore', 6),
(3, 'Ballygunge', 6),
(4, 'Beniapukur', 2),
(5, ' Bhowanipur', 6),
(6, 'Bowbazar', 5),
(7, 'Burrabazar', 5),
(8, 'Burtolla', 8),
(9, 'Charu Market', 6),
(10, 'Chetla', 7),
(11, 'Chitpore', 2),
(12, 'Cosspore', 1),
(13, 'Ekabalpore', 2),
(14, 'Entally', 5),
(15, 'Garden Reach', 7),
(16, 'DumDum Phari', 3),
(17, 'Gariahat', 6),
(18, 'Girish Park', 1),
(19, 'Hare Street', 1),
(20, 'Hastings', 5),
(21, ' Jorabagan', 1),
(22, 'Jorasanko', 5),
(23, 'Kalighat', 6),
(24, 'Karaya', 8),
(25, 'Lake Gardens', 6),
(26, 'Maidan', 6),
(27, 'Manicktolla', 1),
(28, 'Madhyamgram', 2),
(29, 'Barackpore', 2),
(30, 'New Barackpore', 2),
(31, 'Borahnagar', 2),
(32, 'Birati', 2),
(33, 'Barasaat', 2),
(34, 'Muchipara', 8),
(35, 'Narkeldanga', 1),
(36, 'New Alipore', 2),
(37, 'New Market', 5),
(38, 'North Port', 2),
(39, 'Park Street', 6),
(40, 'Phoolbagan', 1),
(41, 'Posta', 1),
(42, 'Shakespeare Sarani', 1),
(43, 'Shyampukur', 2),
(44, 'Sinthi', 2),
(45, 'South Port', 7),
(46, 'Tala', 1),
(47, 'Taratala', 7),
(48, 'Tangra', 8),
(49, 'Tollygunge', 6),
(50, 'Topsia', 8),
(51, 'Ultadanga', 4),
(52, ' Watgunge', 8),
(53, 'Saltlake Sector I', 4),
(54, 'Saltlake Sector II', 4),
(55, 'Saltlake Sector III', 4),
(56, 'Saltlake Sector IV', 4),
(57, 'Saltlake Sector V', 4),
(58, 'Newtown-Rajarhat', 4),
(59, 'Satgachi', 3),
(64, 'Nagerbazar', 3),
(61, 'Narayanpur', 3),
(62, 'Durganagar', 3),
(63, 'Airport', 3);

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
  `poll_id` int(3) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `show` int(1) NOT NULL DEFAULT '0',
  `total` int(5) DEFAULT NULL,
  `count1` int(5) DEFAULT NULL,
  `count2` int(5) DEFAULT NULL,
  `count3` int(5) DEFAULT NULL,
  `count4` int(5) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`poll_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`poll_id`, `question`, `option1`, `option2`, `option3`, `option4`, `show`, `total`, `count1`, `count2`, `count3`, `count4`, `time`) VALUES
(1, 'What a piece of work is man?', 'Noble in reason', 'Infinite in faculty', 'In form', 'In action', 1, 19, 5, 3, 5, 6, '2011-02-19 11:35:23'),
(2, ' question', 'op1', 'op2', 'op3', 'op4', 0, 1, 1, 0, 0, 0, '2011-02-19 11:51:43'),
(3, ' trial', 'op1', 'op2', 'op3', 'op4', 0, 1, 0, 0, 0, 1, '2011-02-19 12:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `propertyseizure`
--

CREATE TABLE IF NOT EXISTS `propertyseizure` (
  `property_id` int(20) NOT NULL AUTO_INCREMENT,
  `fir_id` int(20) NOT NULL COMMENT 'refers to FIR table',
  `acts` int(20) NOT NULL COMMENT 'refers to rules table',
  `propertynature` varchar(20) NOT NULL,
  `seized_date` datetime NOT NULL,
  `seized_place` varchar(50) NOT NULL,
  `place_descript` varchar(200) NOT NULL,
  `seized_name` varchar(50) NOT NULL,
  `seized_fathername` varchar(50) NOT NULL,
  `seized_occupation` varchar(50) NOT NULL,
  `seized_address` varchar(100) NOT NULL,
  `witness` varchar(300) NOT NULL,
  `property_details` varchar(200) NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='contains property seizure or recover details' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `propertyseizure`
--


-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `rule_id` int(3) NOT NULL AUTO_INCREMENT,
  `section` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `action` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`rule_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`rule_id`, `section`, `name`, `action`, `time`, `flag`) VALUES
(1, 'section1', 'namechanges', 'damn u punishment..testing', '2011-02-18 20:40:48', 2),
(2, 'section 2', 'Faltu', 'Nothing', '2011-03-04 19:27:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `profession` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `maritalstatus` varchar(8) NOT NULL,
  `phoneno` varchar(8) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `address` text NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `area` int(2) NOT NULL,
  `policestation` int(6) NOT NULL,
  `proof` int(1) NOT NULL,
  `proofno` varchar(25) NOT NULL,
  `permission` int(1) NOT NULL DEFAULT '0' COMMENT '0 implies unapproved user; 1 implies approved user; 2 implies rejected user',
  `approved_by` varchar(8) DEFAULT NULL,
  `approved_on` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `reject_reason` varchar(160) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `fathername`, `dob`, `profession`, `gender`, `maritalstatus`, `phoneno`, `mobileno`, `address`, `pincode`, `area`, `policestation`, `proof`, `proofno`, `permission`, `approved_by`, `approved_on`, `reject_reason`) VALUES
(3, 'anubhab mukhs', 'daddy mukhs', '1985-04-19', 'Software Professional', 'Male', 'Single', '22341256', '9051975134', 'kasba', '700065', 5, 2, 4, 'H0533176', 1, '8', '2011-03-25 21:27:33', 'N/A'),
(12, 'suplab', 'dad', '1978-05-19', 'Software Professional', 'Male', 'Married', '25666454', '9830960171', '21, G.H.Road, Kolkata', '700012', 4, 51, 3, 'WB/12/345/678657', 0, NULL, NULL, NULL),
(13, 'sfdssfsd', 'sdfff', '1998-02-02', 'Student', 'Male', 'Single', '12345678', '9874561230', 'fds ddfdgd', '400308', 4, 51, 1, '1234567890w', 0, NULL, '0000-00-00 00:00:00', NULL),
(14, 'aerssrertetfg', 'sdfsfsgsg', '1991-03-18', 'Student', 'Male', 'Single', '12345678', '7894561230', 'fsfd rggdfd gfgg drfgdgd', '400308', 6, 3, 1, '1234567890w', 0, NULL, '0000-00-00 00:00:00', NULL),
(15, 'sdgfag', 'sdgdgdsfg', '1991-03-18', 'Student', 'Male', 'Single', '12345678', '7894561230', 'sgsg ergfdgfdg wff', '400308', 6, 3, 1, 'sf1234567890', 0, NULL, '0000-00-00 00:00:00', NULL);
