-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 09:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ammar`
--

-- --------------------------------------------------------

--
-- Table structure for table `pdo_users`
--

CREATE TABLE `pdo_users` (
  `userId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `registrationTime` datetime NOT NULL DEFAULT current_timestamp(),
  `userImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pdo_users`
--

INSERT INTO `pdo_users` (`userId`, `username`, `email`, `password`, `city`, `registrationTime`, `userImage`) VALUES
(30, 'hammad 1234', 'khanmuavia386@gmail.com', '123123', 'karachi', '2024-11-14 11:58:46', '6735b0eab2a62.jpg'),
(33, 'huzaifa 23', 'azeemsiddiqui5oct@gmail.com', '4234', 'karachi', '2024-11-14 13:10:56', '6735b0ce8c9da.png'),
(34, 'zainn 123', 'azeemsiddiqui5oct@gmail.com', '21121', 'karachi', '2024-11-14 13:12:40', '6735b1318dca4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdo_users`
--
ALTER TABLE `pdo_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdo_users`
--
ALTER TABLE `pdo_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
