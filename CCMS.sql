-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2020 at 08:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CCMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `grounds`
--

CREATE TABLE `grounds` (
  `ground_code` int(11) NOT NULL,
  `ground_name` varchar(100) NOT NULL,
  `ground_des` varchar(250) NOT NULL,
  `club_code` int(11) NOT NULL,
  `ground_owner` varchar(50) NOT NULL,
  `rent_day` tinyint(1) NOT NULL,
  `rent_night` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ground_booking`
--

CREATE TABLE `ground_booking` (
  `ground_code` int(11) NOT NULL,
  `member_code` int(11) NOT NULL,
  `booking_person` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_shift` varchar(5) NOT NULL,
  `booking_person_contact` int(11) NOT NULL,
  `payment_mode` varchar(25) NOT NULL,
  `payment_status` tinyint(1) NOT NULL,
  `club_decision` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register_club`
--

CREATE TABLE `register_club` (
  `club_code` int(11) NOT NULL,
  `club_name` varchar(150) NOT NULL,
  `club_des` varchar(250) NOT NULL,
  `club_built_year` date NOT NULL,
  `club_president` varchar(50) NOT NULL,
  `club_president_num` int(11) NOT NULL,
  `club_vice_president` varchar(50) NOT NULL,
  `club_secretary` varchar(50) NOT NULL,
  `club_secretary_num` int(11) NOT NULL,
  `club_treasurer` varchar(50) NOT NULL,
  `club_management` varchar(50) NOT NULL,
  `relation_with_club` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_club`
--

INSERT INTO `register_club` (`club_code`, `club_name`, `club_des`, `club_built_year`, `club_president`, `club_president_num`, `club_vice_president`, `club_secretary`, `club_secretary_num`, `club_treasurer`, `club_management`, `relation_with_club`) VALUES
(68, 'narcosta', 'very long in size', '2020-06-08', 'ali', 5555555, 'aslam', 'saleena', 78787878, 'basit', 'gomez', 'secretary');

-- --------------------------------------------------------

--
-- Table structure for table `register_member`
--

CREATE TABLE `register_member` (
  `member_code` int(11) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `joining_date` date NOT NULL,
  `member_cont1` varchar(11) NOT NULL,
  `member_cont2` varchar(11) DEFAULT NULL,
  `member_cnic` varchar(13) NOT NULL,
  `member_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_member`
--

INSERT INTO `register_member` (`member_code`, `member_name`, `joining_date`, `member_cont1`, `member_cont2`, `member_cnic`, `member_address`) VALUES
(9, 'Aslam', '2020-06-04', '090078601', '', '421011231', 'Casdas'),
(10, 'Aslam', '2020-06-04', '090078601', '', '421011231', 'Casdas');

-- --------------------------------------------------------

--
-- Table structure for table `signin_club`
--

CREATE TABLE `signin_club` (
  `club_code` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin_club`
--

INSERT INTO `signin_club` (`club_code`, `username`, `password`) VALUES
(68, 'bores', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `signin_member`
--

CREATE TABLE `signin_member` (
  `member_code` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin_member`
--

INSERT INTO `signin_member` (`member_code`, `username`, `password`) VALUES
(9, 'usernam', 'a'),
(10, 'username', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `training_batch`
--

CREATE TABLE `training_batch` (
  `batch_code` int(11) NOT NULL,
  `batch_name` varchar(50) NOT NULL,
  `batch_des` varchar(250) NOT NULL,
  `club_code` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `member_limit` int(3) NOT NULL,
  `eligible_criteria` varchar(150) NOT NULL,
  `fees` int(7) NOT NULL,
  `coach_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `training_register`
--

CREATE TABLE `training_register` (
  `batch_code` int(11) NOT NULL,
  `member_code` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grounds`
--
ALTER TABLE `grounds`
  ADD PRIMARY KEY (`ground_code`),
  ADD KEY `club_code` (`club_code`);

--
-- Indexes for table `ground_booking`
--
ALTER TABLE `ground_booking`
  ADD KEY `ground_code` (`ground_code`),
  ADD KEY `member_code` (`member_code`);

--
-- Indexes for table `register_club`
--
ALTER TABLE `register_club`
  ADD PRIMARY KEY (`club_code`);

--
-- Indexes for table `register_member`
--
ALTER TABLE `register_member`
  ADD PRIMARY KEY (`member_code`);

--
-- Indexes for table `signin_club`
--
ALTER TABLE `signin_club`
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `club_code` (`club_code`);

--
-- Indexes for table `signin_member`
--
ALTER TABLE `signin_member`
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `member_code` (`member_code`);

--
-- Indexes for table `training_batch`
--
ALTER TABLE `training_batch`
  ADD PRIMARY KEY (`batch_code`),
  ADD KEY `club_code` (`club_code`);

--
-- Indexes for table `training_register`
--
ALTER TABLE `training_register`
  ADD KEY `batch_code` (`batch_code`),
  ADD KEY `member_code` (`member_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grounds`
--
ALTER TABLE `grounds`
  MODIFY `ground_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_club`
--
ALTER TABLE `register_club`
  MODIFY `club_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `register_member`
--
ALTER TABLE `register_member`
  MODIFY `member_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `training_batch`
--
ALTER TABLE `training_batch`
  MODIFY `batch_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grounds`
--
ALTER TABLE `grounds`
  ADD CONSTRAINT `grounds_ibfk_1` FOREIGN KEY (`club_code`) REFERENCES `register_club` (`club_code`);

--
-- Constraints for table `ground_booking`
--
ALTER TABLE `ground_booking`
  ADD CONSTRAINT `ground_booking_ibfk_1` FOREIGN KEY (`ground_code`) REFERENCES `grounds` (`ground_code`),
  ADD CONSTRAINT `ground_booking_ibfk_2` FOREIGN KEY (`member_code`) REFERENCES `register_member` (`member_code`);

--
-- Constraints for table `signin_club`
--
ALTER TABLE `signin_club`
  ADD CONSTRAINT `signin_club_ibfk_1` FOREIGN KEY (`club_code`) REFERENCES `register_club` (`club_code`);

--
-- Constraints for table `signin_member`
--
ALTER TABLE `signin_member`
  ADD CONSTRAINT `signin_member_ibfk_1` FOREIGN KEY (`member_code`) REFERENCES `register_member` (`member_code`);

--
-- Constraints for table `training_batch`
--
ALTER TABLE `training_batch`
  ADD CONSTRAINT `training_batch_ibfk_1` FOREIGN KEY (`club_code`) REFERENCES `register_club` (`club_code`);

--
-- Constraints for table `training_register`
--
ALTER TABLE `training_register`
  ADD CONSTRAINT `training_register_ibfk_1` FOREIGN KEY (`batch_code`) REFERENCES `training_batch` (`batch_code`),
  ADD CONSTRAINT `training_register_ibfk_2` FOREIGN KEY (`member_code`) REFERENCES `register_member` (`member_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
