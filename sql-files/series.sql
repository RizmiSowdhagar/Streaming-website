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
-- Table structure for table `series`
--

CREATE TABLE `series` (
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
  `videopath` varchar(100) NOT NULL,
  `v1` varchar(100) NOT NULL,
  `v2` varchar(100) NOT NULL,
  `v3` varchar(100) NOT NULL,
  `v4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`mid`, `name`, `genre`, `rdate`, `runtime`, `lang`, `description`, `cast`, `director`,`rating`,`viewers`,
 `imgpath`,`videopath`,`v1`,`v2`,`v3`,`v4`) VALUES
(1, 'Glee', ' Comedy, Drama, Music ', 'TV Series (2009–2015)', '44 mins', 'English', 'A group of ambitious misfits try to escape the 
harsh realities of high school by joining a glee club headed by a passionate Spanish teacher.',' Lea Michele, Cory Monteith,Chris Colfer, Naya Rivera',
' Ryan Murphy','6.7/10',1, 'glee.png','','glee s1e1.mp4','glee2.mp4','glee3.mp4','glee4.mp4'),
(2,'Fam',' Comedy ',' TV Series (2019)','30 mins','English','Fed up with her father, a young woman moves in with her older half-sister and her fiancé.',
'Nina Dobrev, Tone Bell, Odessa A’zion',' Corinne Kingsbury','6.1/10',1,'fam.jpg','','fam s1e1.mp4','fam2.mp4',
'fam3.mp4','fam4.mp4');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
