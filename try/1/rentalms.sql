-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2020 at 09:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalms`
--

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(11) NOT NULL,
  `house_number` varchar(20) NOT NULL,
  `features` varchar(250) NOT NULL,
  `status` varchar(20) NOT NULL,
  `datentime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `house_number`, `features`, `status`, `datentime`) VALUES
(1, 'A1', '3 Bedroom , Bathroom And Kitchen', 'Occupied', '2020-06-05 11:14:10'),
(2, 'A2', '2 Bedroom , Bathroom And Kitchen', 'Occupied', '2020-06-11 10:55:49'),
(3, 'A3', '1 Bedroom, Bathroom And Kitchen', 'Occupied', '2020-06-11 11:34:17'),
(4, 'A4', '1 Bedroom', 'Occupied', '2020-06-11 12:08:34'),
(5, 'A5', '4 Bedroom And 1 Kitchen', 'Occupied', '2020-06-11 13:16:57'),
(6, 'A6', '2 Bedroom , 1 Kitchen', 'Occupied', '2020-06-11 20:08:30'),
(7, 'B1', '3 Bedroom , 2 Bathrooms , Swimming Pool , Car Park', 'Occupied', '2020-06-24 22:09:17'),
(8, 'B2', '6 Bedrooms , 3 Bathrooms , 2 Kitchen, Carpark For 3 Cars', 'Occupied', '2020-06-26 20:41:30'),
(9, 'B3', '4 Bedroom , 1 Kitchen , 2 Bathrooms And Ample Parking Space', 'Vacant', '2020-06-26 20:48:54'),
(10, 'A7', '1 Bedroom , 1 Kitchen', 'Occupied', '2020-06-26 20:55:51'),
(11, 'A8', '1 Bedroom , 1 Kitchen', 'Occupied', '2020-06-27 10:55:36'),
(15, 'A9', '2 Bedroom , 1 Kitchen, 1 Bathroom', 'Vacant', '2020-06-27 12:00:06'),
(17, 'A10', '1 Bedroom , 1 Bathroom', 'Vacant', '2020-06-27 12:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `house_number` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `month` varchar(50) NOT NULL,
  `expected_amount` int(11) NOT NULL,
  `paid_amount` int(11) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `datentime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `house_number`, `year`, `month`, `expected_amount`, `paid_amount`, `comments`, `datentime`) VALUES
(1, 'A1', 2020, 'May', 10000, 10000, 'Okay', '2020-06-14 15:33:23'),
(2, 'A2', 2020, 'June', 4000, 3500, 'Will pay before 29 of this month', '2020-06-24 17:38:01'),
(3, 'A3', 2020, 'June', 4000, 4000, 'Okay', '2020-06-24 18:11:08'),
(4, 'A4', 2020, 'June', 5000, 3000, 'Requested to be added to the next month', '2020-06-24 18:13:47'),
(5, 'B1', 2020, 'June', 30000, 30000, '', '2020-06-24 20:38:56'),
(6, 'A10', 2020, 'January', 7500, 7500, 'Good', '2020-06-29 10:59:12'),
(7, 'B1', 2020, 'July', 15000, 10000, '', '2020-06-29 11:03:30'),
(8, 'B2', 2020, 'June', 20000, 10000, '', '2020-06-29 11:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

CREATE TABLE `tenants` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `national_id` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `registration_date` varchar(50) NOT NULL,
  `house_number` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `datentime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `fullname`, `gender`, `national_id`, `mobile_number`, `email`, `registration_date`, `house_number`, `status`, `datentime`) VALUES
(1, 'Cyrus Nganga', 'Male', '89945684', '0722546568', 'nganga@yahoo.com', '2020-06-14', 'A1', 'Tenant In', '2020-06-14 13:42:08'),
(2, 'Brian Narangi', 'Male', '54846484', '0722698974', 'narangib@yahoo.com', '2020-02-14', 'A2', 'Tenant In', '2020-06-14 13:52:57'),
(3, 'Adah Meda', 'Female', '56848494', '0722369798', 'medaadah@yahoo.com', '2020-06-14', 'A3', 'Tenant In', '2020-06-14 14:05:12'),
(4, 'Nimu Kiarie', 'Female', '68688468', '0722564844', 'nimu77@yahoo.com', '2020-06-25', ' B1', 'Tenant In', '2020-06-24 21:37:46'),
(5, 'Vivianne Osala', 'Female', '84464348', '0722868484', 'vianneosa@gmail.com', '2020-04-27', ' A2', 'Tenant In', '2020-06-27 12:33:05'),
(6, 'Zity Kawira', 'Male', '68484646', '0733548765', 'kawira@yahoo.com', '2020-06-27', ' A4', 'Tenant In', '2020-06-27 15:34:51'),
(7, 'Tom Kendie', 'Male', '54848446', '0722684485', 'tkendie@gmail.com', '2020-06-27', ' A2', 'Tenant In', '2020-06-27 15:45:40'),
(8, 'Cynthaia Makena', 'Female', '68464844', '0722987484', 'makenac@gmail.com', '2020-06-27', ' B2', 'Tenant In', '2020-06-27 15:56:47'),
(9, 'Debbie Lavender', 'Female', '56888484', '0733648449', 'iragosadebbie@gmail.com', '2020-06-27', ' A5', 'Tenant In', '2020-06-27 16:20:27'),
(10, 'Saidimu Sialo', 'Male', '86468464', '0729287272', 'sialo@gmail.com', '2020-06-27', ' A6', 'Tenant In', '2020-06-27 16:30:26'),
(11, 'Rezzoh Morena', 'Male', '24435168', '0719633245', 'morena@gmail.com', '2020-06-27', ' B3', 'Tenant In', '2020-06-27 17:10:10'),
(12, 'Venni Nymoita', 'Female', '46867843', '0724554353', 'nymoita@yahoo.com', '2020-06-27', ' A9', 'Tenant In', '2020-06-27 17:13:50'),
(13, 'James Anjiko', 'Male', '56456464', '0722467366', 'anjiko@gmail.com', '2020-06-27', ' A1', 'Tenant In', '2020-06-27 17:28:26'),
(14, 'Shii Kananu', 'Female', '37837568', '0722231289', 'kananu@gmail.com', '2020-06-27', ' A10', 'Tenant In', '2020-06-27 17:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `signupdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `signupdate`) VALUES
(1, 'admin', 'e3274be5c857fb42ab72d786e281b4b8', '', '2020-06-03 17:29:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenants`
--
ALTER TABLE `tenants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tenants`
--
ALTER TABLE `tenants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
