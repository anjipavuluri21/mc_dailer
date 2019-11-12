-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 06:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mc_dailer`
--

-- --------------------------------------------------------

--
-- Table structure for table `compaigns`
--

CREATE TABLE `compaigns` (
  `id` int(11) NOT NULL,
  `compaign_name` varchar(200) NOT NULL,
  `discription` varchar(200) NOT NULL,
  `max_leads` varchar(100) NOT NULL,
  `details` varchar(150) NOT NULL,
  `list` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1=>active,2=>inactive',
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compaigns`
--

INSERT INTO `compaigns` (`id`, `compaign_name`, `discription`, `max_leads`, `details`, `list`, `status`, `updated_at`) VALUES
(1, 'anji', 'discription_update', 'kdnflkj', 'asfn', 1, 1, '2019-11-11 16:24:44'),
(2, 'naga', '5555', '123', 'sd', 0, 1, '0000-00-00 00:00:00'),
(3, 'test', 'test_desc', '2', 'NA', 8, 1, '0000-00-00 00:00:00'),
(4, 'sdcsdc', 'zxcsd', 'dsc', 'Dcc', 1, 1, '2019-11-11 04:51:54'),
(5, 'test_anji', 'test_anji', '14', 'na', 1, 2, '2019-11-11 16:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `disposition`
--

CREATE TABLE `disposition` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dispo_name` varchar(150) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `dispo_code` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=>connected,2=>not connected',
  `assign_status` int(11) NOT NULL DEFAULT 1 COMMENT '1: assigned 2:not-assigned',
  `call_back` varchar(10) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disposition`
--

INSERT INTO `disposition` (`id`, `user_id`, `dispo_name`, `discription`, `dispo_code`, `status`, `assign_status`, `call_back`, `comments`, `created_at`, `updated_at`) VALUES
(8, 1, 'anji', '5555', '200', 2, 0, '11-11-2019', '', NULL, NULL),
(9, 1, 'admin_jay_despo', 'something', 'SWR', 1, 0, 'yes', '', NULL, '2019-11-11 20:19:25'),
(10, 1, 'status_test', 'status_test', 'smw', 1, 1, 'yes', 'no comments', '2019-11-25 18:30:00', '2019-11-11 21:36:56');

-- --------------------------------------------------------

--
-- Table structure for table `lead_numbers`
--

CREATE TABLE `lead_numbers` (
  `id` int(11) NOT NULL,
  `list_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lead_numbers`
--

INSERT INTO `lead_numbers` (`id`, `list_id`, `name`, `phone_number`, `comments`, `created_at`, `updated_at`) VALUES
(2, 1, 'jay', '8866133348', '100', '2019-10-24 21:34:11', '2019-11-05 05:59:34'),
(3, 1, 'kuldeep', '8530367456', '2000', '2019-10-24 21:36:48', '2019-11-05 23:09:09'),
(4, 1, 'anji', '985236142', '2000', '2019-11-06 03:13:48', '2019-11-06 03:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `id` int(11) NOT NULL,
  `list_name` varchar(255) NOT NULL,
  `list_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `list_name`, `list_type`, `created_at`, `updated_at`) VALUES
(1, 'Testing', 'List', '2019-10-24 20:43:51', '2019-10-24 20:43:51'),
(4, 'Testing', 'List', '2019-11-09 08:13:03', '2019-11-11 04:38:18'),
(6, 'amm', 'mmm', '2019-11-09 08:13:22', '2019-11-11 04:38:30'),
(8, 'mad', 'admin', '2019-11-09 08:13:41', '2019-11-10 22:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1=> admin 2=> user',
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `comments` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `logo`, `audio`, `mobile_no`, `type`, `is_delete`, `password`, `remember_token`, `designation`, `department`, `gender`, `created_at`, `updated_at`, `comments`, `date`) VALUES
(1, 'Admin', 'admin@gmail.com', '1568202018_layout_1.png', 'Ramuloo-Ramulaa-Song-Ringtone-from-Telugu-Movie-Ala-Vaikunthapurramuloo.mp3', '1234567890', 1, 0, '$2y$10$oKYqgAdOhEAM.z72Yi8ex.755GXlX3N6pWrVF/63xVx1u5qChf4g.', 'ifEfiWkFwCwG0e2xSAmeX0cvnI2zZM8RHHPMDLyZwBdJKyofzQFK5uBcgguG', '', '', 1, NULL, '2019-09-11 06:10:18', NULL, '0000-00-00'),
(4, 'jay', NULL, NULL, 'Ramuloo-Ramulaa-Song-Ringtone-from-Telugu-Movie-Ala-Vaikunthapurramuloo.mp3v', '2147483647', 2, 0, '$2y$10$/Ncs85Ev8NVJnhC52esds.mjjZfLtJMSDbWHcoWgh2200BVAcA6t.', NULL, 'Software Developer', 'IT', 1, '2019-10-23 07:52:49', '2019-10-23 07:52:49', NULL, '0000-00-00'),
(14, 'anji', '1@gmail.com', NULL, 'Ramuloo-Ramulaa-Song-Ringtone-from-Telugu-Movie-Ala-Vaikunthapurramuloo.mp3', '9879859654', 1, 0, '$2y$10$0F/RIYUTwKLOSU1pIS/AoO7wVQAl5UYd3bhLgrC8ddbRTHNOIFTM6', NULL, 'software developer', 'web', 1, '2019-11-07 01:08:51', '2019-11-11 04:14:40', NULL, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compaigns`
--
ALTER TABLE `compaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposition`
--
ALTER TABLE `disposition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_numbers`
--
ALTER TABLE `lead_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
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
-- AUTO_INCREMENT for table `compaigns`
--
ALTER TABLE `compaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `disposition`
--
ALTER TABLE `disposition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lead_numbers`
--
ALTER TABLE `lead_numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
