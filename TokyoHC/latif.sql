-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-06-08 03:54:56
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `latif`
--

-- --------------------------------------------------------

--
-- 資料表結構 `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `color`
--

INSERT INTO `color` (`color_id`, `color_name`) VALUES
(2, '黑'),
(3, '白'),
(4, '藍'),
(5, '粉紅'),
(6, '黃'),
(7, '綠');

-- --------------------------------------------------------

--
-- 資料表結構 `commodity`
--

CREATE TABLE `commodity` (
  `commodity_id` int(11) NOT NULL,
  `cy_type` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `material` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `commodity`
--

INSERT INTO `commodity` (`commodity_id`, `cy_type`, `name`, `file_name`, `discount`, `material`, `price`) VALUES
(3, 'women', '黑外套', 'clo2.jpg', 8, '絨毛材質，100%羊毛，高品質保證絨毛材質，100%羊毛，高品質保證絨毛材質，100%羊毛，高品質保證', 500),
(7, 'men', '白襯衫', 'men3.jpg', 10, '麻質', 300),
(8, 'sports', '運動風外套', 'sport3.jpg', 8, '特多龍、壓克力纖維、醋酸纖維', 600),
(9, 'women', '黑色女風衣', 'women1.jpg', 9, '特多龍、壓克力纖維、醋酸纖', 1000),
(10, 'baby', '卡通裝', 'baby3.jpg', 10, '棉', 500),
(11, 'baby', '花嬰兒裝', 'baby1.jpg', 7, '棉', 300),
(12, 'baby', '白嬰兒裝', 'baby2.jpg', 8, '棉', 566),
(13, 'men', '白色外套', 'sport1.jpg', 7, '特多龍、壓克力纖維', 800),
(14, 'sports', '南運動外套', 'sport2.jpg', 10, '特多龍、壓克力纖維', 999),
(15, 'men', '西裝', 'men1.jpg', 7, '棉、亞麻、羊毛、蠶絲', 9999),
(16, 'men', '男風衣', 'men2.jpg', 10, '三醋酸纖維、 彈性纖', 888),
(17, 'kids', '綠屁孩衣', '10CE1665B0D107940B0890B55FFF966CAB058A8D.jpg', 5, '三醋酸纖維、 彈性纖', 250),
(18, 'kids', 'B超狂衣', '1644127-45-01.jpg', 1, '棉', 87),
(19, 'kids', '粉紅腦X衣', '7hob.com1367935420274.jpg', 8, '棉', 300),
(20, 'kids', '公主飄飄裙', 'L_5f75a95dec3a45038834f90dce632a7b.jpg', 10, '棉', 1999),
(21, 'sports', '藍色幽默', '7a54425a69784948843f09eda87bef33_8359307.jpg', 8, '尼龍', 540),
(22, 'sports', '老虎跳跳衣', '5971132_3_1.jpg', 9, '尼龍', 240),
(23, 'men', '攏胸肌衣', '1902488-0a.jpg', 10, '尼龍', 500),
(24, 'women', '紅蓮', '16_193086_middlel.jpg', 10, '棉', 564),
(25, 'women', '制服誘惑', '42226-4f5bc4cde5-1461578893.jpg', 9, '眠', 800);

-- --------------------------------------------------------

--
-- 資料表結構 `commodity_num`
--

CREATE TABLE `commodity_num` (
  `num_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `commodity_id` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `commodity_num`
--

INSERT INTO `commodity_num` (`num_id`, `color_id`, `size_id`, `commodity_id`, `number`) VALUES
(1, 2, 2, 3, 5),
(2, 3, 2, 3, 5),
(3, 2, 3, 3, 5),
(4, 3, 3, 3, 5),
(15, 3, 1, 7, 5),
(16, 3, 2, 7, 5),
(17, 3, 3, 7, 5),
(18, 5, 2, 8, 3),
(19, 5, 3, 8, 3),
(20, 2, 1, 9, 3),
(21, 2, 2, 9, 3),
(22, 2, 3, 9, 3),
(23, 7, 1, 10, 3),
(24, 7, 2, 10, 3),
(25, 7, 3, 10, 3),
(26, 3, 1, 11, 3),
(27, 3, 2, 11, 3),
(28, 3, 1, 12, 5),
(29, 3, 1, 13, 3),
(30, 3, 2, 13, 3),
(31, 3, 3, 13, 3),
(32, 3, 1, 14, 5),
(33, 3, 3, 14, 5),
(34, 2, 1, 15, 4),
(35, 2, 2, 15, 4),
(36, 2, 3, 15, 4),
(37, 2, 1, 16, 3),
(38, 2, 2, 16, 3),
(39, 7, 1, 17, 5),
(40, 7, 2, 17, 5),
(41, 3, 1, 18, 3),
(42, 3, 2, 18, 3),
(43, 5, 1, 19, 2),
(44, 5, 2, 19, 2),
(45, 2, 1, 20, 3),
(46, 3, 1, 20, 3),
(47, 2, 2, 20, 3),
(48, 3, 2, 20, 3),
(49, 4, 1, 21, 1),
(50, 4, 2, 21, 1),
(51, 4, 3, 21, 1),
(52, 4, 1, 22, 2),
(53, 4, 2, 22, 2),
(54, 4, 3, 22, 2),
(55, 4, 1, 23, 1),
(56, 4, 2, 23, 1),
(57, 4, 3, 23, 1),
(58, 5, 1, 24, 1),
(59, 5, 2, 24, 1),
(60, 5, 3, 24, 1),
(61, 2, 1, 25, 2),
(62, 3, 1, 25, 2),
(63, 2, 2, 25, 2),
(64, 3, 2, 25, 2),
(65, 2, 3, 25, 2),
(66, 3, 3, 25, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `commodity_orders`
--

CREATE TABLE `commodity_orders` (
  `orders_id` int(11) NOT NULL,
  `num_id` int(11) NOT NULL,
  `commodity_id` int(11) NOT NULL,
  `orders_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `commodity_orders`
--

INSERT INTO `commodity_orders` (`orders_id`, `num_id`, `commodity_id`, `orders_number`) VALUES
(1, 1, 3, 1),
(4, 1, 3, 2),
(5, 3, 3, 4),
(6, 2, 3, 3),
(10, 45, 20, 1),
(11, 58, 24, 1),
(12, 63, 25, 4);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL,
  `sex` int(1) NOT NULL,
  `birth` date DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `address` text,
  `level` int(1) NOT NULL,
  `purview` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`member_id`, `name`, `mail`, `password`, `sex`, `birth`, `phone`, `address`, `level`, `purview`) VALUES
(1, 'Aliven', 'abcd861129@gmail.com', 'aliven', 1, '2016-12-14', '00000000', 'asdfasdf', 0, 0),
(2, 'admin', 'admin@gmail.com', '1234', 0, '2016-12-28', '0000000001', 'adminadmin', 1, 1),
(3, 'asdfdsaf', 'alivenyung@gmail.com', 'aliven1129', 1, '2017-05-19', '00000000', 'asdfds', 0, 0),
(4, '與', 'aa@gmail.com', 'qqqq', 1, '2017-06-05', 'q', 'ㄆ', 0, 0),
(5, '王狗狗', 'abc123@gmail.com', '0123', 1, '1234-11-11', '0910555566', '123', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `send_option` text NOT NULL,
  `send_address` text NOT NULL,
  `total_price` int(11) NOT NULL,
  `payment_option` text NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `orders`
--

INSERT INTO `orders` (`orders_id`, `send_option`, `send_address`, `total_price`, `payment_option`, `member_id`) VALUES
(1, '郵寄寄送', 'asdfsdf', 820, '現金', 2),
(4, '郵寄寄送', 'asdf', 820, '信用卡', 2),
(5, '超商取貨', 'dfsadfsaf', 1600, '貨到付款', 2),
(6, '宅配到家', 'asdfsadf', 1200, '貨到付款', 3),
(7, '宅配到家', 'asdfasdf', 5400, '貨到付款', 2),
(8, '宅配到家', '', 3150, '貨到付款', 2),
(9, '超商取貨', 'adsfadf', 2250, '貨到付款', 2),
(10, '宅配到家', 'ㄐ', 1999, '貨到付款', 4),
(11, '宅配到家', 'ㄧ', 564, '貨到付款', 2),
(12, '超商取貨', '8787', 2880, '線上刷卡', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `putin`
--

CREATE TABLE `putin` (
  `orders_id` int(11) NOT NULL,
  `commodity_number` int(11) NOT NULL,
  `commodity_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `size`
--

INSERT INTO `size` (`size_id`, `size_name`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- 資料表索引 `commodity`
--
ALTER TABLE `commodity`
  ADD PRIMARY KEY (`commodity_id`);

--
-- 資料表索引 `commodity_num`
--
ALTER TABLE `commodity_num`
  ADD PRIMARY KEY (`num_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `commodity_id` (`commodity_id`);

--
-- 資料表索引 `commodity_orders`
--
ALTER TABLE `commodity_orders`
  ADD KEY `orders_id` (`orders_id`),
  ADD KEY `num_id` (`num_id`),
  ADD KEY `commodity_id` (`commodity_id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `member_id` (`member_id`);

--
-- 資料表索引 `putin`
--
ALTER TABLE `putin`
  ADD KEY `order_id` (`orders_id`),
  ADD KEY `commodity_id` (`commodity_id`);

--
-- 資料表索引 `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用資料表 AUTO_INCREMENT `commodity`
--
ALTER TABLE `commodity`
  MODIFY `commodity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- 使用資料表 AUTO_INCREMENT `commodity_num`
--
ALTER TABLE `commodity_num`
  MODIFY `num_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- 使用資料表 AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `commodity_num`
--
ALTER TABLE `commodity_num`
  ADD CONSTRAINT `color_num` FOREIGN KEY (`color_id`) REFERENCES `color` (`color_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commodity_num` FOREIGN KEY (`commodity_id`) REFERENCES `commodity` (`commodity_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `size_num` FOREIGN KEY (`size_id`) REFERENCES `size` (`size_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `commodity_orders`
--
ALTER TABLE `commodity_orders`
  ADD CONSTRAINT `commodity_commodity` FOREIGN KEY (`commodity_id`) REFERENCES `commodity` (`commodity_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `num_num` FOREIGN KEY (`num_id`) REFERENCES `commodity_num` (`num_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_orders` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`orders_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_member` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `putin`
--
ALTER TABLE `putin`
  ADD CONSTRAINT `commodity_putin` FOREIGN KEY (`commodity_id`) REFERENCES `commodity` (`commodity_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_putin` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`orders_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
