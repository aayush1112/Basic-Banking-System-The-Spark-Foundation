-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 07:02 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `sendername` varchar(50) NOT NULL,
  `receivername` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `sendername`, `receivername`, `amount`, `time`) VALUES
(1, 'Aayush', 'Utkarsh', 100, '2021-06-11 21:19:37.000000'),
(2, 'Dhruvesh', 'Jainam', 300, '2021-06-11 21:23:18.000000'),
(3, 'Utkarsh', 'Dev', 500, '2021-06-11 21:38:31.000000'),
(4, 'Aayush', 'Jainam', 500, '2021-06-11 21:47:34.000000'),
(5, 'yash', 'Aayush', 500, '2021-06-12 10:08:39.000000'),
(6, 'Jash', 'Deep', 500, '2021-06-12 11:04:50.000000'),
(7, 'Parin', 'Jainam', 200, '2021-06-12 13:34:22.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `name`, `email`, `amount`) VALUES
(1, 'Aayush', 'aayush@gmail.com', 1190),
(2, 'Deep', 'deep@gmail.com', 1290),
(3, 'Jash', 'jash@gmail.com', 1200),
(4, 'Yash', 'yash@gmail.com', 450),
(5, 'Jainam', 'jainam@gmail.com', 2000),
(6, 'Dev', 'dev@gmail.com', 2000),
(7, 'Dhruvesh', 'dhruvesh@gmail.com', 200),
(8, 'Parin', 'parin@gmail.com', 850),
(9, 'Utkarsh', 'Utkarsh@gmail.com', 620),
(10, 'Rushi', 'rushi@gmail.com', 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
