-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 11:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awrds2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `deleted` int(1) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `deleted`, `date_added`) VALUES
(9, 'BEST STUDENT LEADER', 0, '0000-00-00'),
(10, 'BEST SPORTS LADY', 0, '0000-00-00'),
(11, 'BEST SPORTS MAN', 0, '0000-00-00'),
(12, 'MOST INFLUENTIAL MALE STUDENT', 0, '0000-00-00'),
(13, 'MOST INFLUENTIAL FEMALE STUDENT', 0, '0000-00-00'),
(14, 'BEST SOCIAL MEDIA PAGE', 0, '0000-00-00'),
(15, 'BEST GRAPHICS DESIGNER', 0, '0000-00-00'),
(16, 'BEST PHOTOGRAPHER', 0, '0000-00-00'),
(17, 'BEST VIDEOGRAPHER', 0, '0000-00-00'),
(18, 'BEST VIDEO DIRECTOR', 0, '0000-00-00'),
(19, 'BEST FASHION DESIGNER', 0, '0000-00-00'),
(20, 'BEST GROUP DANCERS', 0, '0000-00-00'),
(21, 'BEST HIPOP ARTIST', 0, '0000-00-00'),
(22, 'BEST FEMALE PHOTOGENIC', 0, '0000-00-00'),
(23, 'BEST MALE PHOTOGENIC', 0, '0000-00-00'),
(24, 'BEST MUSIC GROUP', 0, '0000-00-00'),
(25, 'BEST FEMALE FASHION MODEL', 0, '0000-00-00'),
(26, 'BEST MALE FASHION MODEL', 0, '0000-00-00'),
(27, 'BEST FEMALE SINGER', 0, '0000-00-00'),
(28, 'BEST MALE SINGER', 0, '0000-00-00'),
(29, 'BEST SONG OF THE YEAR', 0, '0000-00-00'),
(30, 'BEST FINE ARTS & HANDCRAFT', 0, '0000-00-00'),
(31, 'BEST MALE PRESENTER', 0, '0000-00-00'),
(32, 'BEST FEMALE PRESENTER', 0, '0000-00-00'),
(33, 'BEST MUSIC VIDEO', 0, '0000-00-00'),
(34, 'BEST MUSIC ARTIST OF THE YEAR', 0, '0000-00-00'),
(35, 'BEST DJ', 0, '0000-00-00'),
(36, 'BEST COMEDIAN', 0, '0000-00-00'),
(37, 'BEST PRODUCER', 0, '0000-00-00'),
(38, 'BEST ENTERPRENUER', 0, '0000-00-00'),
(39, 'BEST PROJECT', 0, '0000-00-00'),
(40, 'BEST ACTRESS', 0, '0000-00-00'),
(41, 'BEST ACTOR', 0, '0000-00-00'),
(42, 'BEST GOSPEL ARTIST OF THE YEAR', 0, '0000-00-00'),
(43, 'BEST COUPLE OF THE YEAR', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `cont_number` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 1,
  `deleted` tinyint(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `username`, `password`, `role`, `deleted`) VALUES
(1, 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `cont_number` varchar(100) NOT NULL,
  `category_id` int(100) NOT NULL,
  `votes` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`cont_number`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
