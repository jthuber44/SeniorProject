-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2014 at 06:35 PM
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
(2, 471947, 0, 0, 0),
(6, 480675, 0, 0, 0),
(7, 241598, 0, 0, 0),
(14, 731052, 0, 0, 0),
(15, 827250, 0, 0, 0),
(17, 295399, 0, 0, 0),
(23, 337604, 0, 0, 0),
(25, 426971, 0, 0, 0),
(27, 292865, 0, 0, 0),
(30, 289228, 0, 0, 0),
(13, 795819, 0, 0, 0),
(22, 883536, 0, 0, 0),
(26, 885520, 0, 0, 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `FLOOR`
--

INSERT INTO `FLOOR` (`id`, `buildingID`, `floorID`, `floorImage`) VALUES
(1, 13, '1', ''),
(2, 13, '2', ''),
(3, 13, '3', ''),
(4, 13, '4', ''),
(5, 12, 'basement', ''),
(6, 12, '1', ''),
(7, 12, '2', ''),
(8, 12, '3', ''),
(9, 12, '4', '');

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
  `id` int(1) NOT NULL,
  `buildingID` int(1) NOT NULL,
  `roomImage` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ROOM`
--


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
(28, 787548, 0, 0);

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
  `id` int(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userID` int(1) NOT NULL,
  `buildingID` int(1) NOT NULL,
  `floorID` int(1) NOT NULL,
  `roomID` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `WORK_ORDERS`
--

INSERT INTO `WORK_ORDERS` (`id`, `title`, `description`, `dateTime`, `userID`, `buildingID`, `floorID`, `roomID`) VALUES
(0, 'chair', '//sample ', '2014-03-18 02:14:53', 6, 0, 0, 0),
(2, 'desk', '//sample ', '2014-03-18 02:14:53', 6, 0, 0, 0),
(3, 'dresser', '//sample ', '2014-03-18 02:14:53', 7, 0, 0, 0),
(4, 'sink', '//sample ', '2014-03-18 02:14:53', 7, 0, 0, 0);
