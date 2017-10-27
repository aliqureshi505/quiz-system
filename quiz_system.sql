-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 02:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'html and css'),
(2, 'Javascript'),
(3, 'Php Mysqli'),
(4, 'Php OOP'),
(5, 'Bootstrap'),
(6, 'Code-igniter');

-- --------------------------------------------------------

--
-- Table structure for table `questionare`
--

CREATE TABLE `questionare` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `option_1` varchar(500) NOT NULL,
  `option_2` varchar(500) NOT NULL,
  `option_3` varchar(500) NOT NULL,
  `correct` int(11) NOT NULL,
  `cat_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionare`
--

INSERT INTO `questionare` (`id`, `question`, `option_1`, `option_2`, `option_3`, `correct`, `cat_name`) VALUES
(7, 'JS is ?', 'language', 'technique', 'method', 0, 'Javascript'),
(9, 'Bootstrap make website ?', 'responsive', 'efficient in speed', 'slowly', 0, 'Bootstrap'),
(10, 'Code Igniter is ?', 'Framework', 'LOL', 'Nothinf', 0, 'Code-igniter'),
(32, 'ali ?', 'yes', 'no', 'maybe', 0, 'html & css'),
(33, 'ali ?', 'exist', 'not exost', 'mybe', 0, 'html & css'),
(35, 'HTML stands for ?', 'Hyper Text Markup Language', 'human translation manual language', 'none of these', 0, 'html and css'),
(36, 'HTML used in ?', 'Web application', 'Desktop allpication', 'Electronics gadgets', 0, 'html and css'),
(37, 'Audio video tags are introduced in ?', 'CSS', 'Jacascript', 'HTML', 2, 'html and css'),
(38, 'Which one is the library for MYSQL ?', 'Postgree', 'CSQL', 'MYSQLI', 2, 'Php Mysqli'),
(39, 'MD5 used to ?', 'Decrypt data', 'Encrypt data', 'Backup data', 1, 'Php Mysqli'),
(40, 'Class is combination of ?', 'Objects', 'Properties', 'Methods and Properties', 2, 'Php OOP'),
(41, 'OOP is ?', 'Language', '', '', 0, 'Php OOP'),
(42, 'OOP is ?', 'Language', 'Technique', 'None of these', 1, 'Php OOP'),
(43, 'Javascript is ?', 'Designing Language', 'Programming Language', 'Technique', 1, 'Javascript'),
(44, 'Javascript majorly to make webpage ?', 'User attractive', 'Responsive', 'none of these', 0, 'Javascript'),
(45, 'Code igniter works on technique ?', 'MVC', 'CMM', 'MMR', 0, 'Code-igniter'),
(46, 'Code igniter makes developemnt ?', 'Slow', 'fast', 'Efficient and secure', 2, 'Code-igniter'),
(47, 'Code igniter have builtin ?', 'Graphics', 'class, libraries, helpers', 'webpages', 1, 'Code-igniter'),
(48, 'PDO is ?', 'Pure oop base library', 'less secure', 'language', 0, 'Php Mysqli'),
(49, 'who develop php ?', 'Faheem', 'Ali', 'Rusmus Lorford', 2, 'Php Mysqli');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `admin`) VALUES
(1, 'admin', 'admin', 'yes'),
(2, 'aa', 'a', 'no'),
(3, 'aa', 'a', 'no'),
(4, 'aa', 'a', 'no'),
(5, 'aa', 'a', 'no'),
(6, 'aa', 'a', 'no'),
(7, 'a', 'a', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionare`
--
ALTER TABLE `questionare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questionare`
--
ALTER TABLE `questionare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
