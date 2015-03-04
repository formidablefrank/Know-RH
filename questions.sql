-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2015 at 02:58 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
`question_id` int(11) NOT NULL,
  `difficulty` int(11) NOT NULL,
  `question_text` varchar(100) NOT NULL,
  `choice1` varchar(20) NOT NULL,
  `choice2` varchar(20) NOT NULL,
  `choice3` varchar(20) NOT NULL,
  `choice4` varchar(20) NOT NULL,
  `question_answer` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `difficulty`, `question_text`, `choice1`, `choice2`, `choice3`, `choice4`, `question_answer`) VALUES
(1, 1, 'This is a sample question', 'sample choice 1', 'sample choice 2', 'sample choice 3', 'sample choice 4', '0'),
(2, 2, 'Another sample question', 'sample choice 1b', 'sample choice 2b', 'sample choice 3b', 'sample choice 4b', '0'),
(3, 2, 'third sample questnio', 'c1', 'c2', 'c3', 'c4', '3'),
(4, 2, '4th sample q', 'ch1', 'ch2', 'ch3', 'ch4', '3'),
(5, 3, 'Qestion', 'a', 'b', 'c', 'd', '3'),
(6, 2, 'Do birth control pills protect against STDs (sexua', 'No.', 'I''m not sure.', 'Sometimes.', 'Yes.', '0'),
(7, 1, 'Can girls get pregnant before having their first period?', 'I''m not sure.', 'Yes, they can.', 'No.', '', '1'),
(8, 1, 'Which birth control method is 100% effective?', 'Condoms', 'Pills', 'Abstinence', 'Diaphram', '2'),
(9, 3, 'Which one of these STDs is curable?', 'Hepatitis B', 'Gonorrhea', 'HIV', 'Herpes', '1'),
(10, 1, 'Do all STDs have symptoms?', 'Of course!', 'I don''t know', 'No', '', '2'),
(11, 2, 'How often should sexually active teens see a physician?', 'Once a year', 'Every six months', 'Every three years', '', '0'),
(12, 3, 'What is a PAP smear?', 'Birth control method', 'Tool for examination', 'Reproductive organ', 'Pregnancy test', '1'),
(13, 3, 'What is the average abortion rate in the Philippines? (2012)', '100,000', '30,000', '80,000', '60,000', '3'),
(14, 1, 'Which of the ff. is NOT a way for transmitting STD viruses?', 'Sexual intercourse', 'Blood transfusion', 'Injecting drug use', 'Indirect contact', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
