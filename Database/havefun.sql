
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

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
  `Place_ID` int(11) NOT NULL,
  `Picture` text NOT NULL,
  `Category` varchar(30) NOT NULL,
  `num_of_tickets_left` int(10) NOT NULL,
  `Creator_ID` int(11) UNSIGNED NOT NULL,
  `Ticket_price` double UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `Name`, `Date`, `Time`, `Place_ID`, `Picture`, `Category`, `num_of_tickets_left`, `Creator_ID`, `Ticket_price`) VALUES
(1, 'Istanbul Concert', '2016-12-07', 1400, 1, 'http://www.millenniumparkconcerts.org/wp-content/uploads/2015/07/music-concert.jpg', 'Music', 12, 1, 0),
(2, 'Arsenal vs Chelsea', '2017-03-08', 1700, 1, 'http://www.ticketgum.com/blog/wp-content/uploads/2016/08/arsenal-vs-chelsea.jpg', 'Sports', 23, 1, 0),
(3, 'Modern Theatre', '2016-09-09', 2100, 1, 'http://kingofwallpapers.com/theatre/theatre-010.jpg', 'Theatre', 5, 1, 0),
(4, 'Let\'s Code Confrence', '2017-06-28', 1200, 1, 'http://www.prisonabolition.org/wp-content/uploads/2013/10/4596544906.jpg', 'Confrence', 17, 1, 0),
(5, 'Manchester Derby', '2017-02-03', 1300, 1, 'http://www.manutd.com/sitecore/shell/~/media/7C25C9744A8C48F8A22955E10ADCB0F9.ashx?w=1280&h=720&rgn=0,440,2000,1560', 'Sports', 22, 1, 0),
(6, 'The Eminem Show', '2017-03-16', 2200, 1, 'https://blog.tickpick.com/wp-content/uploads/2015/04/eminem.jpg', 'Music', 21, 1, 0),
(7, 'El Classico ', '2017-06-22', 1800, 1, 'http://static.sportskeeda.com/wp-content/uploads/2015/03/real-madrid-vs-barcelona-1426960797.jpg', 'Sports', 25, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `City` varchar(70) NOT NULL,
  `Country` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`ID`, `Name`, `Address`, `City`, `Country`) VALUES
(1, 'Test Only ', 'Test Only ', 'Test Only Test Only ', 'Test Only ');

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
(2, 1, 1);

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
(15, 'rootsaas', 'rootssbb', 'sadsad', 'sadsad', 'sdasad@xxeddc', 123213, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `place_id` (`Place_ID`),
  ADD KEY `Creator_ID` (`Creator_ID`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`ID`);

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
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tickets_purchased`
--
ALTER TABLE `tickets_purchased`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`Creator_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `place_id` FOREIGN KEY (`Place_ID`) REFERENCES `place` (`ID`);

--
-- Constraints for table `tickets_purchased`
--
ALTER TABLE `tickets_purchased`
  ADD CONSTRAINT `event_id` FOREIGN KEY (`Event_ID`) REFERENCES `event` (`ID`),
  ADD CONSTRAINT `tickets_purchased_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;