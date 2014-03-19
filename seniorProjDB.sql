-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2014 at 04:00 AM
-- Server version: 5.1.66
-- PHP Version: 5.3.3-7+squeeze16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `SENIOR_PROJECT`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMIN`
--

CREATE TABLE IF NOT EXISTS `ADMIN` (
  `id` int(1) NOT NULL,
  `staffID` int(1) NOT NULL,
  `buildingID` int(1) NOT NULL,
  `floorID` int(1) NOT NULL,
  `roomID` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ADMIN`
--

INSERT INTO `ADMIN` (`id`, `staffID`, `buildingID`, `floorID`, `roomID`) VALUES
(2, 471947, 2, 0, 0),
(14, 731052, 3, 0, 0),
(15, 827250, 4, 0, 0),
(17, 295399, 5, 0, 0),
(23, 337604, 6, 0, 0),
(25, 426971, 7, 0, 0),
(27, 292865, 8, 0, 0),
(30, 289228, 9, 0, 0),
(13, 795819, 10, 0, 0),
(22, 883536, 11, 0, 0),
(26, 885520, 12, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `BUILDING`
--

CREATE TABLE IF NOT EXISTS `BUILDING` (
  `id` int(1) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `BUILDING`
--

INSERT INTO `BUILDING` (`id`, `name`) VALUES
(1, 'Campus Houses'),
(2, 'Courtney S Turner Hall'),
(3, 'Cray Seaberg Hall'),
(4, 'Elizabeth Hall'),
(5, 'Legacy Apartments'),
(6, 'Lofts'),
(7, 'McDonald Hall'),
(8, 'Newman Hall'),
(9, 'Row Houses'),
(10, 'St. Joseph Hall'),
(11, 'St. Martin''s Memorial Hall'),
(12, 'St. Michael Hall'),
(13, 'St. Scholastica Hall');

-- --------------------------------------------------------

--
-- Table structure for table `EMAIL`
--

CREATE TABLE IF NOT EXISTS `EMAIL` (
  `id` int(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userID` int(1) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `EMAIL`
--


-- --------------------------------------------------------

--
-- Table structure for table `FLOOR`
--

CREATE TABLE IF NOT EXISTS `FLOOR` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `buildingID` int(1) NOT NULL,
  `floorID` varchar(15) NOT NULL,
  `floorImage` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `FLOOR`
--

INSERT INTO `FLOOR` (`id`, `buildingID`, `floorID`, `floorImage`) VALUES
(10, 2, '1', ''),
(11, 2, '2', ''),
(12, 2, '3', ''),
(13, 2, '4', ''),
(14, 9, '1101A:basement', ''),
(15, 9, '1101A:lounge', ''),
(16, 9, '1101A:2', ''),
(17, 9, '1101B:basement', ''),
(18, 9, '1101B:lounge', ''),
(19, 9, '1101B:2', ''),
(20, 9, '1101C:basement', ''),
(21, 9, '1101C:lounge', ''),
(22, 9, '1101C:2', ''),
(23, 9, '1105A:basement', ''),
(24, 9, '1105A:lounge', ''),
(25, 9, '1105A:2', ''),
(26, 9, '1105B:basement', ''),
(27, 9, '1105B:lounge', ''),
(28, 9, '1105B:2', ''),
(29, 9, '1105C:basement', ''),
(30, 9, '1105C:lounge', ''),
(31, 9, '1105C:2', ''),
(32, 3, '3', ''),
(33, 3, '4', ''),
(34, 3, '3', ''),
(35, 4, '1', ''),
(36, 4, '2', ''),
(37, 4, '3', ''),
(38, 4, '4', ''),
(39, 5, '1', ''),
(40, 5, '2', ''),
(41, 5, '3', ''),
(42, 7, '1', ''),
(43, 7, '2', ''),
(44, 7, '3', ''),
(45, 8, '1', ''),
(46, 8, '2', ''),
(47, 8, '3', ''),
(48, 8, '4', ''),
(49, 10, '1', ''),
(50, 10, '2', ''),
(51, 10, '3', ''),
(52, 11, '1', ''),
(53, 11, '2', ''),
(54, 11, '3', ''),
(55, 11, '4', ''),
(56, 12, '1', ''),
(57, 12, '2', ''),
(58, 12, '3', ''),
(59, 12, '4', ''),
(60, 13, '1', ''),
(61, 13, '2', ''),
(62, 13, '3', ''),
(63, 13, '4', '');

-- --------------------------------------------------------

--
-- Table structure for table `OPERATIONS`
--

CREATE TABLE IF NOT EXISTS `OPERATIONS` (
  `id` int(1) NOT NULL,
  `staffID` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `OPERATIONS`
--

INSERT INTO `OPERATIONS` (`id`, `staffID`) VALUES
(4, 152881),
(9, 241229),
(10, 287101);

-- --------------------------------------------------------

--
-- Table structure for table `ROOM`
--

CREATE TABLE IF NOT EXISTS `ROOM` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `buildingID` int(1) NOT NULL,
  `floorID` varchar(255) NOT NULL,
  `roomImage` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ROOM`
--

INSERT INTO `ROOM` (`id`, `buildingID`, `floorID`, `roomImage`) VALUES
(1, 2, '10', ''),
(2, 2, '11', '');

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT`
--

CREATE TABLE IF NOT EXISTS `STUDENT` (
  `id` int(1) NOT NULL,
  `studentID` int(1) NOT NULL,
  `buildingID` int(1) NOT NULL,
  `roomID` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`id`, `studentID`, `buildingID`, `roomID`) VALUES
(1, 597510, 0, 0),
(3, 974645, 0, 0),
(11, 475813, 0, 0),
(8, 121005, 0, 0),
(21, 676930, 0, 0),
(5, 110466, 0, 0),
(16, 356569, 0, 0),
(29, 463671, 0, 0),
(24, 787871, 0, 0),
(19, 687095, 0, 0),
(12, 453286, 0, 0),
(18, 484158, 0, 0),
(20, 757542, 0, 0),
(28, 787548, 0, 0),
(7, 241598, 9, 0),
(6, 480675, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE IF NOT EXISTS `USER` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`id`, `name`, `emailAddress`, `password`) VALUES
(1, 'Issac Nicoletti', 'Nico@benedictine.edu', 'test1'),
(2, 'Susan Garst', 'Gars@benedictine.edu', 'test2'),
(3, 'Brandon Capers', 'Cape@benedictine.edu', 'test3'),
(4, 'Bob Karney', 'Karney@benedictine.edu', 'test4'),
(5, 'Vickie Dilbeck', 'Dilb@benedictine.edu', 'test5'),
(6, 'John Huber', 'Hube1208@ravens.benedictine.edu', 'test'),
(7, 'Kelsey Dorn', 'Dorn1480@ravens.benedictine.edu', 'test'),
(8, 'Ty Steiner', 'Stei@benedictine.edu', 'test8'),
(9, 'Rolf Sumbo', 'Sumb@benedictine.edu', 'test9'),
(10, 'Juliet Gilbert', 'Gilb@benedictine.edu', 'test10'),
(11, 'Justin Collins', 'Coll@benedictine.edu', 'test11'),
(12, 'Nicholas James', 'Jame@benedictine.edu', 'test12'),
(13, 'Norma Howard', 'Howa@benedictine.edu', 'test13'),
(14, 'Willie Rodriguez', 'Rodr@benedictine.edu', 'test14'),
(15, 'Jane Parker', 'Park@benedictine.edu', 'test15'),
(16, 'Donna Noble', 'Nobl@benedictine.edu', 'test16'),
(17, 'Eric Sanchez', 'Sanc@benedictine.edu', 'test17'),
(18, 'Amy Rivera', 'Rive@benedictine.edu', 'test18'),
(19, 'Shirley Cox', 'Cox@benedictine.edu', 'test19'),
(20, 'Heather Jones', 'Jone@benedictine.edu', 'test20'),
(21, 'Judy Perry', 'Perr@benedictine.edu', 'test21'),
(22, 'Robert Roberts', 'Robe@benedictine.edu', 'test22'),
(23, 'Jason Kelly', 'Kell@benedictine.edu', 'test23'),
(24, 'Christopher Johnson', 'John@benedictine.edu', 'test24'),
(25, 'Jennifer Baker', 'Bake@benedictine.edu', 'test25'),
(26, 'Lori Bryant', 'Brya@benedictine.edu', 'test26'),
(27, 'Joan Alexander', 'Alex@benedictine.edu', 'test27'),
(28, 'Roy Hill', 'Hill@benedictine.edu', 'test28'),
(29, 'Christina Lewis', 'Lewi@benedictine.edu', 'test29'),
(30, 'George Stewart', 'Stew@benedictine.edu', 'test30');

-- --------------------------------------------------------

--
-- Table structure for table `WORK_ORDERS`
--

CREATE TABLE IF NOT EXISTS `WORK_ORDERS` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userID` int(1) NOT NULL,
  `buildingID` int(1) NOT NULL,
  `floorID` int(1) NOT NULL,
  `roomID` int(1) NOT NULL,
  `zone` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `WORK_ORDERS`
--

INSERT INTO `WORK_ORDERS` (`id`, `title`, `description`, `dateTime`, `userID`, `buildingID`, `floorID`, `roomID`, `zone`) VALUES
(1, 'chair', '//sample ', '2014-03-18 02:14:53', 6, 0, 0, 0, 0),
(2, 'desk', '//sample ', '2014-03-18 02:14:53', 6, 0, 0, 0, 0),
(3, 'dresser', '//sample ', '2014-03-18 02:14:53', 7, 0, 0, 0, 0),
(4, 'sink', '//sample ', '2014-03-18 02:14:53', 7, 0, 0, 0, 0),
(5, 'desk', 'front desk left desk leg broken', '2014-03-18 22:28:58', 6, 1, 0, 0, 1),
(9, 'closet', 'door broke off', '2014-03-18 22:50:54', 7, 9, 0, 0, 1);
