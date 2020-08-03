-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 09:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gissyxyz_bookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookingid` int(11) NOT NULL,
  `freelancerid` int(11) NOT NULL,
  `freelancer_firstname` varchar(255) NOT NULL,
  `freelancer_lastname` varchar(255) NOT NULL,
  `customer_firstname` varchar(255) NOT NULL,
  `customer_lastname` varchar(255) NOT NULL,
  `servicename` varchar(255) NOT NULL,
  `bookingslot` varchar(255) NOT NULL,
  `bookingday` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bookingid`, `freelancerid`, `freelancer_firstname`, `freelancer_lastname`, `customer_firstname`, `customer_lastname`, `servicename`, `bookingslot`, `bookingday`, `timestamp`) VALUES
(4, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:00', '2020-07-27', '2020-07-27 17:18:32'),
(5, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:05', '2020-07-27', '2020-07-27 17:20:43'),
(6, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:10', '2020-07-27', '2020-07-27 17:25:42'),
(7, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:15', '2020-07-27', '2020-07-27 17:28:27'),
(8, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:50', '2020-07-27', '2020-07-27 17:33:47'),
(9, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:55', '2020-07-27', '2020-07-27 17:37:25'),
(10, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:30', '2020-07-27', '2020-07-27 17:41:52'),
(11, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '16:50', '2020-07-27', '2020-07-27 17:43:51'),
(12, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '16:45', '2020-07-27', '2020-07-27 17:45:40'),
(13, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '16:55', '2020-07-27', '2020-07-27 17:48:56'),
(14, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '16:05', '2020-07-27', '2020-07-27 17:49:56'),
(15, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:25', '2020-07-27', '2020-07-27 17:51:34'),
(16, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '15:15', '2020-07-27', '2020-07-27 18:03:54'),
(17, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '16:40', '2020-07-27', '2020-07-27 18:05:26'),
(18, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '13:15', '2020-07-27', '2020-07-27 18:09:29'),
(19, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:00', '0000-00-00', '2020-07-27 21:03:19'),
(20, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:05', '0000-00-00', '2020-07-27 21:05:52'),
(21, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:10', '0000-00-00', '2020-07-27 21:12:37'),
(22, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:15', '0000-00-00', '2020-07-27 21:22:27'),
(23, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:15', '2020-07-28', '2020-07-27 21:25:08'),
(24, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '16:50', '2020-07-29', '2020-07-27 21:29:14'),
(25, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:05', '2020-08-01', '2020-07-27 21:31:41'),
(26, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:10', '2020-08-01', '2020-07-27 21:32:16'),
(27, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '11:10', '2020-07-27', '2020-07-27 21:49:11'),
(28, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '10:10', '2020-08-01', '2020-07-27 21:53:57'),
(29, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:00', '2020-08-01', '2020-07-27 21:55:45'),
(30, 5, 'somefirstnameb', 'somelastnameb', 'somefirstname', 'somelastname', '', '09:05', '2020-07-28', '2020-07-27 22:04:58'),
(31, 6, 'somefirstnamec', 'somelastnamec', 'somefirstname', 'somelastname', '', '09:05', '2020-07-28', '2020-07-27 22:06:18'),
(32, 6, 'somefirstnamec', 'somelastnamec', 'somefirstname', 'somelastname', '', '09:10', '2020-07-29', '2020-07-27 22:08:54'),
(33, 6, 'somefirstnamec', 'somelastnamec', 'somefirstname', 'somelastname', '', '09:15', '2020-07-28', '2020-07-27 23:13:31'),
(34, 6, 'somefirstnamec', 'somelastnamec', 'somefirstname', 'somelastname', '', '09:10', '2020-07-28', '2020-07-27 23:14:40'),
(35, 6, 'somefirstnamec', 'somelastnamec', 'somefirstname', 'somelastname', '', '09:00', '2020-07-28', '2020-07-27 23:14:48'),
(36, 6, 'somefirstnamec', 'somelastnamec', 'somefirstname', 'somelastname', '', '09:05', '2020-07-30', '2020-07-27 23:15:51'),
(40, 7, 'newfreelancer', 'newfreelancer', 'somefirstname', 'somelastname', '', '09:00', '2020-07-28', '2020-07-27 23:19:21'),
(41, 7, 'newfreelancer', 'newfreelancer', 'somefirstname', 'somelastname', 'Nails', '09:00', '2020-07-29', '2020-07-27 23:27:26'),
(42, 5, 'somefirstnameb', 'somelastnameb', 'ddd', 'ddd', 'Barber', '09:05', '2020-07-29', '2020-07-27 23:43:14'),
(43, 7, 'newfreelancer', 'newfreelancer', 'somefirstname', 'somelastname', 'Nails', '09:05', '2020-07-30', '2020-07-27 23:46:22'),
(44, 7, 'newfreelancer', 'newfreelancer', 'ppp', 'ppp', 'Nails', '09:05', '2020-07-29', '2020-07-28 00:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(11) NOT NULL,
  `customer_firstname` varchar(255) NOT NULL,
  `customer_lastname` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `customer_firstname`, `customer_lastname`, `customer_email`, `password`, `timestamp`) VALUES
(17, 'somefirstname', 'somelastname', 'a', 'somepassword', '2020-07-27 17:07:29'),
(18, 'ddd', 'ddd', 'ddd', 'somepassword', '2020-07-27 23:42:53'),
(19, 'ppp', 'ppp', 'ppp', 'somepassword', '2020-07-28 00:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `favs`
--

CREATE TABLE `favs` (
  `favid` int(11) NOT NULL,
  `customer_firstname` varchar(255) NOT NULL,
  `customer_lastname` varchar(255) NOT NULL,
  `freelancer_firstname` varchar(255) NOT NULL,
  `freelancer_lastname` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `freelancers`
--

CREATE TABLE `freelancers` (
  `freelancerid` int(11) NOT NULL,
  `freelancer_firstname` varchar(255) NOT NULL,
  `freelancer_lastname` varchar(255) NOT NULL,
  `freelancer_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `servicetimemins` int(11) NOT NULL,
  `serviceprice` decimal(10,0) NOT NULL,
  `location` text DEFAULT NULL,
  `aboutme` longtext DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelancers`
--

INSERT INTO `freelancers` (`freelancerid`, `freelancer_firstname`, `freelancer_lastname`, `freelancer_email`, `password`, `service`, `servicetimemins`, `serviceprice`, `location`, `aboutme`, `timestamp`) VALUES
(5, 'somefirstnameb', 'somelastnameb', 'b', 'somepassword', 'Barber', 7, '5', 'fdsfdsffbcvbcvbvcbvcbcvb', 'ddsfdsvdfsdfdsfdsfccvbcvbvcbvcbvcbcv', '2020-07-27 17:10:36'),
(6, 'somefirstnamec', 'somelastnamec', 'c', 'somepassword', 'Eyelashes', 5, '5', '', '', '2020-07-27 22:05:30'),
(7, 'newfreelancer', 'newfreelancer', 'xxx', 'somepassword', 'Nails', 10, '10', 'somewhere', 'nails', '2020-07-27 23:16:16'),
(8, 'xxx', 'xxx', 'xxx', 'somepassword', '', 0, '0', NULL, NULL, '2020-07-27 23:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `freelancerid` int(11) NOT NULL,
  `linkid` int(11) NOT NULL,
  `freelancer_firstname` varchar(255) NOT NULL,
  `freelancer_lastname` varchar(255) NOT NULL,
  `link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`freelancerid`, `linkid`, `freelancer_firstname`, `freelancer_lastname`, `link`) VALUES
(5, 28, '', '', 'http://google.com'),
(7, 30, '', '', 'http://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceid` int(11) NOT NULL,
  `servicename` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceid`, `servicename`, `timestamp`) VALUES
(1, 'Hairdresser', '2020-07-25 13:36:29'),
(2, 'Barber', '2020-07-25 13:36:29'),
(3, 'Eyelashes', '2020-07-25 13:36:29'),
(4, 'Nails', '2020-07-25 13:36:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `favs`
--
ALTER TABLE `favs`
  ADD PRIMARY KEY (`favid`);

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`freelancerid`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`linkid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `favs`
--
ALTER TABLE `favs`
  MODIFY `favid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `freelancerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `linkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
