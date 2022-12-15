-- phpMyAdmin SQL Dump
-- version 5.0.4deb2+deb11u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2022 at 12:17 AM
-- Server version: 10.5.15-MariaDB-0+deb11u1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soft_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`) VALUES
(1, 'Khu vực 1 - Quận 1'),
(2, 'Khu vực 2 - Quận 1'),
(3, 'Khu vực 3 - Quận 1'),
(4, 'Khu vực 1 - Quận 2'),
(5, 'Khu vực 2 - Quận 2'),
(6, 'Khu vực 2 - Quận 3');

-- --------------------------------------------------------

--
-- Table structure for table `group_mcps`
--

CREATE TABLE `group_mcps` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_mcps`
--

INSERT INTO `group_mcps` (`id`, `name`) VALUES
(1, 'Nhóm MCPs 1'),
(2, 'Nhóm MCPs 2'),
(3, 'Nhóm MCPs 3'),
(4, 'Nhóm MCPs 4'),
(5, 'Nhóm MCPs 5');

-- --------------------------------------------------------

--
-- Table structure for table `mcps`
--

CREATE TABLE `mcps` (
  `id` int(11) NOT NULL,
  `gmcps_id` int(11) NOT NULL,
  `distance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcps`
--

INSERT INTO `mcps` (`id`, `gmcps_id`, `distance`) VALUES
(1, 1, 2.2),
(2, 1, 2.5),
(3, 1, 3.4),
(4, 2, 2.2),
(5, 2, 1.3),
(6, 2, 4.3),
(7, 3, 2.4),
(8, 3, 5.3),
(9, 4, 3.2),
(10, 4, 3.8),
(11, 5, 4.3),
(12, 5, 2.9);

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id`, `time`) VALUES
(1, '6:00 - 8:00'),
(2, '8:00 - 10:00'),
(3, '10:00 - 12:00'),
(4, '12:00 - 14:00'),
(5, '14:00 - 16:00'),
(6, '16:00 - 18:00'),
(7, '18:00 - 20:00');

-- --------------------------------------------------------

--
-- Table structure for table `task_for_collectors`
--

CREATE TABLE `task_for_collectors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `vehicles_id` int(11) NOT NULL,
  `gmcps_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_for_collectors`
--

INSERT INTO `task_for_collectors` (`id`, `user_id`, `shift_id`, `vehicles_id`, `gmcps_id`) VALUES
(1, 6, 3, 2, 1),
(2, 7, 5, 4, 4),
(3, 8, 7, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `task_for_janitors`
--

CREATE TABLE `task_for_janitors` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shift_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_for_janitors`
--

INSERT INTO `task_for_janitors` (`id`, `user_id`, `shift_id`, `area_id`) VALUES
(1, 3, 1, 1),
(2, 3, 4, 3),
(3, 4, 2, 2),
(4, 4, 3, 4),
(5, 5, 5, 5),
(6, 5, 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sex` varchar(2) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `sex`, `phone`, `address`, `role`) VALUES
(1, 'admin', '123456', 'Back Officer 1', 'M', '09xxxxxxxx', 'KTX khu A', 0),
(2, 'admin2', '123456', 'Back Officer 2', 'M', '09xxxxxxxx', 'KTX khu B', 0),
(3, 'kietne', '123456', 'Huynh Tuan Kiet', 'M', '09xxxxxxxx', 'KTX khu B', 1),
(4, 'hungne', '123456', 'Ly Thanh Hung', 'M', '09xxxxxxxx', 'KTX khu A', 1),
(5, 'kiethuynh', '123456', 'Huynh Tuan Kiet', 'M', '0964643875', 'KTX khu A', 1),
(6, 'bune', '123456', 'Bu', 'F', '09xxxxxxxx', 'KTX khu A', 2),
(7, 'bune2', '123456', 'Bu', 'F', '09xxxxxxxx', 'KTX khu B', 2),
(8, 'hungne2', '123456', 'Ly Thanh Hung', 'M', '09xxxxxxxx', 'KTX khu B', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `type`, `status`) VALUES
(1, '3 Tấn', 1),
(2, '5 Tấn', 1),
(3, '5 Tấn', 0),
(4, '5 Tấn', 1),
(5, '10 Tấn', -1),
(6, '3 Tấn', 0),
(7, '5 Tấn', 1),
(8, '10 Tấn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

CREATE TABLE `week` (
  `week_id` int(11) NOT NULL,
  `creator` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `week`
--

INSERT INTO `week` (`week_id`, `creator`, `date`) VALUES
(1, 'Back Officer 1', '2022-12-04'),
(2, 'Back Officer 2', '2022-12-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_mcps`
--
ALTER TABLE `group_mcps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcps`
--
ALTER TABLE `mcps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_for_collectors`
--
ALTER TABLE `task_for_collectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_for_janitors`
--
ALTER TABLE `task_for_janitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `week`
--
ALTER TABLE `week`
  ADD PRIMARY KEY (`week_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `group_mcps`
--
ALTER TABLE `group_mcps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mcps`
--
ALTER TABLE `mcps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `task_for_collectors`
--
ALTER TABLE `task_for_collectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task_for_janitors`
--
ALTER TABLE `task_for_janitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `week`
--
ALTER TABLE `week`
  MODIFY `week_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
