-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2018 at 04:39 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'admin@bjphs', 'b@j?p}h[s]#4}$@');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_title` varchar(200) NOT NULL,
  `file` text NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`image_id`, `image_title`, `file`) VALUES
(7, 'Annual Sports Day', '3.jpg'),
(8, 'Annual Sports Day', '3.jpg'),
(9, 'Annual Sports Day', '3.jpg'),
(10, 'Annual Sports Day', '55.jpg'),
(11, 'Annual Sports Day', '55.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news_update`
--

CREATE TABLE IF NOT EXISTS `news_update` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(400) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `news_update`
--

INSERT INTO `news_update` (`news_id`, `news`) VALUES
(18, 'Class will start from January 10,2018');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `file` text NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `title`, `file`, `size`) VALUES
(4, 'annual general meeting', 'annual-general-meeting-2017.docx', 89),
(6, 'Class six Result', '2016_certificatecontestantplace_asia_dhaka_2016_333246.pdf', 462),
(8, 'Class eight Result', '2016_certificatecontestantplace_asia_dhaka_2016_333246.pdf', 462),
(9, 'Class nine Result', '2016_certificatecontestantplace_asia_dhaka_2016_333246.pdf', 462),
(10, 'Class ten Result', '2016_certificatecontestantplace_asia_dhaka_2016_333246.pdf', 462),
(11, 'Annual sports Report', '2016_certificatecontestantplace_asia_dhaka_2016_333246.pdf', 462);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `title`, `file`, `reg_date`) VALUES
(8, 'Pintu Paul', 'pintu-paul-20704.pdf', '2018-03-06 04:13:44'),
(9, 'Pintu Paul', 'pintu-paul-64736.pdf', '2018-03-06 04:14:18'),
(10, 'Pintu Paul', 'pintu-paul-59319.pdf', '2018-03-06 04:14:32'),
(12, 'Pintu Paul', 'pintu-paul-91278.pdf', '2018-03-06 04:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `teachers_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(80) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `qualification` varchar(80) NOT NULL,
  `image` text NOT NULL,
  `join_date` text NOT NULL,
  PRIMARY KEY (`teachers_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teachers_id`, `teacher_name`, `designation`, `qualification`, `image`, `join_date`) VALUES
(2, 'Narayan Paul', 'Assistant Teacher', 'BSc', '11.jpg', '12-06-2002'),
(1, 'Md. Mokshed Ali', 'Head Master', 'MSc', '2.jpg', '21-2-2001'),
(3, 'Babul Kumar Saha', 'Assistant Teacher', 'MSc', '3.jpg', '12-06-2002');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
