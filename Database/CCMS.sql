-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2021 at 11:40 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'farzam', 'admin', 'admin');

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
  `ground_owner_num` varchar(11) NOT NULL,
  `rent_day` varchar(5) DEFAULT NULL,
  `rent_night` varchar(5) DEFAULT NULL,
  `Day` int(11) NOT NULL,
  `Night` int(11) NOT NULL,
  `available` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grounds`
--

INSERT INTO `grounds` (`ground_code`, `ground_name`, `ground_des`, `club_code`, `ground_owner`, `ground_owner_num`, `rent_day`, `rent_night`, `Day`, `Night`, `available`, `status`) VALUES
(19, 'fourth', 'asdasdasd', 68, 'asdasdas', '878978789', 'Yes', 'Yes', 3000, 8000, 'No', 'OFF'),
(21, 'Sixth', 'asdasdasd', 68, 'asdasdas', '878978789', 'Yes', 'Yes', 3000, 10000, 'No', 'OFF'),
(23, 'first', 'asdasd', 68, 'asdasd', '654464', 'Yes', 'Yes', 4500, 6500, 'No', 'ON'),
(24, 'Eighteen', 'This is the bestest ground in malir cantt', 70, 'Asghar', '03322667306', 'Yes', 'Yes', 1000, 6000, 'Yes', 'OFF'),
(25, 'Twenty', 'tweny ground description', 71, 'Khizar', '56456464654', 'Yes', 'No', 1500, 5000, 'Yes', 'ON'),
(26, 'Ground Demo', 'ground description', 71, 'Asghar', '03322667306', 'Yes', 'Yes', 2500, 4000, 'No', 'OFF');

-- --------------------------------------------------------

--
-- Table structure for table `ground_booking`
--

CREATE TABLE `ground_booking` (
  `id` int(11) NOT NULL,
  `ground_code` int(11) NOT NULL,
  `member_code` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `Day` varchar(15) DEFAULT NULL,
  `Night` varchar(15) DEFAULT NULL,
  `payment_mode` varchar(25) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `decision` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ground_booking`
--

INSERT INTO `ground_booking` (`id`, `ground_code`, `member_code`, `booking_date`, `Day`, `Night`, `payment_mode`, `amount_paid`, `decision`) VALUES
(10, 23, 11, '2020-07-19', 'Yes', 'No', 'Jaaz Cash', 4500, 'Confirmed'),
(12, 19, 11, '2020-07-21', 'Yes', 'Yes', 'Jaaz Cash', 11000, 'Confirmed'),
(13, 21, 11, '2020-07-21', 'No', 'Yes', 'Easy Paisa', 10000, 'Confirmed'),
(14, 21, 11, '2020-07-22', 'Yes', 'No', 'Easy Paisa', 3000, 'Confirmed'),
(15, 19, 11, '2020-07-22', 'Yes', 'Yes', 'Jaaz Cash', 11000, 'Confirmed'),
(17, 24, 12, '2020-07-23', 'Yes', 'No', 'Jaaz Cash', 1000, 'Confirmed'),
(20, 24, 11, '2020-07-17', 'No', 'Yes', 'Jaaz Cash', 4000, 'Confirmed'),
(21, 26, 11, '2020-07-18', 'Yes', 'No', 'Easy Paisa', 2500, 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `notice` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `admin_id`, `notice`) VALUES
(1, 1, 'We are about to launch a massive shaadi offer');

-- --------------------------------------------------------

--
-- Table structure for table `register_club`
--

CREATE TABLE `register_club` (
  `club_code` int(11) NOT NULL,
  `club_name` varchar(150) NOT NULL,
  `club_des` varchar(250) NOT NULL,
  `joining_date` date NOT NULL,
  `club_president` varchar(50) NOT NULL,
  `club_president_num` varchar(150) NOT NULL,
  `club_secretary` varchar(50) NOT NULL,
  `club_secretary_num` varchar(150) NOT NULL,
  `relation_with_club` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_club`
--

INSERT INTO `register_club` (`club_code`, `club_name`, `club_des`, `joining_date`, `club_president`, `club_president_num`, `club_secretary`, `club_secretary_num`, `relation_with_club`) VALUES
(68, 'narcosta', 'Club is very good in nature. it will not harm you', '2020-06-08', 'ali', '900078610', 'saleena', '555451168', 'Owner'),
(69, 'Archilie', 'very long in size', '2020-07-23', 'Shafeeq', '0321289655', 'Shahrukh', '02135584866', 'secretary'),
(70, 'GOT', 'usama club description', '2020-07-22', 'basit', '5644564646546', 'saleena', '489446434354', 'President'),
(71, 'North', 'North club description', '2020-07-30', 'B', '45464654564', 'asdasd', '6546454', 'secretary');

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
(11, 'Ali', '2020-12-31', '0354645469', '12222112', '425510115143', 'block 8 avenue'),
(12, 'Usama', '2020-07-24', '090078601', '4522202115', '4210112378666', 'shalimaar bhaag / 6th floor /Apartment');

-- --------------------------------------------------------

--
-- Table structure for table `signin_club`
--

CREATE TABLE `signin_club` (
  `club_code` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin_club`
--

INSERT INTO `signin_club` (`club_code`, `username`, `password`, `status`) VALUES
(68, 'b', 'b', 'ON'),
(69, 'club', 'club', 'ON'),
(70, 'man', 'man', 'ON'),
(71, 'north', 'north', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `signin_member`
--

CREATE TABLE `signin_member` (
  `member_code` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin_member`
--

INSERT INTO `signin_member` (`member_code`, `username`, `password`, `status`) VALUES
(11, 'ali', 'ali', 'ON'),
(12, 'usama', 'usama', 'ON');

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
  `eligible_criteria` varchar(150) DEFAULT NULL,
  `fees` int(7) NOT NULL,
  `coach_name` varchar(100) NOT NULL,
  `coach_name2` varchar(150) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_batch`
--

INSERT INTO `training_batch` (`batch_code`, `batch_name`, `batch_des`, `club_code`, `start_date`, `end_date`, `member_limit`, `eligible_criteria`, `fees`, `coach_name`, `coach_name2`, `status`) VALUES
(1, 'winter camp', 'abcd', 68, '2020-06-27', '2020-06-30', 40, 'a', 6300, 'Akmal', 'shabbir', 'EXPIRE'),
(2, 'summer camp', 'Boys lets get this thing going', 68, '2020-07-15', '2020-07-25', 38, 'b', 63430, 'bakmal', 'shakmal', 'EXPIRE'),
(3, 'Cold camp', 'This camp can pissed ya off', 70, '2020-07-15', '2020-07-16', 15, 'Anyone with 2 legs', 5000, 'Sallo bhai', '', 'ACTIVE'),
(4, 'North batch', 'north batch description', 71, '2020-07-15', '2020-07-24', 50, 'criteria', 6000, 'Ali', '', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `training_register`
--

CREATE TABLE `training_register` (
  `id` int(11) NOT NULL,
  `batch_code` int(11) NOT NULL,
  `member_code` int(11) NOT NULL,
  `fees_paid` varchar(15) NOT NULL,
  `payment_mode` varchar(15) NOT NULL,
  `available_seats` int(11) NOT NULL,
  `register_seats` int(11) NOT NULL,
  `confirmation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_register`
--

INSERT INTO `training_register` (`id`, `batch_code`, `member_code`, `fees_paid`, `payment_mode`, `available_seats`, `register_seats`, `confirmation`) VALUES
(65, 1, 11, '6300', 'Jaaz Cash', 40, 1, 'Confirmed'),
(66, 4, 11, '6000', 'Jaaz Cash', 50, 1, 'Confirmed'),
(67, 2, 11, '63430', 'Easy Paisa', 38, 1, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `ground_code` (`ground_code`),
  ADD KEY `member_code` (`member_code`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `register_club`
--
ALTER TABLE `register_club`
  ADD PRIMARY KEY (`club_code`);

--
-- Indexes for table `register_member`
--
ALTER TABLE `register_member`
  ADD PRIMARY KEY (`member_code`),
  ADD UNIQUE KEY `member_cnic` (`member_cnic`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `batch_code` (`batch_code`),
  ADD KEY `member_code` (`member_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grounds`
--
ALTER TABLE `grounds`
  MODIFY `ground_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `ground_booking`
--
ALTER TABLE `ground_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_club`
--
ALTER TABLE `register_club`
  MODIFY `club_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `register_member`
--
ALTER TABLE `register_member`
  MODIFY `member_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `training_batch`
--
ALTER TABLE `training_batch`
  MODIFY `batch_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `training_register`
--
ALTER TABLE `training_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ground_booking`
--
ALTER TABLE `ground_booking`
  ADD CONSTRAINT `ground_booking_ibfk_1` FOREIGN KEY (`ground_code`) REFERENCES `grounds` (`ground_code`),
  ADD CONSTRAINT `ground_booking_ibfk_2` FOREIGN KEY (`member_code`) REFERENCES `register_member` (`member_code`);

--
-- Constraints for table `notices`
--
ALTER TABLE `notices`
  ADD CONSTRAINT `notices_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

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
