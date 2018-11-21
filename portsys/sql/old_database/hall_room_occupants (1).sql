-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 02:42 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
-- Table structure for table `hall_room_occupants`
--

CREATE TABLE `hall_room_occupants` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `studid` int(15) UNSIGNED ZEROFILL DEFAULT NULL,
  `room_id` int(5) UNSIGNED ZEROFILL DEFAULT NULL,
  `key_in_out` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_room_occupants`
--

INSERT INTO `hall_room_occupants` (`id`, `studid`, `room_id`, `key_in_out`) VALUES
(00001, 000000000157059, 01785, 0),
(00002, 000000000157280, 01911, 0),
(00003, 000000000157138, 01352, 0),
(00004, 000000000157242, 01468, 0),
(00005, 000000000157420, 00619, 0),
(00006, 000000000157279, 00375, 0),
(00007, 000000000157439, 01054, 0),
(00008, 000000000157089, 01356, 0),
(00009, 000000000157289, 01123, 0),
(00010, 000000000157407, 00304, 0),
(00011, 000000000157428, 01963, 0),
(00012, 000000000157155, 01203, 0),
(00013, 000000000157157, 01131, 0),
(00014, 000000000157445, 01073, 0),
(00015, 000000000157068, 01216, 0),
(00016, 000000000157538, 01807, 0),
(00017, 000000000157291, 00064, 0),
(00018, 000000000157110, 00948, 0),
(00019, 000000000157199, 00050, 0),
(00020, 000000000157579, 01196, 0),
(00021, 000000000157558, 00052, 0),
(00022, 000000000157188, 00947, 0),
(00023, 000000000157142, 01201, 0),
(00024, 000000000157321, 01630, 0),
(00025, 000000000157318, 00597, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hall_room_occupants`
--
ALTER TABLE `hall_room_occupants`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `studid` (`studid`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hall_room_occupants`
--
ALTER TABLE `hall_room_occupants`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7832;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;