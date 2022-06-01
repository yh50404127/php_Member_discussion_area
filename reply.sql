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
-- 資料表結構 `reply`
--

CREATE TABLE `reply` (
  `sn` mediumint(8) UNSIGNED NOT NULL,
  `suid` mediumint(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `addtime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `reply`
--

INSERT INTO `reply` (`sn`, `suid`, `name`, `content`, `addtime`) VALUES
(1, 6, '1234', '騙子\r\n騙子\r\n騙子\r\n騙子', '2020-06-16'),
(2, 8, '小天', '嫩', '2020-06-16'),
(3, 6, 'ㄎㄎ', '嫩', '2020-06-16'),
(4, 7, '小宣', '安安安安', '2020-06-18'),
(5, 6, '小雪', '測試測試', '2020-06-18'),
(6, 6, '安安', '嫩', '2020-06-18'),
(7, 8, '1234', 'test test', '2020-06-18'),
(8, 8, '小雪', '^_^', '2020-06-18'),
(9, 11, '安安', '\r\n討論主題:	文字編輯器不能打中文\r\n內容:	測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章', '2020-06-18');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`sn`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reply`
--
ALTER TABLE `reply`
  MODIFY `sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
