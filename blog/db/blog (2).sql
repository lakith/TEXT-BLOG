-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 03:41 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
CREATE DATABASE blog;
use blog;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(12) NOT NULL,
  `user` varchar(50) NOT NULL,
  `comment_content` longtext NOT NULL,
  `post_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user`, `comment_content`, `post_name`) VALUES
(1, 'hansi', 'lakith', ''),
(2, 'hansi', 'this is a awsome blog', ''),
(3, 'hansi', 'bla bla bla', ''),
(4, '', 'bla bla bla', ''),
(5, 'hansi', 'bla bla', ''),
(6, 'hansi', '4324234', ''),
(7, 'hansi', '4324234', ''),
(8, 'hansi', '2132132132321312321', ''),
(9, '', 'rgfrwhierwgrwgrwgfwg', ''),
(10, 'hansi', 'name', ''),
(11, 'hansi', 'name', ''),
(12, '', 'heliumx', ''),
(13, '', 'super man', ''),
(14, '', 'super man', 'Superman'),
(15, '', 'super man', 'Superman'),
(16, '', 'head', 'Superman'),
(17, '', 'comment', 'Superman'),
(18, '', 'microsoft', 'chalana');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(15) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `date`, `content`) VALUES
(1, '', 'lakith', '', 'dsadsadsad'),
(2, 'lakith', 'lakith', '', 'dsadsadsad'),
(3, 'lakith', 'world war', '', 'bla bla bla bla bla'),
(4, 'hansi', 'lakith22', '', 'sdfsadsadsad'),
(5, 'hansi', 'Superman', '', 'Superman is a fictional superhero appearing in American comic books published by DC Comics. The character was created by writer Jerry Siegel and artist Joe Shuster, high school students living in Cleveland, Ohio, in 1933. They sold Superman to Detective Comics, the future DC Comics, in 1938. Superman debuted in Action Comics #1 (cover-dated June 1938) and subsequently appeared in various radio serials, newspaper strips, television programs, films, and video games. With this success, Superman helped to create the superhero archetype and establish its primacy within the American comic book.[2]'),
(6, 'hansi', 'chalana', '', 'dfaddf08hyadfuy9p8eofefuoefe'),
(7, 'lakith', 'aeraeraerawr', '', 'sdfsadsad'),
(8, 'chalana', 'Flash (comics)', '', 'The Flash (or simply Flash) is the name of several superheroes appearing in comic books published by DC Comics. Created by writer Gardner Fox and artist Harry Lampert, the original Flash first appeared in Flash Comics #1 (cover date January 1940/release month November 1939).[1] Nicknamed the &quot;Scarlet Speedster&quot;, all incarnations of the Flash possess &quot;super speed&quot;, which includes the ability to run, move, and think extremely fast, use superhuman reflexes, and seemingly violate certain laws of physics.');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(15) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `tel_no` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `first_name`, `last_name`, `tel_no`, `email`, `username`, `password`) VALUES
(1, 'Lakith', 'Muthugala', '0342252011', 'lakith1995@gmail.com', 'lakith', 'sumangala'),
(2, 'Hansi', 'Yapa', '0710873073', 'hansiaysh@gmail.com', 'hansi', 'pass'),
(3, 'Chalana', 'Kalpitha', '0714846641', 'chalanakalpitha@gmail.com', 'chalana', 'pass');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
