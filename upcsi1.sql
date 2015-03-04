-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2015 at 01:25 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_timestamp`, `user_name`, `user_lat`, `user_lon`, `easy_correct`, `medium_correct`, `hard_correct`, `total_correct`, `total_points`) VALUES
(1, '2015-01-10 20:19:22', 'frank', 14, 121, 0, 0, 1, 1, 15),
(2, '0000-00-00 00:00:00', 'frankie', 12, 122, 2, 0, 0, 2, 10),
(3, '2015-01-10 23:40:09', 'franco', 14.1, 121.01, 4, 0, 0, 4, 20),
(64, '2015-01-11 05:06:46', 'asdf', 14.6397, 121.075, 2, 2, 0, 0, 30),
(65, '2015-01-11 05:19:38', 'upcsi', 14.645, 121.085, 1, 1, 1, 3, 30),
(66, '2015-01-11 05:21:16', 'up', 14.9, 121.5, 2, 0, 0, 2, 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
