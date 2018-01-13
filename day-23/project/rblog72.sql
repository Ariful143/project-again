-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 12:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rblog72`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(5) NOT NULL,
  `category_id` int(3) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `blog_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `short_description`, `long_description`, `blog_image`, `publication_status`) VALUES
(1, 0, 'Web', 'A System where many document will remain ...', '<p><span style=\"color: #212529; font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;\"><span style=\"font-size: 16px;\">A System where many document will remain and inter connected with is other and can access by internet</span></span></p>', '', 1),
(2, 0, 'What is Function?', 'Function is the name of a code block.', '<p class=\"MsoNoSpacing\">Function is the name of a code block.</p>\r\n<p class=\"MsoNoSpacing\">*Particular Job</p>\r\n<p class=\"MsoNoSpacing\">* Re use</p>\r\n<p class=\"MsoNoSpacing\">* Can not work himself have to call</p>\r\n<p class=\"MsoNoSpacing\">* Can&nbsp; return</p>\r\n<p class=\"MsoNoSpacing\"><strong>Syntax:</strong> function <em>functionName</em> (){</p>\r\n<p class=\"MsoNoSpacing\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; // Code to be executed;</p>\r\n<p class=\"MsoNoSpacing\">}</p>', '', 1),
(8, 0, 'à¦œà§€à¦¬à¦¨à§‡à¦° à¦¯à§‡à¦•à§‹à¦¨ à¦•à¦¿à¦›à§ à¦•à¦°à¦¤à§‡ à¦šà¦¾à¦‡à¦²à§‡...', 'à¦œà§€à¦¬à¦¨à§‡à¦° à¦¯à§‡à¦•à§‹à¦¨ à¦•à¦¿à¦›à§ à¦•à¦°à¦¤à§‡ à¦šà¦¾à¦‡à¦²à§‡ à¦¨à¦¿à§Ÿà¦®à¦¿à¦¤ à¦²à§‡à¦—à§‡ à¦¥à¦¾à¦•à¦¾à¦Ÿà¦¾ à¦ªà§à¦°à¦šà¦¨à§à¦¡ à¦°à¦•à¦® à¦œà¦°à§à¦°à§€à¥¤', '<p>à¦œà§€à¦¬à¦¨à§‡à¦° à¦¯à§‡à¦•à§‹à¦¨ à¦•à¦¿à¦›à§ à¦•à¦°à¦¤à§‡ à¦šà¦¾à¦‡à¦²à§‡ à¦¨à¦¿à§Ÿà¦®à¦¿à¦¤ à¦²à§‡à¦—à§‡ à¦¥à¦¾à¦•à¦¾à¦Ÿà¦¾ à¦ªà§à¦°à¦šà¦¨à§à¦¡ à¦°à¦•à¦® à¦œà¦°à§à¦°à§€à¥¤ à¦à¦‡à¦Ÿà¦¾ à¦¸à¦¬à¦•à¦¿à¦›à§à¦° à¦•à§à¦·à§‡à¦¤à§à¦°à§‡ à¦ªà§à¦°à¦¯à§‹à¦œà§à¦¯à¥¤ à¦†à¦ªà¦¨à¦¿ à¦ªà§à¦°à§‹à¦—à§à¦°à¦¾à¦®à¦¿à¦‚ à¦¶à¦¿à¦–à¦¤à§‡ à¦šà¦¾à¦¨ à¦…à¦¥à¦¬à¦¾ à¦¸à¦¿à¦•à§à¦¸ à¦ªà§à¦¯à¦¾à¦• à¦¬à¦¡à¦¿ à¦¬à¦¾à¦¨à¦¾à¦¤à§‡ à¦šà¦¾à¦¨ à¦…à¦¥à¦¬à¦¾ à¦¤à§‚à¦–à§‹à§œ à¦¬à¦•à§à¦¤à¦¾ à¦¹à¦¤à§‡ à¦šà¦¾à¦¨ à¦…à¦¥à¦¬à¦¾ à¦…à¦¸à¦®à§à¦­à¦¬ à¦¸à§à¦¨à§à¦¦à¦°à§€ à¦•à§‹à¦¨ à¦®à§‡à§Ÿà§‡à¦•à§‡ à¦ªà¦Ÿà¦¾à¦¤à§‡ à¦šà¦¾à¦¨ , à¦•à§‹à¦¨à¦Ÿà¦¾à¦‡ à¦†à¦ªà¦¨à¦¿ à¦à¦•à¦¦à¦¿à¦¨à§‡ à¦¹à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨ à¦¨à¦¾à¦¹ à¦…à¦¥à¦¬à¦¾ à¦à¦•à¦¬à§‡à¦²à¦¾à¦° à¦šà§‡à¦·à§à¦Ÿà¦¾à§Ÿ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¦¨à¦¾à¥¤</p>\r\n<p>à¦¨à¦¿à¦°à§à¦¦à¦¿à¦·à§à¦Ÿ à¦²à¦•à§à¦·à§à¦¯ à¦ à¦¿à¦• à¦•à¦°à§‡ à¦ªà§à¦°à¦¤à¦¿à¦¦à¦¿à¦¨ à¦…à¦²à§à¦ª à¦…à¦²à§à¦ª à¦•à¦°à§‡ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦…à¦­à§€à¦·à§à¦  à¦²à¦•à§à¦·à§à¦¯à§‡à¦° à¦¦à¦¿à¦•à§‡ à¦à¦—à¦¿à§Ÿà§‡ à¦¯à§‡à¦¤à§‡ à¦¹à¦¬à§‡ à¦†à¦° à¦à¦‡ à¦ªà¦¥ à¦•à¦–à¦¨à¦“ à¦¸à§à¦–à¦•à¦° à¦¹à¦¬à§‡à¦¨à¦¾à¥¤ à¦•à¦–à¦¨à¦“ à¦†à¦ªà¦¨à¦¾à¦° à¦¬à¦¾à¦à¦§à¦¾ à¦¹à¦¬à§‡ à¦…à¦²à¦¸à¦¤à¦¾, à¦•à¦–à¦¨à¦“à¦¬à¦¾ à¦ªà¦¾à¦°à¦¿à¦¬à¦¾à¦°à¦¿à¦• à¦¸à¦®à¦¸à§à¦¯à¦¾,à¦•à¦–à¦¨à¦“à¦¬à¦¾ à¦®à¦¾à¦¨à¦¸à¦¿à¦• à¦…à¦¸à§à¦¥à¦¿à¦°à¦¤à¦¾ à¦…à¦¥à¦¬à¦¾ à¦…à¦¹à§‡à¦¤à§à¦• à¦Ÿà§‡à¦¨à¦¶à¦¨ à¦†à¦¬à¦¾à¦° à¦•à¦–à¦¨à¦“à¦¬à¦¾ à¦†à¦ªà¦¨à¦¾à¦° à¦¶à¦¤à§à¦°à§à¦¦à§‡à¦° à¦¨à¦¿à¦ªà§€à§œà¦£, à¦à¦°à¦•à¦® à¦…à¦¨à§‡à¦• à¦•à¦¿à¦›à§à¦‡ à¦¹à¦¤à§‡ à¦ªà¦¾à¦°à§‡ à¦à¦‡ à¦ªà¦¥à§‡à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦à¦•à¦¬à¦¾à¦° à¦¯à¦–à¦¨ à¦†à¦ªà¦¨à¦¿ à¦¬à§‡à¦° à¦¹à§Ÿà§‡à¦›à§‡à¦¨ à¦¸à§à¦¤à¦°à¦¾à¦‚, à¦¦à¦¾à¦¤ à¦•à¦¾à¦à¦®à§œà§‡ à¦§à¦°à§‡ à¦†à¦ªà¦¨à¦¾à¦•à§‡ à¦¨à¦¿à¦°à§à¦­à§Ÿà§‡ à¦²à¦•à§à¦·à§‡à¦° à¦¦à¦¿à¦•à§‡ à¦à¦—à¦¿à§Ÿà§‡ à¦¯à§‡à¦¤à§‡ à¦¹à¦¬à§‡, à¦ªà¦¥à§‡ à¦¯à¦¾à¦‡ à¦†à¦¸à§à¦• à¦¨à¦¾ à¦•à§‡à¦¨, à¦¤à¦¬à§‡à¦‡ à¦†à¦ªà¦¨à¦¿ à¦†à¦ªà¦¨à¦¾à¦° à¦²à¦•à§à¦·à§‡ à¦ªà§Œà¦›à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤</p>\r\n<p>à¦œà§€à¦¬à¦¨ à¦•à¦¾à¦Šà¦•à§‡ à¦•à§‹à¦¨ à¦•à¦¿à¦›à§ à¦à¦®à¦¨à¦¿ à¦à¦®à¦¨à¦¿ à¦¦à§‡à§Ÿà¦¨à¦¾, à¦…à¦¨à§‡à¦• à¦¸à§à¦¬à¦¾à¦§à¦¨à¦¾, à¦¤à§à¦¯à¦¾à¦— , à¦¤à¦¿à¦¤à¦¿à¦•à§à¦·à¦¾ à¦†à¦° à¦…à¦§à§à¦¯à¦¾à¦¬à¦¸à¦¾à§Ÿ à¦¦à¦¿à§Ÿà§‡ à¦œà§€à¦¬à¦¨à§‡à¦° à¦•à¦¾à¦› à¦¥à§‡à¦•à§‡ à¦†à¦¦à¦¾à§Ÿ à¦•à¦°à§‡ à¦¨à¦¿à¦¤à§‡ à¦¹à§Ÿà¥¤</p>', '', 1),
(9, 18, 'eshgshfdh', 'fdshfdhfdh', '<p>hdfrfdhfdhfdh</p>', '../assets/images/download (2).jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`) VALUES
(15, 'Web', 'A System where many document will remain and inter connected with is other and can access by internate', 1),
(17, 'Web Application', '1. Font end : i) Structure & Content, ii) Presentation, iii) Behavior ; \r\n2. Server side\r\n3. Database\r\n\r\n', 1),
(18, 'SESSION', 'Web Development Point-of-View Session is the primary memory of the browser', 1),
(19, 'How the Web works ?', 'From client machine to server by requesting and from server to client machine.', 0),
(20, 'What is JavaScript?', 'JavaScript is a popular client side scripting language. It gives interactivity HTML pages.', 1),
(21, 'What is Variable?', 'Variables are â€œContainersâ€ for storing information.\r\nSyntax: var VariableName;', 0),
(22, 'HTML', 'HTML is tag base markup language that can be made structure', 1),
(23, 'srhghfdhf', 'fdhfdhfd', 1),
(24, 'Sports', 'well game', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Super Admin', 'ruhulcse301@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Md. Ruhul Amin', 'ruhul.cit.bd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
