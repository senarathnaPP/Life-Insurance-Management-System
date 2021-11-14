-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 06:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifeinsurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `userId` int(11) NOT NULL,
  `fullName` text NOT NULL,
  `phone_no` char(10) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`userId`, `fullName`, `phone_no`, `email`, `address`, `dob`, `password`) VALUES
(12, 'Pavani Senarathne ', '0766583991', 'pavi@gmail.com', 'spring estates,nittabuwa rd,Colombo', '2000-11-18', 'umpps123'),
(15, 'Ishani prasangika', '1324658790', 'ishani@gmail.com', '121/2,\r\nMaldeniya rd,\r\nBalangoda', '2000-02-01', 'ishani123'),
(21, 'Pinidu', '0712839475', 'pini@gmail.com', '131/2,Nittabuwa rd,Weeyangoda', '2010-03-26', 'pini1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`userId`);
ALTER TABLE `userregister` ADD FULLTEXT KEY `fullName` (`fullName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
