-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 29, 2021 at 01:25 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_adv_night`
--

-- --------------------------------------------------------

--
-- Table structure for table `message_form`
--

CREATE TABLE `message_form` (
  `ct_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `project_id` varchar(100) NOT NULL,
  `ct_project` varchar(255) NOT NULL,
  `ct_email` varchar(255) NOT NULL,
  `ct_subject` varchar(100) NOT NULL,
  `ct_message` text NOT NULL,
  `ct_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message_form`
--

INSERT INTO `message_form` (`ct_id`, `user_id`, `project_id`, `ct_project`, `ct_email`, `ct_subject`, `ct_message`, `ct_date`) VALUES
(3, '9', '12', 'wine', 'meta@five.jp', 'lorem5', 'lorem10', '2021-03-29 11:40:53'),
(4, '9', '14', 'online live', 'meta@five.jp', 'lorem5', 'utudhd', '2021-03-29 12:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_price` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_line1` varchar(255) NOT NULL,
  `p_line2` varchar(255) DEFAULT NULL,
  `p_city` varchar(255) NOT NULL,
  `p_zipcode` varchar(100) NOT NULL,
  `p_country` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `expiry_month` varchar(100) NOT NULL,
  `expiry_year` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `project_id`, `user_id`, `p_price`, `p_name`, `p_line1`, `p_line2`, `p_city`, `p_zipcode`, `p_country`, `card_name`, `card_number`, `expiry_month`, `expiry_year`, `cvv`) VALUES
(1, 14, 9, '2000', 'meta five', 'nerima', '', 'Tokyo', '1234567', 'Japan', 'Meta Five', '123456789', '03', '23', '410'),
(2, 14, 9, '2000', 'meta five', 'nerima', '', 'Tokyo', '1234567', 'Japan', 'Meta Five', '987654321', '03', '23', '102'),
(3, 18, 4, '10000', 'tomodachi tomodachi', 'Shiretoko', '', 'Hokkaido', '100-1000', 'Jaoan', 'Tomodachi Tomodachi', '65897456541', '05', '22', '821'),
(4, 12, 9, '5000', 'meta five', 'nerima', '', 'Tokyo', '1234567', 'Japan', 'Meta Five', '123', '03', '23', '777');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_support` varchar(100) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `tytle` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_url` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `project_img` varchar(100) DEFAULT NULL,
  `movie_url` varchar(255) DEFAULT NULL,
  `message` text,
  `return_support` varchar(100) DEFAULT NULL,
  `return_product` varchar(255) DEFAULT NULL,
  `return_discription` text,
  `return_date` varchar(100) DEFAULT NULL,
  `return_img` varchar(255) DEFAULT NULL,
  `pj_date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `user_id`, `total_support`, `deadline`, `tytle`, `company_name`, `company_url`, `category`, `project_img`, `movie_url`, `message`, `return_support`, `return_product`, `return_discription`, `return_date`, `return_img`, `pj_date_added`) VALUES
(12, 9, '10000000', '2021-03-19', 'wine', 'sakagura', 'https://sp.wmg.jp/metafive/', 'food', 'farm.jpg', 'https://www.youtube.com/watch?v=7LBUEYGfisQ', 'love wine', '5000', 'wine', 'wine', '06/2021', 'wine.jpeg', '2021-03-19 13:17:44'),
(14, 4, '200000', '2021-04-08', 'online live', 'tomodachi', 'tomodachi.com', 'live', 'live.png', 'https://www.youtube.com/watch?v=rpMa6JADDJM', 'nada', '2000', 'guitar', 'guitar', '07/2021', 'guitar.png', '2021-03-24 10:51:50'),
(15, 4, '50000000000', '2021-04-23', 'anime', 'tomodachi', 'tomodachi.com', 'theater', 'live.png', 'https://www.youtube.com/watch?v=rpMa6JADDJM', 'anime', '500000', 'mask', 'mask', '07/2021', 'mask.jpg', '2021-03-24 10:53:37'),
(16, 9, '10000000', '2021-04-01', 'sakagura', 'sakagura', 'sakagura.com', 'food', 'sakagura.jpg', '', 'sake', '5000', 'mizubasho', 'mizubasho', '07/2021', 'sake.jpg', '2021-03-24 11:12:00'),
(18, 9, '30000', '2021-03-30', 'whiskey', 'sakagura', 'sakagura.com', 'food', 'sakagura.jpg', '', 'whiskey', '10000', 'whiskey', 'whiskey', '06/2021', 'whiskey.jpeg', '2021-03-26 12:16:41'),
(20, 9, '100000', '2021-04-03', 'Smirnoff', 'sakagura', '', 'food', 'sakagura.jpg', '', 'q', '5000', 'smirnoff', 'e', '06/2021', 'smirnoff.jpeg', '2021-03-26 12:40:58'),
(21, 9, '20000', '2021-04-10', 'wine', 'sakagura', '', 'food', 'sakagura.jpg', '', 'aa', '5000', 'wine', '66666', '07/2021', 'Fruit-Wines.png', '2021-03-29 12:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `birthday` date DEFAULT NULL,
  `home_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(100) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `user_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `first_name`, `last_name`, `birthday`, `home_address`, `email`, `date_added`, `password`, `website`, `user_img`) VALUES
(1, 'firstname', 'last', NULL, NULL, 'test@test.com', '2021-03-11 12:41:46', '456', NULL, NULL),
(2, 'firstname', 'lastname', NULL, NULL, 'test@test.com', '2021-03-11 12:42:03', '456', NULL, NULL),
(3, 'firstname', 'lastname', NULL, NULL, 'test@test.com', '2021-03-11 12:42:22', '456', NULL, NULL),
(4, 'tomodachi', 'tomodachi', '1970-02-03', 'Shiretoko, Hokkaido', 'taro.yamada@icloud.com', '2021-03-11 12:59:20', '456', '', 'taroyamada.jpg'),
(5, 'test2', 'test', NULL, NULL, 'test@test.com', '2021-03-12 11:34:30', '456', NULL, NULL),
(7, 'if', 'dapump', NULL, NULL, 'da@pump.cpm', '2021-03-13 15:18:29', '456', NULL, NULL),
(8, 'if', 'dapump', NULL, NULL, 'da@pump.cpm', '2021-03-13 15:34:47', '456', NULL, NULL),
(9, 'meta', 'five', '1996-02-21', 'Tokyo, Japan', 'meta@five.jp', '2021-03-13 15:51:09', '456', 'https://wmg.jp/metafive/', 'love.jpg'),
(12, 'march', '15th', NULL, NULL, 'march@15.com', '2021-03-15 10:44:15', '456', NULL, NULL),
(15, 'firstname', 'dapump', NULL, NULL, 'da@pump.cpm', '2021-03-29 13:01:32', '111', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_form`
--
ALTER TABLE `message_form`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message_form`
--
ALTER TABLE `message_form`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
