-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: gm-flas-mysql.gre.ac.uk:3306
-- Generation Time: Dec 13, 2023 at 01:36 AM
-- Server version: 10.11.6-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdb_ak5919x`
--
CREATE DATABASE IF NOT EXISTS `mdb_ak5919x` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mdb_ak5919x`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `email`) VALUES
(1, 'Amaan Khan', 'amaank3424@gmail.com'),
(12, 'Henry the 8th ', 'Hen8@gmail.com'),
(15, 'Harry Potter ', 'Hpo@gmail.com'),
(16, 'Amro el Sheikh ', 'Asheikh@gmail.com'),
(17, 'Luke Skywalker ', 'LSKYW@gmail.com'),
(18, 'Tom Johnson', 'Tjohnson@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`) VALUES
(14, 'Science '),
(17, 'Math'),
(18, 'History '),
(19, ' Dark arts '),
(20, 'Web Programming ');

-- --------------------------------------------------------

--
-- Table structure for table `joke`
--

CREATE TABLE `joke` (
  `id` int(11) NOT NULL,
  `joketext` text NOT NULL,
  `jokedate` date NOT NULL,
  `authorid` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `joke`
--

INSERT INTO `joke` (`id`, `joketext`, `jokedate`, `authorid`, `categoryid`, `image`) VALUES
(47, 'Never mind , the answer was on the lecture slides in week 6 \r\n    \r\n    \r\n    \r\n   ', '2023-12-09', 1, 14, 'help.jpg'),
(48, 'Hey All\r\nwhat how long ago was the Mesozoic Era  \r\n   ', '2023-12-09', 12, 18, 'icon.png'),
(57, 'What courses should I take to fulfill my general education requirements?\r\n', '2023-12-12', 16, 20, 'icon.png'),
(58, 'How do I register for classes and when is the registration deadline?\r\n', '2023-12-12', 15, 14, 'icon.png'),
(60, 'Are there any study abroad programs or exchange opportunities for students?\r\n', '2023-12-12', 1, 20, 'icon.png'),
(61, 'How can I access academic advising and counseling services?\r\n', '2023-12-12', 17, 19, 'icon.png');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(21, 'poop', 'poop', 'poop', 'poop'),
(22, 'a', 'a', 'a', 'a'),
(23, 'M', 'M', 'M', 'M'),
(24, 'Amaan', 'Khan', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joke`
--
ALTER TABLE `joke`
  ADD PRIMARY KEY (`id`),
  ADD KEY `authorid` (`authorid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `joke`
--
ALTER TABLE `joke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `joke`
--
ALTER TABLE `joke`
  ADD CONSTRAINT `joke_ibfk_1` FOREIGN KEY (`authorid`) REFERENCES `author` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `joke_ibfk_2` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
