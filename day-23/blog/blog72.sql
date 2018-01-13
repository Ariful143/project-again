-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 11:24 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog72`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `blogTitle` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `shortDescription` text COLLATE utf8_croatian_ci NOT NULL,
  `longDescription` text COLLATE utf8_croatian_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `categoryName`, `blogTitle`, `shortDescription`, `longDescription`, `publicationStatus`) VALUES
(13, 'Java', 'Shamur - Let The Music Play', 'Let The Music PlayLet The Music Play', '<h1>Let The Music PlayLet The Music PlayLet The Music PlayLet The Music PlayLet The Music PlayLet The Music PlayLet The Music PlayLet The Music PlayLet The Music PlayLet The Music PlayLet The Music PlayLet The Music PlayLet The Music Play</h1>', 0),
(14, 'PHP', ' 	Let The Music Play', ' 	Let The Music Play 	Let The Music Play', '<h1>Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play Let The Music Play</h1>', 1),
(15, 'Html', 'Leke Pehla Pehla Pyar', 'Leke Pehla Pehla PyarLeke Pehla Pehla Pyar', '<h1>Leke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla PyarLeke Pehla Pehla Pyar</h1>', 1),
(16, 'Python', 'Ek pardesi mera dil le geya', 'Ek pardesi mera dil le geyaEk pardesi mera dil le geya', '<h1>Ek pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geyaEk pardesi mera dil le geya</h1>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `categoryDescription` text COLLATE utf8_croatian_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categoryDescription`, `publicationStatus`) VALUES
(3, 'PHP', 'PHP Description Goes here', 1),
(4, 'Java', 'Java Description Goes Here', 1),
(5, 'CSS', 'CSS Description Goes here', 0),
(6, 'Python', 'Python Description Goes Here', 1),
(7, 'Dot-NET', 'Dot-NET article goes here', 0),
(11, 'Html', 'Html Goes Here', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Satyajit', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Sudipto', 'vigi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
