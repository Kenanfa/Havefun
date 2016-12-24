-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2016 at 01:31 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `havefun`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Category` varchar(25) NOT NULL,
  `Picture` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `Name`, `Category`, `Picture`) VALUES
(1, 'Istanbul Concert', 'Music', 'http://www.millenniumparkconcerts.org/wp-content/uploads/2015/07/music-concert.jpg'),
(2, 'Arsenal vs Chelsea', 'Sports', 'http://www.ticketgum.com/blog/wp-content/uploads/2016/08/arsenal-vs-chelsea.jpg'),
(3, 'Modern Theatre', 'Theatre', 'http://kingofwallpapers.com/theatre/theatre-010.jpg'),
(4, 'Let\'s code confrence', 'Confrence', 'http://www.prisonabolition.org/wp-content/uploads/2013/10/4596544906.jpg'),
(5, 'Manchester Derby', 'Sports', 'http://www.manutd.com/sitecore/shell/~/media/7C25C9744A8C48F8A22955E10ADCB0F9.ashx?w=1280&h=720&rgn=0,440,2000,1560'),
(6, 'The Eminem Show', 'Music', 'https://blog.tickpick.com/wp-content/uploads/2015/04/eminem.jpg'),
(7, 'El Classico ', 'Sports', 'http://static.sportskeeda.com/wp-content/uploads/2015/03/real-madrid-vs-barcelona-1426960797.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;