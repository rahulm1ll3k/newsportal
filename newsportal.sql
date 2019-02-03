-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2019 at 02:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE `news_info` (
  `ID` int(11) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_content` longtext NOT NULL,
  `news_type` int(11) NOT NULL,
  `posted` int(11) NOT NULL,
  `published_by` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `publish` date NOT NULL,
  `status` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`ID`, `news_title`, `news_content`, `news_type`, `posted`, `published_by`, `created`, `modified`, `publish`, `status`) VALUES
(1, 'Australia weather: Queensland floods force Townsville families to evacuate\r\n', 'Intense rain in north-eastern Australia has triggered severe flooding, turning streets into rivers, sweeping away cars and forcing families to evacuate.\r\n\r\nThe city of Townsville in Queensland has been worst hit, with dozens of homes inundated with water.\r\n\r\nThe army is helping with the emergency effort.', 1, 1, 2, '0000-00-00', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news_media`
--

CREATE TABLE `news_media` (
  `mediaID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_users`
--

CREATE TABLE `news_users` (
  `us_ID` int(11) NOT NULL,
  `usr_name` varchar(100) NOT NULL,
  `usr_full_name` varchar(100) NOT NULL,
  `usr_email` varchar(100) NOT NULL,
  `usr_short_desc` longtext NOT NULL,
  `usr_address` varchar(100) NOT NULL,
  `usr_phone_1` int(11) NOT NULL,
  `usr_phone_2` int(11) NOT NULL,
  `usr_priority` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_users`
--

INSERT INTO `news_users` (`us_ID`, `usr_name`, `usr_full_name`, `usr_email`, `usr_short_desc`, `usr_address`, `usr_phone_1`, `usr_phone_2`, `usr_priority`) VALUES
(1, 'rahulm1ll3k', 'Rahul Mallik', 'rahulm1ll3k@gmail.com', 'I am a web developer working in XpertSEO Service.', '18/c, akshay dashlen, gandaria bagicha, dhaka', 1676877390, 1535119132, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_info`
--
ALTER TABLE `news_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `news_media`
--
ALTER TABLE `news_media`
  ADD PRIMARY KEY (`mediaID`);

--
-- Indexes for table `news_users`
--
ALTER TABLE `news_users`
  ADD PRIMARY KEY (`us_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_info`
--
ALTER TABLE `news_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news_media`
--
ALTER TABLE `news_media`
  MODIFY `mediaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_users`
--
ALTER TABLE `news_users`
  MODIFY `us_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
