-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2018 at 01:49 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `Home_ID` varchar(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `ApplicationID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`Home_ID`, `Name`, `ApplicationID`) VALUES
('1', 'eye\'s home', 'EyeSmartLight');

-- --------------------------------------------------------

--
-- Table structure for table `home_has_room`
--

CREATE TABLE `home_has_room` (
  `ID` int(5) NOT NULL,
  `Home_ID` varchar(10) NOT NULL,
  `Room_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_has_room`
--

INSERT INTO `home_has_room` (`ID`, `Home_ID`, `Room_ID`) VALUES
(1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `light`
--

CREATE TABLE `light` (
  `Light_ID` int(5) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Status` enum('OFF','ON') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `light`
--

INSERT INTO `light` (`Light_ID`, `Name`, `Status`) VALUES
(1, 'head light', 'OFF'),
(2, 'center light', 'OFF');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `User_name` varchar(255) DEFAULT NULL,
  `Room_name` varchar(255) DEFAULT NULL,
  `Light_name` varchar(255) DEFAULT NULL,
  `Status` enum('OFF','ON') DEFAULT NULL,
  `Result` enum('UNSUCCESS','SUCCESS') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`Date`, `Time`, `User_name`, `Room_name`, `Light_name`, `Status`, `Result`) VALUES
('2018-05-18', '14:59:17', 'Admin', 'bed room', 'center light', 'OFF', 'UNSUCCESS');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_ID` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Light1` int(255) DEFAULT NULL,
  `Light2` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_ID`, `Name`, `Light1`, `Light2`) VALUES
(1, 'bed room', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(5) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(8) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Home_ID` varchar(255) DEFAULT NULL,
  `Role` enum('USER','ADMIN') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Username`, `Password`, `Email`, `Home_ID`, `Role`) VALUES
(1, 'Admin', '12345678', 'eye_babylove@hotmail.com', '1', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`Home_ID`);

--
-- Indexes for table `home_has_room`
--
ALTER TABLE `home_has_room`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Home_ID` (`Home_ID`),
  ADD KEY `Room_ID` (`Room_ID`);

--
-- Indexes for table `light`
--
ALTER TABLE `light`
  ADD PRIMARY KEY (`Light_ID`),
  ADD KEY `Name` (`Name`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD KEY `User_name` (`User_name`),
  ADD KEY `Room_name` (`Room_name`),
  ADD KEY `Light_name` (`Light_name`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_ID`),
  ADD KEY `Light1` (`Light1`),
  ADD KEY `Light2` (`Light2`),
  ADD KEY `Name` (`Name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Home_ID` (`Home_ID`),
  ADD KEY `Username` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `home_has_room`
--
ALTER TABLE `home_has_room`
  ADD CONSTRAINT `home_has_room_ibfk_1` FOREIGN KEY (`Home_ID`) REFERENCES `home` (`Home_ID`),
  ADD CONSTRAINT `home_has_room_ibfk_2` FOREIGN KEY (`Room_ID`) REFERENCES `room` (`Room_ID`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`User_name`) REFERENCES `user` (`Username`),
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`Room_name`) REFERENCES `room` (`Name`),
  ADD CONSTRAINT `log_ibfk_3` FOREIGN KEY (`Light_name`) REFERENCES `light` (`Name`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`Light1`) REFERENCES `light` (`Light_ID`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`Light2`) REFERENCES `light` (`Light_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Home_ID`) REFERENCES `home` (`Home_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
