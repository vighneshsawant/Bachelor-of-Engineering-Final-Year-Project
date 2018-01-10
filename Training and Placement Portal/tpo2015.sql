-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2016 at 02:10 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tpo2015`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission1`
--

CREATE TABLE IF NOT EXISTS `admission1` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `diclass` varchar(500) NOT NULL,
  `diyear` varchar(500) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `faname` varchar(500) NOT NULL,
  `mname` varchar(500) NOT NULL,
  `adcnum` varchar(500) NOT NULL,
  `bdate` varchar(500) NOT NULL,
  `placeb` varchar(500) NOT NULL,
  `nation` varchar(500) NOT NULL,
  `mtongue` varchar(500) NOT NULL,
  `religion` varchar(500) NOT NULL,
  `caste` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `xconducted` varchar(500) NOT NULL,
  `scattended` varchar(500) NOT NULL,
  `scaddress` varchar(500) NOT NULL,
  `scdist` varchar(500) NOT NULL,
  `scstate` varchar(500) NOT NULL,
  `laddress` varchar(500) NOT NULL,
  `lpin` varchar(500) NOT NULL,
  `lemail` varchar(500) NOT NULL,
  `lstdno` varchar(500) NOT NULL,
  `lmobile` varchar(500) NOT NULL,
  `paddress` varchar(500) NOT NULL,
  `ppin` varchar(500) NOT NULL,
  `pstdno` varchar(500) NOT NULL,
  `pmobile` varchar(500) NOT NULL,
  `faaddress` varchar(500) NOT NULL,
  `faoccu` varchar(500) NOT NULL,
  `faincome` varchar(500) NOT NULL,
  `faoffaddress` varchar(500) NOT NULL,
  `fatelno` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admission1`
--


-- --------------------------------------------------------

--
-- Table structure for table `admission2`
--

CREATE TABLE IF NOT EXISTS `admission2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad1id` varchar(255) DEFAULT NULL,
  `VIIIMYP` varchar(255) DEFAULT NULL,
  `VIIISCN` varchar(255) DEFAULT NULL,
  `VIIID` varchar(255) DEFAULT NULL,
  `VIIIB` varchar(255) DEFAULT NULL,
  `IXMYP` varchar(255) DEFAULT NULL,
  `IXSCN` varchar(255) DEFAULT NULL,
  `IXD` varchar(255) DEFAULT NULL,
  `IXB` varchar(255) DEFAULT NULL,
  `SSCMYP` varchar(255) DEFAULT NULL,
  `SSCSCN` varchar(255) DEFAULT NULL,
  `SSCD` varchar(255) DEFAULT NULL,
  `SSCB` varchar(255) DEFAULT NULL,
  `HSCMYP` varchar(255) DEFAULT NULL,
  `HSCSCN` varchar(255) DEFAULT NULL,
  `HSCD` varchar(255) DEFAULT NULL,
  `HSCB` varchar(255) DEFAULT NULL,
  `SSCE` varchar(255) DEFAULT NULL,
  `SSCM` varchar(255) DEFAULT NULL,
  `SSCO` varchar(255) DEFAULT NULL,
  `HSCE` varchar(255) DEFAULT NULL,
  `HSCM` varchar(255) DEFAULT NULL,
  `HSCO` varchar(255) DEFAULT NULL,
  `SSCEM` varchar(255) DEFAULT NULL,
  `SSCMM` varchar(255) DEFAULT NULL,
  `SSCOM` varchar(255) DEFAULT NULL,
  `HSCEM` varchar(255) DEFAULT NULL,
  `HSCMM` varchar(255) DEFAULT NULL,
  `HSCOM` varchar(255) DEFAULT NULL,
  `SSCES` varchar(255) DEFAULT NULL,
  `SSCMS` varchar(255) DEFAULT NULL,
  `SSCOS` varchar(255) DEFAULT NULL,
  `HSCES` varchar(255) DEFAULT NULL,
  `HSCMS` varchar(255) DEFAULT NULL,
  `HSCOS` varchar(255) DEFAULT NULL,
  `SSCEV` varchar(255) DEFAULT NULL,
  `SSCMV` varchar(255) DEFAULT NULL,
  `SSCOV` varchar(255) DEFAULT NULL,
  `HSCEV` varchar(255) DEFAULT NULL,
  `HSCMV` varchar(255) DEFAULT NULL,
  `HSCOV` varchar(255) DEFAULT NULL,
  `SSCVT` varchar(255) DEFAULT NULL,
  `HSCVT` varchar(255) DEFAULT NULL,
  `HSCMCVC` varchar(255) DEFAULT NULL,
  `GDE` varchar(255) DEFAULT NULL,
  `GAP` varchar(255) DEFAULT NULL,
  `GAPCER` varchar(255) DEFAULT NULL,
  `LOCATED` varchar(255) DEFAULT NULL,
  `FROMVAL` varchar(255) DEFAULT NULL,
  `WORK` varchar(255) DEFAULT NULL,
  `TRANSFER` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `ssign` varchar(255) DEFAULT NULL,
  `psign` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admission2`
--


-- --------------------------------------------------------

--
-- Table structure for table `admission3`
--

CREATE TABLE IF NOT EXISTS `admission3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad1id` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `csign` varchar(255) DEFAULT NULL,
  `date1` varchar(255) DEFAULT NULL,
  `gsign` varchar(255) DEFAULT NULL,
  `place1` varchar(255) DEFAULT NULL,
  `date2` varchar(255) DEFAULT NULL,
  `csign1` varchar(255) DEFAULT NULL,
  `acyear` varchar(255) DEFAULT NULL,
  `tfees` varchar(255) DEFAULT NULL,
  `recno` varchar(255) DEFAULT NULL,
  `pfees` varchar(255) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admission3`
--


-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `branch` varchar(500) NOT NULL,
  `abb` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch`, `abb`) VALUES
(1, 'Computer Engineering', 'CS'),
(2, 'Information Techonology', 'IT'),
(3, 'Mechanical Engineering', 'MECH'),
(4, 'Electrical Engineering', 'ETRL'),
(5, 'Electronics and Telecommunication Engineering', 'EXTC'),
(6, 'Electronics Engineering', 'ETRX'),
(7, 'Instrumentation Engineering', 'IS');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `nation` varchar(255) NOT NULL,
  `mstatus` varchar(255) NOT NULL,
  `lang` varchar(255) NOT NULL,
  `q1` varchar(255) NOT NULL,
  `q2` varchar(255) NOT NULL,
  `q3` varchar(255) NOT NULL,
  `q4` varchar(255) NOT NULL,
  `ex1` varchar(255) NOT NULL,
  `ui1` varchar(255) NOT NULL,
  `year1` varchar(255) NOT NULL,
  `class1` varchar(255) NOT NULL,
  `ex2` varchar(255) NOT NULL,
  `ui2` varchar(255) NOT NULL,
  `year2` varchar(255) NOT NULL,
  `class2` varchar(255) NOT NULL,
  `ex3` varchar(255) NOT NULL,
  `ui3` varchar(255) NOT NULL,
  `year3` varchar(255) NOT NULL,
  `class3` varchar(255) NOT NULL,
  `ex4` varchar(255) NOT NULL,
  `ui4` varchar(255) NOT NULL,
  `year4` varchar(255) NOT NULL,
  `class4` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cv`
--


-- --------------------------------------------------------

--
-- Table structure for table `deadmission`
--

CREATE TABLE IF NOT EXISTS `deadmission` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `declass` varchar(500) NOT NULL,
  `deyear` varchar(500) NOT NULL,
  `adyear` varchar(500) NOT NULL,
  `recnum` varchar(500) NOT NULL,
  `recdate` varchar(500) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `faname` varchar(500) NOT NULL,
  `mname` varchar(500) NOT NULL,
  `adcnum` varchar(500) NOT NULL,
  `bdate` varchar(500) NOT NULL,
  `placeb` varchar(500) NOT NULL,
  `nation` varchar(500) NOT NULL,
  `bstate` varchar(500) NOT NULL,
  `religion` varchar(500) NOT NULL,
  `caste` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `cattended` varchar(500) NOT NULL,
  `caddress` varchar(500) NOT NULL,
  `ctal` varchar(500) NOT NULL,
  `cdist` varchar(500) NOT NULL,
  `cstate` varchar(500) NOT NULL,
  `laddress` varchar(500) NOT NULL,
  `ltal` varchar(500) NOT NULL,
  `ldist` varchar(500) NOT NULL,
  `lstate` varchar(500) NOT NULL,
  `lpin` varchar(500) NOT NULL,
  `slmobile` varchar(500) NOT NULL,
  `lemail` varchar(500) NOT NULL,
  `paddress` varchar(500) NOT NULL,
  `ptal` varchar(500) NOT NULL,
  `pdist` varchar(500) NOT NULL,
  `pstate` varchar(500) NOT NULL,
  `ppin` varchar(500) NOT NULL,
  `pstdno` varchar(500) NOT NULL,
  `pmobile` varchar(500) NOT NULL,
  `fapname` varchar(500) NOT NULL,
  `faoccu` varchar(500) NOT NULL,
  `faincome` varchar(500) NOT NULL,
  `famobno` varchar(500) NOT NULL,
  `faoffaddress` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `deadmission`
--

INSERT INTO `deadmission` (`id`, `declass`, `deyear`, `adyear`, `recnum`, `recdate`, `sname`, `fname`, `faname`, `mname`, `adcnum`, `bdate`, `placeb`, `nation`, `bstate`, `religion`, `caste`, `category`, `cattended`, `caddress`, `ctal`, `cdist`, `cstate`, `laddress`, `ltal`, `ldist`, `lstate`, `lpin`, `slmobile`, `lemail`, `paddress`, `ptal`, `pdist`, `pstate`, `ppin`, `pstdno`, `pmobile`, `fapname`, `faoccu`, `faincome`, `famobno`, `faoffaddress`) VALUES
(6, 'LEAKOEKLDS', 'BE', 'fjfioff', 'jroijfds', 'AWHOQIJD', 'sam', 'fhfd', 'hfsdil', 'sfjsjsid', '1234567890', 'easuio', 'fnsejslj', 'sfjsj', 'nsdfjsl', 'FJFJ', 'SDFJDSFJ', 'DSJFS', 'U8EUURIRWFW						', 'FOIEODASKDLADFUSHFSIFJLSKD						', 'YEFIUSF', 'FHFUHFK', 'FHUF', 'FHUH																		', 'EFEHWFU', 'GFHUW', 'EFHUFH', 'GHWUGH', '', 'GWHGWU', 'GWHGWU																		', 'GWUGH', 'GWHG', 'GWGHWU', 'GQGH', 'GUGH', 'GGHWU', '						CASNJLDJDAKD', 'GWUGH', 'GUGH', 'GWHGW', 'GWUGH																		');

-- --------------------------------------------------------

--
-- Table structure for table `defeadmission`
--

CREATE TABLE IF NOT EXISTS `defeadmission` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `declass` varchar(500) NOT NULL,
  `deyear` varchar(500) NOT NULL,
  `adcnum` varchar(500) NOT NULL,
  `sname` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `faname` varchar(500) NOT NULL,
  `mname` varchar(500) NOT NULL,
  `bdate` varchar(500) NOT NULL,
  `placeb` varchar(500) NOT NULL,
  `nation` varchar(500) NOT NULL,
  `bstate` varchar(500) NOT NULL,
  `religion` varchar(500) NOT NULL,
  `caste` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL,
  `cattended` varchar(500) NOT NULL,
  `caddress` varchar(500) NOT NULL,
  `ctal` varchar(500) NOT NULL,
  `cdist` varchar(500) NOT NULL,
  `cstate` varchar(500) NOT NULL,
  `laddress` varchar(500) NOT NULL,
  `ltal` varchar(500) NOT NULL,
  `ldist` varchar(500) NOT NULL,
  `lstate` varchar(500) NOT NULL,
  `lpin` varchar(500) NOT NULL,
  `slmobile` varchar(500) NOT NULL,
  `lemail` varchar(500) NOT NULL,
  `paddress` varchar(500) NOT NULL,
  `ptal` varchar(500) NOT NULL,
  `pdist` varchar(500) NOT NULL,
  `pstate` varchar(500) NOT NULL,
  `ppin` varchar(500) NOT NULL,
  `pstdno` varchar(500) NOT NULL,
  `pmobile` varchar(500) NOT NULL,
  `fapname` varchar(500) NOT NULL,
  `faoccu` varchar(500) NOT NULL,
  `faincome` varchar(500) NOT NULL,
  `famobno` varchar(500) NOT NULL,
  `faoffaddress` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `defeadmission`
--


-- --------------------------------------------------------

--
-- Table structure for table `defeadmission1`
--

CREATE TABLE IF NOT EXISTS `defeadmission1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad1id` varchar(255) DEFAULT NULL,
  `year1` varchar(255) DEFAULT NULL,
  `seat1` varchar(255) DEFAULT NULL,
  `grade1` varchar(255) DEFAULT NULL,
  `obtain1` varchar(255) DEFAULT NULL,
  `result1` varchar(255) DEFAULT NULL,
  `fsub1` varchar(255) DEFAULT NULL,
  `year2` varchar(255) DEFAULT NULL,
  `seat2` varchar(255) DEFAULT NULL,
  `grade2` varchar(255) DEFAULT NULL,
  `obtain2` varchar(255) DEFAULT NULL,
  `result2` varchar(255) DEFAULT NULL,
  `fsub2` varchar(255) DEFAULT NULL,
  `year3` varchar(255) DEFAULT NULL,
  `seat3` varchar(255) DEFAULT NULL,
  `grade3` varchar(255) DEFAULT NULL,
  `obtain3` varchar(255) DEFAULT NULL,
  `result3` varchar(255) DEFAULT NULL,
  `fsub3` varchar(255) DEFAULT NULL,
  `year4` varchar(255) DEFAULT NULL,
  `seat4` varchar(255) DEFAULT NULL,
  `grade4` varchar(255) DEFAULT NULL,
  `obtain4` varchar(255) DEFAULT NULL,
  `result4` varchar(255) DEFAULT NULL,
  `fsub4` varchar(255) DEFAULT NULL,
  `year5` varchar(255) DEFAULT NULL,
  `seat5` varchar(255) DEFAULT NULL,
  `grade5` varchar(255) DEFAULT NULL,
  `obtain5` varchar(255) DEFAULT NULL,
  `result5` varchar(255) DEFAULT NULL,
  `fsub5` varchar(255) DEFAULT NULL,
  `year6` varchar(255) DEFAULT NULL,
  `seat6` varchar(255) DEFAULT NULL,
  `grade6` varchar(255) DEFAULT NULL,
  `obtain6` varchar(255) DEFAULT NULL,
  `result6` varchar(255) DEFAULT NULL,
  `fsub6` varchar(255) DEFAULT NULL,
  `year7` varchar(255) DEFAULT NULL,
  `seat7` varchar(255) DEFAULT NULL,
  `grade7` varchar(255) DEFAULT NULL,
  `obtain7` varchar(255) DEFAULT NULL,
  `result7` varchar(255) DEFAULT NULL,
  `fsub7` varchar(255) DEFAULT NULL,
  `date1` varchar(255) DEFAULT NULL,
  `ssign` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date2` varchar(255) DEFAULT NULL,
  `ssign1` varchar(255) DEFAULT NULL,
  `place1` varchar(255) DEFAULT NULL,
  `name1` varchar(255) DEFAULT NULL,
  `tfees` varchar(255) DEFAULT NULL,
  `ddno` varchar(255) DEFAULT NULL,
  `date3` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `recno` varchar(255) DEFAULT NULL,
  `date4` varchar(255) DEFAULT NULL,
  `esign` varchar(255) DEFAULT NULL,
  `csign` varchar(255) DEFAULT NULL,
  `rsign` varchar(255) DEFAULT NULL,
  `psign` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `defeadmission1`
--


-- --------------------------------------------------------

--
-- Table structure for table `fedeadmission2`
--

CREATE TABLE IF NOT EXISTS `fedeadmission2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad1id` varchar(255) DEFAULT NULL,
  `math` varchar(255) DEFAULT NULL,
  `phy` varchar(255) DEFAULT NULL,
  `dash` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `board10` varchar(255) DEFAULT NULL,
  `year10` varchar(255) DEFAULT NULL,
  `max10` varchar(255) DEFAULT NULL,
  `obt10` varchar(255) DEFAULT NULL,
  `class10` varchar(255) DEFAULT NULL,
  `per10` varchar(255) DEFAULT NULL,
  `board12` varchar(255) DEFAULT NULL,
  `year12` varchar(255) DEFAULT NULL,
  `max12` varchar(255) DEFAULT NULL,
  `obt12` varchar(255) DEFAULT NULL,
  `class12` varchar(255) DEFAULT NULL,
  `per12` varchar(255) DEFAULT NULL,
  `boardd` varchar(255) DEFAULT NULL,
  `yeard` varchar(255) DEFAULT NULL,
  `maxd` varchar(255) DEFAULT NULL,
  `obtd` varchar(255) DEFAULT NULL,
  `classd` varchar(255) DEFAULT NULL,
  `perd` varchar(255) DEFAULT NULL,
  `jroll` varchar(255) DEFAULT NULL,
  `jphy` varchar(255) DEFAULT NULL,
  `jche` varchar(255) DEFAULT NULL,
  `jmath` varchar(255) DEFAULT NULL,
  `jtotal` varchar(255) DEFAULT NULL,
  `jper` varchar(255) DEFAULT NULL,
  `date1` varchar(255) DEFAULT NULL,
  `ssign` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date2` varchar(255) DEFAULT NULL,
  `ssign1` varchar(255) DEFAULT NULL,
  `place1` varchar(255) DEFAULT NULL,
  `name1` varchar(255) DEFAULT NULL,
  `tfees` varchar(255) DEFAULT NULL,
  `ddno` varchar(255) DEFAULT NULL,
  `date3` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `recno` varchar(255) DEFAULT NULL,
  `date4` varchar(255) DEFAULT NULL,
  `csign` varchar(255) DEFAULT NULL,
  `rsign` varchar(255) DEFAULT NULL,
  `psign` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `fedeadmission2`
--


-- --------------------------------------------------------

--
-- Table structure for table `fesemarks`
--

CREATE TABLE IF NOT EXISTS `fesemarks` (
  `uid` varchar(255) DEFAULT NULL,
  `addyear` varchar(255) DEFAULT NULL,
  `febranch` varchar(255) DEFAULT NULL,
  `SUB11` varchar(255) DEFAULT NULL,
  `TMAR11` varchar(255) DEFAULT NULL,
  `IMAR11` varchar(255) DEFAULT NULL,
  `TWMAR11` varchar(255) DEFAULT NULL,
  `PMAR11` varchar(255) DEFAULT NULL,
  `OMAR11` varchar(255) DEFAULT NULL,
  `SMAR11` varchar(255) DEFAULT NULL,
  `PF11` varchar(255) DEFAULT NULL,
  `SUB12` varchar(255) DEFAULT NULL,
  `TMAR12` varchar(255) DEFAULT NULL,
  `IMAR12` varchar(255) DEFAULT NULL,
  `TWMAR12` varchar(255) DEFAULT NULL,
  `PMAR12` varchar(255) DEFAULT NULL,
  `OMAR12` varchar(255) DEFAULT NULL,
  `SMAR12` varchar(255) DEFAULT NULL,
  `PF12` varchar(255) DEFAULT NULL,
  `SUB13` varchar(255) DEFAULT NULL,
  `TMAR13` varchar(255) DEFAULT NULL,
  `IMAR13` varchar(255) DEFAULT NULL,
  `TWMAR13` varchar(255) DEFAULT NULL,
  `PMAR13` varchar(255) DEFAULT NULL,
  `OMAR13` varchar(255) DEFAULT NULL,
  `SMAR13` varchar(255) DEFAULT NULL,
  `PF13` varchar(255) DEFAULT NULL,
  `SUB14` varchar(255) DEFAULT NULL,
  `TMAR14` varchar(255) DEFAULT NULL,
  `IMAR14` varchar(255) DEFAULT NULL,
  `TWMAR14` varchar(255) DEFAULT NULL,
  `PMAR14` varchar(255) DEFAULT NULL,
  `OMAR14` varchar(255) DEFAULT NULL,
  `SMAR14` varchar(255) DEFAULT NULL,
  `PF14` varchar(255) DEFAULT NULL,
  `SUB15` varchar(255) DEFAULT NULL,
  `TMAR15` varchar(255) DEFAULT NULL,
  `IMAR15` varchar(255) DEFAULT NULL,
  `TWMAR15` varchar(255) DEFAULT NULL,
  `PMAR15` varchar(255) DEFAULT NULL,
  `OMAR15` varchar(255) DEFAULT NULL,
  `SMAR15` varchar(255) DEFAULT NULL,
  `PF15` varchar(255) DEFAULT NULL,
  `SUB16` varchar(255) DEFAULT NULL,
  `TMAR16` varchar(255) DEFAULT NULL,
  `IMAR16` varchar(255) DEFAULT NULL,
  `TWMAR16` varchar(255) DEFAULT NULL,
  `PMAR16` varchar(255) DEFAULT NULL,
  `OMAR16` varchar(255) DEFAULT NULL,
  `SMAR16` varchar(255) DEFAULT NULL,
  `PF16` varchar(255) DEFAULT NULL,
  `SUB17` varchar(255) DEFAULT NULL,
  `TMAR17` varchar(255) DEFAULT NULL,
  `IMAR17` varchar(255) DEFAULT NULL,
  `TWMAR17` varchar(255) DEFAULT NULL,
  `PMAR17` varchar(255) DEFAULT NULL,
  `OMAR17` varchar(255) DEFAULT NULL,
  `SMAR17` varchar(255) DEFAULT NULL,
  `PF17` varchar(255) DEFAULT NULL,
  `per1` varchar(255) DEFAULT NULL,
  `SUB21` varchar(255) DEFAULT NULL,
  `TMAR21` varchar(255) DEFAULT NULL,
  `IMAR21` varchar(255) DEFAULT NULL,
  `TWMAR21` varchar(255) DEFAULT NULL,
  `PMAR21` varchar(255) DEFAULT NULL,
  `OMAR21` varchar(255) DEFAULT NULL,
  `SMAR21` varchar(255) DEFAULT NULL,
  `PF21` varchar(255) DEFAULT NULL,
  `SUB22` varchar(255) DEFAULT NULL,
  `TMAR22` varchar(255) DEFAULT NULL,
  `IMAR22` varchar(255) DEFAULT NULL,
  `TWMAR22` varchar(255) DEFAULT NULL,
  `PMAR22` varchar(255) DEFAULT NULL,
  `OMAR22` varchar(255) DEFAULT NULL,
  `SMAR22` varchar(255) DEFAULT NULL,
  `PF22` varchar(255) DEFAULT NULL,
  `SUB23` varchar(255) DEFAULT NULL,
  `TMAR23` varchar(255) DEFAULT NULL,
  `IMAR23` varchar(255) DEFAULT NULL,
  `TWMAR23` varchar(255) DEFAULT NULL,
  `PMAR23` varchar(255) DEFAULT NULL,
  `OMAR23` varchar(255) DEFAULT NULL,
  `SMAR23` varchar(255) DEFAULT NULL,
  `PF23` varchar(255) DEFAULT NULL,
  `SUB24` varchar(255) DEFAULT NULL,
  `TMAR24` varchar(255) DEFAULT NULL,
  `IMAR24` varchar(255) DEFAULT NULL,
  `TWMAR24` varchar(255) DEFAULT NULL,
  `PMAR24` varchar(255) DEFAULT NULL,
  `OMAR24` varchar(255) DEFAULT NULL,
  `SMAR24` varchar(255) DEFAULT NULL,
  `PF24` varchar(255) DEFAULT NULL,
  `SUB25` varchar(255) DEFAULT NULL,
  `TMAR25` varchar(255) DEFAULT NULL,
  `IMAR25` varchar(255) DEFAULT NULL,
  `TWMAR25` varchar(255) DEFAULT NULL,
  `PMAR25` varchar(255) DEFAULT NULL,
  `OMAR25` varchar(255) DEFAULT NULL,
  `SMAR25` varchar(255) DEFAULT NULL,
  `PF25` varchar(255) DEFAULT NULL,
  `SUB26` varchar(255) DEFAULT NULL,
  `TMAR26` varchar(255) DEFAULT NULL,
  `IMAR26` varchar(255) DEFAULT NULL,
  `TWMAR26` varchar(255) DEFAULT NULL,
  `PMAR26` varchar(255) DEFAULT NULL,
  `OMAR26` varchar(255) DEFAULT NULL,
  `SMAR26` varchar(255) DEFAULT NULL,
  `PF26` varchar(255) DEFAULT NULL,
  `SUB27` varchar(255) DEFAULT NULL,
  `TMAR27` varchar(255) DEFAULT NULL,
  `IMAR27` varchar(255) DEFAULT NULL,
  `TWMAR27` varchar(255) DEFAULT NULL,
  `PMAR27` varchar(255) DEFAULT NULL,
  `OMAR27` varchar(255) DEFAULT NULL,
  `SMAR27` varchar(255) DEFAULT NULL,
  `PF27` varchar(255) DEFAULT NULL,
  `per2` varchar(255) DEFAULT NULL,
  `SUB31` varchar(255) DEFAULT NULL,
  `TMAR31` varchar(255) DEFAULT NULL,
  `IMAR31` varchar(255) DEFAULT NULL,
  `TWMAR31` varchar(255) DEFAULT NULL,
  `PMAR31` varchar(255) DEFAULT NULL,
  `OMAR31` varchar(255) DEFAULT NULL,
  `SMAR31` varchar(255) DEFAULT NULL,
  `PF31` varchar(255) DEFAULT NULL,
  `SUB32` varchar(255) DEFAULT NULL,
  `TMAR32` varchar(255) DEFAULT NULL,
  `IMAR32` varchar(255) DEFAULT NULL,
  `TWMAR32` varchar(255) DEFAULT NULL,
  `PMAR32` varchar(255) DEFAULT NULL,
  `OMAR32` varchar(255) DEFAULT NULL,
  `SMAR32` varchar(255) DEFAULT NULL,
  `PF32` varchar(255) DEFAULT NULL,
  `SUB33` varchar(255) DEFAULT NULL,
  `TMAR33` varchar(255) DEFAULT NULL,
  `IMAR33` varchar(255) DEFAULT NULL,
  `TWMAR33` varchar(255) DEFAULT NULL,
  `PMAR33` varchar(255) DEFAULT NULL,
  `OMAR33` varchar(255) DEFAULT NULL,
  `SMAR33` varchar(255) DEFAULT NULL,
  `PF33` varchar(255) DEFAULT NULL,
  `SUB34` varchar(255) DEFAULT NULL,
  `TMAR34` varchar(255) DEFAULT NULL,
  `IMAR34` varchar(255) DEFAULT NULL,
  `TWMAR34` varchar(255) DEFAULT NULL,
  `PMAR34` varchar(255) DEFAULT NULL,
  `OMAR34` varchar(255) DEFAULT NULL,
  `SMAR34` varchar(255) DEFAULT NULL,
  `PF34` varchar(255) DEFAULT NULL,
  `SUB35` varchar(255) DEFAULT NULL,
  `TMAR35` varchar(255) DEFAULT NULL,
  `IMAR35` varchar(255) DEFAULT NULL,
  `TWMAR35` varchar(255) DEFAULT NULL,
  `PMAR35` varchar(255) DEFAULT NULL,
  `OMAR35` varchar(255) DEFAULT NULL,
  `SMAR35` varchar(255) DEFAULT NULL,
  `PF35` varchar(255) DEFAULT NULL,
  `SUB36` varchar(255) DEFAULT NULL,
  `TMAR36` varchar(255) DEFAULT NULL,
  `IMAR36` varchar(255) DEFAULT NULL,
  `TWMAR36` varchar(255) DEFAULT NULL,
  `PMAR36` varchar(255) DEFAULT NULL,
  `OMAR36` varchar(255) DEFAULT NULL,
  `SMAR36` varchar(255) DEFAULT NULL,
  `PF36` varchar(255) DEFAULT NULL,
  `SUB37` varchar(255) DEFAULT NULL,
  `TMAR37` varchar(255) DEFAULT NULL,
  `IMAR37` varchar(255) DEFAULT NULL,
  `TWMAR37` varchar(255) DEFAULT NULL,
  `PMAR37` varchar(255) DEFAULT NULL,
  `OMAR37` varchar(255) DEFAULT NULL,
  `SMAR37` varchar(255) DEFAULT NULL,
  `PF37` varchar(255) DEFAULT NULL,
  `addyear1` varchar(255) DEFAULT NULL,
  `febranch1` varchar(255) DEFAULT NULL,
  `per3` varchar(255) DEFAULT NULL,
  `SUB41` varchar(255) DEFAULT NULL,
  `TMAR41` varchar(255) DEFAULT NULL,
  `IMAR41` varchar(255) DEFAULT NULL,
  `TWMAR41` varchar(255) DEFAULT NULL,
  `PMAR41` varchar(255) DEFAULT NULL,
  `OMAR41` varchar(255) DEFAULT NULL,
  `SMAR41` varchar(255) DEFAULT NULL,
  `PF41` varchar(255) DEFAULT NULL,
  `SUB42` varchar(255) DEFAULT NULL,
  `TMAR42` varchar(255) DEFAULT NULL,
  `IMAR42` varchar(255) DEFAULT NULL,
  `TWMAR42` varchar(255) DEFAULT NULL,
  `PMAR42` varchar(255) DEFAULT NULL,
  `OMAR42` varchar(255) DEFAULT NULL,
  `SMAR42` varchar(255) DEFAULT NULL,
  `PF42` varchar(255) DEFAULT NULL,
  `SUB43` varchar(255) DEFAULT NULL,
  `TMAR43` varchar(255) DEFAULT NULL,
  `IMAR43` varchar(255) DEFAULT NULL,
  `TWMAR43` varchar(255) DEFAULT NULL,
  `PMAR43` varchar(255) DEFAULT NULL,
  `OMAR43` varchar(255) DEFAULT NULL,
  `SMAR43` varchar(255) DEFAULT NULL,
  `PF43` varchar(255) DEFAULT NULL,
  `SUB44` varchar(255) DEFAULT NULL,
  `TMAR44` varchar(255) DEFAULT NULL,
  `IMAR44` varchar(255) DEFAULT NULL,
  `TWMAR44` varchar(255) DEFAULT NULL,
  `PMAR44` varchar(255) DEFAULT NULL,
  `OMAR44` varchar(255) DEFAULT NULL,
  `SMAR44` varchar(255) DEFAULT NULL,
  `PF44` varchar(255) DEFAULT NULL,
  `SUB45` varchar(255) DEFAULT NULL,
  `TMAR45` varchar(255) DEFAULT NULL,
  `IMAR45` varchar(255) DEFAULT NULL,
  `TWMAR45` varchar(255) DEFAULT NULL,
  `PMAR45` varchar(255) DEFAULT NULL,
  `OMAR45` varchar(255) DEFAULT NULL,
  `SMAR45` varchar(255) DEFAULT NULL,
  `PF45` varchar(255) DEFAULT NULL,
  `SUB46` varchar(255) DEFAULT NULL,
  `TMAR46` varchar(255) DEFAULT NULL,
  `IMAR46` varchar(255) DEFAULT NULL,
  `TWMAR46` varchar(255) DEFAULT NULL,
  `PMAR46` varchar(255) DEFAULT NULL,
  `OMAR46` varchar(255) DEFAULT NULL,
  `SMAR46` varchar(255) DEFAULT NULL,
  `PF46` varchar(255) DEFAULT NULL,
  `SUB47` varchar(255) DEFAULT NULL,
  `TMAR47` varchar(255) DEFAULT NULL,
  `IMAR47` varchar(255) DEFAULT NULL,
  `TWMAR47` varchar(255) DEFAULT NULL,
  `PMAR47` varchar(255) DEFAULT NULL,
  `OMAR47` varchar(255) DEFAULT NULL,
  `SMAR47` varchar(255) DEFAULT NULL,
  `PF47` varchar(255) DEFAULT NULL,
  `per4` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fesemarks`
--


-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `ut` varchar(255) NOT NULL,
  `sub1` varchar(255) NOT NULL,
  `sub2` varchar(255) NOT NULL,
  `sub3` varchar(255) NOT NULL,
  `sub4` varchar(255) NOT NULL,
  `sub5` varchar(255) NOT NULL,
  `sub6` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `marks`
--


-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `branch` varchar(500) NOT NULL,
  `course` varchar(500) NOT NULL,
  `year` varchar(500) NOT NULL,
  `sem` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `branch`, `course`, `year`, `sem`, `subject`) VALUES
(1, 'IT', 'diploma', 'FE', 'sem1', 'Subject1'),
(2, 'IT', 'diploma', 'FE', 'sem1', 'Subject2'),
(3, 'IT', 'diploma', 'FE', 'sem1', 'Subject3'),
(4, 'IT', 'diploma', 'FE', 'sem1', 'Subject4'),
(5, 'IT', 'diploma', 'FE', 'sem1', 'Subject5'),
(6, 'IT', 'diploma', 'FE', 'sem1', 'Subject6'),
(7, 'IT', 'diploma', 'FE', 'sem1', 'Subject7'),
(8, 'CS', 'degree', 'BE', 'sem7', 'subject1'),
(9, 'CS', 'degree', 'BE', 'sem7', 'subject2'),
(10, 'CS', 'degree', 'BE', 'sem7', 'subject3'),
(11, 'CS', 'degree', 'BE', 'sem7', 'subject4'),
(12, 'CS', 'degree', 'BE', 'sem7', 'subject5'),
(13, 'CS', 'degree', 'BE', 'sem7', 'subject6'),
(14, 'IT', 'degree', 'FE', 'sem1', 'subject1'),
(15, 'IT', 'degree', 'FE', 'sem1', 'subject2'),
(16, 'IT', 'degree', 'FE', 'sem1', 'subject3'),
(17, 'IT', 'degree', 'FE', 'sem1', 'subject4'),
(18, 'IT', 'degree', 'FE', 'sem1', 'subject5'),
(19, 'IT', 'degree', 'FE', 'sem1', 'subject6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `EmailID` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `Name`, `Address`, `Contact`, `EmailID`, `Username`, `Password`) VALUES
(1, 'TPO', 'Sector No 3,Opp D M C E,Airoli, Mumbai, Maharashtra', '9220669429', 'tpo@gmail.com', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE IF NOT EXISTS `tbl_album` (
  `UserID` bigint(20) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`UserID`, `Photo`, `Date`) VALUES
(2, 'Hydrangeas.jpg', '5th  January 2012'),
(2, 'Lighthouse.jpg', '5th  January 2012');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_college_records`
--

CREATE TABLE IF NOT EXISTS `tbl_college_records` (
  `ID` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `Sem1Percentage` varchar(30) NOT NULL DEFAULT 'Not Applicable',
  `Sem2Percentage` varchar(30) NOT NULL DEFAULT 'Not Applicable',
  `Sem3Percentage` varchar(30) NOT NULL DEFAULT 'Not Applicable',
  `Sem4Percentage` varchar(30) NOT NULL DEFAULT 'Not Applicable',
  `Sem5Percentage` varchar(30) NOT NULL DEFAULT 'Not Applicable',
  `Sem6Percentage` varchar(30) NOT NULL DEFAULT 'Not Applicable',
  `Sem7Percentage` varchar(30) NOT NULL DEFAULT 'Not Applicable',
  `Sem8Percentage` varchar(30) NOT NULL DEFAULT 'Not Applicable',
  `Sem1KTLive` varchar(5) NOT NULL DEFAULT '0',
  `Sem2KTLive` varchar(5) NOT NULL DEFAULT '0',
  `Sem3KTLive` varchar(5) NOT NULL DEFAULT '0',
  `Sem4KTLive` varchar(5) NOT NULL DEFAULT '0',
  `Sem5KTLive` varchar(5) NOT NULL DEFAULT '0',
  `Sem6KTLive` varchar(5) NOT NULL DEFAULT '0',
  `Sem7KTLive` varchar(5) NOT NULL DEFAULT '0',
  `Sem8KTLive` varchar(5) NOT NULL DEFAULT '0',
  `Sem1KTDead` varchar(5) NOT NULL DEFAULT '0',
  `Sem2KTDead` varchar(5) NOT NULL DEFAULT '0',
  `Sem3KTDead` varchar(5) NOT NULL DEFAULT '0',
  `Sem4KTDead` varchar(5) NOT NULL DEFAULT '0',
  `Sem5KTDead` varchar(5) NOT NULL DEFAULT '0',
  `Sem6KTDead` varchar(5) NOT NULL DEFAULT '0',
  `Sem7KTDead` varchar(5) NOT NULL DEFAULT '0',
  `Sem8KTDead` varchar(5) NOT NULL DEFAULT '0',
  `Sem1KTDrop` varchar(5) NOT NULL DEFAULT '0',
  `Sem2KTDrop` varchar(5) NOT NULL DEFAULT '0',
  `Sem3KTDrop` varchar(5) NOT NULL DEFAULT '0',
  `Sem4KTDrop` varchar(5) NOT NULL DEFAULT '0',
  `Sem5KTDrop` varchar(5) NOT NULL DEFAULT '0',
  `Sem6KTDrop` varchar(5) NOT NULL DEFAULT '0',
  `Sem7KTDrop` varchar(5) NOT NULL DEFAULT '0',
  `Sem8KTDrop` varchar(5) NOT NULL DEFAULT '0',
  `Name` varchar(100) NOT NULL,
  `Addrress` text NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_college_records`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `EmailID` varchar(30) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Sector` varchar(100) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `JoiningDate` varchar(20) NOT NULL,
  `request` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`ID`, `Name`, `Address`, `City`, `State`, `EmailID`, `Contact`, `Sector`, `Username`, `Password`, `JoiningDate`, `request`) VALUES
(2, 'cosweb', 'abc', 'mumbai', 'Maharashtra', 'sda@gmail.com', '998715651615', 'IT', 'cosweb', 'aaa', '4th  April 2012', 'pending'),
(3, 'Microsoft', 'US', 'CA', 'abc', 'microsoft@hotmail.com', '123465789', 'Information Technology', 'microsoft', 'pass', '24th  February 2014', 'pending'),
(4, 'Google', 'CA', 'Powai', 'Maharashtra', 'google@mintemail.com', '1234568790', 'Information Technology', 'google', '123456', '25th  February 2014', 'pending'),
(5, 'Infosys', 'Airoli', 'Mumbai', 'Maharashtra', 'infosys@gmail.com', '123456789', 'Information Technology', 'infosys', 'infosys', '26th  February 2014', 'accept'),
(7, 'Wipro', 'Powai', 'Mumbai', 'Maharshtra', 'wipro@gmail.com', '8521479630', 'IT', '', '', '25th  March 2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_examid`
--

CREATE TABLE IF NOT EXISTS `tbl_examid` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `company_id` bigint(20) NOT NULL DEFAULT '0',
  `student_id` int(100) NOT NULL,
  `student` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_examid`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_interview`
--

CREATE TABLE IF NOT EXISTS `tbl_interview` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Seats` varchar(10) NOT NULL,
  `Reqiurement` varchar(200) NOT NULL,
  `Qualification` text NOT NULL,
  `Venue` varchar(200) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Timing` varchar(20) NOT NULL,
  `CompanyID` bigint(20) NOT NULL,
  `per` varchar(255) NOT NULL,
  `spesub` varchar(255) NOT NULL,
  `spemarks` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tbl_interview`
--

INSERT INTO `tbl_interview` (`ID`, `Seats`, `Reqiurement`, `Qualification`, `Venue`, `Date`, `Timing`, `CompanyID`, `per`, `spesub`, `spemarks`) VALUES
(46, '50', 'IT Student and Com student', ',CS,IT', 'AC patil', '07-04-2016', '9.05', 2, '7.0', 'JAVA', '50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qbank`
--

CREATE TABLE IF NOT EXISTS `tbl_qbank` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `company_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tbl_qbank`
--

INSERT INTO `tbl_qbank` (`id`, `company_id`, `email`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(1, '2', '0', 'pri-minister of india', 'dr. manmohan singh', 'manmohan singh', 'sharad pawar', 'narendra modi', 'narendra modi'),
(2, '2', 'syntel@gmail.com', 'Full form of TCS', 'Tata Consulting Service', 'Tata Consult Service', 'Tata Consut Service', 'Tata Conducting Services', 'Tata Consulting Services'),
(3, '2', 'syntel@gmail.com', 'S R Tendulkar', 'Sachin Ramesh Tendulkar', 'Sachin Ramdev Thakre', 'Suresh Ramesh Tendulkar', 'Suresh Ramdev Thakre', 'Sachin Ramesh Tendulkar'),
(4, '2', 'syntel@gmail.com', '1+1+1', '3', '3', '4', '5', '3'),
(5, '2', 'syntel@gmail.com', 'PHP stands for', 'Preprocessor Hyper Text', 'Preprocessor Hyper Perl', 'Html programming', 'Programming Hyper Perl', 'Preprocessor Hyper Text'),
(6, '2', 'syntel@gmail.com', 'Which symbol will be used with grep command to match the pattern pat at the beginning of a line', '^pat', '$pat', 'pat$', 'pat^', '^pat'),
(7, '2', 'syntel@gmail.com', 'Which command is used to sort the lines of data in a file in reverse order', 'sort', 'sh', 'st', 'sort -r', 'sort -r'),
(8, '2', 'syntel@gmail.com', 'Which command is used to display the top of the file', 'cat', 'head', 'more', 'grep', 'head'),
(9, '2', 'syntel@gmail.com', 'Which command is used to copy all files having the string chap and any two characters after that to ', 'cp chap?? progs', 'cp chap* progs', 'cp chap[12] /progs/*.*', 'cp chap?? /progs/*', 'cp chap?? progs'),
(10, '2', 'syntel@gmail.com', 'Which command is used to change protection mode of files starting with the string emp and ending wit', 'chmod u+x emp[l-3]', 'chmod 777 emp*', 'chmod u+r ??? emp', 'chmod 222 emp?', 'chmod u+x emp[l-3]'),
(11, '2', 'syntel@gmail.com', 'Which command is used to remove a directory', 'rd', 'rmdir', 'dldir', 'rdir', 'rmdir'),
(12, '2', 'syntel@gmail.com', 'Which of the following keys is used to replace a single character with new text', 'S', 's', 'r', 'C', 's'),
(13, '2', 'syntel@gmail.com', 'Which command is used to extract specific columns from the file', 'cat', 'cut', 'grep', 'paste', 'cut'),
(14, '2', 'syntel@gmail.com', 'Which command sends the word count of the file infile to the newfile', 'wc infile >newfile', 'wc <infile >newfile', 'wc infile - newfile', 'wc infile | newfile', 'wc infile >newfile'),
(15, '2', 'syntel@gmail.com', 'Which command is used to remove the read permission of the file  note  from both the group and other', 'chmod go+r note', 'chmod go+rw note', 'chmod go-x note', 'chmod go-r, 4-x note', 'chmod go-r, 4-x note'),
(16, '2', 'syntel@gmail.com', 'Which of the following commands is used to display the directory attributes rather than its contents', 'ls -1 -d', 'ls -1', 'ls -x', 'ls -F', 'ls -1 -d'),
(17, '2', 'syntel@gmail.com', 'Which of the following files will displayed by this command cat *ch*', 'patch', 'catch', '.ch', 'All of the above', 'All of the above'),
(18, '2', 'syntel@gmail.com', 'The Octal number to be given alogn with chmod command to make a file readable  writable and executab', '000', '755', '744', '555', '755'),
(19, '2', 'syntel@gmail.com', 'If you are to use [Control-c] as the interrupt key instead of [Del]  then you will have to use', 'tty ^c', 'stty intr \\^c', 'stty echoe', 'stty echo \\^a', 'stty intr \\^c'),
(20, '2', 'syntel@gmail.com', 'Which of the following is not a communication command', 'write', 'mesg', 'mail', 'grep', 'grep'),
(21, '2', 'syntel@gmail.com', 'Which command is used to concatenate all files beginning with the string  emp  and followed by a non', 'cat emp[!0-9]', 'more [emp][!0-9]', 'cat emp[x-z]', 'cat emp[a-z]', 'cat emp[!0-9]'),
(22, '2', 'syntel@gmail.com', 'The command which transcribes the standard input to the standard output and also makes a copy of the', 'tee', 'tr', 'sort', 'grep', 'tee'),
(23, '2', 'syntel@gmail.com', 'Which command is used to remove a file', 'remove', 'rm', 'mv', 'del', 'rm'),
(24, '2', 'syntel@gmail.com', 'The agency that sits between the user and the UNIX system is called the', 'logic', 'profile', 'shell', 'erxc', 'shell'),
(25, '2', 'syntel@gmail.com', 'Which of the following commands is used to update access and modification times of a file', 'grep', 'wc', 'touch', 'cat', 'touch'),
(26, '2', 'syntel@gmail.com', 'Which command is used to count just the number of characters in a file', 'wc - 1', 'wc -c', 'wc -w', 'wc -r', 'wc -c'),
(27, '2', 'syntel@gmail.com', 'Which of the following commands is used to list contents of directories', 'ls', 'lp', 'dir', 'tar', 'ls'),
(28, '2', 'syntel@gmail.com', 'Which command is used to display a file contents in octal form', 'cd', 'od', 'of', 'oct', 'od'),
(29, '2', 'syntel@gmail.com', 'Which command will be used with vi editor to insert text to left of cursor', 's', 'S', 'a', 'i', 'i'),
(30, '2', 'syntel@gmail.com', 'In vi editor  forward search is performed using the command', ':pat', ':pat', '/pat', 'All of the above', 'All of the above'),
(31, '2', 'syntel@gmail.com', 'Which option will be used with ps command to slow the entire command line of the process being run', '-4', '-f', '-i', '-4', '-f'),
(32, '2', 'syntel@gmail.com', 'Which of the following command addresses all users who are currently hooked on', 'write', 'mail', 'wall', 'mesg', 'wall'),
(33, '2', 'syntel@gmail.com', 'Which option is used with rm command to make the command prompt the user with each filename and a ? ', '-r', '-x', '-i', '-1', '-i'),
(34, '2', 'syntel@gmail.com', 'Which of the following directories contain all the Ales created by a user  including his login direc', '/tmp', '/etc', '/usr', '/dev', '/usr'),
(35, '2', 'syntel@gmail.com', 'Which of the following commands is used to obtain a list of all files by modification time', 'ls -1', 'ls -t', 'ls -i', 'ls -R', 'ls -t'),
(36, '2', 'syntel@gmail.com', 'Which command is used to display the characteristics of a process', 'pid', 'du', 'ps', 'au', 'ps'),
(37, '2', 'syntel@gmail.com', 'Which of the following commands is used to identify the type of file by context', 'ls', 'cat', 'file', 'more', 'file'),
(38, '2', 'syntel@gmail.com', 'The filed separator in cut command is specified with', '-a option', '-d option', '-r option', '-x option', '-d option'),
(39, '2', 'syntel@gmail.com', 'Which of the following options will be used to display number of blocks used by a file', '-c', '-i', '-d', '-s', '-s'),
(41, '1', '1', 'pri-minister of india', 'dr. manmohan singh', 'manmohan singh', 'sharad pawar', 'narendra modi', 'narendra modi'),
(42, '1', '1', 'what Long form of L&T?', 'Lawren and Thing', 'List and Temapal', 'Lara and Hats', 'Larsen and turbo', 'Larsen and turbo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentexamdetail`
--

CREATE TABLE IF NOT EXISTS `tbl_studentexamdetail` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `studentid` int(100) NOT NULL,
  `examid` int(100) NOT NULL,
  `companyid` varchar(255) NOT NULL,
  `question_id` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `tbl_studentexamdetail`
--

INSERT INTO `tbl_studentexamdetail` (`id`, `studentid`, `examid`, `companyid`, `question_id`, `answer`, `result`) VALUES
(27, 0, 0, '', '24', 'profile', 'Wrong'),
(26, 0, 0, '', '30', '/pat', 'Wrong'),
(25, 0, 0, '', '26', 'wc -c', 'Correct');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `class` varchar(255) NOT NULL,
  `branch` varchar(500) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`id`, `name`, `address`, `mobile`, `email`, `class`, `branch`, `semester`, `subject`, `username`, `password`) VALUES
(5, 'shilpa Bansu', 'kfdhfuksj', '9632587410', 'spbansu@acpce.ac.in', 'degree', 'CS', 'sem4', '', 'spbansu@acpce.ac.in', '9632587410');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tpo`
--

CREATE TABLE IF NOT EXISTS `tbl_tpo` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `EmailID` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_tpo`
--

INSERT INTO `tbl_tpo` (`ID`, `EmailID`, `Username`, `Password`) VALUES
(1, 'tpo@gmail.com', 't', 't');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userprofile`
--

CREATE TABLE IF NOT EXISTS `tbl_userprofile` (
  `UserID` bigint(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `EmailID` varchar(40) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `MaritialStatus` varchar(30) NOT NULL,
  `interest` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `SSCYear` varchar(20) NOT NULL,
  `SSCUniversity` varchar(100) NOT NULL,
  `SSCPercentage` varchar(20) NOT NULL,
  `HSCUniversity` varchar(100) NOT NULL,
  `HSCYear` varchar(20) NOT NULL,
  `HSCSkill` varchar(50) NOT NULL,
  `HSCPercentage` varchar(20) NOT NULL,
  `Sem1Percentage` varchar(30) NOT NULL,
  `Sem2Percentage` varchar(30) NOT NULL,
  `Sem3Percentage` varchar(30) NOT NULL,
  `Sem4Percentage` varchar(30) NOT NULL,
  `Sem5Percentage` varchar(30) NOT NULL,
  `Sem6Percentage` varchar(30) NOT NULL,
  `Sem7Percentage` varchar(30) NOT NULL,
  `Sem8Percentage` varchar(30) NOT NULL,
  `Sem1KTLive` varchar(5) NOT NULL,
  `Sem2KTLive` varchar(5) NOT NULL,
  `Sem3KTLive` varchar(5) NOT NULL,
  `Sem4KTLive` varchar(5) NOT NULL,
  `Sem5KTLive` varchar(5) NOT NULL,
  `Sem6KTLive` varchar(5) NOT NULL,
  `Sem7KTLive` varchar(5) NOT NULL,
  `Sem8KTLive` varchar(5) NOT NULL,
  `Sem1KTDead` varchar(5) NOT NULL,
  `Sem2KTDead` varchar(5) NOT NULL,
  `Sem3KTDead` varchar(5) NOT NULL,
  `Sem4KTDead` varchar(5) NOT NULL,
  `Sem5KTDead` varchar(5) NOT NULL,
  `Sem6KTDead` varchar(5) NOT NULL,
  `Sem7KTDead` varchar(5) NOT NULL,
  `Sem8KTDead` varchar(5) NOT NULL,
  `Sem1KTDrop` varchar(5) NOT NULL,
  `Sem2KTDrop` varchar(5) NOT NULL,
  `Sem3KTDrop` varchar(5) NOT NULL,
  `Sem4KTDrop` varchar(5) NOT NULL,
  `Sem5KTDrop` varchar(5) NOT NULL,
  `Sem6KTDrop` varchar(5) NOT NULL,
  `Sem7KTDrop` varchar(5) NOT NULL,
  `Sem8KTDrop` varchar(5) NOT NULL,
  `Photo` varchar(200) NOT NULL,
  `CV` varchar(200) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  UNIQUE KEY `UserID` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userprofile`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `JoiningDate` varchar(40) NOT NULL,
  `Active` bit(1) NOT NULL DEFAULT b'0',
  `quali` varchar(500) NOT NULL,
  `totalper` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `Name`, `Username`, `Password`, `JoiningDate`, `Active`, `quali`, `totalper`, `email`) VALUES
(8, 'sam', 'sam', 'sam', '6th  April 2016', b'0', 'CS', '8.5', 'projectwale@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tebemarks`
--

CREATE TABLE IF NOT EXISTS `tebemarks` (
  `uid` varchar(255) DEFAULT NULL,
  `addyear` varchar(255) DEFAULT NULL,
  `febranch` varchar(255) DEFAULT NULL,
  `SUB51` varchar(255) DEFAULT NULL,
  `TMAR51` varchar(255) DEFAULT NULL,
  `IMAR51` varchar(255) DEFAULT NULL,
  `TWMAR51` varchar(255) DEFAULT NULL,
  `PMAR51` varchar(255) DEFAULT NULL,
  `OMAR51` varchar(255) DEFAULT NULL,
  `SMAR51` varchar(255) DEFAULT NULL,
  `PF51` varchar(255) DEFAULT NULL,
  `SUB52` varchar(255) DEFAULT NULL,
  `TMAR52` varchar(255) DEFAULT NULL,
  `IMAR52` varchar(255) DEFAULT NULL,
  `TWMAR52` varchar(255) DEFAULT NULL,
  `PMAR52` varchar(255) DEFAULT NULL,
  `OMAR52` varchar(255) DEFAULT NULL,
  `SMAR52` varchar(255) DEFAULT NULL,
  `PF52` varchar(255) DEFAULT NULL,
  `SUB53` varchar(255) DEFAULT NULL,
  `TMAR53` varchar(255) DEFAULT NULL,
  `IMAR53` varchar(255) DEFAULT NULL,
  `TWMAR53` varchar(255) DEFAULT NULL,
  `PMAR53` varchar(255) DEFAULT NULL,
  `OMAR53` varchar(255) DEFAULT NULL,
  `SMAR53` varchar(255) DEFAULT NULL,
  `PF53` varchar(255) DEFAULT NULL,
  `SUB54` varchar(255) DEFAULT NULL,
  `TMAR54` varchar(255) DEFAULT NULL,
  `IMAR54` varchar(255) DEFAULT NULL,
  `TWMAR54` varchar(255) DEFAULT NULL,
  `PMAR54` varchar(255) DEFAULT NULL,
  `OMAR54` varchar(255) DEFAULT NULL,
  `SMAR54` varchar(255) DEFAULT NULL,
  `PF54` varchar(255) DEFAULT NULL,
  `SUB55` varchar(255) DEFAULT NULL,
  `TMAR55` varchar(255) DEFAULT NULL,
  `IMAR55` varchar(255) DEFAULT NULL,
  `TWMAR55` varchar(255) DEFAULT NULL,
  `PMAR55` varchar(255) DEFAULT NULL,
  `OMAR55` varchar(255) DEFAULT NULL,
  `SMAR55` varchar(255) DEFAULT NULL,
  `PF55` varchar(255) DEFAULT NULL,
  `SUB56` varchar(255) DEFAULT NULL,
  `TMAR56` varchar(255) DEFAULT NULL,
  `IMAR56` varchar(255) DEFAULT NULL,
  `TWMAR56` varchar(255) DEFAULT NULL,
  `PMAR56` varchar(255) DEFAULT NULL,
  `OMAR56` varchar(255) DEFAULT NULL,
  `SMAR56` varchar(255) DEFAULT NULL,
  `PF56` varchar(255) DEFAULT NULL,
  `SUB57` varchar(255) DEFAULT NULL,
  `TMAR57` varchar(255) DEFAULT NULL,
  `IMAR57` varchar(255) DEFAULT NULL,
  `TWMAR57` varchar(255) DEFAULT NULL,
  `PMAR57` varchar(255) DEFAULT NULL,
  `OMAR57` varchar(255) DEFAULT NULL,
  `SMAR57` varchar(255) DEFAULT NULL,
  `PF57` varchar(255) DEFAULT NULL,
  `per5` varchar(255) DEFAULT NULL,
  `SUB61` varchar(255) DEFAULT NULL,
  `TMAR61` varchar(255) DEFAULT NULL,
  `IMAR61` varchar(255) DEFAULT NULL,
  `TWMAR61` varchar(255) DEFAULT NULL,
  `PMAR61` varchar(255) DEFAULT NULL,
  `OMAR61` varchar(255) DEFAULT NULL,
  `SMAR61` varchar(255) DEFAULT NULL,
  `PF61` varchar(255) DEFAULT NULL,
  `SUB62` varchar(255) DEFAULT NULL,
  `TMAR62` varchar(255) DEFAULT NULL,
  `IMAR62` varchar(255) DEFAULT NULL,
  `TWMAR62` varchar(255) DEFAULT NULL,
  `PMAR62` varchar(255) DEFAULT NULL,
  `OMAR62` varchar(255) DEFAULT NULL,
  `SMAR62` varchar(255) DEFAULT NULL,
  `PF62` varchar(255) DEFAULT NULL,
  `SUB63` varchar(255) DEFAULT NULL,
  `TMAR63` varchar(255) DEFAULT NULL,
  `IMAR63` varchar(255) DEFAULT NULL,
  `TWMAR63` varchar(255) DEFAULT NULL,
  `PMAR63` varchar(255) DEFAULT NULL,
  `OMAR63` varchar(255) DEFAULT NULL,
  `SMAR63` varchar(255) DEFAULT NULL,
  `PF63` varchar(255) DEFAULT NULL,
  `SUB64` varchar(255) DEFAULT NULL,
  `TMAR64` varchar(255) DEFAULT NULL,
  `IMAR64` varchar(255) DEFAULT NULL,
  `TWMAR64` varchar(255) DEFAULT NULL,
  `PMAR64` varchar(255) DEFAULT NULL,
  `OMAR64` varchar(255) DEFAULT NULL,
  `SMAR64` varchar(255) DEFAULT NULL,
  `PF64` varchar(255) DEFAULT NULL,
  `SUB65` varchar(255) DEFAULT NULL,
  `TMAR65` varchar(255) DEFAULT NULL,
  `IMAR65` varchar(255) DEFAULT NULL,
  `TWMAR65` varchar(255) DEFAULT NULL,
  `PMAR65` varchar(255) DEFAULT NULL,
  `OMAR65` varchar(255) DEFAULT NULL,
  `SMAR65` varchar(255) DEFAULT NULL,
  `PF65` varchar(255) DEFAULT NULL,
  `SUB66` varchar(255) DEFAULT NULL,
  `TMAR66` varchar(255) DEFAULT NULL,
  `IMAR66` varchar(255) DEFAULT NULL,
  `TWMAR66` varchar(255) DEFAULT NULL,
  `PMAR66` varchar(255) DEFAULT NULL,
  `OMAR66` varchar(255) DEFAULT NULL,
  `SMAR66` varchar(255) DEFAULT NULL,
  `PF66` varchar(255) DEFAULT NULL,
  `SUB67` varchar(255) DEFAULT NULL,
  `TMAR67` varchar(255) DEFAULT NULL,
  `IMAR67` varchar(255) DEFAULT NULL,
  `TWMAR67` varchar(255) DEFAULT NULL,
  `PMAR67` varchar(255) DEFAULT NULL,
  `OMAR67` varchar(255) DEFAULT NULL,
  `SMAR67` varchar(255) DEFAULT NULL,
  `PF67` varchar(255) DEFAULT NULL,
  `per6` varchar(255) DEFAULT NULL,
  `SUB71` varchar(255) DEFAULT NULL,
  `TMAR71` varchar(255) DEFAULT NULL,
  `IMAR71` varchar(255) DEFAULT NULL,
  `TWMAR71` varchar(255) DEFAULT NULL,
  `PMAR71` varchar(255) DEFAULT NULL,
  `OMAR71` varchar(255) DEFAULT NULL,
  `SMAR71` varchar(255) DEFAULT NULL,
  `PF71` varchar(255) DEFAULT NULL,
  `SUB72` varchar(255) DEFAULT NULL,
  `TMAR72` varchar(255) DEFAULT NULL,
  `IMAR72` varchar(255) DEFAULT NULL,
  `TWMAR72` varchar(255) DEFAULT NULL,
  `PMAR72` varchar(255) DEFAULT NULL,
  `OMAR72` varchar(255) DEFAULT NULL,
  `SMAR72` varchar(255) DEFAULT NULL,
  `PF72` varchar(255) DEFAULT NULL,
  `SUB73` varchar(255) DEFAULT NULL,
  `TMAR73` varchar(255) DEFAULT NULL,
  `IMAR73` varchar(255) DEFAULT NULL,
  `TWMAR73` varchar(255) DEFAULT NULL,
  `PMAR73` varchar(255) DEFAULT NULL,
  `OMAR73` varchar(255) DEFAULT NULL,
  `SMAR73` varchar(255) DEFAULT NULL,
  `PF73` varchar(255) DEFAULT NULL,
  `SUB74` varchar(255) DEFAULT NULL,
  `TMAR74` varchar(255) DEFAULT NULL,
  `IMAR74` varchar(255) DEFAULT NULL,
  `TWMAR74` varchar(255) DEFAULT NULL,
  `PMAR74` varchar(255) DEFAULT NULL,
  `OMAR74` varchar(255) DEFAULT NULL,
  `SMAR74` varchar(255) DEFAULT NULL,
  `PF74` varchar(255) DEFAULT NULL,
  `SUB75` varchar(255) DEFAULT NULL,
  `TMAR75` varchar(255) DEFAULT NULL,
  `IMAR75` varchar(255) DEFAULT NULL,
  `TWMAR75` varchar(255) DEFAULT NULL,
  `PMAR75` varchar(255) DEFAULT NULL,
  `OMAR75` varchar(255) DEFAULT NULL,
  `SMAR75` varchar(255) DEFAULT NULL,
  `PF75` varchar(255) DEFAULT NULL,
  `SUB76` varchar(255) DEFAULT NULL,
  `TMAR76` varchar(255) DEFAULT NULL,
  `IMAR76` varchar(255) DEFAULT NULL,
  `TWMAR76` varchar(255) DEFAULT NULL,
  `PMAR76` varchar(255) DEFAULT NULL,
  `OMAR76` varchar(255) DEFAULT NULL,
  `SMAR76` varchar(255) DEFAULT NULL,
  `PF76` varchar(255) DEFAULT NULL,
  `SUB77` varchar(255) DEFAULT NULL,
  `TMAR77` varchar(255) DEFAULT NULL,
  `IMAR77` varchar(255) DEFAULT NULL,
  `TWMAR77` varchar(255) DEFAULT NULL,
  `PMAR77` varchar(255) DEFAULT NULL,
  `OMAR77` varchar(255) DEFAULT NULL,
  `SMAR77` varchar(255) DEFAULT NULL,
  `PF77` varchar(255) DEFAULT NULL,
  `addyear1` varchar(255) DEFAULT NULL,
  `febranch1` varchar(255) DEFAULT NULL,
  `per7` varchar(255) DEFAULT NULL,
  `SUB81` varchar(255) DEFAULT NULL,
  `TMAR81` varchar(255) DEFAULT NULL,
  `IMAR81` varchar(255) DEFAULT NULL,
  `TWMAR81` varchar(255) DEFAULT NULL,
  `PMAR81` varchar(255) DEFAULT NULL,
  `OMAR81` varchar(255) DEFAULT NULL,
  `SMAR81` varchar(255) DEFAULT NULL,
  `PF81` varchar(255) DEFAULT NULL,
  `SUB82` varchar(255) DEFAULT NULL,
  `TMAR82` varchar(255) DEFAULT NULL,
  `IMAR82` varchar(255) DEFAULT NULL,
  `TWMAR82` varchar(255) DEFAULT NULL,
  `PMAR82` varchar(255) DEFAULT NULL,
  `OMAR82` varchar(255) DEFAULT NULL,
  `SMAR82` varchar(255) DEFAULT NULL,
  `PF82` varchar(255) DEFAULT NULL,
  `SUB83` varchar(255) DEFAULT NULL,
  `TMAR83` varchar(255) DEFAULT NULL,
  `IMAR83` varchar(255) DEFAULT NULL,
  `TWMAR83` varchar(255) DEFAULT NULL,
  `PMAR83` varchar(255) DEFAULT NULL,
  `OMAR83` varchar(255) DEFAULT NULL,
  `SMAR83` varchar(255) DEFAULT NULL,
  `PF83` varchar(255) DEFAULT NULL,
  `SUB84` varchar(255) DEFAULT NULL,
  `TMAR84` varchar(255) DEFAULT NULL,
  `IMAR84` varchar(255) DEFAULT NULL,
  `TWMAR84` varchar(255) DEFAULT NULL,
  `PMAR84` varchar(255) DEFAULT NULL,
  `OMAR84` varchar(255) DEFAULT NULL,
  `SMAR84` varchar(255) DEFAULT NULL,
  `PF84` varchar(255) DEFAULT NULL,
  `SUB85` varchar(255) DEFAULT NULL,
  `TMAR85` varchar(255) DEFAULT NULL,
  `IMAR85` varchar(255) DEFAULT NULL,
  `TWMAR85` varchar(255) DEFAULT NULL,
  `PMAR85` varchar(255) DEFAULT NULL,
  `OMAR85` varchar(255) DEFAULT NULL,
  `SMAR85` varchar(255) DEFAULT NULL,
  `PF85` varchar(255) DEFAULT NULL,
  `SUB86` varchar(255) DEFAULT NULL,
  `TMAR86` varchar(255) DEFAULT NULL,
  `IMAR86` varchar(255) DEFAULT NULL,
  `TWMAR86` varchar(255) DEFAULT NULL,
  `PMAR86` varchar(255) DEFAULT NULL,
  `OMAR86` varchar(255) DEFAULT NULL,
  `SMAR86` varchar(255) DEFAULT NULL,
  `PF86` varchar(255) DEFAULT NULL,
  `SUB87` varchar(255) DEFAULT NULL,
  `TMAR87` varchar(255) DEFAULT NULL,
  `IMAR87` varchar(255) DEFAULT NULL,
  `TWMAR87` varchar(255) DEFAULT NULL,
  `PMAR87` varchar(255) DEFAULT NULL,
  `OMAR87` varchar(255) DEFAULT NULL,
  `SMAR87` varchar(255) DEFAULT NULL,
  `PF87` varchar(255) DEFAULT NULL,
  `per8` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tebemarks`
--

