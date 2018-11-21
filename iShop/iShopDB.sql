-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2017 at 10:46 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iShopDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `iShopLoginTB`
--

CREATE TABLE `iShopLoginTB` (
  `userID` int(11) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `storeType` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iShopLoginTB`
--

INSERT INTO `iShopLoginTB` (`userID`, `seller`, `phone`, `email`, `logo`, `storeType`, `location`, `password`, `reg_date`) VALUES
(1, 'company', '0554602954 ', 'company@gmail.com', '', 'IT Solutions', 'dansoman', 'company', '2017-03-21 16:19:11'),
(2, 'mtn', '0244444444', 'mtn@gmail', '', 'Telecommunication', 'Accra', 'mtn', '2017-03-21 16:20:06'),
(3, 'ucc', '011111100', 'ucc@gmail.com', '', 'School', 'Cape Coast', 'ucc', '2017-03-21 16:20:53'),
(4, 'Vodafone', '0200000011', 'voda@gmail', '', 'Network', 'James Town', 'vodafone', '2017-03-21 16:22:28'),
(5, 'john', '0000000', 'john@gmail.com', 'png.png', 'game center', 'Ghana', 'john', '2016-02-11 21:56:10'),
(6, 'grace', '1111111', 'grace@gmail.com', '31886-424x283-Online_Computer_Programming.jpg', 'clothings', 'Grace', 'grace', '2016-02-11 22:15:38'),
(7, 'grace', '1111111', 'grace@gmail.com', '31886-424x283-Online_Computer_Programming.jpg', 'clothings', 'Grace', 'grace', '2016-02-11 22:16:19'),
(8, 'Tomokey Ventures', '0207211555', 'tomo3csc200@outlook.com', 'Computer_Programming_header.jpg', 'Clothing and Sneakers', 'Kantamanto', '123', '2017-03-28 18:34:51'),
(9, 'RUTHS BOUTIQUE', '0242934243', 'ruthadjoa08@gmail.com', 'Screenshot from 2017-03-29 11-35-54.png', 'All kinds of shoes', 'capecoast', '123', '2017-04-02 07:48:00'),
(10, 'gjdj', 'iekidold', 'jelelde@desaf', 'vlcsnap-2014-06-07-16h50m04s37.png', 'keueidk', 'keidkd', '12345', '2017-04-03 12:08:54'),
(11, 'the name', '987987', 'mail@mail.com', 'algo.jpg', 'shoes', 'cape coast', 'password', '2017-04-12 21:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `iShopTB`
--

CREATE TABLE `iShopTB` (
  `id` int(11) NOT NULL,
  `shopName` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(111) NOT NULL,
  `category` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(60) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iShopTB`
--

INSERT INTO `iShopTB` (`id`, `shopName`, `item`, `price`, `category`, `photo`, `description`, `phone`, `userID`, `time`, `email`, `location`) VALUES
(60, '', 'sim card', 2, 'network', 'router-GettyImages-157611498-569410cc3df78cafda86a0ec.jpg', 'slot into phone', 'glo', 0, '2017-03-21 15:51:47', 'mtn@gmail.com', 'accra'),
(61, '', 'pen', 1, 'educational', 'home-network-made-easy.jpg', 'you can write now', 'glo', 0, '2017-03-21 16:03:30', 'mtn@gmail.com', 'accra'),
(62, 'mtn', 'book', 1, 'eduvation', 'global-computer-network-100291943.jpg', 'open book', 'glo', 2, '2017-03-21 16:09:44', 'voda', 'accra'),
(63, 'cobby', 'laptop', 1000, 'computers', '31886-424x283-Online_Computer_Programming.jpg', '40Gig', '123645789', NULL, '2017-03-21 16:14:35', 'cobby@gmail.com', 'dansoman'),
(65, 'company', 'Chair', 40, 'kitchen', 'Computer_Programming_header.jpg', 'you can sit on it', '0554602954 ', 1, '2017-03-21 16:46:23', 'company@gmail.com', 'dansoman'),
(66, 'mtn', 'Galaxy S6', 1200, 'PHONE', 'Global-computer-network.jpg', 'Latex', '0244444444', 2, '2017-03-22 02:45:28', 'mtn@gmail', 'Accra'),
(67, 'mtn', 'Headphones', 10, 'device', 'Computer_Programming_header.jpg', 'around the ears', '0244444444', 2, '2017-03-25 00:03:55', 'mtn@gmail', 'Accra'),
(68, 'mtn', 'google', 23, 'days', 'Computer_Programming_header.jpg', 'great', '0244444444', 2, '2016-02-11 23:17:31', 'mtn@gmail', 'Accra'),
(69, 'silas', 'future', 5, 'life', 'IMG-20170321-WA0003.jpg', 'clr picture', '0241675034', NULL, '2016-02-11 16:56:39', 'iamonehood@gmail.com', 'Kumasi'),
(71, 'Tomokey Ventures', 'kick', 200, 'footer wear', 'cloth.jpg', 'brand new', '0207211555', 8, '2017-03-28 18:36:51', 'tomo3csc200@outlook.com', 'Kantamanto'),
(72, 'ruth', 'shoes ', 67, 'shoes', 'Screenshot from 2017-03-29 11-35-54.png', 'heels and flat shoes', '0242934243', NULL, '2017-04-02 07:42:38', 'ruthadjoa08@gmail.com', 'capecoast'),
(73, 'RUTHS BOUTIQUE', 'FLAT SHOES', 50, 'SHOES', 'Screenshot from 2017-03-29 11-35-54.png', 'FOOTWARE', '0242934243', 9, '2017-04-02 07:49:19', 'ruthadjoa08@gmail.com', 'capecoast'),
(74, 'Ghana Ltd', 'Togo', 23, 'Ladies', '151757590f1a9791bacadd527f9e5f0d.gif', 'hg eieuij', '0244564321', NULL, '2017-04-03 12:07:05', 'eddy@gmail', 'Ghaba'),
(75, 'the name', 'shoes', 980, 'shoes', 'italy-2080072_1280.jpg', 'a very nice shoe', '987987', 11, '2017-04-12 21:06:28', 'mail@mail.com', 'cape coast'),
(76, 'RUTHS BOUTIQUE', 'JACKET', 50, 'CLOTHINGS', 'cloth.jpg', 'CLOTH', '0242934243', 9, '2023-10-06 12:59:01', 'ruthadjoa08@gmail.com', 'capecoast');

-- --------------------------------------------------------

--
-- Table structure for table `orderTB`
--

CREATE TABLE `orderTB` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `item` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderTB`
--

INSERT INTO `orderTB` (`id`, `name`, `c_email`, `phone`, `item`, `message`, `userID`, `time`) VALUES
(4, '', 'cobby@gmail.com', '0123456789', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: cobby\n Phone: 0123456789\n Email: cobby@gmail.com\n Location: dansoman\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-02 07:07:53'),
(5, '', 'james@gmail.com', '11111111', 'goat', 'i want to go home now.', NULL, '2017-04-02 07:26:49'),
(6, '', 'grace@gmail.com', '333333333', 'shoes', 'i love shoes than my boyfried', 9, '2017-04-02 07:30:24'),
(7, 'Tesla', 'tesla@gmail.com', '98989898', 'shoes ', 'i have ordered shoes  of Price: 67; \nThe following is my Contact;\n Name: Tesla\n Phone: 98989898\n Email: tesla@gmail.com\n Location: Accra\n Hope to hear from you soon!.\n Thank you', 0, '2017-04-02 07:40:03'),
(8, 'Tesla', 'tesla@gmail.com', '98989898', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: Tesla\n Phone: 98989898\n Email: tesla@gmail.com\n Location: Accra\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-02 07:46:53'),
(9, 'hfeej', 'edas@gmail.com', '027780673', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: hfeej\n Phone: 027780673\n Email: edas@gmail.com\n Location: dnsjdj\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-03 12:02:57'),
(10, 'hfeej', 'edas@gmail.com', '027780673', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: hfeej\n Phone: 027780673\n Email: edas@gmail.com\n Location: dnsjdj\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-03 12:03:34'),
(11, 'coby', 'cobby@gmail.com', '00000000', 'Togo', 'i have ordered Togo of Price: 23; \nThe following is my Contact;\n Name: coby\n Phone: 00000000\n Email: cobby@gmail.com\n Location: Dansoman\n Hope to hear from you soon!.\n Thank you', 0, '2017-04-03 12:10:59'),
(12, 'coby', 'cobby@gmail.com', '00000000', 'Togo', 'i have ordered Togo of Price: 23; \nThe following is my Contact;\n Name: coby\n Phone: 00000000\n Email: cobby@gmail.com\n Location: Dansoman\n Hope to hear from you soon!.\n Thank you', 0, '2017-04-03 12:11:54'),
(13, 'cobby', 'cobby@gmail.com', '111111', 'Togo', 'i have ordered Togo of Price: 23; \nThe following is my Contact;\n Name: cobby\n Phone: 111111\n Email: cobby@gmail.com\n Location: Dansoman\n Hope to hear from you soon!.\n Thank you', 0, '2017-04-02 16:14:08'),
(14, 'cobby', 'cobby@gmail.com', '111111', 'Togo', 'i have ordered Togo of Price: 23; \nThe following is my Contact;\n Name: cobby\n Phone: 111111\n Email: cobby@gmail.com\n Location: Dansoman\n Hope to hear from you soon!.\n Thank you', 0, '2017-04-02 16:17:51'),
(15, 'james', 'cobby@gmail.com', '4444', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: james\n Phone: 4444\n Email: cobby@gmail.com\n Location: dansoman\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-02 16:25:23'),
(16, 'james', 'cobby@gmail.com', '4444', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: james\n Phone: 4444\n Email: cobby@gmail.com\n Location: dansoman\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-02 16:25:54'),
(17, 'james', 'cobby@gmail.com', '4444', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: james\n Phone: 4444\n Email: cobby@gmail.com\n Location: dansoman\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-02 16:27:06'),
(18, 'james', 'cobby@gmail.com', '4444', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: james\n Phone: 4444\n Email: cobby@gmail.com\n Location: dansoman\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-02 16:27:19'),
(19, 'james', 'cobby@gmail.com', '4444', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: james\n Phone: 4444\n Email: cobby@gmail.com\n Location: dansoman\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-02 16:29:51'),
(20, 'mr man', 'mail@mail.com', '123123123', 'FLAT SHOES', 'i have ordered FLAT SHOES of Price: 50; \nThe following is my Contact;\n Name: mr man\n Phone: 123123123\n Email: mail@mail.com\n Location: cape coast\n Hope to hear from you soon!.\n Thank you', 9, '2017-04-12 21:00:53'),
(21, 'cobby', 'ampahkwabena5@gmail.com', '0554602954', 'shoes', 'i have ordered shoes of Price: 980; \nThe following is my Contact;\n Name: cobby\n Phone: 0554602954\n Email: ampahkwabena5@gmail.com\n Location: Dansoman\n Hope to hear from you soon!.\n Thank you', 11, '2017-04-12 21:07:25'),
(22, 'Randy', 'randy@gmail.com', '0254842133', 'JACKET', 'i have ordered JACKET of Price: 50; \nThe following is my Contact;\n Name: Randy\n Phone: 0254842133\n Email: randy@gmail.com\n Location: Cape Coast\n Hope to hear from you soon!.\n Thank you', 9, '2023-10-06 13:01:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iShopLoginTB`
--
ALTER TABLE `iShopLoginTB`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `iShopTB`
--
ALTER TABLE `iShopTB`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderTB`
--
ALTER TABLE `orderTB`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iShopLoginTB`
--
ALTER TABLE `iShopLoginTB`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `iShopTB`
--
ALTER TABLE `iShopTB`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `orderTB`
--
ALTER TABLE `orderTB`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
