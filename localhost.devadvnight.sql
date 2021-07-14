-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2021 年 3 月 25 日 13:09
-- サーバのバージョン： 5.7.32
-- PHP のバージョン: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `dev_adv_night`
--
CREATE DATABASE IF NOT EXISTS `dev_adv_night` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dev_adv_night`;

-- --------------------------------------------------------

--
-- テーブルの構造 `payment`
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
-- テーブルのデータのダンプ `payment`
--

INSERT INTO `payment` (`payment_id`, `project_id`, `user_id`, `p_price`, `p_name`, `p_line1`, `p_line2`, `p_city`, `p_zipcode`, `p_country`, `card_name`, `card_number`, `expiry_month`, `expiry_year`, `cvv`) VALUES
(1, 14, 9, '2000', 'meta five', 'nerima', '', 'Tokyo', '1234567', 'Japan', 'Meta Five', '123456789', '03', '23', '410'),
(2, 14, 9, '2000', 'meta five', 'nerima', '', 'Tokyo', '1234567', 'Japan', 'Meta Five', '987654321', '03', '23', '102');

-- --------------------------------------------------------

--
-- テーブルの構造 `project`
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
-- テーブルのデータのダンプ `project`
--

INSERT INTO `project` (`project_id`, `user_id`, `total_support`, `deadline`, `tytle`, `company_name`, `company_url`, `category`, `project_img`, `movie_url`, `message`, `return_support`, `return_product`, `return_discription`, `return_date`, `return_img`, `pj_date_added`) VALUES
(12, 9, '10000000', '2021-03-19', 'wine', 'sakagura', 'https://sp.wmg.jp/metafive/', 'food', 'farm.jpg', 'https://www.youtube.com/watch?v=7LBUEYGfisQ', 'love wine', '5000', 'wine', 'wine', '06/2021', 'wine.jpeg', '2021-03-19 13:17:44'),
(14, 4, '20000000000', '2021-04-08', 'online live', 'tomodachi', 'tomodachi.com', 'live', 'live.png', 'https://www.youtube.com/watch?v=rpMa6JADDJM', 'nada', '2000', 'guitar', 'guitar', '07/2021', 'guitar.png', '2021-03-24 10:51:50'),
(15, 4, '50000000000', '2021-04-23', 'anime', 'tomodachi', 'tomodachi.com', 'theater', 'live.png', 'https://www.youtube.com/watch?v=rpMa6JADDJM', 'anime', '500000', 'mask', 'mask', '07/2021', 'mask.jpg', '2021-03-24 10:53:37'),
(16, 9, '10000000', '2021-04-01', 'sakagura', 'sakagura', 'sakagura.com', 'food', 'sakagura.jpg', '', 'sake', '5000', 'mizubasho', 'mizubasho', '07/2021', 'sake.jpg', '2021-03-24 11:12:00'),
(17, 9, '10000000', '2021-04-10', 'sake', 'sakagura', 'sakagura.com', 'food', 'sakagura.jpg', '', 'sake', '5000', 'akakirishima', 'akakirishima', '07/2021', 'akakirishima.jpeg', '2021-03-24 11:14:34');

-- --------------------------------------------------------

--
-- テーブルの構造 `user_profile`
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
-- テーブルのデータのダンプ `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `first_name`, `last_name`, `birthday`, `home_address`, `email`, `date_added`, `password`, `website`, `user_img`) VALUES
(1, 'firstname', 'last', NULL, NULL, 'test@test.com', '2021-03-11 12:41:46', '456', NULL, NULL),
(2, 'firstname', 'lastname', NULL, NULL, 'test@test.com', '2021-03-11 12:42:03', '456', NULL, NULL),
(3, 'firstname', 'lastname', NULL, NULL, 'test@test.com', '2021-03-11 12:42:22', '456', NULL, NULL),
(4, 'tomodachi', 'tomodachi', '2021-04-03', 'Shiretoko, Hokkaido', 'taro.yamada@icloud.com', '2021-03-11 12:59:20', '456', '', 'taroyamada.jpg'),
(5, 'test2', 'test', NULL, NULL, 'test@test.com', '2021-03-12 11:34:30', '456', NULL, NULL),
(7, 'if', 'dapump', NULL, NULL, 'da@pump.cpm', '2021-03-13 15:18:29', '456', NULL, NULL),
(8, 'if', 'dapump', NULL, NULL, 'da@pump.cpm', '2021-03-13 15:34:47', '456', NULL, NULL),
(9, 'meta', 'five', '1996-02-21', 'Tokyo, Japan', 'meta@five.jp', '2021-03-13 15:51:09', '456', 'https://wmg.jp/metafive/', 'metafive.jpg'),
(12, 'march', '15th', NULL, NULL, 'march@15.com', '2021-03-15 10:44:15', '456', NULL, NULL);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- テーブルのインデックス `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- テーブルのインデックス `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- テーブルの AUTO_INCREMENT `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- データベース: `kredo`
--
CREATE DATABASE IF NOT EXISTS `kredo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kredo`;

-- --------------------------------------------------------

--
-- テーブルの構造 `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `empFname` varchar(30) NOT NULL,
  `empLname` varchar(30) NOT NULL,
  `empCountry` varchar(50) NOT NULL,
  `empGender` varchar(1) NOT NULL,
  `empBirthDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `employees`
--

INSERT INTO `employees` (`id`, `empFname`, `empLname`, `empCountry`, `empGender`, `empBirthDate`) VALUES
(1, 'John', 'Doe', 'New Zealand', 'M', '1990-03-26'),
(2, 'Emily', 'Johnson', 'USA', 'F', '1980-04-23');

-- --------------------------------------------------------

--
-- テーブルの構造 `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `studFname` varchar(20) NOT NULL,
  `studLname` varchar(20) NOT NULL,
  `studCountry` varchar(100) NOT NULL,
  `studCourse` varchar(5) NOT NULL,
  `studYearLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `students`
--

INSERT INTO `students` (`id`, `studFname`, `studLname`, `studCountry`, `studCourse`, `studYearLevel`) VALUES
(3, 'Alec', 'Bell', 'Australia', 'BSA', 2);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- テーブルの AUTO_INCREMENT `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- データベース: `kredo_it_abroad`
--
CREATE DATABASE IF NOT EXISTS `kredo_it_abroad` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kredo_it_abroad`;

-- --------------------------------------------------------

--
-- テーブルの構造 `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `salary`, `department`) VALUES
(2, 'Emily', 'Jackson', 15000, 'Legal'),
(3, 'Jack', 'Dawson', 32000, 'Legal'),
(4, 'Jack', 'Smith', 21000, 'Human Resource'),
(5, 'Janet', 'Jackson', 20000, 'technology'),
(6, 'Rose', 'Dawson', 40500, 'Technology');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- データベース: `kredo_school`
--
CREATE DATABASE IF NOT EXISTS `kredo_school` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kredo_school`;

-- --------------------------------------------------------

--
-- テーブルの構造 `myStudents`
--

CREATE TABLE `myStudents` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `myStudents`
--

INSERT INTO `myStudents` (`id`, `first_name`, `last_name`, `email`) VALUES
(2, 'Yuki', 'Sato', 'yuki.sato@icloud.com'),
(3, 'Naoko', 'Yamaguchi', 'naoko.yamaguchi@gmail.com'),
(4, 'Yuki', 'Iwasaki', 'mr.yuki@icloud.com'),
(12, 'Jackie', 'Chan', 'jackie@icloud.com');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `myStudents`
--
ALTER TABLE `myStudents`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `myStudents`
--
ALTER TABLE `myStudents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- データベース: `library_pm`
--
CREATE DATABASE IF NOT EXISTS `library_pm` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `library_pm`;

-- --------------------------------------------------------

--
-- テーブルの構造 `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_genre` varchar(100) NOT NULL,
  `book_author` varchar(100) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_genre`, `book_author`, `date_added`) VALUES
(5, 'March 9th', 'J-POP', 'Remioromen', '2021-03-09');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
