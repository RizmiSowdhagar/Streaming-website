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
-- Table structure for table `hidden`
--

CREATE TABLE `hidden` (
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
-- Dumping data for table `hidden`
--

INSERT INTO `hidden` (`mid`, `name`, `genre`, `rdate`, `runtime`, `lang`, `description`, `cast`, `director`,`rating`,`viewers`,
 `imgpath`, `videopath`) VALUES
(1, 'Pride and Prejudice', 'Melo-Drama ,Literary Fiction, Historical Romance, Satire', 'June 25, 2005', '2h 8', 'English', 'Sparks fly when spirited 
Elizabeth Bennet meets single, rich, and proud Mr. Darcy. But Mr. Darcy reluctantly finds himself falling in love with a women beneath his 
class. Can each overcome their Pride and Prejudice? ',' Keira Knightley, Matthew Macfadyen','Joe Wright','7.8/10',
 1, 'Pride and Prejudice.jpg', 'Pride and Prejudice.mp4'),
 (2, 'The Lion King', 'Animation, Adventure, Musical Drama', 'July 19,2019', '1h 28','English', 'After the murder of his father, a young lion 
prince flees his kingdom only to learn the true meaning of responsibility and bravery.', 'Donald Glover, Beyoncé, Seth Rogen ','Jon Favreau',
 '6.9/10', 1, 'The Lion King.jpg', 'The Lion King.mp4'),
(3, 'The Maze Runneer', 'Action, Mystery, Sci-fi, Thriller', 'September 19, 2014', '1h 53','English', 'Thomas is deposited in a community of 
boys after his memory is erased, soon learning they are all trapped in a maze that will require him to join forces with fellow "runners" for 
a shot at escape.',' Dylan O Brien, Kaya Scodelario, Will Poulter',' Wes Ball','6.8/10', 1, 'The Maze Runner.jpg',
 'The Maze Runner.mp4'),
(4, 'Five Feet Apart', 'Drama, Romance', 'March 15, 2019', '1h 56','English', 'A pair of teenagers with cystic fibrosis meet in a hospital and
 fall in love, though their disease means they must avoid close physical contact.', 'Haley Lu Richardson, Cole Sprouse',' Justin Baldoni',
 '7.2/10', 1, 'Five Feet Apart.png', 'Five Feet Apart.mp4'),
(5, 'The Edge of Seventeen', 'Comedy, Drama', 'November 18, 2016', '1h 44','Engish', 'High-school life gets even more unbearable for Nadine
 when her best friend, Krista, starts dating her older brother.', ' Hailee Steinfeld, Haley Lu Richardson, Blake Jenner' ,
  ' Kelly Fremon Craig','7.1/10',1, 'seventeen.jpg', 'Seventeen.mp4'),
(6, 'Avengers: Infinity War', 'Adventue, Action, Sci-Fi', 'April 27, 2018', '1h 58','English', 'The Avengers and their allies must be willing
to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.',
' Robert Downey Jr.,Chadwick Boseman, Chris Hemsworth, Mark Ruffalo, Chris Evans,Scarlett Johansson ',' Anthony Russo, Joe Russo',
'8.4/10',1, 'Infinity War.jpg', 'Infinity War.mp4'),
(7, 'The Perks of Being a Wallflower', 'Drama, Romance', 'October 12, 2012', '1h 37','English', 'An introvert freshman is taken under the 
wings of two seniors who welcome him to the real world', 'Logan Lerman, Emma Watson, Ezra Miller ',' Stephen Chbosky','8.0/10',1, 
'The Perks of Being a Wallflower.jpg', 'The Perks of Being a Wallflower.mp4'),
(8,'Avengers: Endgame', 'Adventue, Action, Sci-Fi', 'April 26, 2019', '3h 1','English', 'After the devastating events of Avengers: Infinity 
War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos 
actions and restore balance to the universe.',' Robert Downey Jr.,Chadwick Boseman, Chris Hemsworth, Mark Ruffalo, Chris Evans,Scarlett 
Johansson ',' Anthony Russo, Joe Russo','8.4/10',1, 'Avengers Endgame.jpg', 'Avengers Endgame.mp4'),
(9,'Sense and Sensibility', ' Melo-Drama, Romance ,Fantasy', 'January 26, 1996', '2h 16','English', 'Rich Mr. Dashwood dies,
leaving his second wife and her three daughters poor by the rules of inheritance. The two eldest daughters are the title opposites.',
' Emma Thompson, Kate Winslet, James Fleet ',' Ang Lee','7.6/10',1, 'Sense_and_Sensibility.jpg',
'Sense_and_Sensibility.mp4'),
(10,'La La Land', ' Comedy, Drama, Music', 'December 25, 2016', '2h 7','English', 'While navigating their careers in Los Angeles,
 a pianist and an actress fall in love while attempting to reconcile their aspirations for the future.',' Ryan Gosling, Emma Stone, 
 Rosemarie DeWitt',' Damien Chazelle','8.0/10',1, 'La La Land.png','La La Land.mp4'),
(11,'Finding Nemo',' Animation, Adventure, Comedy', 'May 30, 2003', '1h 40','English', 'After his son is captured in 
the Great Barrier Reef and taken to Sydney, a timid clownfish sets out on a journey to bring him home.',' Albert Brooks, Ellen DeGeneres,
 Alexander Gould',' Andrew Stanton, Lee Unkrich','8.1/10',1, 'Nemo.jpg','Nemo.mp4'),
(12,'The Dark Knight', ' Action, Crime, Drama', 'July 18, 2008', '2h 32','English', 'When the menace known as the Joker wreaks
havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight
injustice.',' Christian Bale, Heath Ledger, Aaron Eckhart','Christopher Nolan','9.0/10',1, 'Dark Knight.jpg',
'Dark Knight.mp4'),
(13,'Wonder Woman',' Action, Adventure, Fantasy', 'June 2, 2017', '2h 21','English', 'When a pilot crashes and tells of conflict 
in the outside world, Diana, an Amazonian warrior in training, leaves home to fight a war, discovering her full powers and true destiny.',
' Gal Gadot, Chris Pine','Christopher Nolan','7.4/10',1,'wonder woman.jpg','Wonder Woman.mp4'),
(14,'Beauty and the Beast','Family,Fantasy,Musical','March 17,2017','2h 9','English','A selfish Prince is cursed to become a monster for
 the rest of his life, unless he learns to fall in love with a beautiful young woman he keeps prisoner.','Emma Watson, Dan Stevens, Luke Evans',
 'Bill Condon','7.1/10',1,'Beauty.jpg','Beauty.mp4'),
(15,'Jurassic Park',' Action, Adventure, Sci-Fi ','June 11, 1993','2h 36','English','A pragmatic paleontologist visiting an almost complete theme
 park is tasked with protecting a couple of kids after a power failure causes the park cloned dinosaurs to run loose.','Sam Neill, Laura Dern,
  Jeff Goldblum ','Steven Spielberg','8.1/10',1,'Park.png','Park.mp4'),
  (16, 'Blackfish', ' Documentary, Biography, News ', 'July 26, 2013', '1h 23', 'English', 'A documentary following the controversial captivity of 
killer whales, and its dangers for both humans and whales.',' Tilikum, Dave Duffus, Samantha Berg','Gabriela Cowperthwaite','8.1/10',
1, 'Blackfish.jpg', 'Blackfish.mp4'),
(17,'Dead Poets Society',' Comedy, Drama','9 June 1989','2h 10','English','Maverick teacher John Keating uses poetry to embolden his
 boarding school students to new heights of self-expression.',' Robin Williams, Robert Sean Leonard, Ethan Hawke','Peter Weir','8.1/10',
 1,'society.jpg','society.mp4'),
 (18,'The Social Dilemma','Documentary, Drama','September 9, 2020','1h 34','English','Explores the dangerous human impact of social
 networking, with tech experts sounding the alarm on their own creations.',' Tristan Harris, Jeff Seibert, Bailey Richardson','Jeff Orlowski',
 '7.7/10',1,'Social.jpg','Social.mp4'),
 (19, 'Glee', ' Comedy, Drama, Music ', 'TV Series (2009–2015)', '44', 'English', 'A group of ambitious misfits try to escape the 
harsh realities of high school by joining a glee club headed by a passionate Spanish teacher.',' Lea Michele, Cory Monteith,Chris Colfer, Naya Rivera',
' Ryan Murphy','6.7/10',1, 'glee.png','glee1.php'),
(20,'Fam',' Comedy ',' TV Series (2019)','30 mins','English','Fed up with her father, a young woman moves in with her older half-sister and 
her fiancé.',
'Nina Dobrev, Tone Bell, Odessa A’zion',' Corinne Kingsbury','6.1/10',1,'fam.jpg','fam.php'),
(21, 'Directionally Challenged', 'Podcast ', '2018-', '1h ', 'English', 'A podcast about realigning your internal compass.','',
' Candice King, Kayla Ewell','6.7/10',1, 'dc.jpg','dc.php');



--
-- Indexes for dumped tables
--

--
-- Indexes for table `hidden`
--
ALTER TABLE `hidden`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hidden`
--
ALTER TABLE `hidden`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
