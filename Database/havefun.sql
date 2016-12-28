-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 10:33 PM
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
  `ID` int(10) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` int(10) UNSIGNED NOT NULL,
  `Place_Name` varchar(100) NOT NULL,
  `Picture` text NOT NULL,
  `Category` varchar(30) NOT NULL,
  `num_of_tickets_left` int(10) NOT NULL,
  `Creator_ID` int(11) UNSIGNED NOT NULL,
  `Ticket_price` double UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `Name`, `Date`, `Time`, `Place_Name`, `Picture`, `Category`, `num_of_tickets_left`, `Creator_ID`, `Ticket_price`) VALUES
(1, 'Istanbul Concert', '2016-12-07', 1400, 'Test Only', 'http://www.millenniumparkconcerts.org/wp-content/uploads/2015/07/music-concert.jpg', 'Music', 12, 1, 22),
(2, 'Arsenal vs Chelsea', '2017-03-08', 1700, 'Test Only', 'http://www.ticketgum.com/blog/wp-content/uploads/2016/08/arsenal-vs-chelsea.jpg', 'Sports', 23, 1, 25),
(3, 'Modern Theatre', '2016-09-09', 2100, 'Test Only', 'http://kingofwallpapers.com/theatre/theatre-010.jpg', 'Theatre', 5, 1, 28),
(4, 'Let\'s Code Confrence', '2017-06-28', 1200, 'Test Only', 'http://www.prisonabolition.org/wp-content/uploads/2013/10/4596544906.jpg', 'Confrence', 17, 1, 15),
(5, 'Manchester Derby', '2017-02-03', 1300, 'Test Only', 'http://www.manutd.com/sitecore/shell/~/media/7C25C9744A8C48F8A22955E10ADCB0F9.ashx?w=1280&h=720&rgn=0,440,2000,1560', 'Sports', 22, 16, 45),
(6, 'The Eminem Show', '2017-03-16', 2200, 'Test Only', 'https://blog.tickpick.com/wp-content/uploads/2015/04/eminem.jpg', 'Music', 21, 1, 110),
(7, 'El Classico ', '2017-06-22', 1800, 'Test Only', 'http://static.sportskeeda.com/wp-content/uploads/2015/03/real-madrid-vs-barcelona-1426960797.jpg', 'Sports', 25, 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `Name` varchar(100) NOT NULL,
  `City` varchar(70) NOT NULL,
  `Country` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`Name`, `City`, `Country`) VALUES
('Test Only ', 'Test Only Test Only ', 'Test Only ');

-- --------------------------------------------------------

--
-- Table structure for table `tickets_purchased`
--

CREATE TABLE `tickets_purchased` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Event_ID` int(10) UNSIGNED NOT NULL,
  `User_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tickets_purchased`
--

INSERT INTO `tickets_purchased` (`ID`, `Event_ID`, `User_ID`) VALUES
(1, 1, 1),
(2, 1, 1),
(18, 5, 2),
(19, 4, 1),
(20, 3, 2),
(21, 6, 2),
(22, 6, 2),
(23, 2, 2),
(24, 3, 2),
(25, 6, 2),
(26, 7, 2),
(27, 3, 2),
(28, 4, 1),
(29, 5, 1),
(30, 2, 1),
(31, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) UNSIGNED NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_number` int(10) UNSIGNED DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Name`, `Surname`, `Email`, `Phone_number`, `isAdmin`) VALUES
(1, 'kenan', 'kenan', 'kenan', 'kenan', 'kenan', NULL, 1),
(2, 'root', 'root', 'erk', 'Erk', 'ERK', NULL, 0),
(16, 'Absusu', 'Absusu', 'Ab', 'Susu', 'Ab@susu', 588735171, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `place_id` (`Place_Name`),
  ADD KEY `Creator_ID` (`Creator_ID`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `tickets_purchased`
--
ALTER TABLE `tickets_purchased`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `event_id` (`Event_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tickets_purchased`
--
ALTER TABLE `tickets_purchased`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`Creator_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`place_name`) REFERENCES `place` (`name`);

--
-- Constraints for table `tickets_purchased`
--
ALTER TABLE `tickets_purchased`
  ADD CONSTRAINT `event_id` FOREIGN KEY (`Event_ID`) REFERENCES `event` (`ID`),
  ADD CONSTRAINT `tickets_purchased_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;