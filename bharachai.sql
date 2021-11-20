-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 02:33 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bharachai`
--

-- --------------------------------------------------------

--
-- Table structure for table `building`
--

CREATE TABLE `building` (
  `buildingId` int(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `city` varchar(10) NOT NULL,
  `slotId` varchar(3) NOT NULL,
  `price` int(5) NOT NULL,
  `phone` int(11) NOT NULL,
  `maps` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `building`
--

INSERT INTO `building` (`buildingId`, `email`, `location`, `city`, `slotId`, `price`, `phone`, `maps`) VALUES
(4, 'shohagrana64@gmail.com', 'uttara sec 11 house 12', 'Dhaka', 'b2', 9949, 1675738664, 'https://www.google.com/maps/search/uttarasec11house12'),
(5, 'sadaf@gmail.com', 'brac university', 'Dhaka', 'a2', 9494, 1521433553, 'https://www.google.com/maps/search/bracuniversity'),
(6, 'mumu@gmail.com', 'khilgaon, taltola', 'dhaka', 'a1', 5000, 1676769036, 'https://www.google.com/maps/search/khilgaon+taltola'),
(7, 'akash@gmail.com', 'bashundhara market', 'Dhaka', 'a1', 6400, 1732944604, 'https://www.google.com/maps/search/bashundharamarket'),
(8, 'alam@gmail.com', 'house 20, road 20, sector 13, Uttara, Dhaka', 'Dhaka', 'c5', 4500, 1946370889, 'https://www.google.com/maps/search/house20+road20+sector13+Uttara+Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mobileNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `email`, `pass`, `name`, `mobileNo`) VALUES
(1, 'shohagrana64@gmail.com', '12345', 'Shohag Rana', 1675738664),
(2, 'admin@gmail.com', '12345', 'tanjuma', 175738664),
(3, 'shabadalabada@gmail.com', '34134', 'ARABA', 14646464),
(5, 'haga@gmail.com', 'whatpass', 'alam', 1676769036),
(6, 'rfg@fg', 'fgh', 'thr', 2345346);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `ownerId` int(50) NOT NULL,
  `licenseNo` varchar(10) NOT NULL,
  `vehicleType` varchar(10) NOT NULL,
  `parkingLocation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`ownerId`, `licenseNo`, `vehicleType`, `parkingLocation`) VALUES
(1, 'ABC123', 'car', 'uttara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`buildingId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`licenseNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `buildingId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
