-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 01:04 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hallkey`
--

-- --------------------------------------------------------

--
-- Table structure for table `hall_key_logs`
--

CREATE TABLE `hall_key_logs` (
  `id` int(11) NOT NULL,
  `room_id` varchar(8) NOT NULL,
  `username` text NOT NULL,
  `studid` varchar(15) NOT NULL,
  `activity` text NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_key_logs`
--

INSERT INTO `hall_key_logs` (`id`, `room_id`, `username`, `studid`, `activity`, `log_time`) VALUES
(1, '', 'Porter', '000000000157397', 'key not with student', '2018-11-08 23:42:30'),
(2, '', 'Porter', '000000000157160', 'key not with student', '2018-11-08 23:08:44'),
(3, '', 'Porter', '000000000157613', 'key not with student', '2018-11-08 23:42:30'),
(4, '', 'Porter', '000000000158308', 'key not with student', '2018-11-08 23:42:30'),
(5, '0622', 'Porter', '000000000157397', 'key not with student', '2018-11-08 23:50:27'),
(6, '0727', 'Porter', '000000000157613', 'key not with student', '2018-11-08 23:50:27'),
(7, '0795', 'Porter', '000000000158308', 'key not with student', '2018-11-08 23:50:27'),
(8, '0622', 'Porter', '000000000159715', 'key not with student', '2018-11-08 23:50:27'),
(9, '0622', 'Porter', '000000000161711', 'key not with student', '2018-11-08 23:50:27'),
(10, '0622', 'Porter', '000000000162076', 'key with student', '2018-11-08 23:50:27'),
(11, '0727', 'Porter', '000000000161442', 'key not with student', '2018-11-08 23:50:28'),
(12, '0727', 'Porter', '000000000161700', 'key not with student', '2018-11-08 23:50:28'),
(13, '0622', 'Porter', '000000000161980', 'key not with student', '2018-11-08 23:50:28'),
(14, '0727', 'Porter', '000000000161904', 'key not with student', '2018-11-08 23:50:28'),
(15, '0727', 'Porter', '000000000161954', 'key not with student', '2018-11-08 23:50:28'),
(16, '0622', 'Porter', '000000000157397', 'key not with student', '2018-11-09 00:02:23'),
(17, '0727', 'Porter', '000000000157613', 'key not with student', '2018-11-09 00:02:23'),
(18, '0795', 'Porter', '000000000158308', 'key not with student', '2018-11-09 00:02:23'),
(19, '0622', 'Porter', '000000000159715', 'key not with student', '2018-11-09 00:02:23'),
(20, '0622', 'Porter', '000000000161711', 'key not with student', '2018-11-09 00:02:23'),
(21, '0622', 'Porter', '000000000162076', 'key not with student', '2018-11-09 00:02:24'),
(22, '0727', 'Porter', '000000000161442', 'key not with student', '2018-11-09 00:02:24'),
(23, '0727', 'Porter', '000000000161700', 'key not with student', '2018-11-09 00:02:24'),
(24, '0622', 'Porter', '000000000161980', 'key not with student', '2018-11-09 00:02:24'),
(25, '0727', 'Porter', '000000000161904', 'key not with student', '2018-11-09 00:02:24'),
(26, '0727', 'Porter', '000000000161954', 'key not with student', '2018-11-09 00:02:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hall_key_logs`
--
ALTER TABLE `hall_key_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hall_key_logs`
--
ALTER TABLE `hall_key_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
