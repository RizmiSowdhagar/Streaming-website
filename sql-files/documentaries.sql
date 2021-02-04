-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 01:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `documentaries`
--

CREATE TABLE `documentaries` (
  `mid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `runtime` varchar(100) NOT NULL,
  `lang` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `cast` varchar(200) NOT NULL,
  `director` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `viewers` int(10) DEFAULT '1',
  `imgpath` varchar(50) NOT NULL,
  `videopath` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documentaries`
--

INSERT INTO `documentaries` (`mid`, `name`, `genre`, `rdate`, `runtime`, `lang`, `description`, `cast`, `director`,`rating`, `viewers`,
 `imgpath`, `videopath`) VALUES
(1, 'Blackfish', ' Documentary, Biography, News ', 'July 26, 2013', '1h 23 mins', 'English', 'A documentary following the controversial captivity of 
killer whales, and its dangers for both humans and whales.',' Tilikum, Dave Duffus, Samantha Berg','Gabriela Cowperthwaite','8.1/10',
 1, 'Blackfish.jpg', 'Blackfish.mp4'),
(2,'The Social Dilemma','Documentary, Drama','September 9, 2020','1h 34 mins','English','Explores the dangerous human impact of social
 networking, with tech experts sounding the alarm on their own creations.',' Tristan Harris, Jeff Seibert, Bailey Richardson','Jeff Orlowski',
 '7.5/10',1,'Social.jpg','Social.mp4');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `documentaries`
--
ALTER TABLE `documentaries`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documentaries`
--
ALTER TABLE `documentaries`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
