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
-- 資料表結構 `discuss`
--

CREATE TABLE `discuss` (
  `sn` mediumint(8) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `web` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `addtime` date NOT NULL,
  `ip` varchar(20) NOT NULL,
  `counts` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `discuss`
--

INSERT INTO `discuss` (`sn`, `title`, `name`, `web`, `content`, `addtime`, `ip`, `counts`) VALUES
(6, ' ubuntu 文字編輯器不能打中文', '安安', '', ' ubuntu 文字編輯器不能打中文', '2020-06-16', '127.0.0.1', 60),
(7, '測試文章', '小雪', '', '', '2020-06-16', '127.0.0.1', 8),
(8, '測試文章', '小雪', '祕密', '祕\r\n密\r\n不\r\n告\r\n訴\r\n你', '2020-06-16', '127.0.0.1', 22),
(10, '祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密ㄒ', '祕密祕密祕密祕密祕密祕密祕密祕密', '祕密祕密', '祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密祕密ㄒ', '2020-06-16', '127.0.0.1', 3),
(11, '文字編輯器不能打中文', '123', '祕密祕密', '測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章測試文章', '2020-06-18', '127.0.0.1', 6);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `discuss`
--
ALTER TABLE `discuss`
  ADD PRIMARY KEY (`sn`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `discuss`
--
ALTER TABLE `discuss`
  MODIFY `sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
