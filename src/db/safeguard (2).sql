-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 11:36 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safeguard`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(20) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `Comment` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paymento`
--

CREATE TABLE `paymento` (
  `Full_Name` varchar(100) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `Card_Number` int(10) NOT NULL,
  `Payment_Amount` float NOT NULL,
  `Payment_Reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymento`
--

INSERT INTO `paymento` (`Full_Name`, `E_mail`, `Card_Number`, `Payment_Amount`, `Payment_Reason`) VALUES
('Dilini Navodya', 'dnavodya99@gmail.com', 1234567890, 6151.25, 'fdhhgy'),
('Dilini Navodya', 'dnavodya99@gmail.com', 1234567890, 6151.25, 'fdhhgy'),
('Dilini Navodya', 'dnavodya99@gmail.com', 1234567890, 6151.25, 'ssss'),
('Dilini Navodya', 'dnavodya99@gmail.com', 1234567890, 6151.25, 'ssss'),
('Chathuraka Srimal', 'lionelkandakkulama@gmail.com', 1234567890, 892.25, 'ghf'),
('dfdsf', 'dnavodya99@gmail.com', 1234567890, 6151.25, 'dc'),
('Chathuraka Srimal', 'dnavodya99@gmail.com', 1234567890, 892.25, 'asxas'),
('Chathuraka Srimal', 'dnavodya99@gmail.com', 1234567890, 892.25, 'asxas'),
('Chathuraka Srimal', 'dnavodya99@gmail.com', 1234567890, 892.25, 'asxas'),
('Chathuraka Srimal', 'dnavodya99@gmail.com', 1234567890, 892.25, 'asxas'),
('Chathuraka Srimal', 'dnavodya99@gmail.com', 1234567890, 892.25, 'asxas'),
('shamod', 'sha@w.lk', 2147483647, 8576.32, 'dsfrsf'),
('shamod', 'sha@w.lk', 2147483647, 8576.32, 'dsfrsf'),
('hello', 'it20206550@my.sliit.lk', 2147483647, 85.65, 'feafefd'),
('Chathuraka Srimal', 'dnavodya99@gmail.com', 2147483647, 892.25, 'dd'),
('Chathuraka Srimal', 'dnavodya99@gmail.com', 2147483647, 6151.25, 'rthrth'),
('dfdsf', 'lionelkandakkulama@gmail.com', 2147483647, 892.25, 'acsfasf'),
('shamod R', 'shr@w.com', 852197645, 8576.32, 'wedwefwe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
