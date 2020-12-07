-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 07:49 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `firstName`, `lastName`, `email`, `subject`, `message`) VALUES
(0000000001, 'Patricia', 'Namoro', 'maepat456@gmail.com', 'Dear Maria,', 'Hello, I have some concern about our orders.'),
(0000000002, 'Patricia', 'Namoro', 'maepat456@gmail.com', '3r', 'tt34t43t34t43t4t34 vergr3g'),
(0000000000, 'Happy', 'Lucky', 'maepat456@gmail.com', 'Mama', 'rfwfwqgu gqregqugrnqe qrngoirngrq'),
(0000000000, 'Happy', 'Lucky', 'maepat456@gmail.com', 'Mama', 'rfwfwqgu gqregqugrnqe qrngoirngrq'),
(0000000000, 'Patricia', 'Namoro', 'maepat456@gmail.com', 'Dear Maria,', 'wefee bwebfiwebf fwbewuebfwe '),
(0000000000, 'Patricia', 'Namoro', 'maepat456@gmail.com', 'Dear Maria,', 'wefee bwebfiwebf fwbewuebfwe '),
(0000000000, 'Patricia', 'Namoro', 'maepat456@gmail.com', 'Mama', 'rr3vwtbr 5y jyj eyr j4yn dnsyns'),
(0000000000, 'Patricia', 'Namoro', 'maepat456@gmail.com', 'Dear Maria,', 'hgvbibikbb'),
(0000000000, 'Patricia', 'Namoro', 'maepat456@gmail.com', 'Dear Maria,', '4rgrrntwnwrnwt');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationID` int(11) UNSIGNED ZEROFILL NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `typeReservation` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `deliverMethod` varchar(255) NOT NULL,
  `motif` varchar(255) NOT NULL,
  `dateEvent` date NOT NULL,
  `numGuest` int(11) NOT NULL,
  `typePackage` varchar(255) NOT NULL,
  `otherMenus` varchar(5000) NOT NULL,
  `payAmount` double NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `contactNum` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `dateReserve` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationID`, `eventName`, `typeReservation`, `eventLocation`, `deliverMethod`, `motif`, `dateEvent`, `numGuest`, `typePackage`, `otherMenus`, `payAmount`, `fullName`, `contactNum`, `email`, `message`, `dateReserve`) VALUES
(00000000004, 'Patricia Birthday Event', 'Both Catering and Function Room', 'Iriga city', 'For Delivery', 'uityuty', '2020-06-27', 100, 'Package A', 'efafqwafcwwc', 50000, 'Patricia', '09993104115', 'maepat456@gmail.com', '', '2020-06-05 09:29:10'),
(00000000005, 'wvbwebwrbg', 'Function Room', 'Sto. Nino School ', 'For Pick up', '23412323', '2020-06-27', 100, 'Package B', 'rgergrregregergqregerg', 50000, 'Maria', '09993104115', 'maepat456@gmail.com', 'rfererferfergrqegqergqe', '2020-06-05 09:44:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(0000000001, 'Pat', 'maepat456@gmail.com', 'user', '5d41402abc4b2a76b9719d911017c592'),
(0000000002, 'George', 'mae_pat456@yahoo.com', 'user', 'f1290186a5d0b1ceab27f4e77c0c5d68'),
(0000000005, 'lol', 'mae_pat456@yahoo.co', 'user', '68834fdcdff2a84a2844bd794aa9bcdf'),
(0000000006, 'Vod', 'vod@gmail.com', 'admin', '7852341745c93238222a65a910d1dcc5'),
(0000000007, 'Laila', 'laila@gmail.com', 'user', '7852341745c93238222a65a910d1dcc5'),
(0000000008, 'lloydie12345', 'johnlloydnamoro@gmail.com', 'user', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
