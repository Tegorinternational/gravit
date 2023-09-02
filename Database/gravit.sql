-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2023 at 05:19 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gravit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Dob` varchar(20) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `State` text NOT NULL,
  `City` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `Email`, `Dob`, `Age`, `Mobile`, `Password`, `Country`, `State`, `City`) VALUES
(2, 'Arduino Uno', 'sparrowex72@gmail.com', '2023-09-18', '0Y,0M', '8889865223', 'sparrow', 'In', 'Madhya Pradesh', 'Gwalior');

-- --------------------------------------------------------

--
-- Table structure for table `userMessages`
--

CREATE TABLE `userMessages` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userMessages`
--

INSERT INTO `userMessages` (`id`, `name`, `email`, `message`) VALUES
(1, 'Rurendra Tegor', 'rute.frontend@gmail.com', 'Hello!'),
(6, 'Ashish Taigor', 'ashishtaigor861@gmail.com', 'Good morning!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Dob` varchar(20) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Dob`, `Age`, `Mobile`, `Password`, `Country`, `State`, `City`) VALUES
(1, 'Ashish Taigor', 'ashishtaigor861@gmail.com', '2001-04-06', '22Y,5M', 8435666512, '12345', 'In', 'Madhya Pradesh', 'Gwalior');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userMessages`
--
ALTER TABLE `userMessages`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userMessages`
--
ALTER TABLE `userMessages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
