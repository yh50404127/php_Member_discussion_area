-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2020 年 06 月 18 日 13:54
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `abcd1234`
--

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `serial` mediumint(8) UNSIGNED NOT NULL,
  `id` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` varchar(4) NOT NULL,
  `year` smallint(5) UNSIGNED NOT NULL,
  `month` tinyint(3) UNSIGNED NOT NULL,
  `day` tinyint(3) UNSIGNED NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`serial`, `id`, `pw`, `name`, `sex`, `year`, `month`, `day`, `phone`, `mail`, `address`, `reg_date`) VALUES
(1, '1234', '123', '1234', '男', 1965, 7, 7, '1234', '134', '1234', '2020-06-14'),
(2, '777', '777', '777', '男', 1967, 7, 10, '77', '77', '77', '2020-06-14'),
(3, '5555', '55555', '5555', '男', 1974, 9, 10, '5555', '5555', '5555', '2020-06-14'),
(4, '520', '520', '520', '女', 1967, 2, 25, '520', '520', '520', '2020-06-14'),
(5, '222', '222', '222', '女', 1973, 12, 25, '222', '222', '222', '2020-06-14'),
(6, '888', '888', '888', '男', 1966, 8, 14, '888', '888', '888', '2020-06-14'),
(7, 'aaa', 'aaa', '檸檸', '女', 1999, 12, 25, '09520520520', '520520520', '祕密', '2020-06-15');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`serial`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `members`
--
ALTER TABLE `members`
  MODIFY `serial` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
