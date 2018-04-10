-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2018 at 01:03 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_list_table`
--

CREATE TABLE `book_list_table` (
  `NAME` text NOT NULL,
  `AUTHOR` text,
  `DEPARTMENT` varchar(10) NOT NULL,
  `LINK` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_list_table`
--

INSERT INTO `book_list_table` (`NAME`, `AUTHOR`, `DEPARTMENT`, `LINK`) VALUES
('Image Processing', 'Irodov', 'IT', 'https://getbootstrap.com/docs/4.0/content/tables/');

-- --------------------------------------------------------

--
-- Table structure for table `campus_olx_table`
--

CREATE TABLE `campus_olx_table` (
  `EMAIL` varchar(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USER_TYPE` varchar(10) NOT NULL DEFAULT 'AUTHORITY',
  `CONTACT_NUMBER` varchar(10) NOT NULL,
  `IMAGE` varchar(100) DEFAULT NULL,
  `HEADING` text NOT NULL,
  `DESCRIPTION` varchar(1600) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campus_olx_table`
--

INSERT INTO `campus_olx_table` (`EMAIL`, `NAME`, `USER_TYPE`, `CONTACT_NUMBER`, `IMAGE`, `HEADING`, `DESCRIPTION`, `DATE`) VALUES
('ppatel@gmail.com', 'Patel Sir', 'AUTHORITY', '3659874512', NULL, 'AD 3', 'RANDOM TEXT APPEARING HERE.', '2018-04-08 00:33:37'),
('ppatel@gmail.com', 'Patel Sir', 'AUTHORITY', '3659874512', NULL, 'post 3', 'loem ipsum', '2018-04-08 01:20:42');

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `name` varchar(25) NOT NULL,
  `enrollment_no` bigint(15) NOT NULL,
  `item_name` text NOT NULL,
  `quantity_item` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`name`, `enrollment_no`, `item_name`, `quantity_item`) VALUES
('', 0, '', 0),
('dasd', 4465465, 'Pav-Bhaji', 3),
('a', 56456465, 'Samosa', 2),
('ghjghm', 43356, 'Sandwich', 5),
('dfgdgh', 34543534, 'Vada-pav', 4),
('adads', 0, 'Sandwich', 2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `CONTENT` varchar(1600) COLLATE utf8_bin NOT NULL,
  `OWNER` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `CONTENT`, `OWNER`) VALUES
(1, 'yellow\r\n', 'ppatel@gmail.com'),
(4, 'madhu', 'rmadhusudan359@gmail.com'),
(4, 'hello\r\n', 'rmadhusudan359@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `for_hire_table`
--

CREATE TABLE `for_hire_table` (
  `EMAIL` varchar(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USER_TYPE` varchar(10) NOT NULL DEFAULT 'AUTHORITY',
  `CONTACT_NUMBER` varchar(10) NOT NULL,
  `IMAGE` varchar(100) DEFAULT NULL,
  `HEADING` text NOT NULL,
  `DESCRIPTION` varchar(1600) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `for_hire_table`
--

INSERT INTO `for_hire_table` (`EMAIL`, `NAME`, `USER_TYPE`, `CONTACT_NUMBER`, `IMAGE`, `HEADING`, `DESCRIPTION`, `DATE`) VALUES
('ppatel@gmail.com', 'Patel Sir', 'TWO', '3659874512', NULL, 'POST 1', 'demo post content', '2018-04-08 04:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `lost_found_table`
--

CREATE TABLE `lost_found_table` (
  `HEADING` text NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `FOUND_BY` varchar(20) NOT NULL,
  `PUBLISH_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost_found_table`
--

INSERT INTO `lost_found_table` (`HEADING`, `DESCRIPTION`, `FOUND_BY`, `PUBLISH_DATE`) VALUES
('QWE', 'QWEQWE', 'rmadhusudan359@gmail', '2018-04-07 16:28:48'),
('FOUND: SADF', 'ASDF', 'rmadhusudan359@gmail', '2018-04-07 16:29:58'),
('LOST: ITEM DEMO', 'I LOST THE ITEM AT 1400HRS TODAY.', 'rmadhusudan359@gmail', '2018-04-07 16:30:38'),
('LOST: JHFJHJGR', 'YRY5Y', 'rmadhusudan359@gmail', '2018-04-08 09:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `main_page_blog_table`
--

CREATE TABLE `main_page_blog_table` (
  `DEPARTMENT` varchar(20) NOT NULL,
  `HEADING` text NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `NOTICE_IMAGE` varchar(100) NOT NULL,
  `OWNER` varchar(50) NOT NULL,
  `PUBLISH_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `NOTICE_CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_page_blog_table`
--

INSERT INTO `main_page_blog_table` (`DEPARTMENT`, `HEADING`, `DESCRIPTION`, `NOTICE_IMAGE`, `OWNER`, `PUBLISH_DATE`, `NOTICE_CATEGORY`) VALUES
('GENERAL', 'adfad', 'dfasdsfdasf', '', 'ppatel@gmail.com', '2018-04-07 12:33:24', 'BLOG'),
('GENERAL', 'POST 1', 'ASJDJKJDNFMSANFNKL;LNFLKA', '', 'ppatel@gmail.com', '2018-04-07 12:34:17', 'NOTICE'),
('GENERAL', 'POST 2', 'AJSHDJKDFJJF FASDSFSADSF\r\nAF\r\nAD\r\nF\r\nAF\r\nA\r\nDF\r\nA\r\nF\r\nADF\r\nA\r\nFF\r\nAF\r\nFAS\r\nF\r\nASDFD', '', 'ppatel@gmail.com', '2018-04-07 12:50:19', 'BLOG'),
('IT', 'POST RANDOM', 'HFADFKSLJDFSASDFD ABBDFA DF JHADSBFA DSDFSDSF', '', 'ppatel@gmail.com', '2018-04-07 13:03:09', 'BLOG'),
('GENERAL', 'POST 5', 'AALKFKLNDFLKSDKFLSDFSDF', '', 'ppatel@gmail.com', '2018-04-07 14:17:47', 'BLOG'),
('CLUB', 'fdsd', 'sadfdfasdsf', '', 'ppatel@gmail.com', '2018-04-08 07:08:52', 'BLOG'),
('CSE', 'POST 10', 'BASDBASDBASD', '', 'ppatel@gmail.com', '2018-04-08 09:52:12', 'BLOG');

-- --------------------------------------------------------

--
-- Table structure for table `query_table`
--

CREATE TABLE `query_table` (
  `DEPARTMENT` varchar(10) COLLATE utf8_bin NOT NULL,
  `HEADING` varchar(100) COLLATE utf8_bin NOT NULL,
  `DESCRIPTION` varchar(1600) COLLATE utf8_bin NOT NULL,
  `OWNER` varchar(30) COLLATE utf8_bin NOT NULL,
  `image` varchar(300) COLLATE utf8_bin NOT NULL,
  `query_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `query_table`
--

INSERT INTO `query_table` (`DEPARTMENT`, `HEADING`, `DESCRIPTION`, `OWNER`, `image`, `query_id`) VALUES
('IT', 'adsadasd', 'asdadadsadsasdasds', 'ppatel@gmail.com', 'Best-hd-wallpapers-mac.jpg', 1),
('IT', 'adsadasd', 'asdadadsadsasdasds', 'ppatel@gmail.com', 'Best-hd-wallpapers-mac.jpg', 2),
('IT', 'asdfdsf', 'sdfsdf', 'rmadhusudan359@gmail.com', '', 3),
('IT', 'qweqwe', 'qweqweqwe', 'rmadhusudan359@gmail.com', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DEPARTMENT` varchar(50) NOT NULL,
  `CONTACT_NUMBER` text NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `USER_TYPE` varchar(10) DEFAULT NULL,
  `PARENT_CONTACT` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`NAME`, `EMAIL`, `DEPARTMENT`, `CONTACT_NUMBER`, `PASSWORD`, `USER_TYPE`, `PARENT_CONTACT`) VALUES
('Madhusudan Rathore', 'rmadhusudan359@gmail.com', 'IT', '8487044993', '1', 'STUDENT', '9376017266'),
('Patel Sir', 'ppatel@gmail.com', 'IT', '3659874512', '1', 'AUTHORITY', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `query_table`
--
ALTER TABLE `query_table`
  ADD PRIMARY KEY (`query_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `query_table`
--
ALTER TABLE `query_table`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `cid` FOREIGN KEY (`cid`) REFERENCES `query_table` (`query_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
