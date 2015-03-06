-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2015 at 06:47 PM
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
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `difficulty` int(11) NOT NULL,
  `question_text` varchar(50) NOT NULL,
  `choice1` varchar(20) NOT NULL,
  `choice2` varchar(20) NOT NULL,
  `choice3` varchar(20) NOT NULL,
  `choice4` varchar(20) NOT NULL,
  `question_answer` text NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `difficulty`, `question_text`, `choice1`, `choice2`, `choice3`, `choice4`, `question_answer`) VALUES
(1, 1, 'This is a sample question', 'sample choice 1', 'sample choice 2', 'sample choice 3', 'sample choice 4', '0'),
(2, 2, 'Another sample question', 'sample choice 1b', 'sample choice 2b', 'sample choice 3b', 'sample choice 4b', '0'),
(3, 2, 'third sample questnio', 'c1', 'c2', 'c3', 'c4', '3'),
(4, 3, '4th sample q', 'ch1', 'ch2', 'ch3', 'ch4', '3');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `title`, `description`, `venue_name`, `venue_address`, `target`, `requirements`, `start_date`, `end_date`, `active`, `timestamp`) VALUES
(1, 'Title1', 'This is a description', 'Venue', 'Venue Address', 'Public', 'None', '2015-03-07 00:00:00', '2015-03-08 00:00:00', 1, '2015-03-06 17:00:44'),
(2, 'Title2', 'This is a description2', 'Venue2', 'Venue Address2', 'All', 'None', '2015-03-14 06:30:00', '2015-03-15 00:00:00', 1, '2015-03-06 17:01:32'),
(3, 'Title3', 'Hello', 'Name', 'place', 'yey', 'nope', '2015-03-03 00:00:00', '2015-03-25 10:00:00', 0, '2015-03-06 17:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_name` text NOT NULL,
  `user_lat` float NOT NULL,
  `user_lon` float NOT NULL,
  `easy_correct` int(11) NOT NULL,
  `medium_correct` int(11) NOT NULL,
  `hard_correct` int(11) NOT NULL,
  `total_correct` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_timestamp`, `user_name`, `user_lat`, `user_lon`, `easy_correct`, `medium_correct`, `hard_correct`, `total_correct`, `total_points`) VALUES
(1, '2015-01-10 20:19:22', 'frank', 14, 121, 0, 0, 1, 1, 15),
(2, '0000-00-00 00:00:00', 'frankie', 12, 122, 2, 0, 0, 2, 10),
(3, '2015-01-10 23:40:09', 'franco', 14.1, 121.01, 4, 0, 0, 4, 20),
(64, '2015-01-11 05:06:46', 'asdf', 14.6397, 121.075, 2, 2, 0, 0, 30),
(71, '2015-01-11 11:35:08', 'uupcsi', 14.6397, 121.075, 0, 0, 0, 0, 0),
(72, '2015-03-01 00:15:13', 'Frank', 14.5995, 120.984, 1, 0, 0, 0, 5),
(73, '2015-03-07 00:47:00', 'Frank', 14.6451, 121.064, 4, 0, 2, 0, 50);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
