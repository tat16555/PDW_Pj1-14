-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2024 at 03:36 AM
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
-- Database: `isd16621n`
--

-- --------------------------------------------------------

--
-- Table structure for table `myguest`
--

CREATE TABLE `myguest` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstanme` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'Noppawut66', 'Khumsap1', 'khumsap1221@gmail.com', '2024-02-07 04:04:18'),
(5, 'อนัน', 'ร้อยเอ็ด', '231231432421@gmail.com', '2024-01-24 08:57:29'),
(6, 'อนัน', 'ร้อยเอ็ด', ' nols,@ua.com', '2024-01-03 04:20:06'),
(11, '31241342', '314123', 'pannatat.b@gmail.com', '2024-02-07 02:46:54'),
(12, '31241342', '314123', 'pannatat.b@gmail.com', '2024-02-07 02:47:19'),
(13, '3324324', '143', 'pannatat.b@gmail.com', '2024-02-07 02:49:52'),
(14, '11111111111111111111', '143', 'pannatat.b@gmail.com', '2024-02-07 02:50:12'),
(15, '11111111111111111111', '143', 'pannatat.b@gmail.com', '2024-02-07 02:51:09'),
(16, '111111111111123123231', '314122', 'pannatat.b@gmail.com', '2024-02-07 02:51:15'),
(17, '111111111111123123231', '314122', 'pannatat.b@gmail.com', '2024-02-07 02:51:18'),
(19, 'sdafsedafcvds999', 'saedwe', 'rq4erqerfwefase@gmail.com', '2024-02-07 02:55:55'),
(20, 'sdafsedafcvds999', 'saedwe', 'rq4erqerfwefase@gmail.com', '2024-02-07 02:56:10'),
(21, 'ewqwq', 'wqewqdw', 'pannatat.b@gmail.com', '2024-02-07 02:56:14'),
(22, 'ewqwq', 'wqewqdw', 'pannatat.b@gmail.com', '2024-02-07 02:56:35'),
(23, 'weqrwewq111', 'ewqrwe', 'pannatat.b@gmail.com', '2024-02-07 02:56:40'),
(24, '3242343fsafesd', 'dwesw', 'pannatat.b@gmail.com', '2024-02-07 02:56:52'),
(26, 'ewdewafewa', 'ดแฟดกหฟกฟ', 'pannatat.b@gmail.com', '2024-02-07 03:47:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Created_at` datetime NOT NULL,
  `Updated_at` datetime NOT NULL,
  `Status` enum('true','false') NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `password`, `Created_at`, `Updated_at`, `Status`) VALUES
(1, 'tat1', 'pannatat.b@gmail.com', '$2y$10$7tvsSrITClaFTEL6p../reRATIhurHBdOzdtk9/BL5EGABcc.wO9e', '2024-02-07 06:01:44', '2024-02-14 05:35:52', 'false'),
(6, 'eragds', '432523@gmail.com', '$2y$10$bfgrLvKanOuXNDMIDE3Ttel7Odh4MU0unt1Q43Lsv4Kw7zRzaXj5.', '2024-02-07 08:09:05', '2024-02-07 08:09:05', 'true'),
(13, 'dsafsd', 'khumsdasasap1221@gmail.com', '$2y$10$EBam/GHYFqO69vx2G11WxePjc9fvpmvR.R6O2djiwVUHz0H7CFMca', '2024-02-14 04:50:50', '2024-02-14 05:14:58', 'true'),
(14, 'weqdefcas23213', 'dscewaewa32523@gmail.com', '$2y$10$.kX2RLxBm4Ezso./2eXbYO8lVDOGOZZDIuZXguAjMhGOEzsCIv2Bq', '2024-02-14 05:22:51', '2024-02-14 05:22:51', 'true'),
(17, 'vDvzdvdsadc dsafcesdcsa', 'pa23333@gmail.com', '$2y$10$dGWnJG8mUbSPThmvWRpv..6Vh.niW.3p5kOD1NNunYABZ3NK.dXFu', '2024-02-14 05:47:27', '2024-02-21 03:32:51', 'true'),
(18, 'yardaegr fdvdzraer', 'sdcjwio2@gmail.com', '$2y$10$6cI.b8vi0EdqULhdRjZXs.UyAsKF6NMWGHKCArJeV4K6maE9pJDei', '2024-02-21 03:32:38', '2024-02-21 03:32:38', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguest`
--
ALTER TABLE `myguest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguest`
--
ALTER TABLE `myguest`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
