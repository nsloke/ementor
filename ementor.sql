-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2019 at 06:48 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ementor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admtbl`
--

CREATE TABLE `admtbl` (
  `userid` varchar(50) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `depid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admtbl`
--

INSERT INTO `admtbl` (`userid`, `passwd`, `depid`) VALUES
('abc', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `allotslot`
--

CREATE TABLE `allotslot` (
  `allotid` int(10) NOT NULL,
  `staffid` int(10) NOT NULL,
  `studid` int(10) NOT NULL,
  `reason` text NOT NULL,
  `slot` varchar(50) NOT NULL,
  `statuss` varchar(50) NOT NULL,
  `feedback` varchar(10) DEFAULT NULL,
  `feedbackmtr` varchar(10) DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allotslot`
--

INSERT INTO `allotslot` (`allotid`, `staffid`, `studid`, `reason`, `slot`, `statuss`, `feedback`, `feedbackmtr`) VALUES
(5, 345434675, 545454376, 'semester study', 'tue1to2', 'Confirmed', 'no', 'no'),
(6, 345434675, 447587485, 'doubts of automata theory', 'thu12to1', 'Confirmed', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_subject` varchar(60) NOT NULL,
  `comment_text` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `depttbl`
--

CREATE TABLE `depttbl` (
  `depid` int(10) NOT NULL,
  `depname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depttbl`
--

INSERT INTO `depttbl` (`depid`, `depname`) VALUES
(1, 'Computer Engineering'),
(2, 'Electrical Engineering'),
(3, 'EXTC');

-- --------------------------------------------------------

--
-- Table structure for table `menteenotif`
--

CREATE TABLE `menteenotif` (
  `menteeid` int(10) NOT NULL,
  `notif` text NOT NULL,
  `notifyid` int(10) NOT NULL,
  `tstmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menteenotif`
--

INSERT INTO `menteenotif` (`menteeid`, `notif`, `notifyid`, `tstmp`) VALUES
(545454376, 'test notification', 1, '2019-03-10 20:43:29'),
(545454376, 'Meeting request confirmed by mentor attue1to2', 2, '2019-03-10 21:03:37'),
(545454376, 'Meeting request cancelled by mentor', 3, '2019-03-10 21:08:00'),
(447587485, 'Meeting request confirmed by mentor atthu12to1', 4, '2019-04-19 17:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `mentorass`
--

CREATE TABLE `mentorass` (
  `mentorid` int(10) NOT NULL,
  `menteeid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentorass`
--

INSERT INTO `mentorass` (`mentorid`, `menteeid`) VALUES
(578837399, 564545643),
(565683245, 1234567890),
(345434675, 767965445),
(345434675, 447587485),
(345434675, 545454376);

-- --------------------------------------------------------

--
-- Table structure for table `mentornotif`
--

CREATE TABLE `mentornotif` (
  `mentorid` int(10) NOT NULL,
  `notif` text NOT NULL,
  `notifyid` int(10) NOT NULL,
  `tstmp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentornotif`
--

INSERT INTO `mentornotif` (`mentorid`, `notif`, `notifyid`, `tstmp`) VALUES
(345434675, 'Meet request scheduled for semester study', 3, '2019-03-10 20:53:40'),
(345434675, 'Meet request scheduled for doubts of automata theory', 4, '2019-03-10 21:07:20'),
(345434675, 'Meet request scheduled thu12to1 for doubts of automata theory', 5, '2019-04-19 17:05:58');

-- --------------------------------------------------------

--
-- Table structure for table `slottbl`
--

CREATE TABLE `slottbl` (
  `staffid` int(10) NOT NULL,
  `slotname` varchar(20) NOT NULL,
  `statuss` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slottbl`
--

INSERT INTO `slottbl` (`staffid`, `slotname`, `statuss`) VALUES
(345434675, 'mon9to10', 'free'),
(345434675, 'mon10to11', 'free'),
(345434675, 'tue12to1', 'free'),
(345434675, 'thu12to1', 'free'),
(345434675, 'tue1to2', 'free'),
(345434675, 'thu1to2', 'free'),
(345434675, 'wed3to4', 'free'),
(345434675, 'thu3to4', 'free'),
(578837399, 'mon9to10', 'free'),
(578837399, 'mon11to12', 'free'),
(578837399, 'thu11to12', 'free'),
(578837399, 'thu12to1', 'free'),
(578837399, 'tue1to2', 'free'),
(578837399, 'fri1to2', 'free'),
(578837399, 'tue2to3', 'free'),
(578837399, 'fri2to3', 'free'),
(578837399, 'tue4to5', 'free'),
(578837399, 'wed4to5', 'free');

-- --------------------------------------------------------

--
-- Table structure for table `stafftbl`
--

CREATE TABLE `stafftbl` (
  `staffid` int(10) NOT NULL,
  `staffname` varchar(50) NOT NULL,
  `depid` int(10) NOT NULL,
  `passwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stafftbl`
--

INSERT INTO `stafftbl` (`staffid`, `staffname`, `depid`, `passwd`) VALUES
(345434675, 'John Cena', 2, '123'),
(565683245, 'Jean Claude', 1, '123'),
(578837399, 'Roger Moore', 1, '123'),
(1234567890, 'Ark Joan', 3, '123');

-- --------------------------------------------------------

--
-- Table structure for table `studattn`
--

CREATE TABLE `studattn` (
  `studid` int(10) NOT NULL,
  `attnsec` int(10) NOT NULL,
  `attnval` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studattn`
--

INSERT INTO `studattn` (`studid`, `attnsec`, `attnval`) VALUES
(545454376, 1, '75'),
(545454376, 4, '80'),
(545454376, 2, '60'),
(545454376, 3, '70');

-- --------------------------------------------------------

--
-- Table structure for table `studinftbl`
--

CREATE TABLE `studinftbl` (
  `studid` int(10) NOT NULL,
  `studname` varchar(50) DEFAULT NULL,
  `branch` int(10) DEFAULT NULL,
  `iitentr` varchar(10) DEFAULT NULL,
  `medofinc` varchar(10) DEFAULT NULL,
  `mobno` varchar(20) DEFAULT NULL,
  `resphno` varchar(20) DEFAULT NULL,
  `resaddr` text,
  `emgrcon` varchar(20) DEFAULT NULL,
  `relcon` varchar(10) DEFAULT NULL,
  `emgaddr` text,
  `emgtel` varchar(20) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `sibedu` text,
  `fambgr` text,
  `income` varchar(20) DEFAULT NULL,
  `modtrav` varchar(20) DEFAULT NULL,
  `nativpl` varchar(20) DEFAULT NULL,
  `freqnativ` text,
  `medhist` text,
  `hobby` text,
  `strength` text,
  `weakness` text,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studinftbl`
--

INSERT INTO `studinftbl` (`studid`, `studname`, `branch`, `iitentr`, `medofinc`, `mobno`, `resphno`, `resaddr`, `emgrcon`, `relcon`, `emgaddr`, `emgtel`, `email`, `sibedu`, `fambgr`, `income`, `modtrav`, `nativpl`, `freqnativ`, `medhist`, `hobby`, `strength`, `weakness`, `photo`) VALUES
(545454376, 'Sylvester Stallone', 2, 'no', 'English', '7045468386', '', 'B604, Ganesh co op society\r\nManjrekar wadi, ns phadke marg\r\nAndheri east', '9404170589', 'Father', 'Manjrekarwadi, N.S. Phadke Marg,', '07588858592', 'muscleman.loke74@gmail.com', 'No Siblings', 'Father:Retired\r\nMother:Housewife', 'gt3l', 'Bus', 'Oros', '3', 'Suffered Major fracture', 'Bungee Jumping', 'Biceps, Triceps', 'Calves', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studmrk`
--

CREATE TABLE `studmrk` (
  `studid` int(10) NOT NULL,
  `exspec` varchar(20) NOT NULL,
  `perc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studmrk`
--

INSERT INTO `studmrk` (`studid`, `exspec`, `perc`) VALUES
(545454376, 'Class Test 1 2019', '75'),
(545454376, 'Class Test 2 2019', '81'),
(545454376, 'Class Test 3 2019', '60');

-- --------------------------------------------------------

--
-- Table structure for table `studtbl`
--

CREATE TABLE `studtbl` (
  `studid` int(10) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `studname` varchar(50) NOT NULL,
  `infupd` varchar(10) NOT NULL,
  `depid` int(10) NOT NULL,
  `menass` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studtbl`
--

INSERT INTO `studtbl` (`studid`, `passwd`, `studname`, `infupd`, `depid`, `menass`) VALUES
(447587485, '123', 'Donnie Yen', 'no', 2, 'yes'),
(545454376, '123', 'Sylvester Stallone', 'yes', 2, 'yes'),
(564545643, '123', 'Robert Redford', 'no', 1, 'yes'),
(767965445, '123', 'Ronnie Coleman', 'no', 2, 'yes'),
(1234567890, '123', 'Abc Ram', 'no', 1, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `subjmarks`
--

CREATE TABLE `subjmarks` (
  `studid` int(10) NOT NULL,
  `subjid` int(10) NOT NULL,
  `marks` varchar(10) NOT NULL,
  `exspec` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjmarks`
--

INSERT INTO `subjmarks` (`studid`, `subjid`, `marks`, `exspec`) VALUES
(545454376, 1, '12', 'Class Test 1 2019'),
(545454376, 1, '18', 'Class Test 2 2019'),
(545454376, 1, '16', 'Class Test 3 2019'),
(545454376, 2, '19', 'Class Test 1 2019'),
(545454376, 2, '18', 'Class Test 2 2019'),
(545454376, 2, '14', 'Class Test 3 2019');

-- --------------------------------------------------------

--
-- Table structure for table `subjtbl`
--

CREATE TABLE `subjtbl` (
  `subjid` int(10) NOT NULL,
  `depid` int(10) NOT NULL,
  `subjname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjtbl`
--

INSERT INTO `subjtbl` (`subjid`, `depid`, `subjname`) VALUES
(1, 1, 'Artificial Intelligence'),
(2, 1, 'Machine Learning'),
(3, 1, 'Soft Computing'),
(4, 1, 'Computer Simulation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admtbl`
--
ALTER TABLE `admtbl`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `depid` (`depid`);

--
-- Indexes for table `allotslot`
--
ALTER TABLE `allotslot`
  ADD PRIMARY KEY (`allotid`),
  ADD KEY `staffid` (`staffid`),
  ADD KEY `studid` (`studid`);

--
-- Indexes for table `depttbl`
--
ALTER TABLE `depttbl`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `menteenotif`
--
ALTER TABLE `menteenotif`
  ADD PRIMARY KEY (`notifyid`),
  ADD KEY `menteeid` (`menteeid`);

--
-- Indexes for table `mentorass`
--
ALTER TABLE `mentorass`
  ADD KEY `mentorid` (`mentorid`),
  ADD KEY `menteeid` (`menteeid`);

--
-- Indexes for table `mentornotif`
--
ALTER TABLE `mentornotif`
  ADD PRIMARY KEY (`notifyid`),
  ADD KEY `mentorid` (`mentorid`);

--
-- Indexes for table `slottbl`
--
ALTER TABLE `slottbl`
  ADD KEY `staffid` (`staffid`);

--
-- Indexes for table `stafftbl`
--
ALTER TABLE `stafftbl`
  ADD PRIMARY KEY (`staffid`),
  ADD KEY `depid` (`depid`);

--
-- Indexes for table `studattn`
--
ALTER TABLE `studattn`
  ADD KEY `studid` (`studid`),
  ADD KEY `attnsec` (`attnsec`);

--
-- Indexes for table `studinftbl`
--
ALTER TABLE `studinftbl`
  ADD KEY `studid` (`studid`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `studtbl`
--
ALTER TABLE `studtbl`
  ADD PRIMARY KEY (`studid`),
  ADD KEY `depid` (`depid`);

--
-- Indexes for table `subjmarks`
--
ALTER TABLE `subjmarks`
  ADD KEY `studid` (`studid`),
  ADD KEY `subjid` (`subjid`);

--
-- Indexes for table `subjtbl`
--
ALTER TABLE `subjtbl`
  ADD PRIMARY KEY (`subjid`),
  ADD KEY `depid` (`depid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allotslot`
--
ALTER TABLE `allotslot`
  MODIFY `allotid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menteenotif`
--
ALTER TABLE `menteenotif`
  MODIFY `notifyid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mentornotif`
--
ALTER TABLE `mentornotif`
  MODIFY `notifyid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjtbl`
--
ALTER TABLE `subjtbl`
  MODIFY `subjid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admtbl`
--
ALTER TABLE `admtbl`
  ADD CONSTRAINT `fk_depid` FOREIGN KEY (`depid`) REFERENCES `depttbl` (`depid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `allotslot`
--
ALTER TABLE `allotslot`
  ADD CONSTRAINT `allotslot_ibfk_1` FOREIGN KEY (`staffid`) REFERENCES `stafftbl` (`staffid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `allotslot_ibfk_2` FOREIGN KEY (`studid`) REFERENCES `studtbl` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menteenotif`
--
ALTER TABLE `menteenotif`
  ADD CONSTRAINT `menteenotif_ibfk_1` FOREIGN KEY (`menteeid`) REFERENCES `studtbl` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mentorass`
--
ALTER TABLE `mentorass`
  ADD CONSTRAINT `mentorass_ibfk_1` FOREIGN KEY (`menteeid`) REFERENCES `studtbl` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mentorass_ibfk_2` FOREIGN KEY (`mentorid`) REFERENCES `stafftbl` (`staffid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mentornotif`
--
ALTER TABLE `mentornotif`
  ADD CONSTRAINT `mentornotif_ibfk_1` FOREIGN KEY (`mentorid`) REFERENCES `stafftbl` (`staffid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slottbl`
--
ALTER TABLE `slottbl`
  ADD CONSTRAINT `slottbl_ibfk_1` FOREIGN KEY (`staffid`) REFERENCES `stafftbl` (`staffid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stafftbl`
--
ALTER TABLE `stafftbl`
  ADD CONSTRAINT `fktrt` FOREIGN KEY (`depid`) REFERENCES `depttbl` (`depid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studattn`
--
ALTER TABLE `studattn`
  ADD CONSTRAINT `studattn_ibfk_1` FOREIGN KEY (`studid`) REFERENCES `studtbl` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studattn_ibfk_2` FOREIGN KEY (`attnsec`) REFERENCES `subjtbl` (`subjid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studinftbl`
--
ALTER TABLE `studinftbl`
  ADD CONSTRAINT `fk_branchdept` FOREIGN KEY (`branch`) REFERENCES `depttbl` (`depid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_studid` FOREIGN KEY (`studid`) REFERENCES `studtbl` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studtbl`
--
ALTER TABLE `studtbl`
  ADD CONSTRAINT `fk_depidk` FOREIGN KEY (`depid`) REFERENCES `depttbl` (`depid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjmarks`
--
ALTER TABLE `subjmarks`
  ADD CONSTRAINT `subjmarks_ibfk_1` FOREIGN KEY (`studid`) REFERENCES `studtbl` (`studid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjmarks_ibfk_2` FOREIGN KEY (`subjid`) REFERENCES `subjtbl` (`subjid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjtbl`
--
ALTER TABLE `subjtbl`
  ADD CONSTRAINT `subjtbl_ibfk_1` FOREIGN KEY (`depid`) REFERENCES `depttbl` (`depid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
