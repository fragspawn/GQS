-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 11:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gqs`
--

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE IF NOT EXISTS `static` (
  `id` int(11) NOT NULL,
  `short_title` varchar(24) NOT NULL,
  `privilege` int(1) NOT NULL,
  `title` varchar(240) NOT NULL,
  `byline` varchar(512) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`id`, `short_title`, `privilege`, `title`, `byline`, `body`, `image`) VALUES
(1, 'home', 1, 'Home Page', 'Welcome to the Generic Quotation System. ', '<p>You can create custom products that have unique configurations</p>\r\n<p>Customers can get a price for their perfect product, based on choices they make</p>', 'home.png'),
(2, 'about', 1, 'About Us', 'We are software developers making generic solutions to generic problems', '<p>We charge a lot of money to do very little</p>\r\n<p>Try this generic Quotation System Now to see what we can do for you</p>', 'about.png'),
(3, 'philosophy', 1, 'Philosophy', 'Our goals and Ideals', '<p>We have None</p>', 'philosophy.png'),
(5, 'contact', 1, 'Contact Us', 'We''re not very available, there is no certainty that we''ll get back to you', '<p>11 Foobar Ct</p>\r\n<p>NOWHEREVILLE</p>\r\n<p>Qld 4999</p>\r\n<p>Australia</p>', 'contact.png'),
(6, 'login', 1, 'Login Page', 'Enter the system by using a pre-made user/pass combination', '<p>Form goes here</p>', 'login.png'),
(7, 'logout', 2, 'Logout Page', 'Exit Privilege State', '<p>No content required here</p>', 'logout.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL,
  `fname` varchar(64) NOT NULL,
  `lname` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `isadmin` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `fname`, `lname`, `email`, `phone`, `password`, `isadmin`) VALUES
(1, 'asdf', 'asdf', 'asdf', 'asdf', '', ''),
(2, 'qwer', 'qwer', 'qwer', 'qwer', '', ''),
(3, 'zxcv', 'zxcv', 'zxcv', 'xzcv', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `short_title` (`short_title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `static`
--
ALTER TABLE `static`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
