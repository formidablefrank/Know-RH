-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2015 at 09:53 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upcsi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `venue_name` text NOT NULL,
  `venue_address` text NOT NULL,
  `target` text NOT NULL,
  `requirements` text NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `active` int(1) unsigned NOT NULL DEFAULT '1',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `title`, `description`, `venue_name`, `venue_address`, `target`, `requirements`, `start_date`, `end_date`, `active`, `timestamp`) VALUES
(1, 'Title1', 'This is a description', 'Venue', 'Venue Address', 'Public', 'None', '2015-03-07 00:00:00', '2015-03-08 00:00:00', 1, '2015-03-06 17:00:44'),
(2, 'Title2', 'This is a description2', 'Venue2', 'Venue Address2', 'All', 'None', '2015-03-14 06:30:00', '2015-03-15 00:00:00', 1, '2015-03-06 17:01:32'),
(3, 'Title3', 'Hello', 'Name', 'place', 'yey', 'nope', '2015-03-03 00:00:00', '2015-03-25 10:00:00', 0, '2015-03-06 17:21:19'),
(4, 'aaerljn', 'asdfg', 'lkjnbsegjb', 'kjsdf', 'lkjnbsegjb', 'lkjbsh', '2015-12-31 12:59:00', '2015-01-01 02:01:00', 1, '2015-03-08 17:25:55');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
