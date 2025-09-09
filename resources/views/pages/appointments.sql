-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2025 at 09:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `appointmentDate` date NOT NULL,
  `appointmentTime` time NOT NULL,
  `department` varchar(100) NOT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `reason` text DEFAULT NULL,
  `status` enum('pending','confirmed','cancelled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `time_changed_by_registrar` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `fullName`, `age`, `phoneNumber`, `email`, `appointmentDate`, `appointmentTime`, `department`, `doctor`, `address`, `reason`, `status`, `created_at`, `time_changed_by_registrar`) VALUES
(1, 3, 'ss', 11, '111', 'sura@gmail.com', '2025-09-13', '16:00:00', 'pediatrics', 'ww', 'qq', 'we', 'pending', '2025-09-05 13:01:33', 1),
(2, 4, 'ssss', 22, '223', 'sura@gmail.com', '2025-09-05', '15:30:00', 'other', 'ww', 'ww', 'ww', 'pending', '2025-09-05 13:19:03', 0),
(5, 5, 'miki', 22, '111', 'miki@gmail.com', '2025-09-07', '16:00:00', 'pediatrics', 'sda', 'ww', 'ww', 'pending', '2025-09-05 18:53:14', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
